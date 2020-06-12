<?php

require ("../../consultas/activeSession.php");
require ("../../consultas/conexionBaseDatos.php");
include ("headAdmin.php");
include("nav.php");

?>



   
  <!-- /content wrapper for padding -->

  <!-- Contenido -->
  <main class="detalle">
    <div class="breadcrumb-class"><span>Gestión de Usuarios</span></div>
 <br> <br>  <br> <br>

	
  ACÁ VA EL CRUD DE USUARIOS
      <br>

<a href="registroAdmin.php"><button type="button" style = "line-height: 2em; font-size: 12pt" >Crear nuevos usuarios</button></a><br>
      <a href="consultaUsuarios.php"><button type="button" style = "line-height: 2em; font-size: 12pt" >Consultar usuarios</button></a><br>


<!----------------------------------------------------->



  </main>

  <!-- Footer -->
  <?php
  include ("foot.php");
  ?>

</body>
</html>

















	
