<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #15593c; ">
	<a class="navbar-brand" href="{{ url('/') }}" style="color:  #fdfefe;">
		<img src="{{asset('plugins/images/logotecnmbn.png')}}" width="50" height="35">
	</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
		@if(Auth::user())
	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav mr-auto">
	      @if(Auth::user()->alumnos())
	      <li class="nav-item active">
	        <a class="nav-link" href="{{route('rbss.index')}}">ANEXO XXII</a>
	      </li>
	      <li class="nav-item active">
	        <a class="nav-link" href="{{route('fecualpss.index')}}">ANEXO XXIII</a>
	      </li>
	      <li class="nav-item active">
	        <a class="nav-link" href="{{route('facualpss.index')}}">ANEXO XXIV</a>
	      </li>
	      <li class="nav-item active">
	        <a class="nav-link" href="{{route('feapss.index')}}">ANEXO XXV</a>
	      </li>
	      <li class="nav-item active">
	        <a class="nav-link" href="{{route('solicitud.index')}}">ANEXO XXXI<span class="sr-only">(current)</span></a>
	      </li>
	      <li class="nav-item active">
	        <a class="nav-link" href="{{route('documentos.index')}}">Documentos<span class="sr-only">(current)</span></a>
	      </li>
	      @endif
	    </ul>
	    @endif
	  @guest                    
	    <ul class="navbar-nav ml-auto">
	      <li class="nav-item">
	        <a class="nav-link active" href="{{ route('login') }}">Iniciar</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link active" href="{{route('createacces')}}">Registro</a>
	      </li>
	    </ul>
	   @endguest
	   @if(Auth::user())
	   <ul class="navbar-nav">
	      <li class="nav-item dropdown">
	        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	          {{ Auth::user()->nombres}} {{ Auth::user()->apellido_p}} {{ Auth::user()->apellido_m}} 
	        </a>
	        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
	        @if(Auth::user()->alumnos())
	          <a class="dropdown-item" href="{{route('perfil')}}">Perfil</a>
	        @endif
	          <div class="dropdown-divider"></div>
	          <a class="dropdown-item" href="{{ route('logout')}}">Salír</a>
	        </div>
	      </li>
	     </ul>
	   @endif
	</div>
</nav>