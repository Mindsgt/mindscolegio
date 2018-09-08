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
     
<script language="javascript" type="text/javascript">
        // Begin
        var timerID = null;
        var timerRunning = false;
        function stopclock (){
        if(timerRunning)
        clearTimeout(timerID);
        timerRunning = false;
        }
        function showtime () {
        var now = new Date();
        var hours = now.getHours();
        var minutes = now.getMinutes();
        var seconds = now.getSeconds()
        var timeValue = "" + ((hours >12) ? hours -12 :hours)
        if (timeValue == "0") timeValue = 12;
        timeValue += ((minutes < 10) ? ":0" : ":") + minutes
        timeValue += ((seconds < 10) ? ":0" : ":") + seconds
        timeValue += (hours >= 12) ? " P.M." : " A.M."
        document.clock.face.value = timeValue;
        timerID = setTimeout("showtime()",1000);
        timerRunning = true;
        }
        function startclock() {
        stopclock();
        showtime();
        }
        window.onload=startclock;
        // End -->
</script>

</head>
<body>
<div class="upbar">
    <div class="dropdown" style="float:right;">
        <button class="dropbtn"><i class="fas fa-ellipsis-v dropbtn"></i></button>
        <div class="dropdown-content">
            <a href="#">Ajustes</a>
            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">Log out</a>
            <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
            <a href="#">Ayuda</a>
        </div>
    </div>
</div>
    <div id="app">
    <div class="admin-menu-left">

    </div>
    <div class="admin-menu-left-list" style="display: none;">
        <ul>
            <!-- Authentication Links -->
                @if (Auth::guest())
                    <li><a href="{{ route('login') }}">Login</a></li>
                    <li><a href="{{ route('register') }}">Register</a></li>
                @else
                <div style="background-color: #dc3644; padding-bottom: 10px; margin-bottom: 8px;">
                    <img src="{{ asset('/images/account_circle.svg') }}" class="rounded-circle" width="84" height="100" style="margin-left: 43px;  margin-top: 20px;">
                    <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="margin-left: 60px; color: #fff;">{{ Auth::user()->name }} <span class="caret"></span>
                    </a>
                        <ul class="dropdown-menu" role="menu" style="padding: 0px 18px; margin-left: 10px; margin-top: 0px;">
                            <li>
                                {{ Auth::user()->name }}<br>
                                {{ Auth::user()->email }}
                            </li>
                            <li>
                               <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                <button type="button" class="btn btn-primary btn-sm"><span><img src="{{ asset('/images/power_white.png') }}" class="icon-button"></span><b>Logout</b></button>      
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                </div>
                @endif           
            <li><p>Administración</p></li>
            <li><a href=""><div><span><img src="{{ asset('/images/home_black.svg') }}" class="icon-button"></span> Inicio</div></a></li>
            <li><a href=""><div><span><img src="{{ asset('/images/icon-complements.svg') }}" class="icon-button"></span> Grados</div></a></li>
            <li><a href="{{ route('admin.index.encargados') }}" ><div><span><img src="{{ asset('/images/list_users.svg') }}" class="icon-button"></span> Encargados</div></a></li>
            <li><a href="{{ route('admin.list.maestros') }}" ><div><span><img src="{{ asset('/images/alumno.svg') }}" class="icon-button"></span> Alumnos</div></a></li>
            <li><a href="{{ route('admin.list.maestros') }}" ><div><span><img src="{{ asset('/images/catedratico.svg') }}" class="icon-button"></span> Catedraticos</div></a></li>
            <li><p>Datos</p></li>
            <li><a href=""><div><span><img src="{{ asset('/images/materias.svg') }}" class="icon-button"></span> Materias</div></a></li>
            <li><a href=""><div><span><img src="{{ asset('/images/outline-view_list-24px.svg') }}" alt="" class="icon-button"></span>Calificaciones</div></a></li>
            <li>
                <div class="hero-unit-clock">

                    <form name="clock">
                        <p>Hora: </p>&nbsp;<img src="{{ asset('/images/time_black.svg') }}" style="margin-left: 20px;">
                        <input type="submit" class="trans" name="face" value="" />
                    </form>
                </div>
            </li>
            <li><p> Perfil</p></li>
            <li><a href=""><div><span><img src="{{ asset('/images/icon-user.svg') }}" class="icon-button"></span>Mi Perfil</div></a></li>
        </ul>
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
                <li class="ripple"><a href="{{ route('admin.index.encargados') }}"><i class="fas fa-chalkboard-teacher"></i></i>Maestros</a></li>
                <li class="ripple"><a href="{{ route('admin.index.encargados') }}"><i class="fas fa-user-graduate"></i>Alumnos</a></li>
                <li class="ripple"><a href="{{ route('admin.index.encargados') }}"><i class="fas fa-user-friends"></i>Encargados</a></li>
            </ul>

        </div>
    </div>
    <div class="admin-contanier-global">
        @include('flash::message')
        @yield('content')



    <!-- Scripts -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="{{ asset('/js/some-effects.js') }}"></script>
    @yield('scripts')

</body>
</html>
