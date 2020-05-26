<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>{{ config('app.name', 'Laravel') }} Avitar</title>

  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>

  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">


  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('css/adminlte.min.css') }}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
  


  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
  
  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  
</head>
<body class="hold-transition sidebar-mini">
  <div id="app">
    {{-- <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                  document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav> --}}



  
    <div class="wrapper">

      <!-- Navbar -->
      <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
          </li>
         
        </ul>


      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">

        {{-- <li class="nav-item">
          <a class="nav-link d-flex align-items-center" data-widget="control-sidebar" data-slide="true" href="#" role="button">
              <div class="image pr-2" >
                <img src="{{ URL::asset('profiles/'. Auth::user()->avatar) }}" class="img-circle elevation-1"  style="width:30px" alt="User Image">
              </div>
              <strong>Perfil 2</strong>
            </a>
        </li> --}}
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            @if(Auth::user())
            <img src="{{ URL::asset('profiles/'. Auth::user()->avatar) }}" class="img-circle elevation-1"  style="width:30px" alt="User Image">
            @endif
            Mi perfil
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <span class="dropdown-item dropdown-header">
              <a href="{{ route('profile.index')}}">Mi perfil</a>
            </span>
            <span class="dropdown-item dropdown-header">
              <a  href="/profile/password">Cambiar contraseña</a>
            </span>
            <span class="dropdown-item dropdown-header">
              <a  style="background:tranparent" href="{{ route('logout') }}"
                 onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">Cerrar sesión</a>
                 <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
              </form>
            </span>
            
        </li>
        
      </ul>
    
        
       
      </nav>
      <!-- /.navbar -->
    
      <!-- Main Sidebar Container -->
      <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="#" class="brand-link">
          <img src="{{ asset('img/avitar-ico.png') }}" alt="" class="brand-image  elevation-3"
               style="opacity: .8">
          <span class="brand-text font-weight-light"><img src="{{ asset('img/avitar-brand.png') }}"  style="max-height:28px;margin-bottom: 5px;" alt=""></span>
        </a>
    
        <!-- Sidebar -->
        <div class="sidebar">
          <!-- Sidebar user panel (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
              <img src="{{ URL::asset('profiles/'. Auth::user()->avatar) }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <span class="info" style="text-align:left;color:#fff">
              {{ Auth::user()->name }} {{ Auth::user()->first_surname }}
            </span>
        
          </div>
    
          <!-- Sidebar Menu -->
          <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
              <li class="nav-item  {{ Request::url('/dashboard') ? 'active' : '' }} ">
                <a href="{{ route('dashboard') }}" class="nav-link">
                  <i class="nav-icon fas fa-home"></i>
                  <p>
                    Dashboard
                  </p>
                </a>
              </li>
              @if(Auth::user()->rol->name === 'Administrador')
              <li class="nav-item {{ Request::url('/users') ? 'active' : '' }}">
                <a href="{{ route('users.index') }}" class="nav-link">
                  <i class="nav-icon fas fa-users"></i>
                  <p>
                    Usuarios
                  </p>
                </a>
              </li>
              @endif
              <li class="nav-item has-treeview {{ Request::url('/plantillas') ? 'active' : '' }}">
                <a href="" class="nav-link">
                  <i class="nav-icon fas fa-file-code"></i>
                  <p>
                    Plantillas
                    <i class="right fas fa-angle-left"></i>
                    {{-- <span class="right badge badge-danger">New</span> --}}
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Ver todas</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="l" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p style="text-decoration:line-through">Crear</p>
                    </a>
                  </li>
                 
                </ul>
              </li>
              <li class="nav-item {{{ Request::url('/mailing') ? 'active' : '' }}}">
                <a href="{{ url('/mailing') }}" class="nav-link ">
                  <i class="nav-icon fas fa-mail-bulk"></i>
                  <p>
                    Mailing
                  </p>
                </a>
              </li>
            </ul>
          </nav>
          <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
      </aside>
    
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
 
    
        <!-- Main content -->
        <div class="content">
          <div class="container-fluid">
            
            <main class="py-4">
              @yield('content')
            </main> 
          </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->

    
      <!-- Main Footer -->
      <footer class="main-footer">
        <!-- To the right -->
        <div class="float-right d-none d-sm-inline">
          Anything you want
        </div>
        <!-- Default to the left -->
        <strong>Copyright &copy; 2014-2019 <a href="https://avitar.pe">Avitar.pe</a>.</strong> All rights reserved.
      </footer>
    </div>
    <!-- ./wrapper -->
  </div>
  <!-- jQuery -->
  
 
  
  <!-- Bootstrap 4 -->
   <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
  {{-- <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script> --}}
 

  {{-- <script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script> --}}
  {{-- <script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script> --}}
  

  {{-- <script src="{{ asset('plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
  <script src="{{ asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script> --}}


   <!-- AdminLTE App -->

   <script src="{{ asset('js/adminlte.min.js') }}"></script>






</body>
</html>
