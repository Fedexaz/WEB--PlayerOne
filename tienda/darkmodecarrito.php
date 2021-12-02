<?php

session_start();

if($_SESSION['modoNoche'] == false)
{
  $_SESSION['modoNoche'] = true;
  header("Location: carrito.php");
}
else
{
  $_SESSION['modoNoche'] = false;
  header("Location: carrito.php");
}
?>