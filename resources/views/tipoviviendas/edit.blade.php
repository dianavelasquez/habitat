@extends('layouts.app')

@section('migasdepan')
<h1>
      Editar Registro: <small> {{ $tipovivienda->nombre }} </small>
</h1>
      <ol class="breadcrumb">
        <li><a href="{{ url('/home') }}"><i class="glyphicon glyphicon-home"></i> Inicio</a></li>
        <li><a href="{{ url('/tipoviviendas') }}"><i class="fa fa-industry"></i> Viviendas</a></li>
        <li class="active">Edición</li>
      </ol>
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-body">
                {{ Form::model($tipovivienda, array('method' => 'put', 'class' => 'form-horizontal' , 'route' => array('tipoviviendas.update', $tipovivienda->id))) }}
                 @include('tipoviviendas.formulario')
                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-2">
                            <button type="submit" class="btn btn-primary btn-lg">
                                <span class="glyphicon glyphicon-floppy-disk"></span>    Editar
                            </button>
                        </div>
                    </div>
                {{ Form::close() }}
            </div>
        </div>
    </div>
</div>
@endsection
