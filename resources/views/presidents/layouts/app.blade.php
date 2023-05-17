@include('presidents.partials._header')

<body class="hi">
@include('presidents.navbars.nav')
        <main>
            <div>
                @yield('content')
            </div>
            <!-- Scripts -->

            @include('presidents.partials._javascripts')
            @include('app.partials._bootstrap_modal')
        </main>
</body>

