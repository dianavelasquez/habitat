@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Bienvenido/a</div>

                <div class="panel-body">
                    <div class="col-md-11">
                        <div class="panel-heading">
                            Página de inicio de SIRMAC
                        </div>
                        <div class="panel-body">
                            <center><img src="{{ asset('imagenes/bienvenida.jpg') }}" width="580" height="350"></center>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
