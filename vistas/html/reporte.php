<?php
 
require ("../../consultas/activeSession.php");
require ("../../consultas/conexionBaseDatos.php");
//require ("../../consultas/moduloReportes/reporte.php");
error_reporting(0);
include ("head.php");
include("nav.php");

?>


<!-- /content wrapper for padding -->

<!-- Contenido -->
<main class="detalle">
    <div class="breadcrumb-class"><span>Aplicación de Estilos de Aprendizaje</span></div>
    <br> <br>






    <meta charset="utf-8">

    <!-- Inicio del div más general -->
    <!--div class="row general"> -->
    <div class="col-md-4 offset-md-4"><center> <h2> Resultados </h2></center><br><br><br></div>
    




    <div class="container">
        <div class="row">
            <div class="col-sm-6" id="columna1">
                <div class="a" style="background-color: #e9f7cd">
                    <h2> Detalles:</h2><br><br><br>
                    <p> Acá podrás ver más en detalle tus resultados.</p><br><br><br>
                    <a  href="reporteGeneral.php"  class="btn btn-success">Detalles</a>
                </div>
            </div>
   
            <div class="col-sm-6">
                <div class="a" style="background-color: #e9f7cd">  <h2>Gráficos: </h2><br><br><br>
                    <p>Consulta tus resultados en un gráfico.</p><br><br><br>
                    <a href="graficas.php" class="btn btn-success">Gráficos</a>
                </div>
            </div>
        </div>
    </div>



    </p>
    </div>


    <style>
        .a {

            margin: 1rem;
            padding: 1rem;
            /*border: 1px solid #ccc;*/
            /* IMPORTANTE */
            text-align: center;
            border:1px solid;"
            background-color: red;
        }
    </style>









</main>

<!-- Footer -->
<?php
include ("foot.php");
?>

</body>
</html>
































	
