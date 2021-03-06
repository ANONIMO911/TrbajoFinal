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
          <img class="d-block w-100" src=https://cdn.pixabay.com/photo/2016/11/21/15/52/french-fries-1846083_960_720.jpg 1x, https://cdn.pixabay.com/photo/2016/11/21/15/52/french-fries-1846083_1280.jpg 2x" alt="Second slide">
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
          <img class="d-block w-100" src="https://cdn.pixabay.com/photo/2016/03/05/19/02/hamburger-1238246_960_720.jpg 1x, https://cdn.pixabay.com/photo/2016/03/05/19/02/hamburger-1238246_1280.jpg 2x" alt="Second slide">
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
  <a class="navbar-brand" href="#">Barra de Men??</a>
  <button class="navba-toggler" type="button" data-toggle="collapse" data-target="#collpasibleNavar">
    <span   class ="glyphicon glyphicon-Sort- sub-atributos"> </span> 
    </span>
  </button>

  <div class="collapse navbar-collapse" id="collpasibleNavar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="contacto2.php">Convi??rtete en afiliado</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="iniciopag.php">Su cuenta</a>
      </li>
    </ul>
  </div>
</nav>
<div class="container" style="margin-top: 30px;">
  <div class="row">
    <div class="col-sm-2">
      <h2>Men??</h2>
      <ul class="nav nav-pills flex-column">
        <li class="nav-item">
          <a class="nav-link active" href="index.html">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="carritotipico.html">Carrito tipico</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="gastronomia.html">Carrito Rapidas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="galeria.html">Galer??a</a>
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
      if((isset($_POST['ID_CLIENTE']) && !empty($_POST['ID_CLIENTE']))
      && (isset($_POST['NOM_CLIENTE']) && !empty($_POST['NOM_CLIENTE']))
      && (isset($_POST['APELLIDO_CLIENTE']) && !empty($_POST['APELLIDO_CLIENTE']))
      && (isset($_POST['DIRECCION_CLIENTE']) && !empty($_POST['DIRECCION_CLIENTE']))
      && (isset($_POST['TELEF_CLIENT']) && !empty($_POST['TELEF_CLIENT']))
      && (isset($_POST['CORREO']) && !empty($_POST['CORREO']))
      && (isset($_POST['PASSWORD']) && !empty($_POST['PASSWORD']))){

        $ID_CLIENTE = $_POST['ID_CLIENTE'];
        $NOM_CLIENTE = $_POST['NOM_CLIENTE'];
        $APELLIDO_CLIENTE = $_POST['APELLIDO_CLIENTE'];
        $DIRECCION_CLIENTE = $_POST['DIRECCION_CLIENTE'];
        $TELEF_CLIENT = $_POST['TELEF_CLIENT'];
        $CORREO = $_POST['CORREO'];
        $PASSWORD = $_POST['PASSWORD'];

        
        

        $query = "INSERT INTO `clientes` (ID_CLIENTE, NOM_CLIENTE, APELLIDO_CLIENTE, DIRECCION_CLIENTE, TELEF_CLIENT, CORREO, PASSWORD) VALUES ('$ID_CLIENTE', '$NOM_CLIENTE', '$APELLIDO_CLIENTE', '$DIRECCION_CLIENTE','$TELEF_CLIENT', '$CORREO', '$PASSWORD')";
          $result = mysqli_query($connection, $query);
          echo "<center> YA PUEDES INICIAR SESSION </br nos pondremos en contacto con usted pronto.</center>";
          
        
      }
      ?>
      <div class="row">
        <div class="container-fluid">
          <div  class="container py-5">
					<form  class="form-contact" method="POST">
						<h2 class="form-contact-heading">Ingresa tus datos para registrarte</h2>
						<div class="form-group">
            <label for="ID_CLIENTE">ID:</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text bg-light"><i class="fas fa-address-card"></i></span>
                </div>
                <input type="text" class="form-control" placeholder="Ingrese su id" id="ID_CLIENTE" name="ID_CLIENTE" required>
              </div>
            </div>

            <div class="form-group">
              <label for="NOM_CLIENTE">Nombres:</label>
              <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text bg-light"><i class="fas fa-users"></i></span>
              </div>
              <input type="text" class="form-control" placeholder="Ingrese sus nonbres" id="NOM_CLIENTE" name="NOM_CLIENTE" required>
              </div>    
            </div>

            <div class="form-group">
            <label for="APELLIDO_CLI">Apellidos:</label>
              <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text bg-light"><i class="fas fa-users"></i></i></span>
              </div>
              <input type="text" class="form-control" placeholder="Ingrese sus apellidos" id="APELLIDO_CLIENTE" name="APELLIDO_CLIENTE" required>
              </div>    
            </div>

            <div class="form-group">
              <label for="TELEF_CLIENT">Telefono:</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text bg-light"><i class="fas fa-mobile-alt"></i></i></span>
                </div>
                <input type="text" class="form-control" placeholder="Ingrese su telefono" id="TELEF_CLIENT" name="TELEF_CLIENT" required>
              </div>
            </div>

            <div class="form-group">
              <label for="DIRECCION_CLIENTE">Direccion:</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text bg-light"><i class="fas fa-street-view"></i></span>
                </div>
                <input type="text" class="form-control" placeholder="Ingresa tu direccion" id="DIRECCION_CLIENTE" name="DIRECCION_CLIENTE" required>
              </div>
            </div>

            <div class="form-group">
              <label for="CORREO">Email:</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text bg-light"><i class='fa fa-envelope'></i></span>
                </div>
                <input type="email" class="form-control" placeholder="Ingrese su correo" id="CORREO" name="CORREO" required>
              </div>
            </div>


            <div class="form-group">
              <label for="PASSWORD">Password:</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text bg-light"><i class='fa fa-unlock-alt'></i></i></span>
                </div>
                <input type="password" class="form-control" placeholder="Ingrese su contrase??a" id="PASSWORD" name="PASSWORD" required>
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
        <p>Descripsi??n peque??a de la empresa. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4 text-white">

        <!-- Links -->
        <h6 class=" font-weight-bold">Servicios</h6>
        <hr class="bg-warning accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>
          <a href="galeria.html" class="text-white">Galer??a</a>
        </p>
        <p>
          <a href="gastronomia.html" class="text-white">Gastronom??a</a>
        </p>
        <p>
          <a href="fechas.html" class="text-white">Fechas especiales</a>
        </p>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4 text-white">

        <!-- Links -->
        <h6 class="text-uppercase font-weight-bold">ENLACES ??TILES</h6>
        <hr class="bg-warning accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>
          <a href="iniciosecc.html" class="text-white">Su cuenta</a>
        </p>
        <p>
          <a href="contacto.php" class="text-white">Convi??rtete en afiliado</a>
        </p>
      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4 text-white">

        <!-- Links -->
        <h6 class="text-uppercase font-weight-bold">CONTACTO</h6>
        <hr class="bg-warning accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>
          <i class="fas fa-home mr-3"></i> Antioquia, Medell??n</p>
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
  <div class="footer-copyright text-center py-3 text-white">?? 2020 Copyright
    
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>