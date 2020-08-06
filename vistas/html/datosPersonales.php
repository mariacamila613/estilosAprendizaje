<?php

require ("../../consultas/activeSession.php");
require ("../../consultas/conexionBaseDatos.php");
include ("head.php");
include("nav.php");

?>


 <link rel="stylesheet" type="text/css" href="../vistas/css/style.css">

  <main class="detalle">
     <br><br> 

    <div class="breadcrumb-class"><span>Aplicación de Estilos de Aprendizaje</span></div>
     <br><br> 

<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
  <div class="col-lg-5 offset-lg-4">
    <form class="formulario"  action="../../consultas/moduloActualizar/updateDatesUsers.php" name="actualizar" method="post">
				<label for="name" onclick="ValidarTelefono()" form="nombre">Nombre completo: </label>
				<input id="name" type="text" name="nombre" class="entradas" required placeholder="Pepito Pérez Martínez"> <br><br><br>
				<label for="fecha" form="birthday" class="etiquetas">Fecha nacimiento: </label>
				<input id="fecha" type="date" name="birthday" class="entradas" required>
        <br><br><br>
        <button type="submit"   class="btn btn-success" >Actualizar datos</button>    
     </form>
  </div>
	<?php
	if(isset($_GET["fallo"]) && $_GET["fallo"] == 'true')
                echo "<div style='color:red'>Las contraseñas no son iguales</div>";
     ?>
  </main>

  <!-- Footer -->
  <?php
  include ("foot.php");
  ?>

</body>
</html>


