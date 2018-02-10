@extends('layouts.app')

@section('migasdepan')
<h1>
Editar <small>{{$presupuesto->descripcion}}</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url('/home') }}"><i class="glyphicon glyphicon-home"></i> Inicio</a></li>
        <li><a href="{{ url('/presupuestos') }}"><i class="fa fa-balance-scale"></i> Presupuestos</a></li>
        <li class="active">Edición</li>
      </ol>
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-body">
                {{ Form::model($presupuesto, array('method' => 'put', 'class' => 'form-horizontal' , 'route' => array('presupuestos.update', $presupuesto->id))) }}
                @include('presupuestos.formulario')



                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-2">
                            <button type="submit" class="btn btn-success">
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