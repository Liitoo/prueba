<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mmashop";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Error en la conexion de la base de datos" . $conn->connect_error);
}

$name = $_POST['name'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];

$hashed_password = password_hash($password, PASSWORD_DEFAULT);

$sql = "INSERT INTO users (name, email, username, password) VALUES ('$name','$email','$username','$hashed_password')";

if ($conn->query($sql) === TRUE) {
    echo '<script>alert("Usuario creado exitosamente");</script>';
    echo '<script>window.location.href = "../index.php";</script>';
    exit();
} else {
    echo "Error al registrar el usuario: " . $conn->error;
}


?>

