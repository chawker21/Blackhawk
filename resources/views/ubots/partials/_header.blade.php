
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <link href="{{asset('/ubot_resources/css/photocss.css')}}" rel="stylesheet">
    <link href="{{asset('/ubot_resources/css/app.css')}}" rel="stylesheet" type="text/css">

    <script>
        window.Laravel = {!! json_encode([
        'csrfToken' => csrf_token(),
    ]) !!};
    </script>

</head>