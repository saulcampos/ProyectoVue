 <!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
   @yield('head')
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Chicks Control</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/vue/theadTable.css')}}">
  <link rel="stylesheet" href="{{asset('adminlte/css/font-awesome.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{asset('adminlte/css/ionicons.min.css')}}">

  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('adminlte/css/AdminLTE.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/vue/modalBonito.css')}}">
  
  <link rel="stylesheet" href="{{asset('adminlte/css/skins/skin-blue.min.css')}}">

  

  <!-- Google Font -->
  <link rel="stylesheet">
</head>
<!-- EEEESES -->
<body class="hold-transition skin-blue sidebar-mini">

<style type="text/css">
    .wrapper{ text-transform:uppercase; }
    .container button{ text-transform:uppercase; }
    thead, tbody{
    align-items: center;
    align-content: center;
    text-align: center;
    },
    
 </style>

  

<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>C</b>C</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><small><b>Chicks´s</b> Control</small></span>
    </a>






    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>




      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">

           <!-- INCIO MENSJES-->
          <li class="dropdown messages-menu">
            <!-- Menu toggle button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success">5</span>
            </a>

            <ul class="dropdown-menu"><!--HEADER-->
                  <li class="header">You have 4 messages</li>

              <li>
                <ul class="menu">
                  <li><!-- start message -->
                    <a href="#">
                    <div class="pull-left">
                        <!-- User Image -->
                      <img src="{{asset('user/'.Session::get('foto'))}}"  class="img-circle" alt="User Image">
                    </div>
                      <!-- Message title and timestamp -->
                      <h4>
                        Support Team
                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                      </h4>
                      <!-- The message -->
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <!-- end message -->
                </ul>
                <!-- /.menu -->
              </li>

                  <li class="footer"><a href="#">See All Messages</a></li><!--FOOTER-->

            </ul>

          </li>
          <!-- FIN MENSJES-->

          <!-- Notifications Menu -->
          <li class="dropdown notifications-menu">
            <!-- Menu toggle button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">10</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 10 notifications</li>
              <li>
                <!-- Inner Menu: contains the notifications -->
                <ul class="menu">
                  <li><!-- start notification -->
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> 5 new members joined today
                    </a>
                  </li>
                  <!-- end notification -->
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>
          <!-- Tasks Menu -->
          <li class="dropdown tasks-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-flag-o"></i>
              <span class="label label-danger">9</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 9 tasks</li>
              <li>
                <!-- Inner menu: contains the tasks -->
                <ul class="menu">
                  <li><!-- Task item -->
                    <a href="#">
                      <!-- Task title and progress text -->
                      <h3>
                        Design some buttons
                        <small class="pull-right">20%</small>
                      </h3>
                      <!-- The progress bar -->
                      <div class="progress xs">
                        <!-- Change the css width attribute to simulate progress -->
                        <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">20% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                </ul>
              </li>
              <li class="footer">
                <a href="#">View all tasks</a>
              </li>
            </ul>
          </li>
          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
              <img src="{{asset('user/'.Session::get('foto'))}}"   class="user-image" alt="User Image">
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs">{{Session::get('usuario')}}</span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
                
                <img src="{{asset('user/'.Session::get('foto'))}}"   class="img-circle" alt="User Image">

                <p>
                  {{Session::get('usuario')}}  {{Session::get('rol')}}
                  <small>Miembro desde 2018</small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                {{--
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>
                --}}
                <!-- /.row -->
              </li>

              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  {{--<a href="#" class="btn btn-default btn-flat">Profile</a>--}}
                </div>
                <div class="pull-right">
                  <a href="{{url('salir')}}" class="btn btn-primary btn-flat"><span style="color: black;">Salir</span></a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle=""><i class=""></i></a>
            <!--<a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a> -->
          </li>
        </ul>
      </div>






    </nav>







  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img  src="{{ asset('adminlte/img/Logo.png') }}"  class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{Session::get('usuario')}}</p>
          
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> En linea</a>
        </div>
      </div>

      <!-- search form (Optional) -->
      @yield('buscar')
      <!-- /.search form -->


      <!-- Sidebar Menu -->

      <ul  class="sidebar-menu" data-widget="tree">
        <li  class="header">@yield('HEADER')</li>
        <!-- Optionally, you can add icons to the links -->
<!--1 -->
<style type="text/css">
  li{ font-family:Arial}
</style>
        <li class="active">@yield('LinkTom1')</li>
        <li class="active">@yield('LinkTom2')</li>
        <li class="active">@yield('LinkTom3')</li>
        <li class="active">@yield('LinkTom4')</li>


        <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>@yield('Titulo1')</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <!--Menu completo desplegable -->
          <ul class="treeview-menu">

           <li>@yield('Link1')</li>
           <li>@yield('Link2')</li>
           <li>@yield('Link3')</li>
           <li>@yield('Link4')</li>
           <li>@yield('Link5')</li>
           <li>@yield('Link6')</li>
           <li>@yield('Link7')</li>
           <li>@yield('Link8')</li>
          </ul>
        </li>

        <li class="treeview">
          <a >
            <i class="fa fa-link"></i> <span>@yield('Titulo2')</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
          </a>
          <ul class="treeview-menu">
           <li>@yield('Tomyy1')</li>
           <li>@yield('Tomyy2')</li>
           <li>@yield('Tomyy3')</li>
           <li>@yield('Tomyy4')</li>
           <li>@yield('Tomyy5')</li>
           <li>@yield('Tomyy6')</li>
           <li>@yield('Tomyy7')</li>
           <li>@yield('Tomyy8')</li>
          </ul>
        </li>


        <li class="treeview">
          <a>
            <i class="fa fa-link"></i> <span>@yield('Titulo3')</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
          </a>
          <ul class="treeview-menu">
           <li>@yield('Sumer1')</li>
           <li>@yield('Sumer2')</li>
           <li>@yield('Sumer3')</li>
           <li>@yield('Sumer4')</li>
           <li>@yield('Sumer5')</li>
           <li>@yield('Sumer6')</li>
           <li>@yield('Sumer7')</li>
           <li>@yield('Sumer8')</li>
          </ul>
        </li>

      </ul>

      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <p style="color: black" align="center">
        <b>@yield('titulo')</b>
      </p>
 
      </h1>
     
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
        <div class="box">

          @yield('contenido')
         
        </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
  
    <div class="pull-right hidden-xs">
      
    </div>
   <strong>Copyright &copy; 2020 - 2030 <a href="#">Sistema de Ventas</a>.</strong> Todos los derechos reservados..
  </footer>

  
  <div class="control-sidebar-bg"></div>
</div>




<!-- jQuery 3 -->
<script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>

<script src="{{asset('adminlte/js/adminlte.min.js')}}"></script>


</body>
</html>