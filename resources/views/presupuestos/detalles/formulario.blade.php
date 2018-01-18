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

<div class="form-group{{ $errors->has('descripcion') ? ' has-error' : ''}}">
  <label for="" class="col-md-4 control-label">Descripcion</label>
    <div class="col-md-6">
      {!!Form::text('descripcion',null,['class' => 'form-control', 'id' => 'descripcion' ])!!}
      @if($errors->has('descripcion'))
        <span class="help-block">
          <strong>{{ $errors->first('descripcion') }}</strong>
        </span>
      @endif
    </div>
</div>
