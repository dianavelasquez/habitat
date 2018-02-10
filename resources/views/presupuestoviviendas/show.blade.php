@extends('layouts.app')

@section('migasdepan')
<h1>
        
        <small>Ver presupuesto <b>{{ $presupuestovivienda->nombre }}</b></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url('/presupuestoviviendas') }}"><i class="fa fa-dashboard"></i> Preupuestos</a></li>
        <li class="active">Ver</li>
      </ol>
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-11">
            <div class="panel panel-primary">
                <div class="panel-heading">Datos del Presupuesto </div>
                <div class="panel-body">

                  <div class="form-group{{ $errors->has('cliente_id') ? ' has-error' : '' }}">
                    <label for="cliente_id" class="col-md-4 control-label">Nombre del cliente: </label>
                    <label for="nombre" class="col-md-4 control-label">{{$presupuestovivienda->cliente->nombre}}</label><br>
                  </div>

                  <div class="form-group{{ $errors->has('tipovivienda_id') ? ' has-error' : '' }}">
                    <label for="tipovivienda_id" class="col-md-4 control-label">Tipo de vivienda: </label>
                    <label for="nombre" class="col-md-4 control-label">{{$presupuestovivienda->tipovivienda->nombre}}</label><br>
                  </div>
                        
                        <div class="form-group{{ $errors->has('fecha') ? ' has-error' : '' }}">
                            <label for="fecha" class="col-md-4 control-label">Fecha registro: </label>
                            <label for="nombre" class="col-md-4 control-label">{{$presupuestovivienda->fecha->format('d-m-Y')}}</label><br>
                        </div>

                        <div class="form-group{{ $errors->has('materialvivienda_id') ? ' has-error' : '' }}">
                    <label for="materialvivienda_id" class="col-md-4 control-label">Material: </label>
                    <label for="nombre" class="col-md-4 control-label">{{$presupuestovivienda->materialvivienda->nombre}}</label><br>
                  </div>

                       <table class="table">  
                          <thead>
                              <tr>  
                                  <th>  Código</th>
                                  <th>  Material</th>
                                  <th>  Unidad</th>
                                  <th>  Precio unitario</th>
                                  <th>  Cantidad</th>
                              </tr>
                          </thead>
                          <tbody>
                              @foreach($materiales as $materiales)
                           <tr>  
                              <td> {{$material->codigo}} </td>
                              <td> {{$material->nombre}} </td>
                              <td> {{$material->unidad_medida}} </td>
                              <td> {{$material->precio_unitario}} </td>
                              <td> {{$material->cantidad}} </td>
                          </tr>
                            @endforeach
                        </tbody>
                       </table>

                      {{ Form::open(['route' => ['presupuestoviviendas.destroy', $presupuestovivienda->id ], 'method' => 'DELETE', 'class' => 'form-horizontal'])}}
                      <a href="{{ url('/presupuestoviviendas/'.$presupuestovivienda->id.'/edit') }}" class="btn btn-warning"><span class="glyphicon glyphicon-text-size"></span> Editar</a> |
                        <button class="btn btn-danger" type="button" onclick="
                        return swal({
                          title: 'Eliminar presupuesto',
                          text: '¿Está seguro de eliminar presupuesto?',
                          type: 'question',
                          showCancelButton: true,
                          confirmButtonText: 'Si, Eliminar',
                          cancelButtonText: 'No, Mantener',
                          confirmButtonClass: 'btn btn-danger',
                          cancelButtonClass: 'btn btn-default',
                          buttonsStyling: false
                        }).then(function(){
                          submit();
                          swal('Hecho', 'El registro a sido eliminado','success')
                        }, function(dismiss){
                          if(dismiss == 'cancel'){
                            swal('Cancelado', 'El registro se mantiene','info')
                          }
                        })";><span class="glyphicon glyphicon-trash"></span> Eliminar</button>
                      {{ Form::close()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection