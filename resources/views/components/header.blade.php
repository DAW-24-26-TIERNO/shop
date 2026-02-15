<header>
    <h1>Shop</h1>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <ul class="navbar-nav">

            <li class="nav-item active"><a class="nav-link" href="{{ route('index') }}">Home</a></li>
            <li class="nav-item active"><a class="nav-link" href="{{ route('client.create') }}">Create client</a></li>
            <li class="nav-item active"><a class="nav-link" href="{{ route('order.create') }}">Create order</a></li>
            @auth
                <li class="nav-item"><span class="nav-link">Hola, {{ auth()->user()->name }}</span></li>
                <li class="nav-item">
                    <form method="post" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="btn nav-link">Cerrar sesión</button>
                    </form>
                </li>
            @else
                <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Registro</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Inicio de sesión</a></li>
            @endauth
        </ul>
    </nav>
</header>