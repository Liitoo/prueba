<?php
include("./PHP/conection.php");
$conn=connection();

$id=$_GET['id'];

$sql="SELECT * FROM users WHERE id='$id' ";
$query=mysqli_query($conn,$sql);
$row= mysqli_fetch_array($query);

?> 

<?php include "header.php"?>
<link rel="stylesheet" href="./CSS/cssImgFondo.css">
<main class="fondolog container-fluid p-5">
  <div class="d-flex justify-content-center align-content-center">
    <div class="container my-5">
      <div class="row d-flex justify-content-center">
        <div class="col-md-6">
          <div class="card">
            <div class="card-header display-5 text-center fw-bold">EDITAR <span class=" text-danger">USUARIO</span>
            </div>
              <div class="card-body mt-2">
                <form action="./PHP/edituser.php" method="POST">
                  <div class="form-group text-center mt-4">
                    <input type="text" name="id" id="id" class="form-control" value="<?=$row['id']?>" required>
                  </div>
                  <div class="form-group text-center mt-4">
                    <input type="text" name="name" id="name" class="form-control" value="<?=$row['name']?>" required>
                  </div>
                  <div class="form-group text-center mt-4">
                    <input type="email" name="email" id="email" class="form-control" value="<?=$row['email']?>" required>
                  </div>
                  <div class="form-group text-center mt-4">
                    <input type="text" name="username" id="username" class="form-control" value="<?=$row['username']?>" required>
                  </div>
                  <div class="form-group text-center mt-4">
                    <input type="text" name="password" id="password" class="form-control" value="<?=$row['password']?>" required>
                  </div>
                  <button type="submit" class="btn btn-danger p-3 mt-4 col-12">Editar</button>
                </form>  
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main> <?php include "footer.php"?>