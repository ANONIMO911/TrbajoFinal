
<!DOCTYPE html>
<html lang="es">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">    
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="dist/css/bootstrap.css">
  <link rel="stylesheet" href="scss/css/estilos.css">
</head>
  <body>
  <!-- Menu -->
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
          <a class="nav-link active" href="index.html">Inicio</a>
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
      <div class="row">
        <!-- CRUD -->
<div class="container-fluid bg-light ">
<div class="container py-5" >
    <div class="row">
      <div class="col-md-3 ">
          <div class="card ml-auto sombra">
              <div class="card-body">
                <h4 class="card-title text-center">Ingresar usuario</h4>

                <form action="procesa.php" method="post" id="guarda">
                  <input type="text" value="guardar" name="opc" hidden>
                <div class="form-group">
                  <label for="usuario" class="text-left">nombre de usuario</label>
                  <input type="text" class="form-control" id="user" name="user" placeholder="usuario">
                  
                </div>
                <div class="form-group">
                  <label for="pass">Password de usuario</label>
                  <input type="password" class="form-control" id="pass" name="pass" placeholder="Password">
                </div>
                <div class="form-group">
                  <label for="correo">Correo de usuario</label>
                  <input type="email" class="form-control" id="correo" name="correo" placeholder="Correo">
                </div>
               
                <button type="submit" class="btn btn-primary">Guardar</button>
              </form>

              </div>
            </div>
      </div>
      <!-- Area donde se listan los datos -->
      <div class="col-md-9 ">
          <div class="card mr-auto sombra">
              <div class="card-body">
                <h4 class="card-title text-center">Acá se mostrarán los datos</h4>               
                <ul class="list-group">

                <?php

                try {
                      $conexion = new PDO('mysql:host=localhost;dbname=food', "root", "");
                          
                  } catch (PDOException $e) {
                      print "¡Error!: " . $e->getMessage() . "<br/>";
                      die();
                  }

                  try
                  {
                  $sql = $conexion->prepare("SELECT * FROM usuario");
                  $sql->execute();
                  while ( $fila = $sql->fetch()) {
                    ?>
                  <li class="list-group-item">

                    id = <?php echo $fila['id_user']?>, 
                    nombre = <?php echo $fila['nombre_user']?>, 
                    password = <?php echo $fila["pass_user"]?>, 
                    correo = <?php echo $fila['correo_user']?>

                      <span class="fa-stack  float-right eliminar" id="<?php echo $fila['id_user']?>" style="color:red; cursor: pointer;" title="Eliminar Registro">
                      <i class="fa fa-circle fa-stack-2x"></i>
                      <i class="fa fa-trash fa-stack-1x fa-inverse"></i>
                      </span>

                      <span class="fa-stack  float-right modificar" id="<?php echo $fila['id_user']?>" style="color:blue; cursor: pointer ;" title="Actualizar Registro">
                        <i class="fa fa-circle fa-stack-2x"></i>
                        <i class="fa fa-pencil fa-stack-1x fa-inverse"></i>
                      </span>
                  </li>                    
                    
                    <?php
                  }
                }
                catch(Exception $ex)
                {
                    print "¡Error!: " . $ex->getMessage() . "<br/>";
                      die();
                }
                ?>
                </ul>
              </div>
            </div>
      </div>
    </div> 
   
       
</div>
</div>
<!-- Fin CRUD -->
      </div>
    </div>
  </div> 
</div>
<!-- Fin Menu -->

<!-- Bienvenida -->


<!-- fin Bienvenida -->



<!-- Modal -->
<div class="modal fade" id="modificar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modificar Usuario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body datos">       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>      
      </div>
    </div>
  </div>
</div>
<!-- fin Modal -->

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
  <div class="footer-copyright text-center py-3 text-white">© 2021 Copyright
    
  </div>
  <!-- Copyright -->

</footer>

<!-- jquery-->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- <script src="js/scrollreveal.min.js"></script> -->
    <script src="js/helper.js"></script>
    <script>

       $(".eliminar").click(function(){
        var clave = $(this).attr("id");
        $.ajax({
          url : "procesa.php",
          data : "opc=eliminar&clave="+clave,
          type : "post",
          success: function()
          {
            location.reload();
          }
        })
      });
       
       $(".modificar").click(function(){
        var clave = $(this).attr("id");
         $.ajax({
          url : "procesa.php",
          data : "opc=modificar-form&clave="+clave,
          type : "post",
          success: function($datos)
          {
            $(".datos").html($datos);
          }
        })
        $('#modificar').modal('show');
      });
    </script>
  </body>
</html>
