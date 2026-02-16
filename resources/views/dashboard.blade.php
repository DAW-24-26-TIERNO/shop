<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    @include('components.header')

    <h2>Orders</h2>
    <div class="container">
        <div class="row">
            <div class="card">
                <div class="card-header">
                    Información del usuario
                </div>
                <div class="card-body">
                    <p><strong>ID:</strong> {{ auth()->user()->id }}</p>
                    <p><strong>Nombre:</strong> {{ auth()->user()->name }}</p>
                    <p><strong>Email:</strong> {{ auth()->user()->email }}</p>
                    <p><strong>Rol:</strong> {{ auth()->user()->role ?? 'usuario' }}</p>
                </div>
            </div>

        </div>
    </div>


</body>

</html>