
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="{{asset('/exotic_resources/css/exoticcss.css')}}" rel="stylesheet">
    <link href="{{asset('/exotic_resources/css/photocss.css')}}" rel="stylesheet">


    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),

        ]) !!};
    </script>

</head>