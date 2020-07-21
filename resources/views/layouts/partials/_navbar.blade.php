<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
  <div class="container">
      <a class="navbar-brand" href="{{ url('/') }}">
          <img class="navbar__logo" src="{{ asset('img/logo.png') }}" alt="logo">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
          <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Left Side Of Navbar -->
          <ul class="navbar-nav mr-auto">
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('about') }}">Nosotros</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('services') }}">Servicios</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('faq') }}">Preguntas</a>
              </li>
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
                    {{-- <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">Mis Chanchitas</a>
                    </li> --}}
                    <li class="nav-item dropdown avatar-nav__li">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} 
                            <span class="avatar-nav__box">
                                <img class="avatar-nav__img" src="{{ url(Storage::url(auth()->user()->avatar)) }}" alt="">
                                <span class="caret avatar-nav__caret"></span>
                                <ion-icon name="caret-down-outline"></ion-icon>
                            </span>
                            <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item navbar__dropdown" href="{{ route('home') }}">
                                <img class="sidebar-product__icon mr-1" src="{{ asset('img/people-outline.svg') }}" alt="Chanchitas">
                                Mis Chanchitas
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item navbar__dropdown" href="{{ route('profile.show', ['user' => auth()->user()->id]) }}">
                                <img class="sidebar-product__icon mr-1" src="{{ asset('img/person-circle-outline.svg') }}" alt="Chanchitas">
                                Mi Perfil
                            </a>
                            @if (auth()->user()->rol === 'admin') 
                            <div class="dropdown-divider"></div>   
                                <a class="dropdown-item navbar__dropdown" href="{{ route('product.index') }}">
                                    <img class="sidebar-product__icon mr-1" src="{{ asset('img/grid-outline.svg') }}" alt="Chanchitas">
                                    Panel de Administrador
                                </a>
                            @endif
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item navbar__dropdown" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                <img class="sidebar-product__icon mr-1" src="{{ asset('img/power-outline.svg') }}" alt="Chanchitas">
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
</nav>