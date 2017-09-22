
@extends('layouts.app')
@section('content')
	<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Registrar Cliente</div>
                <div class="panel-body">
                    {{ Form::open(['action' => ['PresupuestosController@update', $presupuesto->id] , 'method' => 'PUT']) }}

                        <div class="form-group">
                            <div class="col-md-6">
                            <label for="" class="col-md-4 control-label">Cliente</label>
                                <select name="id_cliente" id="cliente" class="form-control">
                                    @foreach($clientes as $cliente)
                                        @if($presupuesto->id_cliente == $cliente->id )
                                        <option value="{{ $cliente->id }}" selected>{{ $cliente->nombre }}</option>
                                        @else
                                        <option value="{{ $cliente->id }}">{{ $cliente->nombre }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="" class="col-md-4 control-label">Fecha</label>
                                <input id="fecha" type="text" class="form-control" name="" value="{{ $presupuesto->created_at->format('d-m-Y') }}" readonly>
                            </div>  
                        </div>

                        <div class="form-group">
                            <div class="col-md-6">
                            <label for="" class="col-md-4 control-label">Mejora a Realizar</label>
                                <input id="mejora" type="text" class="form-control" name="mejora" value="{{ $presupuesto->mejora }}" />
                            </div>
                            <div class="col-md-6">
                                <label for="" class="col-md-4 control-label">Dias Trabajados</label>
                                <input id="trabajados" type="text" class="form-control" name="trabajados" value="{{ $presupuesto->trabajados}}" />
                            </div>  
                        </div>

                        </br>

                        <div class="form-group">
                            <div class="col-md-4 col-md-offset-1">
                                <button type="submit" class="btn btn-primary">
                                    Guardar
                                </button>
                            </div>
                        </div>
                    {{ Form::close() }}
                </div>
                <div>
                       <table class="table table-striped table-bordered" id="tbMaterial">
                            <thead>
                                <th>Id</th>
                                <th>Descripción</th>
                                <th>Tipo</th>
                                <th>Cantidad</th>
                                <th>Precio unitario</th>
                                <th>Sub total</th>
                                <th>Acción</th>
                            </thead>
                            <tbody>
                                @foreach($detalles as $detalle)
                                    <tr>
                                        <td>{{ $detalle->id }}</td>
                                        <td>{{ $detalle->descripcion }}</td>
                                        <td>{{ $detalle->id_material }}</td>
                                        <td>{{ $detalle->cantidad }}</td>
                                        <td>{{ $detalle->preciou }}</td>
                                        <?php $sub = $detalle->cantidad * $detalle->preciou; ?>
                                        <td>{{ $sub }}</td>
                                        <td>
                                            <a href="{{ '/detalles/'.$detalle->id }}" class="btn btn-success">Editar</a>
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
@section('script')

@endsection