<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/sweetalert2.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <img src="{{ asset('imagenes/logoinicio.png') }}" width="130" height="80">

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/home') }}">
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Na/vbar -->
                    @if(Auth::guest())
                    @else
                    <ul class="nav navbar-nav">
                        <p></p>
                        <li><a href="{{ url('/home') }}"> Inicio</a>
                        </li>
                        <li><a href="{{ url('/clientes') }}"> Clientes</a>
                        </li>
                        <li><a href="{{ url('/albaniles') }}"> Albañiles</a>
                        </li>
                        <li><a href="{{ url('/materiales') }}"> Materiales</a>
                        </li>
                        <li><a href="{{ url('/presupuestos') }}"> Presupuestos</a>
                        </li>
                        <li><a href="{{ url('/tipomejoras') }}"> Mejoras</a>
                        </li>
                    </ul>
                    @endif

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="{{ route('register') }}">Crear cuenta</a></li>


                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            
                        @else
                        <p></p>
                    <img src="{{ asset('imagenes/usuario2.svg') }}" width="40" height="40">
                            
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">

                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Cerrar sesión
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        @if(Session::has('exito'))
            <div class="alert alert-success alert-dismissable" rol="alert">
                <span class="glyphicon glyphicon-ok" area-hidden="true"></span>
                <a href="#" class="close" data-dismiss="alert" area-label="close"> &times; </a>
                {{ Session::get('exito') }}
            </div>
        @endif

        @if(Session::has('error'))
            <div class="alert alert-danger alert-dismissable" rol="alert">
                <span class="glyphicon glyphicon-ok" area-hidden="true"></span>
                <a href="#" class="close" data-dismiss="alert" area-label="close"> &times; </a>
                {{ Session::get('error') }}
            </div>
        @endif

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery.inputmask.bundle.js')}}"></script>
    <script src="{{ asset('js/sweetalert2.js') }}"></script>

    <script type="text/javascript">
        $(function(){
            $('[data-mask]').inputmask();
        });
    </script>

    <!--<script src="{{ asset('js/app.js') }}"></script>-->
    @yield('script')
</body>
</html>
