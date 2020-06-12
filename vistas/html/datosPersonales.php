<?php

require ("../../consultas/activeSession.php");
require ("../../consultas/conexionBaseDatos.php");
include ("head.php");
include("nav.php");

?>



  <!-- /content wrapper for padding -->

  <!-- Contenido -->
  <main class="detalle">
    <div class="breadcrumb-class"><span>Aplicación de Estilos de Aprendizaje</span></div>
 <br> <br> 





<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

 
<!-- Inicio del div más general -->
	<!--div class="row general"> -->
	<div class="col-lg-5 offset-lg-4">
		<div class="segundaClase" --> 

		<form class="formulario"  action="../../consultas/moduloActualizar/updateDatesUsers.php" name="actualizar" method="post">

			<!-- Clase para el nombre en el registro de usuario -->
		 
			
			<div class="nombreUsuario"> 
				<label form="nombre" style = "line-height: 2em; font-size: 12pt">Nombre: </label>
				<input type="text" name="nombre" class="entradas" required>
			</div>	
			<!-- Fin de la clase para el nombre del registro -->


			
<br>

			<!-- Clase para la fecha de nacimiento en el registro de usuario -->
			<div class="fechaNacimiento"> 
				<label form="birthday" class="etiquetas" style = "line-height: 2em; font-size: 12pt">Fecha nacimiento: </label>
				<input type="date" name="birthday" class="entradas" required>
			</div>	
			<!-- Fin de la clase para la fecha de nacimiento del registro -->

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

     
          </div>
          <div class="col-sm-4">
        
         
          </div>
        </div>
      </div>







</form>


	<?php
	if(isset($_GET["fallo"]) && $_GET["fallo"] == 'true')
                echo "<div style='color:red'>Las contraseñas no son iguales</div>";
     ?>





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

  </main>

  <!-- Footer -->
  <?php
  include ("foot.php");
  ?>

</body>
</html>


