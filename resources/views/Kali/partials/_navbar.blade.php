<nav class="navbar navbar-dark bg-dark">
    <div class="container">

        <div style="float:left;">
            <h5>
                {{--<a href="/account/index">Accounts</a> | --}}
                <a class="btn btn-primary" href="/zone/index" role="button">Zone</a> |
                <a class="btn btn-primary" href="/NPC/index" role="button">NPC</a> |
                <a class="btn btn-primary" href="/item/index" role="button">Item</a> |
                <a class="btn btn-primary" href="/character/index" role="button">Character Data</a> |
                <a class="btn btn-primary" href="http://atlas.chawker21.blue/index.html" role="button">Atlas</a>

            </h5>
        </div>
        <hr>
        <img src="../../storage/images/logos/eqemu.png" height=40px>
        <a class="navbar-brand" href="{{ url('/') }}">
            C21blue
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

    {{--<div class="collapse navbar-collapse" id="navbarSupportedContent">--}}
    <!-- Left Side Of Navbar -->
        <ul class="navbar-nav mr-auto">

        </ul>

        <!-- Right Side Of Navbar -->
        <ul class="navbar-nav ml-auto">
            <!-- Authentication Links -->
            @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                              style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
        </ul>
    </div>
    {{--</div>--}}

</nav>
