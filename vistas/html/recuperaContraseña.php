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


<label style="position: absolute; left: 40%; top: 25%;"> Ingresa los datos que usaste al momento de registrarte </label>

<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Inicio del div más general -->
	<!--div class="row general"> -->
	<div class="col-lg-5 offset-lg-4">


		<form class="formulario"  action="../../consultas/recuperar.php" name="registro" method="post">

			   <div class="nombreUsuario"> 
				<label  form="cedula" class="etiquetas">Documento: </label>
				<input type="number" name="cedula" class="entradas" required >
			</div>	
			<!-- Fin de la clase para el nombreUsuario del registro -->
			<br>

           <div class="nombreUsuario"> 
				<label  form="user" class="etiquetas">Nombre de Usuario: </label>
				<input type="text" name="user" class="entradas" required >
			</div>	
			<!-- Fin de la clase para el nombreUsuario del registro -->
			<br>
			<!-- Clase para la contraseña en el registro de usuario -->
			<div class="email" id="passwordUsuario"> 
				<label form="email" class="etiquetas">Correo electrónico: </label>
				<input type="email" name="email" class="entradas" required>
				
			</div>	
			<br>
			<div class=""> 
				<label form="security" class="etiquetas">Pregunta de seguridad: </label>
				 <select class="entradas" name="pregunta" required>
                    <option selected></option>
                    <?php include("passwordQuestion.php");?>
                </select>
			</div>	
			<br>

			<div> 
				<label form="security" class="etiquetas">Respuesta a tu pregunta:</label>
				<input type="text" name="securityAnswer" class="entradas" required>
			</div>		
			<br>
			<button type="submit" name="a" class="btnA btn-success">Recuperar contraseña</button>

		</form>

	</div>
	<!-- Fin de la clase general del registro de usuario -->
	</div>
	<div class="col-lg-4">
		
	</div>





<style>

    .entradas {
        border-radius: 15px;
        font-size: 8pt;
        background-color: #def;
        font-family: Arial;
    }
    .btnA{
        position: absolute;
        left: 100px;
        right: 150px;

    }


</style>
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

















	
