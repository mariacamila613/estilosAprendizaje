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

<h1 class="bienvenida">Hola <?php echo $varSeccion;
?>,  te damos la bienvenida al perfil Administrador:

 <br>


</h1>
    </div>



	<div>


<div class="panel panel-default">



<!--
  <br>   <br>
  <div class="panel-body"></div>

  <ul class="list-group">

    <li class="list-group-item" style = "line-height: 2em; font-size: 12pt">Este cuestionario ha sido diseñado para identificar su estilo preferido de aprendizaje. No es un test de inteligencia, ni de personalidad.</li>
    <li class="list-group-item" style = "line-height: 2em; font-size: 12pt">No hay límite de tiempo para contestar al Cuestionario. No le ocupará más de 15 minutos.</li>
    <li class="list-group-item" style = "line-height: 2em; font-size: 12pt">No hay respuestas correctas o erróneas y el resultado será útil en la medida que sea sincero/a en sus respuestas.</li>

  </ul>
</div>
</div>
<br>

<?php
	include("estilosBotones.php");
?>
 -->



  </main>

  <!-- Footer -->
  <?php
  include ("foot.php");
  ?>

</body>
</html>
