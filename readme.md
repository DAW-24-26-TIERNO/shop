# Productos y clientes

## Modelos
Client, Product y Order. En cada Order solamente hay un Client y un Product.

## Endpoints MVC
- `GET /`: devuelve un index con todos los Pedidos (`Order`) de la base de datos. Debajo habrá una lista con todos los clientes, y debajo de cada uno habrá un botón de eliminar que lanzará una petición `DELETE /client/{id}`.

De Client:
- `GET /client/create`: devuelve formulario para crear cliente.
- `POST /client`: inserta el cliente con los datos del campo anterior.
- `DELETE /client/{id}`: elimina cliente.

De Order:
- `GET /order/create`: devuelve formulario de creación de order con un desplegable (o el input que quieras, pero que se pueda seleccionar) con clientes y otro con productos. Debe elegir uno de cada, e insertarlo en la BD.
- `POST /order`: llega desde el endpoint anterior y guarda en la bd el pedido seleccionado.

## Endpoints API REST
- `GET /api/order`: devuelve todas las orders de la base de datos.
- `POST /api/order`: insertar order en la bd
- `DELETE /api/order/{id}`: elimina de la bd esa order.


