<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Registro de Usuario</title>
    <link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>
    <div class="container">
        <h1>Registro de Usuario</h1>
        <form action="registrar.php" method="post">
            <div class="input-group">
                <label for="usuario">Usuario:</label>
                <input type="text" name="usuario" required>
            </div>
            <div class="input-group">
                <label for="contrasena">Contraseña:</label>
                <input type="password" name="contrasena" required>
            </div>
            <div class="input-group">
                <button type="submit" name="accion" value="registro">Registrarse</button>
            </div>
        </form>
        <p>¿Ya tienes una cuenta? <a href="login.php">Iniciar Sesión</a></p>
    </div>
</body>
</html>
