<header>
    <h1>Shop</h1>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <ul class="navbar-nav">
            <li class="nav-item active"><a href="{{ route('index') }}">Home</a></li>
            <li class="nav-item active"><a href="{{ route('client.create') }}">Create client</a></li>
            <li class="nav-item active"><a href="{{ route('order.create') }}">Create order</a></li>
            @auth
            <li class="nav-item active"><a href="{{ route('logout') }}">Logout, {{ auth()->user()->name }}</a></li>
            @else
            <li class="nav-item active"><a href="{{ route('login') }}">Login</a></li>
            <li class="nav-item active"><a href="{{ route('register') }}">Register</a></li>
            @endauth
        </ul>
    </nav>
</header>