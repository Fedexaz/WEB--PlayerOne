<?php 

session_start();

if(!isset($_SESSION['login']) || !isset($_SESSION['modoNoche']))
{
  $_SESSION['login'] = false;
  $_SESSION['modoNoche'] = false;
}

?>

<!doctype html>
  <html lang="es">

  <head>
    <title>Player One</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="description" content="Player One">
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <!-- Material Kit CSS -->
    <link href="assets/css/material-kit.css?v=2.0.7" rel="stylesheet" />

    <style>
    .cabecera {
      position: relative;
      background-color: black;
      height: 75vh;
      min-height: 25rem;
      width: 100%;
      overflow: hidden;
    }

    .cabecera .container {
      position: relative;
      z-index: 2;
    }

    .cabecera .overlay {
      position: absolute;
      top: 0;
      left: 0;
      height: 100%;
      width: 100%;
      opacity: 0.5;
      z-index: 1;}

      .zoom {
        transition: transform .2s; 
      }

      .zoom:hover {
        transform: scale(1.5); 
      }

      .tarjetita{
        transition: transform .2s;
        transform: scale(0.7);
      }

      .tarjetita:hover {
        transform: scale(0.9);
        cursor: pointer;
      }

      .fade {
        animation-duration: .5s;
        animation-name: fadear;
        animation-iteration-count: initial;
        opacity: 100%;
      }

      @keyframes fadear {
        from {
          opacity: 0%;
        }

        to {
          opacity: 100%;
        }
      }
    </style>
  </head>

  <body style="background-color:#000001;">
    <nav class="navbar navbar-transparent navbar-color-on-scroll fixed-top navbar-expand-lg" color-on-scroll="100" id="sectionsNav">
      <div class="container">
        <div class="navbar-translate">
          <a class="navbar-brand" href="index.php">
            Player One 
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon"></span>
            <span class="navbar-toggler-icon"></span>
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="tienda/index.php" data-original-title="Tienda" rel="nofollow">
                <i class="material-icons">store</i> Tienda
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="creadores/index.php" data-original-title="Espacio de creadores" rel="nofollow">
                <i class="material-icons">storefront</i> Tu espacio
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="comunidad/index.php" data-original-title="Comunidad" rel="nofollow">
                <i class="material-icons">people</i> Comunidad
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="cursos/index.php" data-original-title="Cursos y capacitaciones" rel="nofollow">
                <i class="material-icons">school</i> Cursos
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="extras/index.php" data-original-title="Extras" rel="nofollow">
                <i class="material-icons">lightbulb</i> Extras
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="pyr.php" data-original-title="Preguntas y respuestas" rel="nofollow">
                <i class="material-icons">help_outline</i> Preguntas
              </a>
            </li>
            <!-- BOTONES ESTANDO LOGEADO -->
            <?php 
            if($_SESSION['login'] == true)
            {
              ?>
              <li class="nav-item">
                <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="user/perfil.php" data-original-title="Perfil" rel="nofollow">
                  <i class="material-icons">account_circle</i> Perfil
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="user/carrito.php" data-original-title="Tu carrito de compras" rel="nofollow">
                  <i class="material-icons">shopping_cart</i> Carrito
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="user/exit.php" data-original-title="Cerrar sesión" rel="nofollow">
                  <i class="material-icons">logout</i>
                </a>
              </li>
              <?php 
            }
            else
            {
              ?>
              <li class="nav-item">
                <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="user/register.php" data-original-title="Registrate en Player One" rel="nofollow">
                  <i class="material-icons">person_add</i> Registro
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="user/login.php" data-original-title="Inicia sesión en tu cuenta" rel="nofollow">
                  <i class="material-icons">login</i> Iniciar sesión
                </a>
              </li>
              <?php 
            }
            ?>
            <li class="nav-item">
              <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="darkmode.php" data-original-title="Activar/Desactivar modo oscuro" rel="nofollow">
                <i class="material-icons">brightness_6</i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="page-header header-filter cabecera" data-parallax="true">
      <div class="container">
        <div class="row">
          <div class="col-md-8 ml-auto mr-auto">
            <div class="brand text-center overlay">
              <h1 class="text-light" style="font-family: Courier, 'Lucida Console', monospace">Player One</h1>
              <h3 class="title text-center text-light">Digitalizando sueños</h3>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="main main-raised" <?php if($_SESSION['modoNoche'] == true) {echo 'style="background-color:#000001;"';}else{ echo 'class="bg-light"';} ?> style=" font-family: Courier, 'Lucida Console', monospace">
      <div class="container">
        <div class="section text-center fade">
          <h2 <?php if($_SESSION['modoNoche'] == true) {echo 'class="title text-light"';}else{ echo 'class="title text-dark"';} ?> style="font-family: Courier, 'Lucida Console', monospace">SERVICIOS DISPONIBLES</h2>
          <div class="row">
            <div class="col-md-4">
              <div class="tarjetita my-auto">
                <i class="material-icons text-primary" style="font-size:100px;">store</i>
                <h2 <?php if($_SESSION['modoNoche'] == true) {echo 'class="title text-light"';}else{ echo 'class="title text-dark"';} ?>>Tienda</h2>
                <p <?php if($_SESSION['modoNoche'] == true) {echo 'class="title text-light"';}else{ echo 'class="title text-dark"';} ?>>El lugar donde encuentras todo tipo de títulos con precios y descuentos increíbles</p>
              </div>
              <a href="tienda/index.php" class="btn btn-primary">Explorar</a>
            </div>
            <div class="col-md-4">
              <div class="tarjetita my-auto">
                <i class="material-icons text-primary" style="font-size:100px;">storefront</i>
                <h2 <?php if($_SESSION['modoNoche'] == true) {echo 'class="title text-light"';}else{ echo 'class="title text-dark"';} ?>>Tu espacio <span class="badge badge-pill badge-success">NEW!</span></h2>
                <p <?php if($_SESSION['modoNoche'] == true) {echo 'class="title text-light"';}else{ echo 'class="title text-dark"';} ?>>Un lugar para vender tus propios productos digitales sin comisión</p>
              </div>
              <a href="creadores/index.php" class="btn btn-primary">Explorar</a>
            </div>
            <div class="col-md-4">
              <div class="tarjetita my-auto">
                <i class="material-icons text-primary" style="font-size:100px;">school</i>
                <h2 <?php if($_SESSION['modoNoche'] == true) {echo 'class="title text-light"';}else{ echo 'class="title text-dark"';} ?>>Cursos <span class="badge badge-pill badge-success">NEW!</span></h2>
                <p <?php if($_SESSION['modoNoche'] == true) {echo 'class="title text-light"';}else{ echo 'class="title text-dark"';} ?>>Explorar una amplia cantidad de cursos que tenemos para tí</p>
              </div>
              <a href="cursos/index.php" class="btn btn-primary">Explorar</a>
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-md-4">
              <div class="tarjetita my-auto">
                <i class="material-icons text-primary" style="font-size:100px;">people</i>
                <h2 <?php if($_SESSION['modoNoche'] == true) {echo 'class="title text-light"';}else{ echo 'class="title text-dark"';} ?>>Comunidad <span class="badge badge-pill badge-success">NEW!</span></h2>
                <p <?php if($_SESSION['modoNoche'] == true) {echo 'class="title text-light"';}else{ echo 'class="title text-dark"';} ?>>El lugar perfecto para intercambiar ideas y ver futuros lanzamientos en la tienda</p>
              </div>
              <a href="comunidad/index.php" class="btn btn-primary">Explorar</a>
            </div>
            <div class="col-md-4">
              <div class="tarjetita my-auto">
                <i class="material-icons text-primary" style="font-size:100px;">lightbulb</i>
                <h2 <?php if($_SESSION['modoNoche'] == true) {echo 'class="title text-light"';}else{ echo 'class="title text-dark"';} ?>>Extras</h2>
                <p <?php if($_SESSION['modoNoche'] == true) {echo 'class="title text-light"';}else{ echo 'class="title text-dark"';} ?>>Servicios adicionales que ofrecemos en Player One</p>
              </div>
              <a href="extras/index.php" class="btn btn-primary">Explorar</a>
            </div>
            <div class="col-md-4">
              <div class="tarjetita my-auto">
                <i class="material-icons text-primary" style="font-size:100px;">help_outline</i>
                <h2 <?php if($_SESSION['modoNoche'] == true) {echo 'class="title text-light"';}else{ echo 'class="title text-dark"';} ?>>FAQs</h2>
                <p <?php if($_SESSION['modoNoche'] == true) {echo 'class="title text-light"';}else{ echo 'class="title text-dark"';} ?>>Explorar una amplia cantidad de cursos que tenemos para tí</p>
              </div>
              <a href="pyr.php" class="btn btn-primary">Explorar</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--   Core JS Files   -->
    <script src="assets/js/core/jquery.min.js" type="text/javascript"></script>
    <script src="assets/js/core/popper.min.js" type="text/javascript"></script>
    <script src="assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
    <script src="https://kit.fontawesome.com/07feefc044.js" crossorigin="anonymous"></script>
    <script src="assets/js/material-kit.js?v=2.0.7" type="text/javascript"></script>

    <footer class="footer footer-default">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
          </div>
          <div class="col-md-4">
            <div class="row">
              <div class="col-md-4">
                <a href="#" target="_blank">
                  <i class="fab fa-facebook-square text-primary zoom my-3" style="font-size:50px;"></i>
                </a>
              </div>
              <div class="col-md-4">
                <a href="#" target="_blank">
                  <i class="fab fa-instagram-square text-primary zoom my-3" style="font-size:50px;"></i>    
                </a>
              </div>
              <div class="col-md-4">
                <a href="#" target="_blank">
                  <i class="fab fa-youtube text-primary zoom my-3" style="font-size:50px;"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
          </div>
        </div>
        <div class="copyright text-center text-light" style="font-size: 12px;">
          &copy; 2021 Player One. Todos los derechos reservados.
        </div>
      </div>
    </footer>
  </body>

  </html>