@include('coinbase.partials._header')

<body>

@include('coinbase.navbars.nav')
    <div>

        <main>
            <div>
                @yield('content')
            </div>
            <!-- Scripts -->
            <!-- footer used for React, empty file -->

            @include('coinbase.partials._javascripts')

        </main>
    </div>
</body>
</html>
