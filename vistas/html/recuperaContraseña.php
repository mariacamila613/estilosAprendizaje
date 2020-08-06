<?php

require ("../../consultas/conexionBaseDatos.php");
include ("head.php");
include("nav.php");

?>



  <!-- /content wrapper for padding -->

  <!-- Contenido -->
  <main class="detalle">
    <div class="breadcrumb-class"><span>Aplicación de Estilos de Aprendizaje</span></div>
 <br> <br> <br> <br>

<!----------------------------------------------------->


<label style="position: relative; left: 30%"> Ingresa los datos que usaste al momento de registrarte </label>
<div style="position: relative; left: 30%;">
<br> <br>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
		<form class="formulario"  action="../../consultas/recuperar.php" name="registro" method="post">			<label for="cedula"  form="cedula" class="etiquetas">Documento: </label>
			<input id="cedula" type="number" name="cedula" class="entradas" required placeholder="El mismo del registro">
			<br><br>
				<label for="name"  form="user" class="etiquetas">Nombre de Usuario: </label>
				<input id="name" type="text" name="user" class="entradas" required placeholder="El mismo del registro" >
			<br><br>
				<label for="email" class="etiquetas">Correo electrónico: </label>
				<input id="email" type="email" name="email" class="entradas" required placeholder="El mismo del registro">
			<br><br>
				<label for="securit" class="etiquetas">Pregunta de seguridad: </label>
				<select id="securit" class="entradas" name="pregunta" required>
                <option selected></option>
					<?php include("passwordQuestion.php");?>
                </select>
			<br><br>
				<label for="security" class="etiquetas">Respuesta a tu pregunta:</label>
				<input id="security" type="text" name="securityAnswer" class="entradas" required placeholder="La misma del registro">
			<br><br>
			<button type="submit"  style="position: relative; left: 10%" class="btn btn-success">Recuperar contraseña</button>
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
