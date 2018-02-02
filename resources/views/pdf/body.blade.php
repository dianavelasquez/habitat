@extends('pdf.plantilla')
@include('pdf.header')
@section('content')
              <table class="table table-striped table-bordered table-hover" id="example2">
          <thead>
                  <th>Id</th>
                  <th>Código SIM</th>
                  <th>Nombre</th>
                  <th>Dirección</th>
                </thead>
                <tbody>
                  @foreach($clientes as $cliente)
                  <tr>
                    <td>{{ $cliente->id }}</td>
                    <td>{{ $cliente->cod_sim }}</td>
                    <td>{{ $cliente->nombre }}</td>
                    <td>{{ $cliente->direccion }}</td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
@endsection

