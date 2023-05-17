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
    <style>body {
    background-color:#000000;
    background-image: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url(../../flag_resources/img/background.jpg);
    background-size: 3600px 1200px;
    background-position: center;
    background-repeat: repeat;

    }
        </style>





</head>

<body>

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
