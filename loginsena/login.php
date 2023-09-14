<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>
    <div class="container">
        <h1>Iniciar Sesión</h1>
        <form action="autenticar.php" method="post">
            <div class="input-group">
                <label for="usuario">Usuario:</label>
                <input type="text" name="usuario" required>
            </div>
            <div class="input-group">
                <label for="contrasena">Contraseña:</label>
                <input type="password" name="contrasena" required>
            </div>
            <div class="input-group">
                <button type="submit" name="accion" value="inicio_sesion">Iniciar Sesión</button>
            </div>
        </form>
    </div>
</body>
</html>
