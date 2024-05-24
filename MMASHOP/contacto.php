<?php include "header.php"?>
<div  id= "contacto" class="container">
<div class="row">
  <div class="col-lg-12">
  <div class="text-center display-4 fw-bold my-5" ><span>MMA</span><span class="text-danger" >SHOP</span></div>
    <p class="lead text-center">Nos podras encontrar en la siguiente dirección:</p>
  </div>
</div>
<div class="row">
  <div class="col-lg-12">
  <iframe width="100%" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=es&amp;q=36.66258406551477%20-6.128740310668945+(MMASHOP)&amp;t=k&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a href="https://www.gps.ie/car-satnav-gps/">GPS devices</a></iframe>
  </div>
</div>
</div>

<div class="container mt-5">
<div class="row">
  <div class="col-lg-12">
    <form class="contacto-form" action="mailto:prueba@gmail.com" method="post" enctype="text/plain">
      <div class="form-group text-center mt-4">
        <label class="fs-5" for="nombre">Nombre:</label>
        <input type="text" class="form-control" id="nombre" name="nombre" required>
      </div>
      <div class="form-group text-center mt-4">
        <label class="fs-5"  for="email">Correo electrónico:</label>
        <input type="email" class="form-control" id="email" name="email" required>
      </div>
      <div class="form-group text-center mt-4">
        <label class="fs-5"  for="mensaje">Mensaje:</label>
        <textarea class="form-control" id="mensaje" name="mensaje" rows="3" required></textarea>
      </div>
      <div class=" d-flex justify-content-center">
      <button type="submit" class="btn btn-danger my-5 p-3">Enviar mensaje</button>

      </div>
    </form>
  </div>
</div>
</div>
<?php include "footer.php"?>
