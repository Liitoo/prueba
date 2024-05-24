<?php include "header.php"?>
<link rel="stylesheet" href="./CSS/cssImgFondo.css">
<main class="fondolog container-fluid p-5">
  <div class="d-flex justify-content-center align-content-center">
  <div class="container my-5">
    <div class="row d-flex justify-content-center">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header display-5 text-center fw-bold"> INICIA <span class=" text-danger">SESIÓN</span>
          </div>
          <div class="card-body mt-2">
            <form action="./PHP/login.php" method="POST">
              <div class="form-group text-center mt-4">
                <label class=" fs-5" for="username">Nombre de Usuario:</label>
                <input type="text" name="username" id="username" class="form-control" required>
              </div>
              <div class="form-group text-center mt-4">
                <label class=" fs-5" for="password">Contraseña:</label>
                <input type="password" name="password" id="password" class="form-control" required>
              </div>
              <button type="submit" class="btn btn-danger p-3 mt-4 col-12">Ingresar</button>
            </form>
          </div>
          <div class="card-footer">
            <p class="text-center">¿No tienes una cuenta? <a href="signup.php">Registrarse</a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
</main>
<?php include "footer.php"?>