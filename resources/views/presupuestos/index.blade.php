@extends('layouts.app')

@section('migasdepan')
<h1>
        Presupuestos
        <small>Control de presupuestos</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url('/presupuestos') }}"><i class="fa fa-dashboard"></i> Presupuestos</a></li>
        <li class="active">Listado de presupuestos</li>
      </ol>
@endsection

@section('content')
<div class="row">
<div class="col-md-10 col-md-offset-1">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Listado</h3>
                <a href="{{ url('/presupuestos/create') }}" class="btn btn-success"><span class="glyphicon glyphicon-plus-sign"></span> Agregar</a>

            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive">
              <table class="table table-striped table-bordered table-hover" id="example2">
          <thead>
                  <th>Id</th>
                  <th>Cliente</th>
                  <th>Mejora</th>
                  <th>Acción</th>
                </thead>

                <tbody>
                  @foreach($presupuestos as $presupuesto)
                  <tr>
                    <td>{{ $presupuesto->id }}</td>
                    <td>{{ $presupuesto->cliente->nombre }}</td>
                    <td>{{ $presupuesto->tipomejora->nombre }}</td>
                    <td>
                                {{ Form::open(['method' => 'POST', 'id' => 'baja', 'class' => 'form-horizontal'])}}
                                <a href="{{ url('presupuestos/'.$presupuesto->id) }}" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-eye-open"></span></a>
                                <a href="{{ url('/presupuestos/'.$presupuesto->id.'/edit') }}" class="btn btn-warning btn-xs"><span class="glyphicon glyphicon-text-size"></span></a>
                                <button class="btn btn-danger btn-xs" type="button" onclick={{ "baja(".$presupuesto->id.")" }}><span class="glyphicon glyphicon-trash"></span></button>
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
                            $('#baja').attr('action','http://'+dominio+'/habitat/public/presupuestos/baja/'+id+'+'+text);
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
                            $('#alta').attr('action','http://'+dominio+'/habitat/public/presupuestos/alta/'+id);
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
