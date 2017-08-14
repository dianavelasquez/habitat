@extends('layouts.app')
@section('content')
	<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="panel panel-default">
                <div class="panel-heading">Registrar Albañiles</div>
                <div class="panel-body">
                    {{ Form::open(['action' => 'AlbanilesController@store']) }}
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('nombre') ? ' has-danger' : '' }}">
                            
                            <label for="nombre" class="col-md-4 control-label">Nombre de Albañil</label>

                            <div class="col-md-6">
                                <input id="nombre" type="text" class="form-control" name="nombre" value="{{ old('nombre') }}" autofocus>

                                @if ($errors->has('nombre'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nombre') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                         <div class="form-group{{ $errors->has('direccion') ? ' has-danger' : '' }}">
                            <label for="direccion" class="col-md-4 control-label">Dirección</label>

                            <div class="col-md-6">
                                <input id="direccion" type="direccion" class="form-control" name="direccion">

                                @if ($errors->has('direccion'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('direccion') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('dui') ? ' has-danger' : '' }}">
                            <label for="email" class="col-md-4 control-label">DUI</label>

                            <div class="col-md-6">
                                <input id="dui" type="text" class="form-control" name="dui" value="{{ old('dui') }}">

                                @if ($errors->has('dui'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('dui') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('nit') ? ' has-danger' : '' }}">
                            <label for="nit" class="col-md-4 control-label">NIT</label>

                            <div class="col-md-6">
                                <input id="nit" type="text" class="form-control" name="nit">

                                @if ($errors->has('nit'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nit') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('cuenta') ? ' has-danger' : '' }}">
                            <label for="cuenta" class="col-md-4 control-label">Cuenta</label>

                            <div class="col-md-6">
                                <input id="cuenta" type="text" class="form-control" name="cuenta">

                                @if ($errors->has('cuenta'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('cuenta') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('id_cliente') ? ' has-danger' : '' }}">
                            <label for="codigosim" class="col-md-4 control-label">Cliente</label>

                            <div class="col-md-6">
                                <select class="form-control" name="id_cliente">
                                    <option value="">Seleccione un Cliente</option>
                                    @foreach($clientes as $cliente)
                                        <option value="{{ $cliente->id}}">{{ $cliente->nombre}}</option>
                                    @endforeach
                                </select>

                                @if ($errors->has('id_cliente'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('id_cliente') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Guardar
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