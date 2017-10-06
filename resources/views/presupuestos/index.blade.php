@extends('layouts.app')
@section('content')
	<div class="container">
    <div class="row">

        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Presupuestos</div>
                <div class="panel-body"> 
                <a href="{{ url('/presupuestos/create') }}" class="btn btn-primary">Registra Nuevo</a>              
					<table class="table">
						<thead>
							<th>Id</th>
							<th>Cliente</th>
							<th>Mejora</th>
							<th>Días trabajados</th>
							<th>Monto Total</th>
							<th>Acción</th>
						</thead>
						<tbody>
							@foreach ($presupuestos as $presupuesto)
							<tr>
									<td>{{ $presupuesto->id }}</td>
									<td>{{ $presupuesto->id_cliente }}</td>
									<td>{{ $presupuesto->mejora }}</td>
									<td>{{ $presupuesto->trabajados }}</td>
									<td>{{ $presupuesto->total }}</td>
									<td>
										<a href="{{ url('/presupuestos/'.$presupuesto->id.'/edit') }}" class="btn btn-warning">Editar</a> |
                						<a class="btn btn-primary" href ="{{ url('/presupuestos/'.$presupuesto->id) }}" role="button" >Ver </a>
									</td>
							</tr>
							@endforeach
						</tbody>
					</table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection