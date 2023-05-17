@include('library.partials._header')

<body>
@include('library.navbars.nav')
@include('library.partials._sdhover')

        <main>
            <div>
                @yield('content')
            </div>
            <!-- Scripts -->

            @include('library.partials._javascript')
            @include('app.partials._bootstrap_modal')
        </main>
</body>

