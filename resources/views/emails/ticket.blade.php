<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <title>Ticket De Compra</title>
</head>
<body>
    <h4>Compra Exitosa</h4>
    <p>Buen día {{ $usuario->name }}.</p>
    <p>Su compra con se ha realizado correctamente.</p>
    <p>A continuacion podra observar mas detalles sobre su compra</p>
    <hr>
    <p><strong>Productos</strong> <br>
        Nombre de producto: {{ $producto->nombre_producto }}<br>
        precio: ${{ $producto->precio_producto}}<br>
        Cantidad: {{ $cantidad }}<br></p>
    <p><strong>Total de la Compra: </strong> {{ $total }}</p>

    <p><strong>Fecha de Compra: </strong>{{ $fecha }}</p>


</body>
</html>
