<?php
include("conection.php");
$conn=connection();

$id=$_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

$sql="UPDATE users SET name='$name', email='$email', username='$username', password='$hashed_password' WHERE id='$id' ";
$query=mysqli_query($conn,$sql);

if($query){
    echo '<script>alert("Usuario actualizado exitosamente");</script>';
    echo '<script>window.location.href = "../admin.php";</script>';
    exit();
}else{
    echo "Error al registrar el usuario: " . $conn->error;
}

?>