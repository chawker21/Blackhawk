
<!DOCTYPE HTML>
<html>

@include('exotic.partials._header')
@include('exotic.navbars.nav')
<body>
@include('exotic.navbars._nav')

<div id="app">

    @yield('content')
</div>
@include('exotic.partials._javascripts')

</body>
</html>
