@include('layouts.partials._header')

<body>
    <div id="app" class="d-flex flex-column min-vh-100">

        {{-- Navbar --}}

        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
          <div class="container">
              <a class="navbar-brand" href="{{ url('/') }}">
                  <img class="navbar__logo" src="{{ asset('img/logo2.png') }}" alt="logo">
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
                      @endguest
                  </ul>
              </div>
          </div>
        </nav>

        {{-- Fin Navbar --}}
        {{-- @include('layouts.partials._navbar') --}}

        <main class="flex-grow-1 my-4 ">
            <div class="container">

                @yield('content')
                
            </div>
        </main>

        {{-- @include('layouts.partials._footer') --}}
    </div>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script> --}}
    @stack('scripts')
</body>
</html>
