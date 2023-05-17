
<!DOCTYPE HTML>
<html>



@include('DC.partials._header')
@include('DC.navbars.nav')
<body>


<div id="app">

    @yield('content')
</div>
@include('DC.partials._javascripts')

</body>
</html>
