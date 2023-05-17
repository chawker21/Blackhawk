@include('stone.partials._header')
@include('stone.navbars._main_nav')
<body>

        <main>
            <div>
                @yield('content')
            </div>
            <!-- Scripts -->
            <!-- footer used for React, empty file -->
            @include('stone.partials._javascript')

        </main>
</body>

