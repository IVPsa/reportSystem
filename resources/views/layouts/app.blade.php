<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <title>RPS</title>

    <!-- Styles -->

    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
    <script src="{{ asset('js/jquery-2.1.0.js')}}"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="{{ asset('js/func.js')}}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
      function openNav() {
          document.getElementById("mySidenav").style.width = "250px";
      }

      function closeNav() {
          document.getElementById("mySidenav").style.width = "0";
      }
    </script>



    <style>
         .thumb {
           height: 300px;
           border: 1px solid #000;
           margin: 10px 5px 0 0;
         }
     </style>

</head>
<body>
<passport-clients></passport-clients>
<passport-authorized-clients></passport-authorized-clients>
<passport-personal-access-tokens></passport-personal-access-tokens>
<div  id="app">

  @if (Route::has('login'))
    @auth
      <nav class="navbar navbar-expand-lg navbar-dark" style="background-color:rgba(0, 0, 0, 0.9);">
        <span class="d-none d-sm-block " style="font-size:40px; color:white; cursor:pointer" onclick="openNav()">&#9776;</span>
        <a class="navbar-brand" href="#">RPS</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto ">
            <li class="nav-item  d-md-none d-xs-block">
                <a class="nav-link" href="{{route('home')}}">HOME</a>
            </li>
            <li class="nav-item d-md-none d-xs-block">
              <a class="nav-link" href="{{route('Perfil')}}">PERFIL</a>
            </li>

            <li class="nav-item d-md-none d-xs-block">
              <a class="nav-link" href="{{route('reportesListado')}}">REPORTES</a>
            </li>

            <li class="nav-item d-md-none d-xs-block">
              <a class="nav-link" href="{{route('InicioOT')}}">OT</a>
            </li>

          </ul>
        	<ul class="navbar-nav ">
            @guest
                <li><a href="{{ route('login') }}">Login</a></li>
                <li><a href="{{ route('register') }}">Register</a></li>
            @else

             <li class="nav-item dropdown" style="margin-right:60px;">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  {{ Auth::user()->USER_NOMBRE }}
                </a>
                <div class="dropdown-menu " aria-labelledby="navbarDropdown">

                  <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                      Logout
                  </a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      {{ csrf_field() }}
                  </form>

                </div>
              </li>
                      @endguest
        	</ul>
        </div>

       </nav>

    @endauth
  @endif

        <div class="hidden-xs ">

          <div id="mySidenav" class="sidenav ">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="{{route('home')}}">HOME</a>
            <a href="{{route('Perfil')}}">PERFIL</a>
            <a href="{{route('reportesListado')}}">REPORTES</a>
            <a href="{{route('InicioOT')}}">ORDENES DE TRABAJO</a>
          </div>
        </div>



</div>

    <div class="container-fluid bg-dark" style="height:auto;">

          @yield('content')

    </div>


    <script>
    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();
    });
    </script>
    <!-- Scripts -->
    <!-- <script src="{{ asset('js/app.js') }}"></script> -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
</body>
</html>
