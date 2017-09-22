
@extends('layouts.app')
@section('content')
	<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Registrar Cliente</div>
                <div class="panel-body">
                    <form id="presupuestoform" name="presupuestoform">
                        <input type="hidden" name="_token" id="_token" value="{{ csrf_token() }}">

                        <div class="form-group">
                            <div class="col-md-6">
                            <label for="" class="col-md-4 control-label">Cliente</label>
                                <select name="cliente" id="cliente" class="form-control">
                                    <option value="">Seleccione un Cliente...</option>
                                    @foreach($clientes as $cliente)
                                        <option value="{{ $cliente->id}}">{{ $cliente->nombre}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="" class="col-md-4 control-label">Fecha</label>
                                <input id="fecha" type="text" class="form-control" name="fecha" value="{{ date('d-m-Y') }}" readonly>
                            </div>  
                        </div>

                        <div class="form-group">
                            <div class="col-md-6">
                            <label for="" class="col-md-4 control-label">Mejora a Realizar</label>
                                <input id="mejora" type="text" class="form-control" name="mejora" />
                            </div>
                            <div class="col-md-6">
                                <label for="" class="col-md-4 control-label">Dias Trabajados</label>
                                <input id="dias" type="text" class="form-control" name="dias" />
                            </div>  
                        </div>

                        <div class="form-group">
                            <div class="col-md-12">
                            <label for="" class="col-md-4 control-label"><b>Materiales</b></label>
                            </div> 
                        </div>

                        <div class="form-group">
                            <div class="col-md-6">
                            <label for="" class="col-md-4 control-label">Tipo del Material</label>
                                <select id="tipo" name="tipo" class="form-control">
                                    <option value="">Seleccione un material</option>
                                    @foreach($materiales as $material)
                                        <option value="{{ $material->id }}">{{ $material->nombre}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="" class="col-md-4 control-label">Nombre del material</label>
                                <input id="nombre" type="text" class="form-control" name="nombre"/>
                            </div>  
                        </div>

                        <div class="form-group">
                            <div class="col-md-6">
                                <label for="" class="col-md-4 control-label">Precio Unitario</label>
                                <input id="precio" type="text" class="form-control" name="precio" />
                            </div>
                            <div class="col-md-6">
                                <label for="" class="col-md-4 control-label">Cantidad</label>
                                <input id="cantidad" type="text" class="form-control" name="cantidad" />
                            </div>  
                        </div>

                        <div class="form-group">
                            <div class="col-md-6">
                                <button type="button" id="agregar" class="btn btn-success">Agregar</button>
                            </div>
                             
                        </div>

                        <table class="table table-striped table-bordered" id="tbMaterial">
                            <thead>
                                <th>Descripción</th>
                                <th>Tipo</th>
                                <th>Cantidad</th>
                                <th>Precio unitario</th>
                                <th>Sub total</th>
                                <th>Acción</th>
                            </thead>
                            <tbody></tbody>
                            <tfoot id="pie">
                                <tr>
                                <td class="text-left" colspan="2">Total $</td>
                                <td colspan="5" style="text-align:right;" id="totalEnd">0.00</td>
                            </tr>
                            </tfoot>
                        </table>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="button" id="btnsub" class="btn btn-primary">
                                    Guardar
                                </button>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-15 col-md-offset-4">
                                <button type="button" id="btnsub" class="btn btn-primary">
                                    Imprimir
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
@section('script')
<script src="{{ asset('js/archivo.js') }}"></script>
@endsection