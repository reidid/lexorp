<!doctype html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
      <title>@yield('title')</title>
      @section('head')
      {{ HTML::style('bootstrap/css/bootstrap.css') }}
      {{ HTML::style('css/main.css')}}
      {{ HTML::style('css/table.css')}}
      {{ HTML::style('css/wizard.css')}}
      {{ HTML::style('css/docs.min.css')}}
      {{ HTML::style('chosen/chosen.css')}}
      {{ HTML::style('css/bootstrap-table.min.css')}}
      {{ HTML::style('css/bootstrap-datepicker.min.css')}}

      {{ HTML::script('js/jquery.min.js') }}
      {{ HTML::script('js/main.js') }}
      {{ HTML::script('bootstrap/js/bootstrap.min.js') }}
      {{ HTML::script('js/tabla/table.js') }}
      {{ HTML::script('js/bootstrap-table.min.js') }}
      {{ HTML::script('js/utilidades.js') }}
      {{ HTML::script('js/bootstrap-datepicker.min.js') }}


      @show

      <body>
        <div class="navbar navbar-fixed-top navbar-inverse" role="navigation">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{URL::to('/home')}}">
              <span class="glyphicon glyphicon-home"></span>
            </a>
          </div>

          <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
              <li class="pull-right">
                <a href="{{URL::to('logout')}}">
                  <span class="glyphicon glyphicon-log-out"></span> Salir
                </a>
              </li>
            </ul>
            <span class="navbar-text pull-right"> Usuario: {{ Auth::user()->first_name; }}</span>
          </div>
        </div>

        <nav class="navbar navbar-default sidebar" role="navigation">
          <div class="container-fluid">

            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-sidebar-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            </div>

            <div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
              <ul class="nav navbar-nav">
                <li class="active">
                  <a href="#">
                    Home<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-home"></span>
                  </a>
                </li>



                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    Biblioteca <span class="caret"></span><span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-book"></span>
                  </a>
                  <ul class="dropdown-menu forAnimate" role="menu">
                    <li>
                      <a href="{{URL::to('libros')}}">
                        <span style="font-size:16px;" class="glyphicon glyphicon-book"></span> Catálogo
                      </a>
                    </li>
                    <li>
                      <a href="{{URL::to('usuariosbiblioteca')}}">
                        <span style="font-size:16px;" class="glyphicon glyphicon-user"></span> Usuarios
                      </a>
                    </li>
                  </ul>
                </li>

                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    Inventario <span class="caret"></span><span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-barcode"></span>
                  </a>
                  <ul class="dropdown-menu forAnimate" role="menu">
                    <li>
                      <a href="{{URL::to('inventario')}}">
                        <span style="font-size:16px;" class="glyphicon glyphicon-book"></span>&nbsp Libros
                      </a>
                    </li>                    <li>
                      <a href="{{URL::to('inventario/tags')}}">
                        <span style="font-size:16px;" class="glyphicon glyphicon-tags"></span>&nbsp Tags
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <span style="font-size:16px;" class="glyphicon glyphicon-search"></span>&nbsp Busqueda
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <span style="font-size:16px;" class="glyphicon glyphicon-transfer"></span>&nbsp Movimientos
                      </a>
                    </li>
                  </ul>
                </li>

                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    Prestamos <span class="caret"></span><span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-retweet"></span>
                  </a>
                  <ul class="dropdown-menu forAnimate" role="menu">
                    <li>
                      <a href="{{URL::to('prestamos')}}">
                        <span style="font-size:16px;" class="glyphicon glyphicon-resize-full"></span> Prestar
                      </a>
                    </li>
                    <li>
                      <a href="{{URL::to('devoluciones')}}">
                        <span style="font-size:16px;" class="glyphicon glyphicon-resize-small"></span> Devolver
                      </a>
                    </li>
                  </ul>
                </li>





                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    Configuración <span class="caret"></span><span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-cog"></span>
                  </a>
                  <ul class="dropdown-menu forAnimate" role="menu">
                    @if(Entrust::can('ver_roles'))
                    <li>
                      <a href="{{URL::to('roles')}}">Roles</a>
                    </li>
                    @endif
                    @if(Entrust::can('ver_usuarios'))
                    <li>
                      <a href="{{URL::to('users/get')}}">Usuarios Sistema</a>
                    </li>
                    @endif

                    <li class="divider"></li>
                    <li>
                      <a href="{{URL::to('home')}}">Aplicación</a>
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </nav>
        <div class="main">
          <div class="container">

            <div class="row">
              <div class="col-md-4">
                <h2>@yield('titulopagina')</h2>
              </div>
              <div class="col-md-8" style="padding-top:18px;">
                <div id="alertas">&nbsp;</div>
                @if(Session::has('message'))
                <div class="alert {{ Session::get('message')['type']  }} alert-dismissible" style="padding: 8px;" role="alert">
                  <button type="button" class="close" data-dismiss="alert">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                  </button>
                  <strong>{{ Session::get('message')["title"]  }}</strong> {{ Session::get('message')["message"]  }}
                </div>
                @endif
              </div>
            </div>




            @yield('content')
          </div>

        </div>


      </body>
    </html>