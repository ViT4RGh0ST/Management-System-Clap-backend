<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  
  <title>{{ config('app.name', 'laravel') }}</title>
  
  <link rel="shortcut icon" type="image/png" href="images/favicon.png"/>
  
  
  <!-- Styles -->
  
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
  <header>
    <nav class="red white-text" role="navigation">
      <div class="nav-wrapper container">
        <a id="logo-container" href="#" class="brand-logo ">{{ config('app.name', 'laravel') }}</a>
        <ul class="right hide-on-med-and-down">
          @guest
            <li><a href="{{route('login')}}">Entrar</a></li>
          @else
            <li>
              <a class="dropdown-button-custom" href="#" data-activates="dropdown1">
                <i class="material-icons left">perm_identity</i>
                <i class="material-icons right">arrow_drop_down</i>
              </a>
              <ul id="dropdown1" class="dropdown-content">
                <li><span>{{Auth::user()->miembro->nacionalidad}}-{{Auth::user()->miembro->cedula}}</span></li>
                <li class="divider"></li>
                <li><a href="#">Editar perfil</a></li>
                <li><a href="#">Cambiar contraseña</a></li>
                <li><a onclick="$('#out').submit()">Salir
                    <form id="out" method="POST" action="{{route('logout')}}">
                      @csrf
                    </form>
                  </a></li>
              </ul>
            </li>
          
          @endguest
        </ul>
        
        <ul id="nav-mobile" class="side-nav">
          <li><a href="{{route('login')}}">Entrar</a></li>
        </ul>
        <a href="" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
      </div>
    </nav>
  </header>
  <main>
    @yield('content')
  </main>
  
  <footer class="page-footer red">
    <div class="row">
      <div class="col s12 m4">
        <h5 class="white-text">Biografia</h5>
        <p class="grey-text text-lighten-4">Somos un equipo de estudiantes universitarios que trabajan en este
          proyecto para apoyar a nuestras comunidades que mas lo necesitan. Cualquier cantidad ayudaría a apoyar y
          continuar el desarrollo de este proyecto y es muy apreciado.</p>
      
      
      </div>
      <div class="col s12 m4">
        <h5 class="white-text">Links</h5>
        <ul>
          <li><a class="white-text" href="#!">Link 1</a></li>
          <li><a class="white-text" href="#!">Link 2</a></li>
          <li><a class="white-text" href="#!">Link 3</a></li>
          <li><a class="white-text" href="#!">Link 4</a></li>
        </ul>
      </div>
      <div class="col s12 m3">
        <h5 class="white-text">Siguenos</h5>
        <ul>
          <li><a class="white-text" href="#!">Link 1</a></li>
          <li><a class="white-text" href="#!">Link 2</a></li>
          <li><a class="white-text" href="#!">Link 3</a></li>
          <li><a class="white-text" href="#!">Link 4</a></li>
        </ul>
      </div>
    </div>
  </footer>
</div>
<style>
  nav ul a, nav .brand-logo {
    color: #fff;
  }
  main {
    min-height: 100vh;
  }
</style>
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
<script>
    $('.dropdown-button-custom').dropdown({
        inDuration: 300,
        outDuration: 225,
        constrainWidth: false, // Does not change width of dropdown to that of the activator
        hover: false, // Activate on hover
        gutter: 0, // Spacing from edge
        belowOrigin: true, // Displays dropdown below the button
        alignment: 'right', // Displays dropdown with edge aligned to the left of button
        stopPropagation: true // Stops event propagation
    });
</script>
</body>
</html>
