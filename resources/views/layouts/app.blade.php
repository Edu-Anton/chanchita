
@include('layouts.partials._header')

<body>
    <div id="app" class="d-flex flex-column min-vh-100 admin-bg">
        @include('layouts.partials._navbar')

        <main class="flex-grow-1 my-4 ">
            <div class="container">

                @yield('content')
                
            </div>
        </main>

        @include('layouts.partials._footer')
    </div>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script> --}}
    @stack('scripts')
</body>
</html>
