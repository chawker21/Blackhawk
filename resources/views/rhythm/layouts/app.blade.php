@include('rhythm.partials._header')

<body class="appear-animate">

<main>
    <div>
        @yield('content')
    </div>
    <!-- Scripts -->
<!-- Include app.partials._javascript and app.partials._bootstrap_modal then add any additional javascript files specific to application -->
    @include('rhythm.partials._javascript')

</main>
</body>
</html>