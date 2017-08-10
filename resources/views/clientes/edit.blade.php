@extends('layouts.app')
@section('content')
	<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Modificar Cliente</div>
                <div class="panel-body">
                    {{ Form::open(['action' => ['ClientesController@update', $cliente->id] , 'method' => 'PUT']) }}
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('nombre') ? ' has-error' : '' }}">
                            <label for="nombre" class="col-md-4 control-label">Nombre de Cliente</label>

                            <div class="col-md-6">
                                <input id="nombre" type="text" class="form-control" name="nombre" value="{{ $cliente->nombre }}" autofocus>

                                @if ($errors->has('nombre'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nombre') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('dui') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">DUI</label>

                            <div class="col-md-6">
                                <input id="dui" type="text" class="form-control" name="dui" value="{{ $cliente->dui }}">

                                @if ($errors->has('dui'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('dui') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('nit') ? ' has-error' : '' }}">
                            <label for="nit" class="col-md-4 control-label">NIT</label>

                            <div class="col-md-6">
                                <input id="nit" type="text" class="form-control" name="nit" value="{{ $cliente->nit }}">

                                @if ($errors->has('nit'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nit') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('direccion') ? ' has-error' : '' }}">
                            <label for="direccion" class="col-md-4 control-label">Dirección</label>

                            <div class="col-md-6">
                                <input id="direccion" type="direccion" class="form-control" value="{{ $cliente->direccion }}" name="direccion">

                                @if ($errors->has('direccion'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('direccion') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('ubicacion') ? ' has-error' : '' }}">
                            <label for="ubicacion" class="col-md-4 control-label">Ubicación</label>

                            <div class="col-md-6">
                                <input id="ubicacion" type="ubicacion" class="form-control" value="{{ $cliente->ubicacion }}" name="ubicacion">

                                @if ($errors->has('ubicacion'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('ubicacion') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('solucion') ? ' has-error' : '' }}">
                            <label for="solucion" class="col-md-4 control-label">Tipo Solucion</label>

                            <div class="col-md-6">
                                <input id="solucion" type="solucion" class="form-control" value="{{ $cliente->tiposolucion }}" name="solucion">

                                @if ($errors->has('solucion'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('solucion') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('codigosim') ? ' has-error' : '' }}">
                            <label for="codigosim" class="col-md-4 control-label">Codigo Sim</label>

                            <div class="col-md-6">
                                <input id="codigosim" type="text" class="form-control" value="{{ $cliente->cod_sim }}" name="codigosim">

                                @if ($errors->has('codigosim'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('codigosim') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('taza') ? ' has-error' : '' }}">
                            <label for="taza" class="col-md-4 control-label">Taza</label>

                            <div class="col-md-6">
                                <input id="taza" type="text" class="form-control" value="{{ $cliente->taza }}" name="taza">

                                @if ($errors->has('taza'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('taza') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('fechafin') ? ' has-error' : '' }}">
                            <label for="fechafin" class="col-md-4 control-label">Fecha Fin</label>

                            <div class="col-md-6">
                                <input id="fechafin" type="date" class="form-control" value="{{ $cliente->fechafin }}" name="fechafin">

                                @if ($errors->has('fechafin'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('fechafin') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Modificar
                                </button>
                            </div>
                        </div>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection