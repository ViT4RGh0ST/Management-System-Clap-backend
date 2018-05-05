@extends('layouts.app')

@section('content')
  
  <div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
        <h1 class="header center red-text">Sistema de Gestion CLAP</h1>
        <div class="row center">
          <h5 class="header col s12 light">Un moderno sistema de Gestion de CLAP</h5>
        </div>
        <div class="row center">
          <a class="waves-effect waves-light btn red modal-trigger" href="#modal-registro-jefe">Registro</a>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="images/background1.jpg" alt="Unsplashed background img 1"></div>
  </div>
  
  
  <div class="container">
    <div class="section">
      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">flash_on</i></h2>
            <h5 class="center">Mantente al dia</h5>
            
            <p class="light">Con el novedoso Sistema de Gestion de Los Comités Locales de Abastecimiento y Producción
              podras asegurar la distribución directa y segura de los productos alimenticios y de primera necesidad a
              las comunidades y de esta manera proteger al pueblo a partir de un sistema de distribución justa en el
              cual se gestiona de manera muy automatizada</p>
          </div>
        </div>
        
        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">group</i></h2>
            <h5 class="center">Hecho por el pueblo y para el pueblo</h5>
            
            <p class="light">El Sistema de Gestion CLAP es gestionado por los diferentes jefes de comunidad. Se
              conformarán a escala local en cada una de las comunidades que se delimiten a los efectos del Sistema
              Popular de Distribución de Alimentos, a razón de un Comité por cada comunidad.</p>
          </div>
        </div>
        
        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">settings</i></h2>
            <h5 class="center">Facil de trabajar</h5>
            
            <p class="light">Con el nuevo sistema se podra gestionar el registro de Jefes de Familias asi como tambien
              las familias del mismo. Por otra parte los Jefes de comunidad que lideran a la gestion de CLAP podran
              llevar el control de las familais registradas en el sistema</p>
          </div>
        </div>
      </div>
    
    </div>
  </div>
  
  
  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h5 class="header col s12 light"></h5>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="images/background2.jpg" alt="Unsplashed background img 2"></div>
  </div>
  
  <div class="container">
    <div class="section">
      
      <div class="row">
        <div class="col s12 center">
          <h3><i class="mdi-content-send brown-text"></i></h3>
          <h4>Contactanos</h4>
          <br>
          <p class="left-align light">
          <div class="col s4">
            <img src="images/favicon.png" alt="">
          </div>
          <div class="col s4">
            <img src="images/logoclap.png" alt="">
          </div>
          <div class="col s4">
            <img src="images/favicon.png" alt="">
          </div>
          </p>
        </div>
      </div>
    
    </div>
  </div>
  
  @modal
  @slot('id')
    modal-registro-jefe
  @endslot
  @include('registro.parciales.registro-formulario')
  <div class="row">
    <div class="col s12 center">
      <a href="#" title="Ya estoy registrado">Ya estoy registrado</a>
    </div>
  </div>
  @slot('botones')
    <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Cancelar</a>
  @endslot
  @endmodal
  
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

@endsection