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

<!-- Inicio del div más general -->
	<!--div class="row general"> -->
	<div class="col-lg-6 offset-lg-4">
		<h2>¿Qué tipo de datos deseas actualizar?	</h2>

<br><br><br>


		
	</div>
      <div class="container">
          <div class="row">
              <div class="col-sm-4" id="columna1">
                  <div class="a">
                  <h2> Datos personales: </h2><br><br><br>
                  <p> Acá podrás actualizar tu fecha de nacimiento o tu nombre.</p><br><br><br>
                  <a href="datosPersonales.php" class="btn btn-success">Personales</a>
              </div>
              </div>
              <div class="col-sm-4">


              </div>
              <div class="col-sm-4">
                  <div class="a">  <h2>Datos para el acceso: </h2><br><br><br>
                  <p>Acá podrás actualizar la contraseña y tu correo electrónico.</p><br><br><br>
                  <a  href="datosAcceso.php" class="btn btn-success">Datos de acceso</a>
                  </div>
              </div>
          </div>
      </div>



      </p>
      </div>

      <style>
          .a {

              margin: 1rem;
              padding: 1rem;
              border: 2px solid #ccc;
              /* IMPORTANTE */
              text-align: center;
          }
      </style>








  </main>

  <!-- Footer -->
  <?php
  include ("foot.php");
  ?>

</body>
</html>

















	
