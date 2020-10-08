
<?php
require ("../../consultas/conexionBaseDatos.php");
error_reporting(0);
$name_user=$_SESSION['nombre_style'];


$consulta_login="SELECT admin
FROM usuario
WHERE nombre_style = '$name_user'";
$ejecutar_consulta_login= pg_query($conexion, $consulta_login) or die("Error en la consulta");
$extraer=pg_fetch_array($ejecutar_consulta_login);

?>




<header id="unalTop" >

  <nav class="navbar navbar-expand-sm bg-dark navbar-dark" >

    <div class="navegation">
      <a class="navbar-brand" href="inicio.php" style="left: 10px; position: relative;" >Inicio</a>


      <?php if ($extraer['admin']=='Sí') {
        ?>
        <a class="navbar-brand" href="inicioAdmin.php" style="left: 10px; position: relative;" >Perfil administrador</a>
        <?php
      }
      ?>
      <a class="navbar-brand" href="actualizar.php" style="left: 10px; position: relative;">Actualizar datos</a>
      <a class="navbar-brand" href="reporte.php"style="left: 10px; position: relative;" >Reporte</a>
      <?php if ($_SESSION['nombre_style']) {
        ?>
        <a class="navbar-brand" href="../../consultas/closeSession.php" style="left: 10px; position: relative;">Cerrar sesión </a>
        <?php
      }else{

      }?>
    </div>
  </nav> 

  <div class="logo" style="position: absolute; top:0px; left: 0px;">
    <a href="http://unal.edu.co" >
      <img src="images/escudoUnal.png"  class="d-block"/>
    </a>
  </div>












</header>


<style type="text/css">
a:hover {
  background-color: blue;
}

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

  .navegation{
    margin-left: 249px;"
  }

  @media (max-width: 767px) {
    .navegation{
      margin-left: 103px;"
    }
  }

</style>
