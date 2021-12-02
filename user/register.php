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
    <title>Player One - Registro</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="description" content="Player One">
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- Material Kit CSS -->
    <link href="../assets/css/material-kit.css?v=2.0.7" rel="stylesheet" />

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
          <a class="navbar-brand" href="../index.php">
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
              <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="../tienda/index.php" data-original-title="Tienda" rel="nofollow">
                <i class="material-icons">store</i> Tienda
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="../creadores/index.php" data-original-title="Espacio de creadores" rel="nofollow">
                <i class="material-icons">storefront</i> Tu espacio
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="../comunidad/index.php" data-original-title="Comunidad" rel="nofollow">
                <i class="material-icons">people</i> Comunidad
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="../cursos/index.php" data-original-title="Cursos y capacitaciones" rel="nofollow">
                <i class="material-icons">school</i> Cursos
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="../extras/index.php" data-original-title="Extras" rel="nofollow">
                <i class="material-icons">lightbulb</i> Extras
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="../pyr.php" data-original-title="Preguntas y respuestas" rel="nofollow">
                <i class="material-icons">help_outline</i> Preguntas
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-success" rel="tooltip" title="" data-placement="bottom" href="../user/login.php" data-original-title="Inicia sesión en tu cuenta" rel="nofollow">
                <i class="material-icons">login</i> Iniciar sesión
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="darkmoderegister.php" data-original-title="Activar/Desactivar modo oscuro" rel="nofollow">
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
          <h2 style="font-family: Courier, 'Lucida Console', monospace" <?php if($_SESSION['modoNoche'] == true) {echo 'class="title text-light"';}else{ echo 'class="title text-dark"';} ?>>REGISTRO</h2>
          <div class="row">
            <div class="col-md-4">
              <div class="card bg-transparent">
                <div class="card-body">
                  <h3 style="font-family: Courier, 'Lucida Console', monospace" <?php if($_SESSION['modoNoche'] == true) {echo 'class="text-light"';}else{ echo 'class="text-dark"';} ?>>¡Regístrate en Player One!</h3>
                  <p  style="font-family: Courier, 'Lucida Console', monospace" <?php if($_SESSION['modoNoche'] == true) {echo 'class="text-light"';}else{ echo 'class="text-dark"';} ?>>¡Tendrás acceso a muchas funciones de la plataforma!<br>
                    ¿Tienes una <b>cuenta</b>? <a href="login.php" class="alert-link"><b>Inicia sesión</b></a></p>
                  </div>
                </div>
              </div>
              <div class="col-md-8">
                <form action="cReg.php" method="POST">
                  <div class="row">
                    <div class="col-md-6 mt-5">
                      <label for="usuario" style="font-family: Courier, 'Lucida Console', monospace" <?php if($_SESSION['modoNoche'] == true) {echo 'class="text-light"';}else{ echo 'class="text-dark"';} ?>>Nombre de usuario</label>
                      <input type="text" name="usuario" style="font-family: Courier, 'Lucida Console', monospace" placeholder="Ingresa un nombre de usuario." class="form-control" required>
                    </div>
                    <div class="col-md-6 mt-5">
                      <label for="email" style="font-family: Courier, 'Lucida Console', monospace" <?php if($_SESSION['modoNoche'] == true) {echo 'class="text-light"';}else{ echo 'class="text-dark"';} ?>>Correo electrónico (email)</label>
                      <input type="email" name="email" style="font-family: Courier, 'Lucida Console', monospace" placeholder="Ingresa tu correo electrónico." class="form-control" required>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 mt-3">
                      <label for="pass" style="font-family: Courier, 'Lucida Console', monospace" <?php if($_SESSION['modoNoche'] == true) {echo 'class="text-light"';}else{ echo 'class="text-dark"';} ?>>Contraseña</label>
                      <input type="password" name="pass" style="font-family: Courier, 'Lucida Console', monospace" placeholder="Ingresa una contraseña." class="form-control" required>
                    </div>
                    <div class="col-md-6 mt-3">
                      <label for="pass2" style="font-family: Courier, 'Lucida Console', monospace" <?php if($_SESSION['modoNoche'] == true) {echo 'class="text-light"';}else{ echo 'class="text-dark"';} ?>>Repite la contraseña</label>
                      <input type="password" name="pass2" style="font-family: Courier, 'Lucida Console', monospace" placeholder="Repite la contraseña." class="form-control" required>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <input type="submit" value="Registrarme" class="mt-4 btn btn-primary">
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--   Core JS Files   -->
      <script src="../assets/js/core/jquery.min.js" type="text/javascript"></script>
      <script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
      <script src="../assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
      <script src="../assets/js/plugins/moment.min.js"></script>
      <script src="https://kit.fontawesome.com/07feefc044.js" crossorigin="anonymous"></script>
      <!--  Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
      <script src="../assets/js/plugins/bootstrap-datetimepicker.js" type="text/javascript"></script>
      <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
      <script src="../assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
      <!--  Google Maps Plugin    -->
      <!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
      <script src="../assets/js/material-kit.js?v=2.0.7" type="text/javascript"></script>

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