@extends('layouts.app')

@section('migasdepan')
<h1>
    Albañiles
</h1>
<ol class="breadcrumb">
    <li><a href="{{ url('/albaniles') }}"><i class="fa fa-dashboard"></i>Albañiles</a></li>
    <li class="active">Registro</li> </ol>
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-primary">
                <div class="panel-heading">Registro de albañiles</div>
                <div class="panel-body">
                    {{ Form::open(['action'=> 'AlbanilController@store', 'class' => 'form-horizontal']) }}
                    @include('albaniles.formulario')

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <button type="submit" class="btn btn-success">
                                <span class="glyphicon glyphicon-floppy-disk">Registrar</span>
                            </button>
                        </div>
                        {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection