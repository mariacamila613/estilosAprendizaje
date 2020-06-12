<?php

require ("../../consultas/activeSession.php");
require ("../../consultas/conexionBaseDatos.php");
include ("head.php");
include("nav.php");

?>



  <!-- /content wrapper for padding -->

  <!-- Contenido -->
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
<!-- Clase para el nombreUsuario en el registro de usuario -->


			<!-- Clase para el nombre en el registro de usuario -->
		 
			
			

			<!-- Clase para la contraseña en el registro de usuario -->
			<div class="passwordUsuario" id="passwordUsuario"> 
				<label form="password" class="etiquetas" style = "line-height: 2em; font-size: 12pt">Contraseña: </label>
				<input type="password" name="password" class="entradas" required>

			</div>	
			<!-- Fin de la clase para la contraseña del registro -->

			<!-- Clase para el confirmar contraseña en el registro de usuario -->
			<div class="passwordUsuarioConfirma"> 
				<label form="passwordAgain" class="etiquetas" style = "line-height: 2em; font-size: 12pt">Confirme : </label>
				<input type="password" name="passwordAgain" class="entradas" required >
			</div>	
			<!-- Fin de la clase para el confirmar la contraseña del registro -->

			<!-- Clase para el email en el registro de usuario -->
			<div class="correo"> 
				<label form="email" class="etiquetas" style = "line-height: 2em; font-size: 12pt">Correo: </label>
				<input type="email" name="email" class="entradas" required>
			</div>	
			<!-- Fin de la clase para el email del registro -->
			





  <link rel="stylesheet" type="text/css" href="../vistas/css/style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
</head>
<body>
<div class="d-flex justify-content-center">
  <br>

</div>






  <div class="container">
        <div class="row">
          <div class="col-sm-4">
         
         
          </div>
          <div class="col-sm-4">
        


  <button type="submit"   class="btnA btn-success" >Actualizar datos</button>
 

<style type="text/css">
			    	label{
  display: inline-block;
  width: 80px;
}
			    </style>

    <br>
      <br>


              <style>

                  .entradas {
                      border-radius: 15px;
                      font-size: 8pt;
                      background-color: #def;
                      font-family: Arial;
                  }
                  .btnA{
                      position: absolute;

                      right: 150px;

                  }


              </style>

     
          </div>
          <div class="col-sm-4">
        
         
          </div>
        </div>
      </div>
























		
			 
			   
		</form>




	</div>
	<!-- Fin de la clase general del registro de usuario -->
	</div>
	<div class="col-lg-4">
		
	</div>






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








