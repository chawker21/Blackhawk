<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Chawker21.blue') }}</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://storage.googleapis.com/vrview/2.0/build/vrview.min.js"></script>
    <!-- Fonts -->

    <!-- Styles -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/costa.css') }}" rel="stylesheet">
    <link href="{{asset('css/mycss.css')}}" rel="stylesheet" type="text/css">

    <script>
        var i=0;
        var url="http://192.168.1.20:8081/";
        function jsUpdate() {document.image.src=url+"&"+(i++);}
    </script>
</head>
<body onLoad="jsUpdate();">
<div>
    @include('app.layouts.navbars._main_nav')
    <main>
        <div>
            @yield('content')
        </div>
        <!-- Scripts -->
        <!-- footer used for React, empty file -->
        @include('app.partials._javascript')
    </main>
</div>
</body>
</html>
