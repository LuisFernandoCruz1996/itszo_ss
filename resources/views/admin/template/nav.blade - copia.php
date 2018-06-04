<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #1d8348;">
    <a class="navbar-brand" href="{{ url('/admin/users') }}" style="color:  #fdfefe;">
      <img src="{{asset('plugins/images/logoitszo.png')}}" width="200" height="50">
    </a>
    <a class="nav-link" href="#" style="color: #fdfefe;">Vinculación</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation" style="color: #fdfefe;">
      <span class="navbar-toggler-icon"></span>
    </button>
    @if(Auth::user())
    <div class="collapse navbar-collapse" id="navbarColor03">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="{{ url('/admin/users')}}" style="color: #fdfefe;">Alumnos<span class="sr-only" >(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="{{ url('/admin/users')}}" style="color: #fdfefe;">Ingeniería Gestion Empresarial<span class="sr-only" >(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="{{ url('/admin/users')}}" style="color: #fdfefe;">Alumnos<span class="sr-only" >(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="{{ url('/admin/users')}}" style="color: #fdfefe;">Ingeniería Gestion Empresarial<span class="sr-only" >(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="{{ url('/admin/users')}}" style="color: #fdfefe;">Usuarios<span class="sr-only" >(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="#" style="color: #fdfefe;"></a>
        </li>
      </ul>
      
    </div>
    <form>
        <li class="dropdown">
          <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> {{ Auth::user()->nombres }}<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="{{ route('admin.logout')}}">Salir</a></li>
          </ul> 
        </li>
    </form>
    @endif
</nav>