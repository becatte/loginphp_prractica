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
                <input type="text" name="usuario" id="usuario" required>
            </div>
            <div class="input-group">
                <label for="contrasena">Contraseña:</label>
                <input type="password" name="contrasena" id="contrasena" required>
            </div>
            <div class="input-group">
                <button type="submit" name="accion" value="registro">Registrarse</button>
            </div>
        </form>
        <p>¿Ya tienes una cuenta? <a href="login.php">Iniciar Sesión</a></p>
    </div>

    <!-- Mensajes de éxito y error -->
    <div class="message-container">
        <?php
        // Conexión a la base de datos 
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "login_db";

        $conn = new mysqli($servername, $username, $password, $database);

        // Verificar la conexión
        if ($conn->connect_error) {
            die("Conexión fallida: " . $conn->connect_error);
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $usuario = $_POST["usuario"];
            $contrasena = $_POST["contrasena"];

            // Realizar la inserción en la base de datos 
            $sql = "INSERT INTO usuarios (usuario, contrasena) VALUES ('$usuario', '$contrasena')";

            if ($conn->query($sql) === TRUE) {
                echo '<p class="success-message">Registro exitoso</p>';
            } else {
                echo '<p class="error-message">Error al registrar: ' . $conn->error . '</p>';
            }
        }

        // Cerrar la conexión a la base de datos
        $conn->close();
        ?>
    </div>
</body>
</html>
