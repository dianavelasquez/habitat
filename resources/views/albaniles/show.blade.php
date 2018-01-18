@extends('layouts.app')

@section('migasdepan')
<h1>
        
        <small>Ver albanil <b>{{ $albanil->nombre }}</b></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url('/albaniles') }}"><i class="fa fa-dashboard"></i> Albaniles</a></li>
        <li class="active">Ver</li>
      </ol>
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-11">
            <div class="panel panel-primary">
                <div class="panel-heading">Detalles de albañiles </div>
                <div class="panel-body">

                        <div class="form-group{{ $errors->has('nombre') ? ' has-error' : '' }}">
                            <label for="nombre" class="col-md-4 control-label">Nombre completo: </label>
                            <label for="nombre" class="col-md-4 control-label">{{$albanil->nombre}}</label><br>
                        </div>

                        <div class="form-group{{ $errors->has('direccion') ? ' has-error' : '' }}">
                            <label for="direccion" class="col-md-4 control-label">Dirección: </label>
                            <label for="nombre" class="col-md-4 control-label">{{$albanil->direccion}}</label><br>
                        </div>

                        <div class="form-group{{ $errors->has('direccion') ? ' has-error' : '' }}">
                            <label for="direccion" class="col-md-4 control-label">Teléfono: </label>
                            <label for="nombre" class="col-md-4 control-label">{{$albanil->telefono}}</label><br>
                        </div>

                        <div class="form-group{{ $errors->has('dui') ? ' has-error' : '' }}">
                            <label for="dui" class="col-md-4 control-label">Número de DUI: </label>
                            <label for="nombre" class="col-md-4 control-label">{{$albanil->dui}}</label><br>
                        </div>

                        <div class="form-group{{ $errors->has('nit') ? ' has-error' : '' }}">
                            <label for="nit" class="col-md-4 control-label">Número de NIT: </label>
                            <label for="nombre" class="col-md-4 control-label">{{$albanil->nit}}</label><br>
                        </div>

                        <div class="form-group{{ $errors->has('ubicacion') ? ' has-error' : '' }}">
                            <label for="ubicacion" class="col-md-4 control-label">Número de cuenta: </label>
                            <label for="nombre" class="col-md-4 control-label">{{$albanil->cuenta}}</label><br>
                        </div>

                      {{ Form::open(['route' => ['albaniles.destroy', $albanil->id ], 'method' => 'DELETE', 'class' => 'form-horizontal'])}}
                      <a href="{{ url('/albaniles/'.$albanil->id.'/edit') }}" class="btn btn-warning"><span class="glyphicon glyphicon-text-size"></span> Editar</a> |
                        <button class="btn btn-danger" type="button" onclick="
                        return swal({
                          title: 'Eliminar registro',
                          text: '¿Está seguro de eliminar registro?',
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