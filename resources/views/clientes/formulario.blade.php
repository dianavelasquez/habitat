<div class="form-group{{$errors->has('cod_sim') ? 'has-error' : '' }}">
	<label for="cod_sim" class="col-md-4 control-label">Código SIM</label>

	<div class="col-md-6">
		{{ Form::text('cod_sim', null, ['class' => 'form-control']) }}
		@if ($errors->has('cod_sim'))
		<span class="help-block">
			<strong>{{ $errors->first('cod_sim') }}</strong>
		</span>
		@endif
	</div>
</div>

<div class="form-group{{$errors->has('nombre') ? 'has-error' : '' }}">
	<label for="nombre" class="col-md-4 control-label">Nombre completo</label>

	<div class="col-md-6">
		{{ Form::text('nombre', null,['class' => 'form-control']) }}
		@if ($errors->has('nombre'))
		<span class="help-block">
			<strong>{{ $errors->first('nombre') }}</strong>
		</span>
		@endif
	</div>
</div>

<div class="form-group{{ $errors->has('dui') ? ' has-error' : '' }}">
	<label for="dui" class="col-md-4 control-label">Número de DUI</label>
	<div class="col-md-6">
		{{ Form::text('dui', null,['class' => 'form-control','data-inputmask' => '"mask": "99999999-9"','data-mask']) }}
		@if ($errors->has('dui'))
		<span class="help-block">
			<strong>{{ $errors->first('dui') }}</strong>
		</span>
		@endif
	</div>
</div>

<div class="form-group{{ $errors->has('nit') ? ' has-error' : '' }}">
	<label for="nit" class="col-md-4 control-label">Número de NIT</label>
	<div class="col-md-6">
		{{ Form::text('nit', null,['class' => 'form-control','data-inputmask' => '"mask": "9999-999999-999-9"','data-mask']) }}
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
		{!!Form::textarea('direccion',null,['class'=>'form-control','id'=>'direccion','autofocus','rows'=>3])!!}
		@if ($errors->has('direccion'))
		<span class="help-block">
			<strong>{{ $errors->first('direccion') }}</strong>
		</span>
		@endif
	</div>
</div>

<div class="form-group{{ $errors->has('telefono') ? ' has-error' : '' }}">
	<label for="telefono" class="col-md-4 control-label">Número de teléfono</label>
	<div class="col-md-6">
		{{ Form::text('telefono', null,['class' => 'form-control','data-inputmask' => '"mask": "9999-9999"','data-mask']) }}
		@if ($errors->has('telefono'))
		<span class="help-block">
			<strong>{{ $errors->first('telefono') }}</strong>
		</span>
		@endif
	</div>
</div>

<div class="form-group{{$errors->has('ubicacion') ? 'has-error' : '' }}">
	<label for="ubicacion" class="col-md-4 control-label">Ubicación (Municipio)</label>

	<div class="col-md-6">
		{{ Form::text('ubicacion', null, ['class' => 'form-control']) }}
		@if ($errors->has('ubicacion'))
		<span class="help-block">
			<strong>{{ $errors->first('ubicacion') }}</strong>
		</span>
		@endif
	</div>
</div>