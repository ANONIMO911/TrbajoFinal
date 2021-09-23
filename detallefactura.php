
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
<link rel="stylesheet" href="assets/css/style.css">
<link rel="stylesheet" href="dist/css/bootstrap.css">
<link rel="stylesheet" href="scss/css/estilos.css">
<title>Trabajo Final</title>
</head>
<body>

<div id="carousel-example-2" class="carousel slide carousel-fade z-depth-1-half" data-ride="carousel">
  <!--Indicators-->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-2" data-slide-to="1"></li>
    <li data-target="#carousel-example-2" data-slide-to="2"></li>
  </ol>
  <!--/.Indicators-->
  <!--Slides-->
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <div class="view">
        <img class="d-block w-100" src="https://cdn.pixabay.com/photo/2016/03/05/20/04/appetite-1238636_960_720.jpg 1x, https://cdn.pixabay.com/photo/2016/03/05/20/04/appetite-1238636_1280.jpg 2x" alt="First slide">
        <div class="mask rgba-black-light"></div>
      </div>
      <div class="carousel-caption">
        <h3 class="h3-responsive">This is the first title</h3>
        <p>First text</p>
      </div>
    </div>
    <div class="carousel-item">
      <!--Mask color-->
      <div class="view">
        <img class="d-block w-100" src="https://cdn.pixabay.com/photo/2017/12/10/14/47/pizza-3010062_960_720.jpg 1x, https://cdn.pixabay.com/photo/2017/12/10/14/47/pizza-3010062_1280.jpg 2x" alt="Second slide">
        <div class="mask rgba-black-light"></div>
      </div>
      <div class="carousel-caption">
        <h3 class="h3-responsive">Thir is the second title</h3>
        <p>Secondary text</p>
      </div>
    </div>
    <div class="carousel-item">
      <!--Mask color-->
      <div class="view">
        <img class="d-block w-100" src="https://cdn.pixabay.com/photo/2016/03/05/19/02/hamburger-1238246_960_720.jpg 1x, https://cdn.pixabay.com/photo/2016/03/05/19/02/hamburger-1238246_1280.jpg 2x" alt="Third slide">
        <div class="mask rgba-black-light"></div>
      </div>
      <div class="carousel-caption">
        <h3 class="h3-responsive">This is the third title</h3>
        <p>Third text</p>
      </div>
    </div>
  </div>
  <!--/.Slides-->
  <!--Controls-->
  <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  <!--/.Controls-->
</div>

  </div>
  <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <a class="navbar-brand" href="#">Barra de Menú</a>
    <button class="navba-toggler" type="button" data-toggle="collapse" data-target="#collpasibleNavar">
      <span   class ="glyphicon glyphicon-Sort- sub-atributos"> </span> 
      </span>
    </button>

    <div class="collapse navbar-collapse" id="collpasibleNavar">
      <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="contacto.php">Conviértete en afiliado</a>
      </li>
        <li class="nav-item">
          <a class="nav-link" href="iniciosecc.html">Su cuenta</a>
        </li>
      </ul>
    </div>
  </nav>
<div class="container" style="margin-top: 30px;">
  <div class="row">
    <div class="col-sm-2">
      <h2>Menú</h2>
      <ul class="nav nav-pills flex-column">
        <li class="nav-item">
          <a class="nav-link" href="index.html">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="gastronomia.html">Gastronomía</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="galeria.html">Galería</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="fechas.html">Fechas especiales</a>
        </li>
      </ul>
      <hr class=" d-sm-nome">
    </div>
    <div class="col-sm-10">
    <?php
      include('conexion.php');
      if((isset($_POST['ID_DETALLE_FACTURA']) && !empty($_POST['ID_DETALLE_FACTURA']))
      && (isset($_POST['ID_FACTURA']) && !empty($_POST['ID_FACTURA']))
      && (isset($_POST['ID_EMPLEADO']) && !empty($_POST['ID_EMPLEADO']))
      && (isset($_POST['ID_PLATO']) && !empty($_POST['ID_PLATO']))
      && (isset($_POST['ID_MESA']) && !empty($_POST['ID_MESA']))){

        $ID_DETALLE_FACTURA = $_POST['ID_DETALLE_FACTURA'];
        $ID_FACTURA = $_POST['ID_FACTURA'];
        $ID_EMPLEADO = $_POST['ID_EMPLEADO'];
        $ID_PLATO = $_POST['ID_PLATO'];
        $ID_MESA = $_POST['ID_MESA'];

        
        

        $query = "INSERT INTO `detalle_factura` (ID_DETALLE_FACTURA, ID_FACTURA, ID_EMPLEADO, ID_PLATO, ID_MESA) VALUES ('$ID_DETALLE_FACTURA', '$ID_FACTURA', '$ID_EMPLEADO', '$ID_PLATO', '$ID_MESA')";
          $result = mysqli_query($connection, $query);
          echo "<center>Tú mensaje fue enviado con exito </br nos pondremos en contacto con usted pronto.</center>";
        
      }
      ?>
      <div class="row">
        <div class="container-fluid">
          <div  class="container py-5">
					<form class="form-contact" method="POST">
						<h2 class="form-contact-heading">Ingresa tus datos para registrarte</h2>
						<div class="form-group">
            <label for="ID_MESA">Id mesa:</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text bg-light"><i class="fas fa-address-card"></i></span>
                </div>
                <input type="number" class="form-control" placeholder="Ingrese su id mesa" id="ID_MESA" name="ID_MESA" required>
              </div>
            </div>

            <div class="form-group">
              <label for="ID_DETALLE_FACTURA">Detalle factura:</label>
              <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text bg-light"><i class="fas fa-users"></i></span>
              </div>
              <input type="number" class="form-control" placeholder="Ingrese detalle factura" id="ID_DETALLE_FACTURA" name="ID_DETALLE_FACTURA" required>
              </div>    
            </div>

            <div class="form-group">
            <label for="ID_FACTURA">Id factura:</label>
              <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text bg-light"><i class="fas fa-users"></i></i></span>
              </div>
              <input type="number" class="form-control" placeholder="Ingrese id factura" id="ID_FACTURA" name="ID_FACTURA" required>
              </div>    
            </div>

            <div class="form-group">
              <label for="ID_EMPLEADO">Id empleado:</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text bg-light"><i class="fas fa-mobile-alt"></i></i></span>
                </div>
                <input type="number" class="form-control" placeholder="Ingrese su id de empleado" id="ID_EMPLEADO" name="ID_EMPLEADO" required>
              </div>
            </div>

            <div class="form-group">
              <label for="ID_PLATO">Id plato:</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text bg-light"><i class="fas fa-street-view"></i></span>
                </div>
                <input type="number" class="form-control" placeholder="Ingresa el id platos" id="ID_PLATO" name="ID_PLATO" required>
              </div>
            </div>

            
						<button class="btn btn-lg btn-primary btn-block" type="submit">Enviar Formulario</button>
     			</form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
  <!-- Footer -->
  <footer class="page-footer font-small unique-color-dark bg-dark">
  <!-- Footer Links -->
  <div class="container text-center text-md-left mt-5">
    <!-- Grid row -->
    <br><br>
    <div class="row mt-3">

      <!-- Grid column -->
      <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4 text-white" >

        <!-- Content -->
        <h6 class="font-weight-bold">Nombre de empresa</h6>
        <hr class="bg-warning accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>Descripsión pequeña de la empresa. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4 text-white">

        <!-- Links -->
        <h6 class=" font-weight-bold">Servicios</h6>
        <hr class="bg-warning accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>
          <a href="galeria.html" class="text-white">Galería</a>
        </p>
        <p>
          <a href="gastronomia.html" class="text-white">Gastronomía</a>
        </p>
        <p>
          <a href="fechas.html" class="text-white">Fechas especiales</a>
        </p>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4 text-white">

        <!-- Links -->
        <h6 class="text-uppercase font-weight-bold">ENLACES ÚTILES</h6>
        <hr class="bg-warning accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>
          <a href="iniciosecc.html" class="text-white">Su cuenta</a>
        </p>
        <p>
          <a href="contacto.php" class="text-white">Conviértete en afiliado</a>
        </p>
      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4 text-white">

        <!-- Links -->
        <h6 class="text-uppercase font-weight-bold">CONTACTO</h6>
        <hr class="bg-warning accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>
          <i class="fas fa-home mr-3"></i> Antioquia, Medellín</p>
        <p>
          <i class="fas fa-envelope mr-3"></i> info@ejemplo.com</p>
        <p>
          <i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
        <p>
          <i class="fas fa-print mr-3"></i> + 01 234 567 89</p>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3 text-white">© 2020 Copyright
    
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>