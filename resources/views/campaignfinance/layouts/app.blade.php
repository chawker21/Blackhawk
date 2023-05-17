@include('campaignfinance.partials._header')

<body>
@include('campaignfinance.layouts.navbars._main_nav')
        <main>
            <div>
                @yield('content')
            </div>
            <!-- Scripts -->
            <!-- footer used for React, empty file -->
            @include('campaignfinance.partials._javascript')
            @include('campaignfinance.partials._bootstrap_modal')
        </main>
</body>
</html>
