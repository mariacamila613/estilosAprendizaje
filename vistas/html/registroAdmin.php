<?php

require ("../../consultas/conexionBaseDatos.php");
require ("../../consultas/activeSession.php");
include ("headAdmin.php");
include("nav.php");

?>



  <!-- /content wrapper for padding -->

  <!-- Contenido -->
  <main class="detalle">
    <div class="breadcrumb-class"><span>Aplicación de Estilos de Aprendizaje</span></div>
 <br> <br> <br> <br>

<!----------------------------------------------------->




<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Inicio del div más general -->
	<!--div class="row general"> -->


		<form class="formulario"  action="../../consultas/newUsersAdmin.php" name="registro" method="post">

			<!-- Clase para el nombre en el registro de usuario -->





    <label for="admin">  ¿Esta persona tendrá el perfil de administrador?  </label>
            <select class="formu-control" name="admin" required>
                <option selected></option>
                <?php include("adminBoolean.php");
                ?>
            </select>
            <br><br>

            <div class="nombreUsuario">
				<label form="name">Nombre: </label>
				<input type="text" name="name" class="entradas" required>
			</div>
			<!-- Fin de la clase para el nombre del registro -->
			<br>





            &nbsp;&nbsp;<label for="perfil"> Seleccione su género </label>
            <select class="formu-control" name="genero" required>
                <option selected></option>
                <?php include("genero.php");?>
            </select>
            <br><br>





            <!-- Clase para el documento en el registro de usuario -->

			<div class="documentoUsuario">
				<label form="document" class="etiquetas">Documento de identidad: </label>
				<input type="number" name="document" class="entradas" required>
			</div>
			<!-- Fin de la clase para el documento del registro -->
				<br>



            &nbsp;&nbsp;<label for="perfil"> Seleccione su carrera </label>
            <select class="formu-control" name="carrera" required>
                <option selected></option>
                <?php include("carrera.php");?>
            </select>
            <br><br>










			<!-- Clase para la fecha de nacimiento en el registro de usuario -->
			<div class="fechaNacimiento">
				<label form="birthday" class="etiquetas">Fecha Nacimiento: </label>
				<input type="date" name="birthday" class="entradas" required>
			</div>
			<!-- Fin de la clase para la fecha de nacimiento del registro -->

				<br>
			<!-- Clase para el nombreUsuario en el registro de usuario -->
			<div class="nombreUsuario">
				<label  form="user" class="etiquetas">Nombre de Usuario: </label>
				<input type="text" name="user" class="entradas" required >
			</div>
			<!-- Fin de la clase para el nombreUsuario del registro -->
<br>
<label for="security" class="etiquetas">Pregunta de seguridad: </label>
   <select id="security" name="pregunta" required >
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
				<label form="password" class="etiquetas">Ingrese contraseña: </label>
				<input type="password" name="password" class="entradas" required>

			</div>
			<!-- Fin de la clase para la contraseña del registro -->
			<br>
			<!-- Clase para el confirmar contraseña en el registro de usuario -->
			<div class="passwordUsuarioConfirma">
				<label form="passwordAgain" class="etiquetas">Confirme contraseña: </label>
				<input type="password" name="passwordAgain" class="entradas" required >
			</div>
			<!-- Fin de la clase para el confirmar la contraseña del registro -->
			<br>
			<!-- Clase para el email en el registro de usuario -->
			<div class="correo">
				<label form="email" class="etiquetas">Correo electrónico: </label>
				<input type="email" name="email" class="entradas" required>
			</div>
			<!-- Fin de la clase para el email del registro -->

			</u>
			</b>
			   <button type="submit" name="a" class="btn btn-success">Registarse</button>





		</form>





<!----------------------------------------------------->


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
