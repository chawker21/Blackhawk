@include('stone.partials._header')

<body>
@include('stone.navbars._main_nav')
        <main>
            <div>
                @yield('content')
            </div>
            <!-- Scripts -->
            <!-- footer used for React, empty file -->
            @include('stone.partials._javascript_timeline')

        </main>
</body>
</html>
