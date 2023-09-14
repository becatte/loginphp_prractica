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

// Manejar el formulario de inicio de sesión
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST["usuario"];
    $contrasena = $_POST["contrasena"];

    // Realizar la verificación de inicio de sesión 
    $sql = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND contrasena = '$contrasena'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        echo "Inicio de sesión exitoso";
    } else {
        echo "Error en la autenticación";
    }
}

// Cerrar la conexión a la base de datos
$conn->close();
?>
