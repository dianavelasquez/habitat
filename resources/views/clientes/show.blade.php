@extends('layouts.app')

@section('migasdepan')
<h1>
        
        <small>Ver cliente <b>{{ $cliente->nombre }}</b></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url('/clientes') }}"><i class="fa fa-dashboard"></i> Clientes</a></li>
        <li class="active">Ver</li>
      </ol>
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-11">
            <div class="panel panel-primary">
                <div class="panel-heading">Detalles de cliente </div>
                <div class="panel-body">
                        <div class="form-group{{ $errors->has('cod_sim') ? ' has-error' : '' }}">
                            <label for="cod_sim" class="col-md-4 control-label">Código SIM: </label>
                            <label for="nombre" class="col-md-4 control-label">{{$cliente->cod_sim}}</label><br>
                            
                        </div>

                        <div class="form-group{{ $errors->has('nombre') ? ' has-error' : '' }}">
                            <label for="nombre" class="col-md-4 control-label">Nombre completo: </label>
                            <label for="nombre" class="col-md-4 control-label">{{$cliente->nombre}}</label><br>
                        </div>

                        <div class="form-group{{ $errors->has('dui') ? ' has-error' : '' }}">
                            <label for="dui" class="col-md-4 control-label">Número de DUI: </label>
                            <label for="nombre" class="col-md-4 control-label">{{$cliente->dui}}</label><br>
                        </div>

                        <div class="form-group{{ $errors->has('nit') ? ' has-error' : '' }}">
                            <label for="nit" class="col-md-4 control-label">Número de NIT: </label>
                            <label for="nombre" class="col-md-4 control-label">{{$cliente->nit}}</label><br>
                        </div>

                        <div class="form-group{{ $errors->has('direccion') ? ' has-error' : '' }}">
                            <label for="direccion" class="col-md-4 control-label">Dirección: </label>
                            <label for="nombre" class="col-md-4 control-label">{{$cliente->direccion}}</label><br>
                        </div>

                        <div class="form-group{{ $errors->has('direccion') ? ' has-error' : '' }}">
                            <label for="direccion" class="col-md-4 control-label"> Teléfono: </label>
                            <label for="nombre" class="col-md-4 control-label">{{$cliente->telefono}}</label><br>
                        </div>

                        <div class="form-group{{ $errors->has('ubicacion') ? ' has-error' : '' }}">
                            <label for="ubicacion" class="col-md-4 control-label">Ubicación: </label>
                            <label for="nombre" class="col-md-4 control-label">{{$cliente->ubicacion}}</label><br>
                        </div>

                      {{ Form::open(['route' => ['clientes.destroy', $cliente->id ], 'method' => 'DELETE', 'class' => 'form-horizontal'])}}
                      <a href="{{ url('/clientes/'.$cliente->id.'/edit') }}" class="btn btn-warning"><span class="glyphicon glyphicon-text-size"></span> Editar</a> |
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