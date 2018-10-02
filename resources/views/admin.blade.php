<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
          
        
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Admin')</title>
    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('/css/admin.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
</head>
<body>
<div class="upbar">
    <div class="dropdown" style="float:right;">
        <button class="dropbtn"><i class="fas fa-ellipsis-v dropbtn"></i></button>
        <div class="dropdown-content">
            <a href="#">Ajustes</a>
            <a href="#">Ayuda</a>
            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">Log out</a>
            <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        </div>
    </div>
</div>
    <div id="app">
    <div class="admin-menu-left">

    </div>
    <div class="sidenav">
        <div class="sidenav-header">
            <img src="{{ asset('/images/account_circle.svg') }}" class="rounded-circle" width="84" height="100" style="margin-left: 43px;  margin-top: 20px;">
            <p>{{ Auth::user()->name }}</p>
        </div>
        <div class="sidenav-menu">
            <ul>
                <li class="ripple"><a href="{{ route('home') }}"><i class="fas fa-home"></i>Inicio</a></li>
                <li class="ripple"><a href="{{ route('admin.index.encargados') }}"><i class="fas fa-chalkboard"></i>Grados</a></li>
                <li class="ripple"><a href="{{ route('admin.list.maestros') }}"><i class="fas fa-chalkboard-teacher"></i></i>Catedraticos</a></li>
                <li class="ripple"><a href="{{ route('admin.index.alumnos') }}"><i class="fas fa-user-graduate"></i>Alumnos</a></li>
                <li class="ripple"><a href="{{ route('admin.index.encargados') }}"><i class="fas fa-user-friends"></i>Encargados</a></li>
            </ul>

        </div>
    </div>
    <div class="admin-contanier-global">
        @include('flash::message')
        @yield('content')



    <!-- Scripts -->

    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="{{ asset('/js/some-effects.js') }}"></script>
    @yield('scripts')

</body>
</html>
