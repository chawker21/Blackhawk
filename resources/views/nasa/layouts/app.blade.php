@include('nasa.partials._header')

<body>
@include('nasa.layouts.navbars._main_nav')
        <main>
            <div>
                @yield('content')
            </div>
            <!-- Scripts -->
            <!-- footer used for React, empty file -->
            @include('nasa.partials._javascript')
            @include('nasa.partials._bootstrap_modal')
        </main>
</body>
</html>
