
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
        <img class="d-block w-100" src="https://cdn.pixabay.com/photo/2017/01/24/03/54/urban-2004494_640.jpg" alt="First slide">
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
        <img class="d-block w-100" src="https://cdn.pixabay.com/photo/2015/03/26/09/54/restaurant-690569_640.jpg" alt="Second slide">
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
        <img class="d-block w-100" src="https://cdn.pixabay.com/photo/2020/03/13/08/34/south-station-4927286_640.jpg" alt="Third slide">
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
        <a class="nav-link" href="contacto.php">Convi??rtete en afiliado</a>
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
      <h2>Men??</h2>
      <ul class="nav nav-pills flex-column">
      <li class="nav-item">
          <a class="nav-link" href="index.html">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="establecimiento.php">Ingresar Establecimiento</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="actulizaestablecimiento.php">Actualizar Establecimiento</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="eliminarestablecimiento.php">Eliminar Establecimiento</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="listadoestablecimiento.php">Listado Establecimiento</a>
        </li>
      </ul>
      <hr class=" d-sm-nome">
    </div>
    <div class="col-sm-10">
    <?php
      include('conexion.php');
      if((isset($_POST['ID_ESTABLECIMIENTO']) && !empty($_POST['ID_ESTABLECIMIENTO']))
      && (isset($_POST['NOM_ESTABLECIMIENTO']) && !empty($_POST['NOM_ESTABLECIMIENTO']))
      && (isset($_POST['TELEFONO']) && !empty($_POST['TELEFONO']))
      && (isset($_POST['DIRECCION']) && !empty($_POST['DIRECCION']))){

        $ID_ESTABLECIMIENTO = $_POST['ID_ESTABLECIMIENTO'];
        $NOM_ESTABLECIMIENTO = $_POST['NOM_ESTABLECIMIENTO'];
        $TELEFONO = $_POST['TELEFONO'];
        $DIRECCION = $_POST['DIRECCION'];

        
        

        $query = "UPDATE `establecimientos` SET NOM_ESTABLECIMIENTO = '$NOM_ESTABLECIMIENTO', TELEFONO = '$TELEFONO', DIRECCION = '$DIRECCION' WHERE ID_ESTABLECIMIENTO = '$ID_ESTABLECIMIENTO'";
          $result = mysqli_query($connection, $query);
          echo "<center>T?? mensaje fue enviado con exito </br nos pondremos en contacto con usted pronto.</center>";
        
      }
      ?>
      <div class="row">
        <div class="container-fluid">
          <div  class="container py-5">
					<form class="form-contact" method="POST">
						<h2 class="form-contact-heading">Ingresa tus datos para actualizar</h2>
						<div class="form-group">
            <label for="ID_ESTABLECIMIENTO">Id establecimiento:</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text bg-light"><i class="fas fa-address-card"></i></span>
                </div>
                <input type="number" class="form-control" placeholder="Ingrese el id" id="ID_ESTABLECIMIENTO" name="ID_ESTABLECIMIENTO" required>
              </div>
            </div>

            <div class="form-group">
              <label for="NOM_ESTABLECIMIENTO">Nombre del establecimiento:</label>
              <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text bg-light"><i class="fas fa-building"></i></span>
              </div>
              <input type="text" class="form-control" placeholder="Ingrese el nonbre" id="NOM_ESTABLECIMIENTO" name="NOM_ESTABLECIMIENTO" required>
              </div>    
            </div>

            <div class="form-group">
            <label for="TELEFONO">Telefono:</label>
              <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text bg-light"><i class="fas fa-mobile-alt"></i></i></span>
              </div>
              <input type="text" class="form-control" placeholder="Ingrese el telefono" id="TELEFONO" name="TELEFONO" required>
              </div>    
            </div>

            <div class="form-group">
              <label for="DIRECCION">Direccion:</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text bg-light"><i class="fas fa-street-view"></i></span>
                </div>
                <input type="text" class="form-control" placeholder="Ingresa la direccion" id="DIRECCION" name="DIRECCION" required>
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