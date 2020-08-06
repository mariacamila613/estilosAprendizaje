<?php

require ("../../consultas/activeSession.php");
require ("../../consultas/conexionBaseDatos.php");
include ("head.php");
include("nav.php");

?>
  <link rel="stylesheet" type="text/css" href="../vistas/css/style.css">

  <main class="detalle">
     <br> <br> 

    <div class="breadcrumb-class"><span>Aplicación de Estilos de Aprendizaje</span></div>
 <br> <br> 


<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">


<!-- Inicio del div más general -->
	<!--div class="row general"> -->
	<div class="col-lg-5 offset-lg-4">
		<div class="segundaClase" --> 

		<form class="formulario"  action="../../consultas/moduloActualizar/updateDatesUsersAccess.php" name="actualizar" method="post">
		
				<label for="pass" form="password" class="etiquetas">Ingrese la nueva contraseña: </label>
				<input id="pass" type="password" name="password" class="entradas" required placeholder="**********">
        <br> <br> <br>
				<label for="passAgain" form="passwordAgain" class="etiquetas" >Confirme la contraseña : </label>
				<input id="passAgain" type="password" name="passwordAgain" class="entradas" required placeholder="**********" >
        <br> <br> <br>
				<label for="email" form="email" class="etiquetas" >Ingrese el correo electrónico: </label>
				<input id="email" type="email" name="email" class="entradas" required placeholder="ejemplo@unal.edu.co">
        <br> <br> <br>
			
      <button type="submit"   class="btn btn-success" >Actualizar datos</button>		   
		</form>




	</div>
	<!-- Fin de la clase general del registro de usuario -->
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








