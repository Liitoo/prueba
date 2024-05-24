<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mmashop";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Error en la conexion de base de datos" . $conn->connect_error);
}

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE username='$username'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    if (password_verify($password, $row["password"])) {
        if ($row["rol"] === "admin") {
            echo '<script>alert("Inicio de sesión como admin correctamente");</script>';
            echo '<script>window.location.href = "../admin.php";</script>';
            exit();
        } else if ($row["rol"] === "user") {
            echo '<script>alert("Inicio de sesión como usuario correctamente");</script>';
            echo '<script>window.location.href = "../shop.php";</script>';
            exit();
        } else {
            echo "Rol de usuario no válido";
        }
    } else {
        echo "Contraseña incorrecta";
    }
} else {
    echo "Usuario no encontrado";
}

$conn->close();

?>
