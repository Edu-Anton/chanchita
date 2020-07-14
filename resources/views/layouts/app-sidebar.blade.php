
@include('layouts.partials._header')

<body>
    <div id="app" class="d-flex flex-column min-vh-100 admin-bg">
        @include('layouts.partials._navbar')

        <main class="flex-grow-1 my-4 ">
            <div class="container">
                <div class="row">
                    <div class="col-3">
                        @yield('sidebar')
                        {{-- @include('layouts.partials._sidebarproduct') --}}
                    </div>
                    <div class="col-9">
                        @yield('content')
                    </div>
                </div>
            </div>
        </main>

        @include('layouts.partials._footer')
    </div>
    @stack('scripts')
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script> --}}

</body>
</html>
