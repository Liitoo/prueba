<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>MMASHOP</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="./CSS/main.css" />
  </head>

  <body>
    <!-- Encabezado -->

    <header>
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="index.php"
            ><span class="text-danger fw-bold fs-5">MMA</span
            ><span class="fw-bold fs-5">SHOP</span></a
          >
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div
            class="collapse navbar-collapse justify-content-center"
            id="navbarSupportedContent"
          >
            <ul class="navbar-nav m-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a
                  class="nav-link active text-danger fw-bold"
                  aria-current="page"
                  href="index.php"
                  >Inicio</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link fw-bold text-dark" href="index.php">Información</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fw-bold text-dark" href="contacto.php">Contactanos</a>
              </li>
              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle fw-bold text-dark"
                  href="#"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  Tienda
                </a>
                <ul class="dropdown-menu">
                  <li>
                    <a class="dropdown-item fw-bold text-dark" href="shop.php"
                      >Inicio</a
                    >
                  </li>
                  <li>
                    <hr class="dropdown-divider" />
                  </li>
                  <li>
                    <a class="dropdown-item fw-bold text-dark" href="boxeo.php"
                      >Boxeo</a
                    >
                  </li>
                  <li>
                    <hr class="dropdown-divider" />
                  </li>
                  <li>
                    <a class="dropdown-item fw-bold text-dark" href="kBoxing.php"
                      >Kick-Boxing</a
                    >
                  </li>
                  <li>
                    <hr class="dropdown-divider" />
                  </li>
                  <li>
                    <a class="dropdown-item fw-bold text-dark" href="mma.php">MMA</a>
                  </li>
                </ul>
              </li>
            </ul>
            <div class="">
              <a
                href="login.php"
                role="button"
                class="btn btn-danger btn-outline-dark text-light me-2 fw-bold"
              >
                Login
              </a>
              <a
                href="signup.php"
                role="button"
                class="btn btn-danger btn-outline-dark text-light fw-bold"
              >
                Sign-up
              </a>
            </div>
          </div>
        </div>
      </nav>
    </header>