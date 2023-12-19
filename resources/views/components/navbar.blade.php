<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}"><img class="navicon" src="/favi.png" alt="logo"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{ route('home') }}" target="_blank">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('services') }}" target="_blank">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('Ann.index') }}">Announcements</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('Ann.create') }}">Insert announcement</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Community
                    </a>
                    <ul class="dropdown-menu">
                        @auth
                        <li class="nav-item dropdown">{{Auth::user()->name}}</li>
                        <li><form class="dropdown-item" method="POST" action="{{route('logout')}}">
                            @csrf <button class="dropdown-item" type="submit">Log-out</button>
                        </form></li> 
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        @endauth

                        @guest
                        <li><a class="dropdown-item" href="{{route('login')}}">Log-in</a></li>
                        <li><a class="dropdown-item" href="{{route('register')}}">Register</a></li>
                        @endguest
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
