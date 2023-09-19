<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Page Title -->
    <title>{{ config('app.name', 'Chawker21.blue') }}</title>

    <!-- Styles -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="[Check latest integrity]" crossorigin="anonymous">
    <!-- Theme specific CSS -->
    <link href="{{ asset('/app_resources/css/themes/costa_theme.css') }}" rel="stylesheet">
    <!-- Primary CSS (Base styles for the application) -->
    <link href="{{asset('/app_resources/css/primary.css')}}" rel="stylesheet" type="text/css">
    <!-- Button Component Styles -->
    <link href="{{ asset('/app_resources/css/components/mybtn.css') }}" rel="stylesheet">
</head>

<body>
<!-- Navigation bar (Uncomment when necessary) -->
{{--@include('app.layouts.navbars._main_nav')--}}

<!-- Main Content Container -->
<main>
    <div>
        @yield('content')
    </div>

    <!-- Additional scripts -->
    @include('app.partials._javascript')

    <!-- Modals for the application -->
    @include('app.partials._bootstrap_modal')
</main>
</body>

</html>

