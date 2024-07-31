<nav class="navbar navbar-expand navbar-dark bg-dark">
    <div class="container-fluid col-md-12">
        <div class="navbar-brand">To Do Apps</div>
        @auth
            <div class="navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            {{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li>
                                <form action="{{ route('todo') }}" method="GET">
                                    @csrf
                                    <button type="submit" class="dropdown-item">Todo Saya</button>
                                </form>
                            </li>
                            <li>
                                <form action="{{ route('user.edit') }}" method="GET">
                                    @csrf
                                    <button type="submit" class="dropdown-item">Akun Saya</button>
                                </form>
                            </li>
                            <div class="dropdown-divider"></div>
                            <li>
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button type="submit" class="dropdown-item">Logout</button>
                                </form>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        @endauth

        @guest
            <div class="navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('login') ? 'active' : '' }}" href="{{ route('login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('register') ? 'active' : '' }}" href="{{ route('register') }}">Register</a>
                    </li>
                </ul>
            </div>
        @endguest
    </div>
</nav>


                