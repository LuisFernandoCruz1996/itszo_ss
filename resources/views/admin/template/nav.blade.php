  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand border-bottom navbar-dark bg-success" style="background-color: #15593c; ">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
      </li>
    </ul>
    @guest                    
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link active" href="{{ route('login') }}">Iniciar</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="{{route('create')}}">Registro</a>
      </li>
    </ul>
    @endguest
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('welcome')}}" class="brand-link">
      <img src="{{asset('plugins/images/logoitszoblanco.png')}}" alt="ITSZO" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Servicio Social</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      @if(Auth::user())
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link active bg-success">
              <i class="icon ion-md-person"></i>
              <p>
                {{ Auth::user()->nombres }}
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('logout')}}" class="nav-link active">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Salír</p>
                </a>
              </li>
            </ul>
          </li>
          @if(Auth::user()->admin())
          <li class="nav-item">
            <a href="{{ url('/admin/users')}}" class="nav-link">
              <i class="icon ion-md-contacts"></i>
              <p>
                Usuarios
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('/admin/accesos')}}" class="nav-link">
              <i class="icon ion-md-key"></i>
              <p>
                Acceso
              </p>
            </a>
          </li>
          @endif
          @if(Auth::user()->admin() or Auth::user()->jefeige())
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="icon ion-md-school"></i>
              <p>
                IGEM-2009-201
                <i class="fa fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/tables/simple.html" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Todos</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/tables/data.html" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Semestre</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/tables/data.html" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Genero</p>
                </a>
              </li>
            </ul>
          </li>
          @endif
          @if(Auth::user()->admin() or Auth::user()->jefeind())
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="icon ion-md-school"></i>
              <p>
                IIND-2010-227
                <i class="fa fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/tables/simple.html" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Todos</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/tables/data.html" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Semestre</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/tables/data.html" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Genero</p>
                </a>
              </li>
            </ul>
          </li>
          @endif
          @if(Auth::user()->admin() or Auth::user()->jefeisc())
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="icon ion-md-school"></i>
              <p>
                ISIC-2010-224
                <i class="fa fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/tables/simple.html" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Todos</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/tables/data.html" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Semestre</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/tables/data.html" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Genero</p>
                </a>
              </li>
            </ul>
          </li>
          @endif
          @if(Auth::user()->admin() or Auth::user()->jefeige())
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="icon ion-md-school"></i>
              <p>
                LADM-2010-234
                <i class="fa fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/tables/simple.html" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Todos</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/tables/data.html" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Semestre</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/tables/data.html" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Genero</p>
                </a>
              </li>
            </ul>
          </li>
          @endif
          @if(Auth::user()->admin() or Auth::user()->jefetsm())
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="icon ion-md-school"></i>
              <p>
                Técnico Superior Minas
                <i class="fa fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/tables/simple.html" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Todos</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/tables/data.html" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Semestre</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/tables/data.html" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Genero</p>
                </a>
              </li>
            </ul>
          </li>
          @endif
          @if(Auth::user()->admin() or Auth::user()->jefeinfs())
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="icon ion-md-school"></i>
              <p>
                IINF-2010-220
                <i class="fa fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/tables/simple.html" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Todos</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/tables/data.html" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Semestre</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/tables/data.html" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Genero</p>
                </a>
              </li>
            </ul>
          </li>
          @endif
          @if(Auth::user()->admin() or Auth::user()->jefeiges())
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="icon ion-md-school"></i>
              <p>
                IGEM-2009-201-Distancia
                <i class="fa fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/tables/simple.html" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Todos</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/tables/data.html" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Semestre</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/tables/data.html" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Genero</p>
                </a>
              </li>
            </ul>
          </li>
          @endif
        </ul>
      </nav>
      @endif

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  <!-- Control Sidebar -->
  <!-- /.control-sidebar -->
