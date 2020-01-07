<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a href="{{ route('home') }}" class="navbar-brand">Weibo App</a>
        <ul class="navbar-nav justify-content-end">
            @if (Auth::check())
                <li class="nav-item"><a href="#" class="nav-link">User List</a></li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{ Auth::user()->name }}
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a href="{{ route('users.show', Auth::user()) }}" class="dropdown-item">User Info</a>
                        <a href="#" class="dropdown-item">Edit</a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item" id="logout">
                            <form action="{{ route('logout') }}" method="post">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <button type="submit" name="button" class="btn btn-block btn-danger">Logout</button>
                            </form>
                        </a>
                    </div>
                </li>
            @else
                <li class="nav-item"><a href="{{ route('help') }}" class="nav-link">Help</a></li>
                <li class="nav-item"><a href="{{ route('login') }}" class="nav-link">Login</a></li>
            @endif
        </ul>
    </div>
</nav>
