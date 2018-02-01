<div class="form-group{{ $errors->has('material_id') ? ' has-error' : '' }}">
    <label for="" class="col-md-4 control-label">Seleccione material</label>
    <div class="col-md-6">
        <select name="material_id" id="material" class="form-control">
            <option value="">Seleccione material</option>
            @foreach($materiales as $material)
            <option value="{{$material->id}}">{{$material->nombre}}</option>
            @endforeach
        </select>
        @if ($errors->has('material_id'))
        <span class="help-block">
            <strong>{{ $errors->first('material_id') }}</strong>
        </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('cantidad') ? ' has-error' :''}}">
  <label for="" class="col-md-4 control-label">Cantidad</label>
    <div class="col-md-6">
      {!!Form::text('cantidad',null,['class' => 'form-control', 'id' => 'cantidad' ])!!}
      @if ($errors->has('cantidad'))
      <span class="help-block">
          <strong>{{ $errors->first('cantidad') }}</strong>
      </span>
      @endif
    </div>
</div>

<div class="form-group{{$errors->has('precio_unitario') ? 'has-error' : '' }}">
    <label for="precio_unitario" class="col-md-4 control-label">Precio unitario</label>

    <div class="col-md-6">
        {{ Form::text('precio', null, ['class' => 'form-control', 'id'=> 'precio']) }}
        @if ($errors->has('precio_unitario'))
        <span class="help-block">
            <strong>{{ $errors->first('precio_unitario') }}</strong>
        </span>
        @endif
    </div>
</div>