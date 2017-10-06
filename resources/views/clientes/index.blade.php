@extends('layouts.app')
@section('content')
	<div class="container">
    <div class="row">

        <div class="col-md-8 offset-md-2">
            <div class="panel panel-default">
                <h3>Listado de Clientes</h3>
                <div class="panel-body"> 
                <a href="{{ url('/clientes/create') }}" class="btn btn-primary">Registra Nuevo</a>     
                         
					<table class="table table-hover">
						<tr class="success">
							<th>Nombre</th>
							<th>DUI</th>
							<th>NIT</th>
							<th>Direccion</th>
							<th>Acción</th>
						</tr>
						<div class="col-md-20 offset-md-2">
						<tbody>
							<tr>
								@foreach ($clientes as $cliente)
									<td>{{ $cliente->nombre }}</td>
									<td>{{ $cliente->dui }}</td>
									<td>{{ $cliente->nit }}</td>
									<td>{{ $cliente->direccion }}</td>
									<td>

											<a href="{{ url('/clientes/'.$cliente->id.'/edit') }}" class="btn btn-warning">Editar</a> 
											|
											<a class="btn btn-primary" href ="{{ url('/clientes/'.$cliente->id) }}" role="button" >Eliminar </a>
									</tr>
								@endforeach
							</tr>
						</tbody>
					</div>
					</table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection