<div class="form-group{{$errors->has('nombre') ? 'has-error' : '' }}">
	<label for="nombre" class="col-md-4 control-label">Nombre de vivienda</label>

	<div class="col-md-6">
		{{ Form::text('nombre', null,['class' => 'form-control']) }}
		@if ($errors->has('nombre'))
		<span class="help-block">
			<strong>{{ $errors->first('nombre') }}</strong>
		</span>
		@endif
	</div>
</div>

<div class="form-group{{$errors->has('medida') ? 'has-error' : '' }}">
	<label for="medida" class="col-md-4 control-label">Medida (metros cuadrados)</label>

	<div class="col-md-6">
		{{ Form::text('medida', null,['class' => 'form-control']) }}
		@if ($errors->has('medida'))
		<span class="help-block">
			<strong>{{ $errors->first('medida') }}</strong>
		</span>
		@endif
	</div>
</div>