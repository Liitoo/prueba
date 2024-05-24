<?php
include("conection.php");
$conn=connection();

$id=$_GET['id'];

$sql="DELETE FROM users WHERE id='$id' ";

$query=mysqli_query($conn,$sql);

if($query){
    echo '<script>alert("Usuario eliminado exitosamente");</script>';
    echo '<script>window.location.href = "../admin.php";</script>';
    exit();
}else{
    echo "Error al registrar el usuario: " . $conn->error;
}

?>