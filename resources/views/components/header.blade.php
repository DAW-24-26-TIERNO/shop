<header>
    <h1>Shop</h1>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <ul class="navbar-nav">
            <li class="nav-item active"><a class="nav-link" href="{{ route('index') }}">Home</a></li>
            @auth
                <li class="nav-item active"><a class="nav-link" href="{{ route('client.create') }}">Create client</a></li>
                <li class="nav-item active"><a class="nav-link" href="{{ route('order.create') }}">Create order</a></li>
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('logout') }}">Logout, {{ auth()->user()->name }}
                        {{ auth()->user()->email }}</a>
                </li>
            @else
                <li class="nav-item active"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                <li class="nav-item active"><a class="nav-link" href="{{ route('register') }}">Register</a></li>
            @endauth
        </ul>
    </nav>
</header>