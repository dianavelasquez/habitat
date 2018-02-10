@extends('layouts.app')

@section('migasdepan')
<h1>
        <small>Ver presupuesto <b>{{ $presupuestovivienda->tipovivienda->nombre }}</b></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url('/presupuestoviviendas') }}"><i class="fa fa-dashboard"></i> Preupuestos</a></li>
        <li class="active">Ver</li>
      </ol>
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-11">
            <div class="panel panel-primary">
                <div class="panel-heading">Datos del Presupuesto </div>
                <div class="panel-body">

                  <div class="form-group{{ $errors->has('tipovivienda_id') ? ' has-error' : '' }}">
                    <label for="tipovivienda_id" class="col-md-4 control-label">Tipo de vivienda: </label>
                    <label for="nombre" class="col-md-4 control-label">{{$presupuestovivienda->tipovivienda->nombre}}</label><br>
                  </div>

                        <div class="form-group{{ $errors->has('materialvivienda_id') ? ' has-error' : '' }}">
                    <label for="materialvivienda_id" class="col-md-4 control-label">Total: </label>
                    <label for="nombre" class="col-md-4 control-label">${{number_format($presupuestovivienda->total,2)}}</label><br>
                  </div>

                       <table class="table">  
                          <thead>
                              <tr>  
                                  <th>  Código</th>
                                  <th>  Material</th>
                                  <th>  Unidad</th>
                                  <th>  Precio unitario</th>
                                  <th>  Cantidad</th>
                                  <th>  Sub total</th>

                              </tr>
                          </thead>
                          <tbody>
                              @foreach($presuymats as $presuymat)
                                <tr>
                                  <td>{{$presuymat->materialvivienda->codigo}}</td>
                                  <td>{{$presuymat->materialvivienda->nombre}}</td>
                                  <td>{{$presuymat->materialvivienda->unidad_medida}}</td>
                                  <td>{{$presuymat->materialvivienda->precio_unitario}}</td>
                                  <td>{{$presuymat->cantidad}}</td>
                                  <td>{{number_format($presuymat->materialvivienda->precio_unitario * $presuymat->cantidad,2)}}</td>
                                </tr>
                              @endforeach
                        </tbody>
                       </table>

                      {{ Form::open(['route' => ['presupuestoviviendas.destroy', $presupuestovivienda->id ], 'method' => 'DELETE', 'class' => 'form-horizontal'])}}
                      <a href="{{ url('/presupuestoviviendas/'.$presupuestovivienda->id.'/edit') }}" class="btn btn-warning"><span class="glyphicon glyphicon-text-size"></span> Editar</a> |
                        <button class="btn btn-danger" type="button" onclick="
                        return swal({
                          title: 'Eliminar presupuesto',
                          text: '¿Está seguro de eliminar presupuesto?',
                          type: 'question',
                          showCancelButton: true,
                          confirmButtonText: 'Si, Eliminar',
                          cancelButtonText: 'No, Mantener',
                          confirmButtonClass: 'btn btn-danger',
                          cancelButtonClass: 'btn btn-default',
                          buttonsStyling: false
                        }).then(function(){
                          submit();
                          swal('Hecho', 'El registro a sido eliminado','success')
                        }, function(dismiss){
                          if(dismiss == 'cancel'){
                            swal('Cancelado', 'El registro se mantiene','info')
                          }
                        })";><span class="glyphicon glyphicon-trash"></span> Eliminar</button>
                      {{ Form::close()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection