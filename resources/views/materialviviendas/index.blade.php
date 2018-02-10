@extends('layouts.app')

@section('migasdepan')
<h1>
        Materiales de vivienda
        <small>Control de materiales</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url('/materialviviendas') }}"><i class="fa fa-dashboard"></i> Materiales</a></li>
        <li class="active">Listado de materiales</li>
      </ol>
@endsection

@section('content')
<div class="row">
<div class="col-md-10 col-md-offset-1">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Listado</h3>
                <a href="{{ url('/materialviviendas/create') }}" class="btn btn-success"><span class="glyphicon glyphicon-plus-sign"></span> Agregar</a>

            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive">
              <table class="table table-striped table-bordered table-hover" id="example2">
          <thead>
                  <th>Id</th>
                  <th>Código</th>
                  <th>Nombre</th>
                  <th>Unidad de medida</th>
                  <th>Precio Unitario</th>
                  <th>Acción</th>
                </thead>
                <tbody>
                  @foreach($materialviviendas as $materialvivienda)
                  <tr>
                    <td>{{ $materialvivienda->id }}</td>
                    <td>{{ $materialvivienda->codigo }}</td>
                    <td>{{ $materialvivienda->nombre }}</td>
                    <td>{{ $materialvivienda->unidad_medida }}</td>
                    <td>{{ $materialvivienda->precio_unitario }}</td>
                    <td>
                                {{ Form::open(['method' => 'POST', 'id' => 'baja', 'class' => 'form-horizontal'])}}
                                <a href="{{ url('materialviviendas/'.$materialvivienda->id) }}" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-eye-open"></span></a>
                                <a href="{{ url('/materialviviendas/'.$materialvivienda->id.'/edit') }}" class="btn btn-warning btn-xs"><span class="glyphicon glyphicon-text-size"></span></a>
                                <button class="btn btn-danger btn-xs" type="button" onclick={{ "baja(".$materialvivienda->id.")" }}><span class="glyphicon glyphicon-trash"></span></button>
                                {{ Form::close()}}

                        </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
                <script>
                    function baja(id)
                    {
                        swal({
                            title: 'Motivo dar de baja',
                            input: 'text',
                            showCancelButton: true,
                            confirmButtonText: 'Dar de baja',
                            showLoaderOnConfirm: true,
                            preConfirm: function (text) {
                                return new Promise(function (resolve, reject) {
                                    setTimeout(function() {
                                        if (text === '') {
                                            reject('Debe ingresar el motivo')
                                        } else {
                                            resolve()
                                        }
                                    }, 2000)
                                })
                            },
                            allowOutsideClick: false
                        }).then(function (text) {
                            var dominio = window.location.host;
                            var form = $(this).parents('form');
                            $('#baja').attr('action','http://'+dominio+'/sisverapaz/public/materialviviendas/baja/'+id+'+'+text);
                            //document.getElmentById('baja').submit();
                            $('#baja').submit();
                            swal({
                                type: 'success',
                                title: 'Se dio de baja',
                                html: 'Submitted motivo: ' + text
                            })
                        });
                    }

                    function alta(id)
                    {
                        swal({
                            title: 'Dar de alta',
                            showCancelButton: true,
                            confirmButtonText: 'Dar de alta',
                            showLoaderOnConfirm: true,
                            allowOutsideClick: false
                        }).then(function () {
                            var dominio = window.location.host;
                            var form = $(this).parents('form');
                            $('#alta').attr('action','http://'+dominio+'/sisverapaz/public/materialviviendas/alta/'+id);
                            //document.getElmentById('baja').submit();
                            $('#alta').submit();
                            swal({
                                type: 'success',
                                title: 'Se dio de alta',
                                html: 'Submitted motivo: '
                            })
                        });
                    }
                </script>
              <div class="pull-right">

              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
</div>
@endsection
