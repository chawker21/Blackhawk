@include('guides.partials._header')
@include('guides.navbars.nav_create_guide')
<body>

        <main>
            <div>
                @yield('content')
            </div>
            <!-- Scripts -->

            @include('app.partials._javascript')
            @include('app.partials._bootstrap_modal')
        </main>
</body>
</html>
