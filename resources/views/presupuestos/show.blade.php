@extends('layouts.app')

@section('migasdepan')
<h1>
        
        <small>Ver presupuesto <b>{{ $presupuesto->nombre }}</b></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url('/presupuestos') }}"><i class="fa fa-dashboard"></i> Usuarios</a></li>
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

                  <div class="form-group{{ $errors->has('cliente_id') ? ' has-error' : '' }}">
                    <label for="cliente_id" class="col-md-4 control-label">Nombre del cliente: </label>
                    <label for="nombre" class="col-md-4 control-label">{{$presupuesto->cliente->nombre}}</label><br>
                  </div>

                  <div class="form-group{{ $errors->has('tipomejora_id') ? ' has-error' : '' }}">
                    <label for="tipomejora_id" class="col-md-4 control-label">Tipo de mejora: </label>
                    <label for="nombre" class="col-md-4 control-label">{{$presupuesto->tipomejora->nombre}}</label><br>
                  </div>
                        
                        <div class="form-group{{ $errors->has('fecha_inicio') ? ' has-error' : '' }}">
                            <label for="fecha_inicio" class="col-md-4 control-label">Fecha inicio: </label>
                            <label for="nombre" class="col-md-4 control-label">{{$presupuesto->fecha_inicio->format('d-m-Y')}}</label><br>
                        </div>

                        <div class="form-group{{ $errors->has('fecha_fin') ? ' has-error' : '' }}">
                            <label for="fecha_fin" class="col-md-4 control-label">Fecha finalización: </label>
                            <label for="nombre" class="col-md-4 control-label">{{$presupuesto->fecha_fin->format('d-m-Y')}}</label><br>
                        </div>

                        <div class="form-group{{ $errors->has('precio_unitario') ? ' has-error' : '' }}">
                            <label for="precio_unitario" class="col-md-4 control-label">Precio por unidad: </label>
                            <label for="nombre" class="col-md-4 control-label">{{$material->precio_unitario}}</label><br>
                        </div>

                      {{ Form::open(['route' => ['presupuestos.destroy', $presupuesto->id ], 'method' => 'DELETE', 'class' => 'form-horizontal'])}}
                      <a href="{{ url('/presupuestos/'.$presupuesto->id.'/edit') }}" class="btn btn-warning"><span class="glyphicon glyphicon-text-size"></span> Editar</a> |
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