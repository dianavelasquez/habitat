<!DOCTYPE html>
<html lang="es">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Hola</title>
  {!! Html::style('css/app.css') !!}
  <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
     <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
</head>
<body>
      <h1>PDF de Bienvenida</h1>
    @yield('content')

    <footer>
      @include('pdf.footer')
    </footer>
    <script type="text/javascript" src="{{asset('js/sisverapaz.js')}}"></script>
</body>
</html>