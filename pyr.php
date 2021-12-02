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
    <title>Player One - Tienda</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
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
    .cabecera video {
      position: absolute;
      top: 50%;
      left: 50%;
      min-width: 100%;
      min-height: 100%;
      width: auto;
      height: auto;
      z-index: 0;
      -ms-transform: translateX(-50%) translateY(-50%);
      -moz-transform: translateX(-50%) translateY(-50%);
      -webkit-transform: translateX(-50%) translateY(-50%);
      transform: translateX(-50%) translateY(-50%);
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
          Player One </a>
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
                <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="tienda/carrito.php" data-original-title="Tu carrito de compras" rel="nofollow">
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
            <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
              <source src="media/POBanner.mp4" type="video/mp4"></source>
            </video>
            <div class="brand text-center overlay">
              <h1 class="text-light" style="font-family: Courier, 'Lucida Console', monospace">Preguntas y Respuestas</h1>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="main main-raised" <?php if($_SESSION['modoNoche'] == true) {echo 'style="background-color:#000001;"';}else{ echo 'class="bg-light"';} ?> style="font-family: Courier, 'Lucida Console', monospace">
      <div class="container">
       <div class="section text-center fade">
        <h2 class="title" <?php if($_SESSION['modoNoche'] == true) {echo 'class="title text-light"';}else{ echo 'class="title text-dark"';} ?>>Preguntas frecuentes</h2>
        <div class="row">
          <div class="col-12">
            <ul class="nav nav-pills nav-pills" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" href="#quienes" role="tab" data-toggle="tab">
                  ¿Quienes somos?
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#como" role="tab" data-toggle="tab">
                  ¿Cómo lo hacemos?
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#contacto" role="tab" data-toggle="tab">
                  Contáctanos
                </a>
              </li>
            </ul>
          </div>
          <div class="col-12">
            <div class="tab-content tab-space">
              <div class="tab-pane active" id="quienes">
                <h3 <?php if($_SESSION['modoNoche'] == true) {echo 'class="title text-light"';}else{ echo 'class="title text-dark"';} ?>>¿Quienes somos?</h3>
                <p <?php if($_SESSION['modoNoche'] == true) {echo 'class="title text-light"';}else{ echo 'class="title text-dark"';} ?>>
                  Somos una organización dedicada a la venta de contenido digital. Además de eso ofrecemos más servicios para darle el plus que necesita la página, ya sea un propio espacio de ventas, cursos, una gran comunidad y mucho más. ¡Anímate a darle un vistazo a la plataforma!
                </p>
              </div>
              <div class="tab-pane" id="como">
                <h3 <?php if($_SESSION['modoNoche'] == true) {echo 'class="title text-light"';}else{ echo 'class="title text-dark"';} ?>>¿Cómo lo hacemos?</h3>
                <p <?php if($_SESSION['modoNoche'] == true) {echo 'class="title text-light"';}else{ echo 'class="title text-dark"';} ?>>Con el poder de la amistad... ¡Es broma! jajaja<br>Nos enfocamos en ver que necesidad hay en el mundo digital, y llegamos a la conclusión de que es tedioso ir de página en página buscando los servicios (ya sea una tienda, una comunidad, etc) para poder satisfacer nuestras necesidades, ¡Para ello unimos todo en un sólo lugar!</p>
              </div>
              <div class="tab-pane" id="contacto">
                <h3 <?php if($_SESSION['modoNoche'] == true) {echo 'class="title text-light"';}else{ echo 'class="title text-dark"';} ?>>Contactanos</h3>
                <p <?php if($_SESSION['modoNoche'] == true) {echo 'class="title text-light"';}else{ echo 'class="title text-dark"';} ?>>¡En éste formulario podrás enviarnos un mensaje para contactarte de manera directa con nosotros!</p>
                <form action="#" method="POST">
                  <input type="text" name="email" class="form-control" placeholder="Tu email aquí">
                  <input type="text" name="nombre" class="form-control" placeholder="Tu nombre aquí">
                  <textarea name="mensaje" class="form-control" cols="30" rows="10" placeholder="Tu mensaje aquí"></textarea>
                  <input type="submit" class="btn btn-primary" value="Enviar mensaje">
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="section text-center fade">
        <h2 class="title" <?php if($_SESSION['modoNoche'] == true) {echo 'class="title text-light"';}else{ echo 'class="title text-dark"';} ?>>Encuentranos</h2>
        <div class="alert alert-primary">
          <a href="media/ubicacion.jpg" target="_blank"><img src="media/ubicacion.jpg" class="img-fluid" alt=""></a>
        </div>
      </div>
    </div>
  </div>
  <!--   Core JS Files   -->
  
  <script src="assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
  <script src="assets/js/plugins/moment.min.js"></script>
  <!--  Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
  <script src="assets/js/plugins/bootstrap-datetimepicker.js" type="text/javascript"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
  <!--  Google Maps Plugin    -->
  <!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
  <script src="assets/js/material-kit.js?v=2.0.7" type="text/javascript"></script>
  <script src="https://kit.fontawesome.com/07feefc044.js" crossorigin="anonymous"></script>
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
        &copy;
        <script>
          document.write(new Date().getFullYear())
        </script> Player One. Todos los derechos reservados.
      </div>
    </div>
  </footer>
</body>

</html>