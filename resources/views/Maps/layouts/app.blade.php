<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Chawker21.blue/library') }}</title>

    <!-- Scripts -->

    <!-- Fonts -->

    <!-- Styles -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link href="{{ asset('/library_resources/css/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('/app_resources/css/themes/vibrantcolor_theme.css') }}" rel="stylesheet">
    <link href="{{ asset('/app_resources/css/components/mybtn.css') }}" rel="stylesheet">

</head>
<body>
@include('app.navbars.nav')
    <div>

        <main>
            <div>
                @yield('content')
            </div>
            <!-- Scripts -->
            <!-- footer used for React, empty file -->

            @include('library.partials._javascript')
        </main>
    </div>
</body>
</html>
