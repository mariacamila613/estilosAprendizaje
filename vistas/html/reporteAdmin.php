<?php

require ("../../consultas/activeSession.php");
require ("../../consultas/conexionBaseDatos.php");
include ("headAdmin.php");
include("nav.php");


?>

<!DOCTYPE html>
<html>
<head>


</head>
<body>



  <main class="detalle">
    <div class="breadcrumb-class">

        <h1 class="bienvenida"> <b> <?php echo $varSeccion;
        ?>, </b> te damos la bienvenida al módulo de reportes en el perfil Administrador:

        <br>


    </h1>
</div>




<meta charset="utf-8">

<!-- Inicio del div más general -->
<!--div class="row general"> -->
<div class="col-lg-6 offset-lg-4">
    <h1>Resultados</h1>

    <br><br><br>



</div>
<div class="container">
    <div class="row">
        <div class="col-sm-6" id="columna1">
            <div class="a">
                <h2> Reporte general en PDF:</h2><br><br><br>
                <p> PDF con el consolidado de cada test realizado</p><br><br><br>
                <a  href="../../consultas/moduloReportes/pdf/reporteAdmin.php" class="btn btn-success">Descargar</a>
            </div>
        </div>
        <div class="col-sm-6">

        <form action="../../consultas/excel/leer.php" method="post"  enctype="multipart/form-data">
          <div class="a">
            <h2>Filtrar por Excel:</h2><br><br><br>
            <p> PDF con el listado de estudiantes de Excel</p><br><br><br>
            <input  type="file" name="fileName"><br>
            <button type="submit" href="../../consultas/excel/leer.php" class="btn btn-success">Cargar </button>
        </div>
    </form>
    </div>
            <!-- <div class="col-sm-4">
                <div class="a">  <h2>Gráficos: </h2><br><br><br>
                    <p>Gráficas para ayudar a mirar el comportamiento de cada test.</p><br><br><br>
                    <a href="../../consultas/moduloReportes/graficas/graficasAdmin.php" class="btn btn-success">Gráficos</a>
                </div>
            </div>
        </div>
    </div> -->



</p>
</div>


<style>
    .a {

        margin: 1rem;
        padding: 1rem;
        border: 2px solid #ccc;
        /* IMPORTANTE */
        text-align: center;
    }
</style>









</main>
<!-- Footer -->
<?php
include ("foot.php");
?>

</body>
</html>
