
<?php
require ("../../consultas/conexionBaseDatos.php");
error_reporting(0);
$name_user=$_SESSION['nombre_style'];


$consulta_login="SELECT admin
                    FROM usuario
                    WHERE usuario = '$name_user'";
$ejecutar_consulta_login= pg_query($conexion, $consulta_login) or die("Error en la consulta");
$extraer=pg_fetch_array($ejecutar_consulta_login);

 ?>



<!DOCTYPE html>
<!--[if lt IE 7]> <html class="ie6 oldie"> <![endif]-->
<!--[if IE 7]> <html class="ie7 oldie"> <![endif]-->
<!--[if IE 8]> <html class="ie8 oldie"> <![endif]-->
<!--[if IE 9]> <html class="ie9 oldie"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html>
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <!--
 =============================================================================
 === PLANTILLA DESARROLLADA POR LA OFICINA DE MEDIOS DIGITALES - UNIMEDIOS ===
 =============================================================================
    -->

    <!-- base href="http://subdominio.unal.edu.co/" -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">


    <meta name="revisit-after" content="1 hour">
    <meta name="distribution" content="all">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=0.5, maximum-scale=2.5, user-scalable=yes">
    <meta name="expires" content="1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="robots" content="all">


    <link rel="stylesheet" type="text/css" href="css/reset.css" media="all">
    <link rel="stylesheet" type="text/css" href="css/unal.css" media="all">
    <link rel="stylesheet" type="text/css" href="css/base.css" media="all">
    <link rel="stylesheet" type="text/css" href="css/tablet.css" media="all">
    <link rel="stylesheet" type="text/css" href="css/phone.css" media="all">
    <link rel="stylesheet" type="text/css" href="css/small.css" media="all">
    <link rel="stylesheet" type="text/css" href="css/printer.css" media="print">
    <link rel="stylesheet" type="text/css" href="css/sidebar.css" media="all">
    <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script src="js/jquery.js" type="text/javascript"></script>
    <script src="js/unal.js" type="text/javascript"></script>
    <!--[if lt IE 9]><script src="js/html5shiv.js" type="text/javascript"></script><![endif]-->
    <!--[if lt IE 9]><script src="js/respond.js" type="text/javascript"></script><![endif]-->

    <script src="js/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="js/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script src="js/jquery.min.js"></script>
    <title>Aplicación de Estilos de Aprendizaje</title>
</head>

<body style="">

<header id="unalTop">
    <div class="logo">
        <a href="http://unal.edu.co">
            <img src="images/escudoUnal.png" class="d-block"/>
        </a>
    </div>

    <div class="firstMenu">


        <ul class="socialLinks d-none d-md-block">

            <li >
            <a
            href="https://www.facebook.com/UNColombia"
            target="_blank"
            class="facebook"
            title="Página oficial en Facebook"><div class="red r1">Facebook</div>
            </a>
            </li>


           <li>
            <a
            href="https://twitter.com/UNColombia"
            target="_blank"
            class="twitter"
            title="Cuenta oficial en Twitter"> <br> <div class="red r2">Twitter</div>
            </a>
            </li>



            <li>
            <a
            href="https://www.youtube.com/channel/UCnE6Zj2llVxcvL5I38B0Ceg"
            target="_blank"
            class="youtube"
            title="Canal oficial de Youtube"><div class="red r3">Youtube</div>
            </a>
            </li>

            <li>
            <a
            href="http://agenciadenoticias.unal.edu.co/nc/sus/type/rss2.html"
            target="_blank"
            class="rss"
            title="Suscripción a canales de información RSS"><div class="red r4">RSS</div>
            </a>
            </li>

          </ul>


    </div>
   <div id="bs-navbar" class="navigation">


    <div class="mainMenu">
        <div class="container-fluid">
        <div class="row">
        <nav class="navbar navbar-expand-md navbar-dark">

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">



   </div>
    <ul class="navbar-nav">
     <div class="navbar-dark mainMenu" id="main_menu_container">
        <!-- Items menú principal -->

        <?php if ($extraer['admin']=='Sí') {
          ?>
          <div class="btn-group">
           <a href="inicioAdmin.php"   aria-label="Enlace para ir actualizar los datos "class="btn btn-default">Perfil Administrador</a>
         </div>
      <?php
      }
        ?>
         <div class="btn-group">
          <a href="inicio.php" aria-label="Enlace para ir a inicio" class="btn btn-default">Inicio</a>
        </div>
         <div class="btn-group">
          <a href="actualizar.php"   aria-label="Enlace para ir actualizar los datos "class="btn btn-default">Actualizar Datos</a>
        </div>
        <div class="btn-group">
          <a href="reporte.php"  aria-label="Enlace para ver los reportes" class="btn btn-default">Ver reportes</a>
        </div>
         <div class="btn-group">
          <!-- <a href="contacto.php"   aria-label="Enlace para contactar a nuestro equipo" class="btn btn-default">Contacto</a>
        </div>
         <div class="btn-group"> -->
          <a href="../../consultas/closeSession.php"  aria-label="Enlace para ir a cerrar sesión" class="btn btn-default">Cerrar sesión</a>
        </div>






    </ul>
  </div>
</nav>


         </div>
        </div>


        </div>
    </div>
</header>


  <style type="text/css">


.facebook{
  position: absolute;
  right: 160px;
   align-content: center;
  align-items: center;
}



.twitter{
  position: absolute;
  right: 110px;
   align-content: center;
  align-items: center;
}

.youtube{
  position: absolute;
  right: 60px;
   align-content: center;
  align-items: center;
}

.rss{
  position: absolute;
  right: 10px;
   align-content: center;
  align-items: center;
}



.red{
  position: absolute;
  color: white;
  top: 80%;
  font-size: 13px;
  margin: 3px 0px 3px 0px;
}

.r1{right: -60%;}
.r2{right: -40%;}
.r3{right: -60%;}
.r4{right: 0%;}


</style>
