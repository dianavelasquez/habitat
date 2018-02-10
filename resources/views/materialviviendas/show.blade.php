@extends('layouts.app')

@section('migasdepan')
<h1>
        
        <small>Ver material <b>{{ $materialvivienda->nombre }}</b></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url('/materialviviendas') }}"><i class="fa fa-dashboard"></i> Materiales de vivienda</a></li>
        <li class="active">Ver</li>
      </ol>
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-11">
            <div class="panel panel-primary">
                <div class="panel-heading">Detalles de material </div>
                <div class="panel-body">
                        <div class="form-group{{ $errors->has('codigo') ? ' has-error' : '' }}">
                            <label for="codigo" class="col-md-4 control-label">Código del material: </label>
                            <label for="nombre" class="col-md-4 control-label">{{$materialvivienda->codigo}}</label><br>
                            
                        </div>

                        <div class="form-group{{ $errors->has('nombre') ? ' has-error' : '' }}">
                            <label for="nombre" class="col-md-4 control-label">Nombre material: </label>
                            <label for="nombre" class="col-md-4 control-label">{{$materialvivienda->nombre}}</label><br>
                        </div>

                        <div class="form-group{{ $errors->has('unidad_medida') ? ' has-error' : '' }}">
                            <label for="unidad_medida" class="col-md-4 control-label">Unidad de medida: </label>
                            <label for="nombre" class="col-md-4 control-label">{{$materialvivienda->unidad_medida}}</label><br>
                        </div>

                        <div class="form-group{{ $errors->has('precio_unitario') ? ' has-error' : '' }}">
                            <label for="precio_unitario" class="col-md-4 control-label">Precio unitario: </label>
                            <label for="nombre" class="col-md-4 control-label">{{$materialvivienda->precio_unitario}}</label><br>
                        </div>

                        <div class="form-group{{ $errors->has('cantidad') ? ' has-error' : '' }}">
                            <label for="cantidad" class="col-md-4 control-label">Cantidad: </label>
                            <label for="nombre" class="col-md-4 control-label">{{$materialvivienda->cantidad}}</label><br>
                        </div>

                      {{ Form::open(['route' => ['materialviviendas.destroy', $materialvivienda->id ], 'method' => 'DELETE', 'class' => 'form-horizontal'])}}
                      <a href="{{ url('/materialviviendas/'.$materialvivienda->id.'/edit') }}" class="btn btn-warning"><span class="glyphicon glyphicon-text-size"></span> Editar</a> |
                        <button class="btn btn-danger" type="button" onclick="
                        return swal({
                          title: 'Eliminar material',
                          text: '¿Está seguro de eliminar material?',
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