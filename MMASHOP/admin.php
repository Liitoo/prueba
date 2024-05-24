<?php
    include("./PHP/conection.php");

    $conn=connection();

    $sql="SELECT * FROM users";
    $query=mysqli_query($conn,$sql);

?> <?php include "header.php"; ?>
<link rel="stylesheet" href="./CSS/cssImgFondo.css">
<main>
  <div class="p-5 mb-4">
    <h2 class=" text-light text-center">USUARIOS REGISTRADOS</h2>
  </div>
  <div class="container bg-light">
    <div class="table-responsive">
        <table class="table table-sm text-center">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Email</th>
                <th scope="col">Username</th>
                <th scope="col">Password</th>
            </tr>
            </thead>
            <tbody>
                <?php while($row= mysqli_fetch_array($query)): ?> 
                <tr>
                    <th scope="row"> <?=$row['id']?> </th>
                    <td><?=$row['name']?> </td>
                    <td><?=$row['email']?> </td>
                    <td><?=$row['username']?></td>
                    <td> <?=$row['password']?></td>
                    <th>
                        <a role="button" class="btn btn-danger btn-outline-dark text-light fw-bold" href="update.php?id=<?=$row['id']?>">Editar </a>
                    </th>
                    <th>
                        <a role="button" class="btn btn-danger btn-outline-dark text-light fw-bold" href="./PHP/delete.php?id=<?=$row['id']?>">Eliminar </a>
                    </th>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>                
  </div>
</main> <?php include "footer.php"; ?>