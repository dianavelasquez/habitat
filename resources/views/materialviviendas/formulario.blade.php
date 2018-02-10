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

<div class="form-group{{$errors->has('unidad_medida') ? 'has-error' : '' }}">
	<label for="unidad_medida" class="col-md-4 control-label">Unidad de medida</label>

	<div class="col-md-6">
		{{ Form::text('unidad_medida', null, ['class' => 'form-control']) }}
		@if ($errors->has('unidad_medida'))
		<span class="help-block">
			<strong>{{ $errors->first('unidad_medida') }}</strong>
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
</div

<div class="form-group{{$errors->has('cantidad') ? 'has-error' : '' }}">
	<label for="cantidad" class="col-md-4 control-label">Cantidad</label>

	<div class="col-md-6">
		{{ Form::text('cantidad', null, ['class' => 'form-control']) }}
		@if ($errors->has('cantidad'))
		<span class="help-block">
			<strong>{{ $errors->first('cantidad') }}</strong>
		</span>
		@endif
	</div>
</div