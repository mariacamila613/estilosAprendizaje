<?php

require ("../../consultas/activeSession.php");
require ("../../consultas/conexionBaseDatos.php");
error_reporting(0);
include ("head.php");
include("nav.php");

?>



<!-- /content wrapper for padding -->

<!-- Contenido -->
<main class="detalle">
    <div class="breadcrumb-class"><span>Aplicación de Estilos de Aprendizaje</span></div>
    <br> <br>


    <div>

<?php include ("../../consultas/consultaReporte.php");?>
</div>



    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <body>

    <div class="w3-container">
        <h2>Resumen del Test:</h2>


        <table class="w3-table w3-striped w3-border">
            <tr>

                <th>Nombre del estudiante</th>
                <th>Documento</th>
                <th>Género</th>
                <th>Programa curricular</th>

            </tr>
            <tr>
                <td><?php echo $nombre;?></td>
                <td><?php echo $document;?></td>
                <td><?php echo $genre;?></td>
                <td><?php echo $programa;?></td>



            </tr>
            <tr>
            </tr>
            <tr>
            </tr>
        </table>
    </div>
    <br>

    <div class="row">
        <div class="col-lg-9 col-sm-4">
            <label><h2>RESUMEN CHAEA</h2></label><br>
            
               
            <label><i><b> Test: </b></i><?php echo $testChaea;?> </label><br>
            <label><i><b>Último test: </b></i>  <?php echo $dia; ?> </label><br>
          <b><i><?php echo"Activo: <br></b></i>",$aVacio?>  <br><b><i> <?php echo"Reflexivo: <br></b></i>",$bVacio?>  <br><b><i> <?php echo"Teórico: <br></b></i>",$cVacio?>  <br><b><i> <?php echo"Pragmático: <br></b></i>",$dVacio?>   </label><br>





            <br> <a href="../../consultas/moduloReportes/pdf/ReporteChaea.php" class="btn btn-success" target="_blank">Resultados históricos en PDF</a >


        </div>
        <div class="col-lg-3  col-sm-8">
           
            <label><h2>RESUMEN CHAEA JUNIOR   </h2></label><br>
            <label><i><b> Test: </b></i><?php echo $testChaeaJunior;?> </label><br>
            <label><i><b>Último test: </b></i>  <?php echo $diaJunior;?> </label><br>
            <i><b><?php echo"Activo: <br></i></b>",$actVacio?>  <br><i><b> <?php echo"Reflexivo: <br></i></b>",$reVacio?>  <br><i><b> <?php echo"Teórico: <br></i></b>",$teoVacio?>  <br><i><b> <?php echo"Pragmático: <br></i></b>",$praVacio?>   </label><br>
            <br> <a href="../../consultas/moduloReportes/pdf/ReporteJunior.php" class="btn btn-success" target="_blank">Resultados históricos en PDF</a >
        </div>
    </div>

    <!--div class="row general"> -->
    <div class="col-lg-6 offset-lg-4">





    </div>
    </body>
</main>









    <!-- Inicio del div más general -->

    </div>

</div>





    <!----------------------------------------------------->





</main>

<!-- Footer -->
<?php
include ("foot.php");
?>

</body>
</html>


















