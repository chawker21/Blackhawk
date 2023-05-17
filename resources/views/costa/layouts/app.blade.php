<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Chawker21.blue') }}</title>

    <!-- Scripts -->

    <!-- Fonts -->

    <!-- Styles -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link href="{{ asset('/app_resources/css/themes/costa_theme.css') }}" rel="stylesheet">
    {{--<link href="{{asset('/app_resources/css/mycss.css')}}" rel="stylesheet" type="text/css">--}}
    <link href="{{asset('/app_resources/css/primary.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('/app_resources/css/components/mybtn.css') }}" rel="stylesheet">

</head>

<body>
{{--@include('app.layouts.navbars._main_nav')--}}
        <main>
            <div>
                @yield('content')
            </div>
            <!-- Scripts -->
            <!-- footer used for React, empty file -->
            @include('app.partials._javascript')
            @include('app.partials._bootstrap_modal')
        </main>
</body>
</html>
