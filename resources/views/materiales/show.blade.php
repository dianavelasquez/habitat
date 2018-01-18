@extends('layouts.app')

@section('migasdepan')
<h1>
        
        <small>Ver material <b>{{ $material->nombre }}</b></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url('/materiales') }}"><i class="fa fa-dashboard"></i> Materiales</a></li>
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
                            <label for="nombre" class="col-md-4 control-label">{{$material->codigo}}</label><br>
                            
                        </div>

                        <div class="form-group{{ $errors->has('nombre') ? ' has-error' : '' }}">
                            <label for="nombre" class="col-md-4 control-label">Nombre material: </label>
                            <label for="nombre" class="col-md-4 control-label">{{$material->nombre}}</label><br>
                        </div>

                        <div class="form-group{{ $errors->has('unidad') ? ' has-error' : '' }}">
                            <label for="unidad" class="col-md-4 control-label">Unidad de medida: </label>
                            <label for="nombre" class="col-md-4 control-label">{{$material->unidad}}</label><br>
                        </div>

                        <div class="form-group{{ $errors->has('precio_unitario') ? ' has-error' : '' }}">
                            <label for="precio_unitario" class="col-md-4 control-label">Precio por unidad: </label>
                            <label for="nombre" class="col-md-4 control-label">{{$material->precio_unitario}}</label><br>
                        </div>

                      {{ Form::open(['route' => ['materiales.destroy', $material->id ], 'method' => 'DELETE', 'class' => 'form-horizontal'])}}
                      <a href="{{ url('/materiales/'.$material->id.'/edit') }}" class="btn btn-warning"><span class="glyphicon glyphicon-text-size"></span> Editar</a> |
                        <button class="btn btn-danger" type="button" onclick="
                        return swal({
                          title: 'Eliminar tipo',
                          text: '¿Está seguro de eliminar tipo?',
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