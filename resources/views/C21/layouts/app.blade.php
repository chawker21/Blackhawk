@include('C21.partials._header')

<body class="body-color">
@include('C21.navbars.nav')
<main>
    <div>
        @yield('content')
    </div>
    <!-- Scripts -->
<!-- Include app.partials._javascript and app.partials._bootstrap_modal then add any additional javascript files specific to application -->
    @include('C21.partials._javascript')

</main>
</body>
</html>