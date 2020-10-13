<?php

require ("../../consultas/conexionBaseDatos.php");
include ("head.php");
include("nav.php");

?>

<main class="detalle">
	<div class="breadcrumb-class"><span>Aplicación de Estilos de Aprendizaje</span></div>
	<br> <br> 

	<!----------------------------------------------------->
	<link rel="stylesheet" type="text/css" href="css/unal.css">


	<h1 style="text-align: center;">Registro de nuevos usuarios</h1>
	<br> <br>
	<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">

	<div class="col-lg-0 offset-lg-4">


		<form class="formulario"  action="../../consultas/newUsers.php" name="registro" method="post">
			<label for="perfil" class="etiquetas">Selecciona tu carrera</label>
			<select id="perfil" style="width: 200px;" name="carrera" required>
				<option>
					<?php include("carrera.php");?>
				</option>
			</select>
			<br><br>
			<label class="etiquetas" for="genero">Selecciona tu género </label>
			<select style="width: 200px;" id="genero" name="genero" required>
				<option selected>
					<?php include("genero.php");?>
				</option>
			</select>
			<br><br>
			<label class="etiquetas" for="name" form="name">Ingresa tu nombre completo: </label>
			<input   style="width: 200px;" id="name" type="text" name="name" required placeholder="Ejemplo: Pepito Pérez">
			<br><br>
			<label for="document" form="document" class="etiquetas">Documento de identidad: </label>
			<input class="entradaRegistro" id="document" type="number" name="document" required placeholder="Ejemplo: 1060******">
			<br><br>
			<label for="birthday" class="etiquetas">Fecha de nacimiento: </label>
			<input class="entradaRegistro" id="birthday" type="date" name="birthday" required>
			<br><br>
			<label for="user" form="user" class="etiquetas">Nombre de usuario: </label>
			<input class="entradaRegistro" id="user" type="text" name="user" required placeholder="Ejemplo: pepito">
			<br><br>
			<label for="password" class="etiquetas">Ingresa una contraseña: </label>
			<input class="entradaRegistro" id="password" type="password" name="password" required placeholder="**********"  pattern="(?=.*\d)(?=.*[A-Za-z])(?=.*[@#$%]).{8,}"
			title="Debe contener al menos un número, una letra, uno de estos símbolos '@', '#', '$' o '%' y al menos 8 caracteres">
			<br><br>
			<label for="passwordAgain" class="etiquetas">Confirma la contraseña: </label>
			<input class="entradaRegistro" id="passwordAgain" type="password" name="passwordAgain" required placeholder="**********">
			<br><br>
			<label for="security" class="etiquetas">Pregunta de seguridad: </label>
			<select  style="width: 200px;" id="security" name="pregunta" required >
				<option selected >
					<?php include("passwordQuestion.php");?>
				</option>
			</select>
			<br><br>
			<label for="secur" class="etiquetas">Respuesta a tu pregunta:</label>
			<input class="entradaRegistro" id="secur" type="text" name="securityAnswer" required placeholder="Pepito Pérez">
			<br><br>
			<label for="email" form="email" class="etiquetas">Correo electrónico: </label>
			<input  id="email" type="email" name="email" required placeholder=ejemplo@unal.edu.co  style="width: 200px;">
			<br><br>
			<button type="submit" class="btn btn-success" style="position: relative; left: 25%;">Registarse</button>
		</form>

		<?php
		if(isset($_GET["fallo"]) && $_GET["fallo"] == 'true')
			echo "<div style='color:red'>Las contraseñas no son iguales</div>";
		?>

	</main>
	<?php
	include ("foot.php");
	?>

</body>
</html>
