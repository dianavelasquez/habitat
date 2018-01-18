@extends('layouts.app')

@section('migasdepan')
<h1>
    Presupuestos
</h1>
<ol class="breadcrumb">
    <li><a href="{{ url('/home') }}"><i class="glyphicon glyphicon-home"></i> Inicio</a></li>
    <li><a href="{{ url('/presupuestos') }}"><i class="fa fa-dashboard"></i>Presupuestos</a></li>
    <li class="active">Registro</li> </ol>
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-primary">
                <div class="panel-heading">Registro de Presupuesto</div>
                <div class="panel-body">
                    {{ Form::open(['action'=> 'PresupuestoController@store', 'class' => 'form-horizontal','id' => 'presupuesto']) }}
                    @include('presupuestos.formulario')

                    <br>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                        Agregar presupuesto
                    </button>
                    <br>
                    @include('presupuestos.tabla')
                    <input type="hidden" name="contador" id="contador" readonly>
                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-1">
                            <button type="submit" class="btn btn-success">
                                <span class="glyphicon glyphicon-floppy-disk">
                                    
                                </span>     Registrar
                            </button>
                        </div>
                    </div>

                        <div class="modal fade" data-backdrop="static" data-keyboard="false" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Detalles del presupuesto</h4>
                      </div>
                      <div class="modal-body">
                        @include('presupuestos.detalles.formulario')
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                        <button type="button" id="agregar" data-dismiss="modal" class="btn btn-success">Agregar</button>
                      </div>
                    </div>
                    </div>
                    </div>

                        {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
{!!Html::script('js/presupuesto.js')!!}
@endsection