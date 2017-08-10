@extends('layouts.app')
@section('content')
	<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Listado de Cliente</div>
                <div class="panel-body"> 
                <a href="{{ url('/clientes/create') }}" class="btn btn-primary">Registra Nuevo</a>              
					<table class="table">
						<thead>
							<th>Nombre</th>
							<th>DUI</th>
							<th>NIT</th>
							<th>Direccion</th>
							<th>Acción</th>
						</thead>
						<tbody>
							<tr>
								@foreach ($clientes as $cliente)
									<td>{{ $cliente->nombre }}</td>
									<td>{{ $cliente->dui }}</td>
									<td>{{ $cliente->nit }}</td>
									<td>{{ $cliente->direccion }}</td>
									<td>
										<a href="{{ url('/clientes/'.$cliente->id.'/edit') }}" class="btn btn-warning">Editar</a> |
                						<a class="btn btn-primary" href ="{{ url('/clientes/'.$cliente->id) }}" role="button" >Eliminar </a>
									</td>
								@endforeach
							</tr>
						</tbody>
					</table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection