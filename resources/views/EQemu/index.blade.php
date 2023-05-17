<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>
                <a href="{{ route('register') }}">Register</a>
            @endauth
        </div>
    @endif

    <div class="content">
        <img src="/EQ_resources/images/maps/map_antonica_hi.gif">
        <div class="title m-b-md">

            <a style="text-decoration:none; color:darkslategray;" href="/">Chawker21.blue/<img src="/EQ_resources/images/logos/eqemu.png"></a>
        </div>

        <div class="links">
            {{--<a href="/account/index">Accounts</a>--}}
            <a href="/EQemu/commands">in game Commands</a>
            <a href="/EQemu/zone/zone_index">Zone</a>
            <a href="/EQemu/NPC/NPC_index">NPC</a>
            <a href="/EQemu/item/item_index">Item</a>
            <a href="/EQemu/character/character_index">Character Data</a>
            <a href="/EQ_resources/eqatlas-master/index.html">EQ Atlas</a>
        </div>
    </div>
</div>
</body>
</html>
