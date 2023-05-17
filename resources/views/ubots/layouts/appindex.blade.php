
<!DOCTYPE HTML>
<html>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
<link href="{{ asset('/app_resources/css/themes/costa_theme.css') }}" rel="stylesheet">
{{--<link href="{{asset('/app_resources/css/mycss.css')}}" rel="stylesheet" type="text/css">--}}
<link href="{{asset('/app_resources/css/primary.css')}}" rel="stylesheet" type="text/css">
<link href="{{ asset('/app_resources/css/components/mybtn.css') }}" rel="stylesheet">


@include('ubots.partials._header')

<body>


<div id="app">

    @yield('content')
</div>
@include('ubots.partials._javascripts')

</body>
</html>