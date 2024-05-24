<?php include "header.php";?>
<main>
<div id="carouselExample" class="carousel slide">
      <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="3000">
          <img src="./Imagenes/slide1.jpg" class="d-block w-100" alt="slide1" />
        </div>
        <div class="carousel-item" data-bs-interval="3000">
          <img src="./Imagenes/slide2.jpg" class="d-block w-100" alt="slide2" />
        </div>
        <div class="carousel-item" data-bs-interval="3000">
          <img src="./Imagenes/slide3.jpg" class="d-block w-100" alt="slide3" />
        </div>
      </div>
      <button
        class="carousel-control-prev"
        type="button"
        data-bs-target="#carouselExample"
        data-bs-slide="prev"
      >
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button
        class="carousel-control-next"
        type="button"
        data-bs-target="#carouselExample"
        data-bs-slide="next"
      >
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    <!-- Informacion sobre nosotros -->
    <div class="container mt-5">
      <div class="row">
        <div class="col-md-12 col-lg-6">
          <div class="container">
            <div class="row">
              <div class="col">
                <div class="text-center fs-2 fw-bold mt-5">¿QUIENES SOMOS?</div>
              </div>
            </div>
            <div class="row mt-5 my-auto">
              <div class="col">
                <div class="text-center">
                  Somos una empresa que se dedica a la venta online de productos
                  realacionados con la practica de varios deportes de contacto.
                </div>
              </div>
            </div>
            <div class="row mt-4">
              <div class="col">
                <div class="text-center">
                  Los deportes de contacto incluidos en nuestra tienda online
                  son Boxeo, MMA y Kick-Boxing
                </div>
              </div>
            </div>
            <div class="row mt-4">
              <div class="col">
                <div class="text-center">
                  Nuestros servicios estan disponible las 24H durante los siete
                  dias de la semana. Las entregas se realizaran por toda España
                  incluyendo pequeños municipios.
                </div>
              </div>
            </div>
            <div class="row mt-4">
              <div class="col">
                <div class="text-center">
                  Gracias a que tenemos sedes en puntos estrategicos las
                  entregas se realizaran entre 24h-72h en cualquier punto de
                  España.
                </div>
              </div>
            </div>
            <div class="row mt-4">
              <div class="col">
                <div class="text-center">
                  En caso de entrega defectuosa contacte con nosotros para la
                  devoulución del producto ya que estos tienen garantía.
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 mt-1">
          <img
            src="./Imagenes/equipamiento.jpg"
            alt="equipamiento"
            class="img-fluid rounded mx-auto d-block"
          />
        </div>
      </div>
    </div>
</main>
<?php include "footer.php";?>

