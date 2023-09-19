<nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark col-md-12">




    <!-- Brand -->
    <a class="navbar-brand" href="{{url('/')}}">Chawker21.blue</a>

    <!-- Toggler/collapsible Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Navbar links -->
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/about') }}">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/contact') }}">Contact</a>
            </li>

            <!-- Dropdown link -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Services
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="{{ url('/service1') }}">Service 1</a>
                    <a class="dropdown-item" href="{{ url('/service2') }}">Service 2</a>
                    <a class="dropdown-item" href="{{ url('/service3') }}">Service 3</a>
                </div>
            </li>
        </ul>
    </div>
</nav>