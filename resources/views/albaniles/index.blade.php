@extends('layouts.app')
@section('content')
	<div class="container">
    <div class="row">

        <div class="col-md-8 offset-md-2">
            <div class="panel panel-default">
                <div class="panel-heading">Listado de Albañiles</div>
                <div class="panel-body"> 
                <a href="{{ url('/albaniles/create') }}" class="btn btn-primary">Registra Nuevo</a>              
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
								@foreach ($albaniles as $albanil)
									<td>{{ $albanil->nombre }}</td>
									<td>{{ $albanil->dui }}</td>
									<td>{{ $albanil->nit }}</td>
									<td>{{ $albanil->direccion }}</td>
									<td>
										<a href="{{ url('/clientes/'.$albanil->id.'/edit') }}" class="btn btn-warning">Editar</a> |
                						<a class="btn btn-primary" href ="{{ url('/clientes/'.$albanil->id) }}" role="button" >Eliminar </a>
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