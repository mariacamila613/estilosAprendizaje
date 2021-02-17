<?php 
require ("../../consultas/activeSession.php");
require ("../../consultas/conexionBaseDatos.php");
error_reporting(0);
include ("head.php");
include("nav.php");
?>
 
<main class="detalle">
    <br>
    <br>
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
        <div class="col-md-4">
            <label><h4>RESUMEN CHAEA</h4></label><br>
            
               
            <label><i><b> Test: </b></i><?php echo $testChaea;?> </label><br>
            <label><i><b>Último test: </b></i>  <?php echo $dia; ?> </label><br>
          <b><i><?php echo"Activo: <br></b></i>",$aVacio?>  <br><b><i> <?php echo"Reflexivo: <br></b></i>",$bVacio?>  <br><b><i> <?php echo"Teórico: <br></b></i>",$cVacio?>  <br><b><i> <?php echo"Pragmático: <br></b></i>",$dVacio?>   </label><br>
            <br> <a href="reporteChaea.php" class="btn btn-success" target="_blank">Resultados históricos en PDF</a >


        </div>


        <div class="col-md-4">
           
            <label><h4>RESUMEN CHAEA JUNIOR   </h4></label><br>
            <label><i><b> Test: </b></i><?php echo $testChaeaJunior;?> </label><br>
            <label><i><b>Último test: </b></i>  <?php echo $diaJunior;?> </label><br>
            <i><b><?php echo"Activo: <br></i></b>",$actVacio?>  <br><i><b> <?php echo"Reflexivo: <br></i></b>",$reVacio?>  <br><i><b> <?php echo"Teórico: <br></i></b>",$teoVacio?>  <br><i><b> <?php echo"Pragmático: <br></i></b>",$praVacio?>   </label><br><br>
             <a href="reporteJunior.php" class="btn btn-success" target="_blank">Resultados históricos en PDF</a >
        </div>
    

    
     <div class="col-md-4">
           
            <label><h4>RESUMEN VARK   </h4></label><br>
            <label><i><b> Test: </b></i><?php echo $testVark;?> </label><br> <!-- Cambiar esta linea -->
            <label><i><b>Último test: </b></i>  <?php echo $diaVark;?> </label><br>  <!-- Cambiar esta linea -->
            <i><b><?php echo"Visual: <br></i></b>",$activoVacio11?>  <br><i><b> <?php echo"Auditivo: <br></i></b>",$auditivoVacio11?>  <br><i><b> <?php echo"Lector-Escritor: <br></i></b>",$lectorVacio11?>  <br><i><b> <?php echo"Kinestésico: <br></i></b>",$kiestVacio11?>   </label><br>
            <br> <a href="reporteVark.php" class="btn btn-success" target="_blank">Resultados históricos en PDF</a ><br><br>
        </div>



      <div class="col-md-4">
           
            <label><h4>RESUMEN FELDER  </h4></label><br>
            <label><i><b> Test: </b></i><?php echo $testFelder;?> </label><br>
            <label><i><b>Último test: </b></i>  <?php echo $diaFelder;?> </label><br>
            <i><b><?php echo"Activo: <br></i></b>",$activo2Vacio?>  <br><i><b> <?php echo"Sensorial: <br></i></b>",$sensorial2Vacio?>  <br><i><b> <?php echo"Visual: <br></i></b>",$visual2Vacio?>  <br><i><b> <?php echo"Secuencial: <br></i></b>",$secuencial2Vacio?> <br><i><b> <?php echo"Reflexivo: <br></i></b>",$reflexivo2Vacio?> <br><i><b> <?php echo"Intuitivo: <br></i></b>",$intuitivo2Vacio?> <br><i><b> <?php echo"Verbal: <br></i></b>",$verbal2Vacio?> <br><i><b> <?php echo"Global: <br></i></b>",$global2Vacio?>   </label><br>
            <br> <a href="reporteFelder.php" class="btn btn-success" target="_blank">Resultados históricos en PDF</a >
        </div>

     
 


      <div class="col-md-4">
           
            <label><h4>RESUMEN FELDER-VARK  </h4></label><br>
            <label><i><b> Test: </b></i><?php echo $testFelderVark;?> </label><br>
            <label><i><b>Último test: </b></i>  <?php echo $diaFelderVark;?> </label><br>
            <i><b><?php echo"Visual: <br></i></b>",$visualVacio3?>  <br><i><b> <?php echo"Lector: <br></i></b>",$lectorVacio3?>  <br><i><b> <?php echo"Auditivo: <br></i></b>",$auditivoVacio3?>  <br><i><b> <?php echo"Kinestésico: <br></i></b>",$kiestVacio3?> <br><i><b> <?php echo"Secuencial: <br></i></b>",$secuencialVacio3?>  <br><i><b> <?php echo"Global: <br></i></b>",$globalVacio3?>   </label><br>
            <br> <a href="reporteFelderVark.php" class="btn btn-success" target="_blank">Resultados históricos en PDF</a >
        </div>
    </div>
    <!--div class="row general"> -->
    <div class="col-lg-6 offset-lg-4">





    </div>
    </body>
</main>

    </div>

</div>

</main>

<!-- Footer -->
<?php
include ("foot.php");
?>

</body>
</html>


















