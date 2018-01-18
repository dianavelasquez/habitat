<div class="form-group{{ $errors->has('cliente_id') ? ' has-error' : '' }}">
    <label for="" class="col-md-4 control-label">Seleccione cliente</label>
    <div class="col-md-6">
        <select name="cliente_id" id="cliente" class="form-control">
            <option value="">Seleccione cliente</option>
            @foreach($clientes as $cliente)
            <option value="{{$cliente->id}}">{{$cliente->nombre}}</option>
            @endforeach
        </select>
        @if ($errors->has('cliente_id'))
        <span class="help-block">
            <strong>{{ $errors->first('cliente_id') }}</strong>
        </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('tipomejora_id') ? ' has-error' : '' }}">
    <label for="" class="col-md-4 control-label">Seleccione mejora</label>
    <div class="col-md-6">
        <select name="tipomejora_id" id="tipomejora" class="form-control">
            <option value="">Seleccione mejora</option>
            @foreach($tipomejoras as $tipomejora)
            <option value="{{$tipomejora->id}}">{{$tipomejora->nombre}}</option>
            @endforeach
        </select>
        @if ($errors->has('tipomejora_id'))
        <span class="help-block">
            <strong>{{ $errors->first('tipomejora_id') }}</strong>
        </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('fecha_inicio') ? ' has-error' : '' }}">
    <label for="fecha_inicio" class="col-md-4 control-label">Fecha inicio</label>
    <div class="col-md-6">
        {!!Form::date('fecha_inicio',null,['class'=>'form-control','id'=>'nombre','autofocus'])!!}

        @if ($errors->has('fecha_inicio'))
        <span class="help-block">
            <strong>{{ $errors->first('fecha_inicio') }}</strong>
        </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('fecha_fin') ? ' has-error' : '' }}">
    <label for="fecha_fin" class="col-md-4 control-label">Fecha finalización</label>
    <div class="col-md-6">
        {!!Form::date('fecha_fin',null,['class'=>'form-control','id'=>'nombre','autofocus'])!!}
        @if ($errors->has('fecha_fin'))
        <span class="help-block">
            <strong>{{ $errors->first('fecha_fin') }}</strong>
        </span>
        @endif
    </div>
</div>