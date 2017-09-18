@extends('layouts.app')
@section('content')
	<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="panel panel-default">
                <div class="panel-heading">Registrar Cliente</div>
                <div class="panel-body">
                    {{ Form::open(['action' => 'MaterialsController@store']) }}
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('nombre') ? ' has-danger' : '' }}">
                            
                            <label for="nombre" class="col-md-4 control-label">Tipo de Material</label>

                            <div class="col-md-6">
                                <input id="nombre" type="text" class="form-control" name="nombre" value="{{ old('nombre') }}" autofocus>

                                @if ($errors->has('nombre'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nombre') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('unidad') ? ' has-danger' : '' }}">
                            <label for="text" class="col-md-4 control-label">Unidad de medida</label>

                            <div class="col-md-6">
                                <input id="unidad" type="text" class="form-control" name="unidad" value="{{ old('unidad') }}">

                                @if ($errors->has('unidad'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('unidad') }}</strong>
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