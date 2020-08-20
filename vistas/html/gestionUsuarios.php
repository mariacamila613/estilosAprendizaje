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


 <div class="container">
     <div class="row">
         <div class="col-sm-4" id="columna1">
             <div class="a">
             <h2>Usuarios registrados </h2><br><br><br>
             <p>Se pueden observar los usuarios que se han registrado hasta el momento</p><br><br><br>
          <a href="consultaUsuarios.php"><button type="button" class="btn btn-success" >Consultar usuarios</button></a><br>
         </div>
         </div>
         <div class="col-sm-4">


         </div>
         <div class="col-sm-4">
             <div class="a">  <h2>Crear usuarios: </h2><br><br><br>
             <p>Acá podrás crear nuevos usuarios con perfil de administrador.</p><br><br><br>
          <a href="registroAdmin.php"><button type="button" class="btn btn-success">Crear nuevos usuarios</button></a><br>
             </div>
         </div>
     </div>
 </div>





<!----------------------------------------------------->



  </main>

  <!-- Footer -->
  <?php
  include ("foot.php");
  ?>

</body>
</html>
