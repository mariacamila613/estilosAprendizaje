<?php

require ("../../consultas/conexionBaseDatos.php");
include ("head.php");
include("nav.php");
$mensaje=$_GET['token'];
$cedula=$_GET['documento'];

$sql="SELECT token, cedula
FROM usuario 
WHERE cedula='$cedula'
";
$consulta=pg_query($sql);

while($recuperar = pg_fetch_array($consulta)) {
$documento=$recuperar['cedula'];
$key=$recuperar['token'];


if(password_verify($recuperar['token'], $mensaje)){
	echo "sí son iguales";

?>

  <!-- /content wrapper for padding -->

  <!-- Contenido -->
  <main class="detalle">
    <div class="breadcrumb-class"><span>Aplicación de Estilos de Aprendizaje</span></div>
 <br> <br> <br> <br>

<!----------------------------------------------------->


<label style="position: absolute; left: 40%; top: 25%;"> Ingresa el código que te enviamos a tu correo electrónico </label>

<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Inicio del div más general -->
	<!--div class="row general"> -->
	<div class="col-lg-5 offset-lg-4">


		<form class="formulario"  action="../../consultas/verify.php" name="registro" method="post">

			   <div class="nombreUsuario"> 
				<label  form="cedula" class="etiquetas">Código de recuperación: </label>
				<input type="text" name="token" class="entradas" required>
				<input name="cedula" type="hidden" value="<?php echo $cedula; ?>">
			</div>	
			<!-- Fin de la clase para el nombreUsuario del registro -->
			<br>

				
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

	
		<?php





}else{
			echo'<script type="text/javascript">
    		alert("Acción no permitida");
    		window.location.href="index.php";
    		</script>';

}


}
?>



















	
