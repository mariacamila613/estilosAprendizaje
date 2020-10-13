<?php

require ("../../consultas/conexionBaseDatos.php");
require ("../../consultas/activeSession.php");
include ("headAdmin.php");
include("nav.php");

?>



<br> <br>

<!-- Contenido -->
<main class="detalle">
	<div class="breadcrumb-class"><span>Aplicación de Estilos de Aprendizaje</span></div>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Inicio del div más general -->
	<!--div class="row general"> -->
	<h1 style="text-align: center;">Registro de nuevos usuarios</h1>
	<br> <br>
	<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">

	<div class="col-lg-0 offset-lg-4">

		<form class="formulario"  action="../../consultas/newUsersAdmin.php" name="registro" method="post">

			<label for="admin"class="etiquetas">  
			¿Esta persona tendrá el perfil de administrador?
		</label>
			<select style="width: 160px;" class="formu-control" id="admin" name="admin" required>
				<option selected></option>
				<?php include("adminBoolean.php");
				?>
			</select>
			<br><br>
			<div class="name">
				<label for="name" class="etiquetas">Nombre completo: </label>
				<input type="text" id="name" name="name" class="entradas" required>
			</div>
			
			<!-- Fin de la clase para el nombre del registro -->
			<br>
			<label  for="perfil"  class="etiquetas"> Seleccione su género </label>
			<select style="width: 160px;" class="etiquetas" id="perfil" name="genero" required>
				<option selected></option>
				<?php include("genero.php");?>
			</select>
			<br><br>
			<!-- Clase para el documento en el registro de usuario -->

			<div class="documentoUsuario">
				<label for="document" class="etiquetas">Documento: </label>
				<input class="" id="document" type="number" name="document"  required>
			</div>
			<!-- Fin de la clase para el documento del registro -->
			<br>

			<label for="carrera"  class="etiquetas"> Seleccione su carrera </label>
			<select style="width: 160px;"  class="etiquetas" name="carrera" id="carrera" required>
				<option selected></option>
				<?php include("carrera.php");?>
			</select>
			<br><br>


			<!-- Clase para la fecha de nacimiento en el registro de usuario -->
			<div class="fechaNacimiento">
				<label for="birthday" class="etiquetas">Fecha Nacimiento: </label>
				<input style="width: 160px;"  id="birthday" type="date" name="birthday" class="entradas" required>
			</div>
			<!-- Fin de la clase para la fecha de nacimiento del registro -->

			<br>
			<!-- Clase para el nombreUsuario en el registro de usuario -->
			<div class="nombreUsuario">
				<label  for="user" class="etiquetas">Nombre de Usuario: </label>
				<input type="text" id="user" name="user" class="entradas" required >
			</div>
			<!-- Fin de la clase para el nombreUsuario del registro -->
			<br>
			<label for="security" class="etiquetas">Pregunta de seguridad: </label>
			<select style="width: 160px;"  id="security" class="etiquetas" name="pregunta" required >
				<option selected >
					<?php include("passwordQuestion.php");?>
				</option>
			</select>
			<br><br>
			<label for="secur" class="etiquetas">Respuesta a tu pregunta:</label>
			<input id="secur" type="text" name="securityAnswer" required placeholder="Pepito Pérez">
			<br><br>
			<!-- Clase para la contraseña en el registro de usuario -->
			<div class="passwordUsuario" id="passwordUsuario">
				<label for="password" class="etiquetas">Ingrese contraseña: </label>
				<input id="password" type="password" name="password" class="entradas" required>

			</div>
			<!-- Fin de la clase para la contraseña del registro -->
			<br>
			<!-- Clase para el confirmar contraseña en el registro de usuario -->
			<div class="passwordUsuarioConfirma">
				<label for="passwordAgain" class="etiquetas">Confirme contraseña: </label>
				<input type="password" name="passwordAgain" id="passwordAgain" class="entradas" required >
			</div>
			<!-- Fin de la clase para el confirmar la contraseña del registro -->
			<br>
			<!-- Clase para el email en el registro de usuario -->
			<div class="correo">
				<label for="email" class="etiquetas">Correo electrónico: </label>
				<input type="email" id="email" name="email" class="entradas" required>
			</div>	
			<br>


		</u>
	</b>
	<br>
	<br>
	<button type="submit" class="btn btn-success" style="position: relative; left: 25%;">Inscribir</button>





</form>




<!----------------------------------------------------->


<?php
if(isset($_GET["fallo"]) && $_GET["fallo"] == 'true')
	echo "<div style='color:red'>Las contraseñas no son iguales</div>";
?>


</div>

</main>

<!-- Footer -->
<?php
include ("foot.php");
?>

</body>
</html>
