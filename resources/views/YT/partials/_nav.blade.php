<nav class="navbar navbar-dark bg-dark " style="">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->

            <div><a class="navbar-brand" style="float:left;" href="#">YT</a>
                </div>
        <div>
                <form class="navbar-form" action="../search" method="GET">

                        <input id="query" name="query" type="text" class="form-control" placeholder="Search Term">

                    <button type="submit" class="nav-btn btn-sm  search-btn btn-secondary">Search</button>

                </form>
            </div>
            <div style="">
                <a type="button" class="btn btn-md cust-btn" style="margin-left:20px; margin-top:7px;" href="/yt">yt</a>

                <a type="button" class="btn btn-md  cust-btn" style="margin-top:7px; margin-left:10px;" href="/login/google">google login</a>


                <ul class="nav navbar-nav navbar-right">
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @else
                        <li id="logoutdrp" class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-expanded="false">
                                {{ Auth::user()->name }}
                            </a>
                            <ul class="dropdown-menu" role="menu">

                                <li>
                                    <a href="{{ url('/logout') }}"
                                       onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>
                                    <form id="logout-form" action="{{ url('/logout') }}" method="POST"
                                          style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endif
                </ul>
                </ul>
            {{--</div>--}}
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
    
	