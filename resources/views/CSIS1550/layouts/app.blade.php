@include('app.partials._header')

<body>
@include('app.layouts.navbars._main_nav')
        <main>
            <div>
                @yield('content')
            </div>
            <!-- Scripts -->
            <!-- footer used for React, empty file -->

            <script src="{{mix('js/app.js')}}"></script>
            @yield('scripts')
            @include('app.partials._bootstrap_modal')
        </main>
</body>

