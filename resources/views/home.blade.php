@extends('layouts.app')

@section('content')
  <div class="side-nav fixed" id="mobile-menu">
    <ul id="actions-menu" class="collapsible collapsible-accordion">
      
      <li class="menu-header">
      </li>
      <li>
        <div class="user-view">
          <div class="background">
            <img class="" src="../images/backgroundperfil.jpg">
          </div>
          <a href="#!user"><img class="circle" src="../images/perfil.png"></a>
          <a href="#!name"><span class="black-text name">John Doe</span></a>
          <a href="#!email"><span class="black-text email">correoelectronico@gmail.com</span></a>
        </div>
      </li>
      <li class="no-padding">
        <a href="#" class="waves-effect waves-grey ">
          <i class="material-icons">dehaze</i>Noticias
        </a>
      </li>
      <li class="no-padding">
        <a href="#" class="waves-effect waves-grey">
          <i class="material-icons">question_answer</i>CLAP
        </a>
      </li>
      <li class="no-padding">
        <a href="clap.html" class="waves-effect waves-grey">
          <i class="material-icons">group</i>Familias
        </a>
      </li>
    </ul>
  </div>
  
  <style>
    header, main, footer {
      padding-left: 300px;
    }
  
    @media only screen and (max-width : 992px) {
      header, main, footer {
        padding-left: 0;
      }
    }
  </style>
@endsection





                                        