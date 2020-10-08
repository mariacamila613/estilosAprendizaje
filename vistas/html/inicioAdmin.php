<?php

require ("../../consultas/activeSession.php");
require ("../../consultas/conexionBaseDatos.php");
include ("headAdmin.php");
include("nav.php");

 ?>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<!-- <script src="node_modules/sweetalert2/dist/sweetalert2.min.js"> -->
  
</script>

<script type="text/javascript" >

Swal.fire({
  icon: 'success',
  title: 'Bienvenido al perfil de Administrador!'
})
    </script>

<!DOCTYPE html>
<html>
	<head>


	</head>
<body>



  <main class="detalle">
    <div class="breadcrumb-class">

<h1 class="bienvenida">Hola <?php echo $varSeccion;
?>,  te damos la bienvenida al perfil Administrador:

 <br>


</h1>
    </div>



	<div>


<div class="panel panel-default">



  </main>

  <!-- Footer -->
  <?php
  include ("foot.php");
  ?>

</body>
</html>
