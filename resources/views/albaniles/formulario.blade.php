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

<div class="form-group{{$errors->has('direccion') ? 'has-error' : '' }}">
	<label for="direccion" class="col-md-4 control-label">Dirección</label>

	<div class="col-md-6">
		{{ Form::text('direccion', null, ['class' => 'form-control']) }}
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

<div class="form-group{{$errors->has('salario') ? 'has-error' : '' }}">
	<label for="salario" class="col-md-4 control-label">Salario</label>

	<div class="col-md-6">
		{{ Form::text('salario', null, ['class' => 'form-control']) }}
		@if ($errors->has('salario'))
		<span class="help-block">
			<strong>{{ $errors->first('salario') }}</strong>
		</span>
		@endif
	</div>
</div>

<div class="form-group{{$errors->has('cuenta') ? 'has-error' : '' }}">
	<label for="cuenta" class="col-md-4 control-label">Número de cuenta</label>

	<div class="col-md-6">
		{{ Form::text('cuenta', null, ['class' => 'form-control']) }}
		@if ($errors->has('cuenta'))
		<span class="help-block">
			<strong>{{ $errors->first('cuenta') }}</strong>
		</span>
		@endif
	</div>
</div>