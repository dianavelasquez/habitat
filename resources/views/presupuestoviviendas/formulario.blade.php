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

<div class="form-group{{ $errors->has('tipovivienda_id') ? ' has-error' : '' }}">
    <label for="" class="col-md-4 control-label">Seleccione mejora</label>
    <div class="col-md-6">
        <select name="tipovivienda_id" id="tipovivienda" class="form-control">
            <option value="">Seleccione tipo de vivienda</option>
            @foreach($tipoviviendas as $tipovivienda)
            <option value="{{$tipovivienda->id}}">{{$tipovivienda->nombre}}</option>
            @endforeach
        </select>
        @if ($errors->has('tipomejora_id'))
        <span class="help-block">
            <strong>{{ $errors->first('tipomejora_id') }}</strong>
        </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('fecha') ? ' has-error' : '' }}">
    <label for="fecha" class="col-md-4 control-label">Fecha de registro</label>
    <div class="col-md-6">
        {!!Form::date('fecha',null,['class'=>'form-control','id'=>'nombre','autofocus'])!!}

        @if ($errors->has('fecha'))
        <span class="help-block">
            <strong>{{ $errors->first('fecha') }}</strong>
        </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('materialvivienda_id') ? ' has-error' : '' }}">
    <label for="" class="col-md-4 control-label">Seleccione material</label>
    <div class="col-md-6">
        <select name="materialvivienda_id" id="materialvivienda" class="form-control">
            <option value="">Seleccione material</option>
            @foreach($materialviviendas as $materialvivienda)
            <option data-codigo="{{$materialvivienda->codigo}}" data-nombre="{{$materialvivienda->nombre}}" data-unidad="{{$materialvivienda->unidad_medida}}" data-precio="{{$materialvivienda->precio_unitario}}" data-cantidad="{{$materialvivienda->cantidad}}" value="{{$materialvivienda->id}}">{{$materialvivienda->nombre}}</option>
            @endforeach
        </select>
        @if ($errors->has('materialvivienda_id'))
        <span class="help-block">
            <strong>{{ $errors->first('materialvivienda_id') }}</strong>
        </span>
        @endif
    </div>
</div>