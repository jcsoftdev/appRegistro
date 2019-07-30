<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm" >
              <div class="container">
                  <a class="text-primary" href="/home"><h2><strong>FIS-UNCP</strong></h2></a>
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
                                  <!--<a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>-->
                              </li>
                              @if (Route::has('register'))
                                  <li class="nav-item">
                                      <!--<a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>-->
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
                                          {{ __('Cerrar Sesión') }}
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
          </nav>


<header>

    <ul class="nav nav-tabs">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Registrar Asistencia</a>
            <div class="dropdown-menu">
            <a class="dropdown-item" href="{{ route('docente') }}">Docente</a>
            <a class="dropdown-item" href="{{ route('estudiante') }}">Estudiante</a>
            
            </div>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Consultar Asistencia</a>
            <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Docente</a>
            <a class="dropdown-item" href="#">Estudiante</a>
            </div>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Gestionar</a>
            <div class="dropdown-menu">
            <a class="dropdown-item" href="{{ route('regApoderado') }}">Registrar Apoderado</a>
            <a class="dropdown-item" href="{{ route('register') }}">Registrar Usuario</a>
            <a class="dropdown-item" href="#">Editar Apoderado</a>
            <a class="dropdown-item" href="#">Editar Usuario</a>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Horario</a>
        </li>
    </ul>
    
</header>

