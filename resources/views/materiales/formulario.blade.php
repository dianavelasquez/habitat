<div class="form-group{{$errors->has('codigo') ? 'has-error' : '' }}">
	<label for="codigo" class="col-md-4 control-label">Código del material</label>

	<div class="col-md-6">
		{{ Form::text('codigo', null, ['class' => 'form-control']) }}
		@if ($errors->has('codigo'))
		<span class="help-block">
			<strong>{{ $errors->first('codigo') }}</strong>
		</span>
		@endif
	</div>
</div>

<div class="form-group{{$errors->has('nombre') ? 'has-error' : '' }}">
	<label for="nombre" class="col-md-4 control-label">Nombre material</label>

	<div class="col-md-6">
		{{ Form::text('nombre', null,['class' => 'form-control']) }}
		@if ($errors->has('nombre'))
		<span class="help-block">
			<strong>{{ $errors->first('nombre') }}</strong>
		</span>
		@endif
	</div>
</div>

<div class="form-group{{$errors->has('unidad') ? 'has-error' : '' }}">
	<label for="unidad" class="col-md-4 control-label">Unidad de medida</label>

	<div class="col-md-6">
		{{ Form::text('unidad', null, ['class' => 'form-control']) }}
		@if ($errors->has('unidad'))
		<span class="help-block">
			<strong>{{ $errors->first('unidad') }}</strong>
		</span>
		@endif
	</div>
</div>

<div class="form-group{{$errors->has('precio_unitario') ? 'has-error' : '' }}">
	<label for="precio_unitario" class="col-md-4 control-label">Precio unitario</label>

	<div class="col-md-6">
		{{ Form::text('precio_unitario', null, ['class' => 'form-control']) }}
		@if ($errors->has('precio_unitario'))
		<span class="help-block">
			<strong>{{ $errors->first('precio_unitario') }}</strong>
		</span>
		@endif
	</div>
</div>