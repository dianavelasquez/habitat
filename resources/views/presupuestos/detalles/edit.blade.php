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
                {{ Form::model($presupuesto, array('method' => 'put', 'class' => 'form-horizontal' , 'route' => array('presupuestodetalles.update', $presupuesto->id))) }}
                <div class="form-group">
                  <label for="" class="col-md-4 control-label">Material</label>
                    <div class="col-md-6">
                        {!!Form::hidden('presupuesto_id')!!}
                        {!!Form::text('material_id',null,['class' => 'form-control', 'id' => 'material_id' ])!!}
                    </div>
                </div>

                <div class="form-group">
                  <label for="" class="col-md-4 control-label">Cantidad</label>
                    <div class="col-md-6">
                      {!!Form::text('cantidad',null,['class' => 'form-control', 'id' => 'cantidad' ])!!}
                    </div>
                </div>

                <div class="form-group">
                  <label for="" class="col-md-4 control-label">Descripcion</label>
                    <div class="col-md-6">
                      {!!Form::text('descripcion',null,['class' => 'form-control', 'id' => 'descripcion' ])!!}
                    </div>
                </div>



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
