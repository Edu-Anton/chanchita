@include('layouts.partials._header')

<body>
    <div id="app" class="d-flex flex-column min-vh-100">
        @include('layouts.partials._navbar')

        <main class="flex-grow-1">
            @yield('content')
        </main>

        @include('layouts.partials._footer')
    </div>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script> --}}
    
</body>
</html>