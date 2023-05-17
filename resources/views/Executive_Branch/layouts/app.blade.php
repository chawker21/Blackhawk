@include('Executive_Branch.partials._header')

<body>
@include('Executive_Branch.navbars.nav')
<main>
    <div>
        @yield('content')
    </div>
    <!-- Scripts -->
<!-- Include app.partials._javascript and app.partials._bootstrap_modal then add any additional javascript files specific to application -->
    @include('app.partials._javascript')
    @include('app.partials._bootstrap_modal')
</main>
</body>
</html>
