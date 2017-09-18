@extends('layouts.app')
@section('content')
	<div class="container">
    <div class="row">

        <div class="col-md-8 offset-md-2">
            <div class="panel panel-default">
                <div class="panel-heading">Listado de Materiales</div>
                <div class="panel-body"> 
                <a href="{{ url('/materiales/create') }}" class="btn btn-primary">Registra Nuevo</a>              
					<table class="table">
						<thead>
							<th>Nombre</th>
							<th>Unidad de Medida</th>
							<th>Acción</th>
						</thead>
						<tbody>
							<tr>
								@foreach ($materiales as $material)
									<td>{{ $material->nombre }}</td>
									<td>{{ $material->unidad }}</td>
									<td>
										<a href="{{ url('/materiales/'.$material->id.'/edit') }}" class="btn btn-warning">Editar</a> |
                						<a class="btn btn-primary" href ="{{ url('/materiales/'.$material->id) }}" role="button" >Eliminar </a>
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