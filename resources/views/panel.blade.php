<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel</title>
</head>
<body>

    <h1>Panel de administración</h1>

    <p>Bienvenido, has iniciado sesión correctamente.</p>

    <form method="POST" action="/logout">
        @csrf

        <button type="submit">Cerrar sesión</button>
    </form>

</body>
</html>