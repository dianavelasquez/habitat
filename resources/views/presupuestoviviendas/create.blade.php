@extends('layouts.app')

@section('migasdepan')
<h1>
    Presupuestos de vivienda
</h1>
<ol class="breadcrumb">
    <li><a href="{{ url('/home') }}"><i class="glyphicon glyphicon-home"></i> Inicio</a></li>
    <li><a href="{{ url('/presupuestoviviendas') }}"><i class="fa fa-dashboard"></i>Presupuestos</a></li>
    <li class="active">Registro</li> </ol>
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-primary">
                <div class="panel-heading">Registro de Presupuesto</div>
                <div class="panel-body">
                    {{ Form::open(['action'=> 'PresupuestoviviendaController@store', 'class' => 'form-horizontal','id' => 'presupuestovivienda']) }}
                    @include('presupuestoviviendas.formulario')

                    <br>
                    <button type="button" id="presup" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                        Agregar material
                    </button>
                    <br>
                    @include('presupuestoviviendas.tabla')
                    <input type="hidden" name="contador" id="contador" readonly>
                    <input type="hidden" name="total" id="total" readonly>
                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-1">
                            <button type="submit" class="btn btn-success">
                                <span class="glyphicon glyphicon-floppy-disk">
                                    
                                </span>     Registrar
                            </button>
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
<script type="" src="{{asset('js/presupuestovivienda.js')}}"></script>
@endsection