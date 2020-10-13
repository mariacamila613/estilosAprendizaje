<?php

require ("../../consultas/activeSession.php");
require ("../../consultas/conexionBaseDatos.php");
include ("headAdmin.php");
include("nav.php");

?>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<!-- <script src="node_modules/sweetalert2/dist/sweetalert2.min.js"> -->

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
      <br>
      <br>
      <br>
      <br>
      <div class="breadcrumb-class">
        <h1 class="bienvenida">Hola <?php echo $varSeccion;
        ?>,  te damos la bienvenida al perfil Administrador:</h1><br>
      </div>
      <br>
      <div class="container">
        <div class="row">
          <div class="col-4">
           <a href="inicio.php"> <img class="option_pdf" src="images/user.png" ></a>
           <br>
           <a href="inicio.php"><p  style="color: black"><b>Perfil de usuario </b></p></a>
         </div>
         <div class="col-4">
           <a href="gestionUsuarios.php"><img class="option_pdf" src="images/pinon.png" ></a>
           <a href="gestionUsuarios.php"><p  style="color:black"><b>Gestión de usuarios </b></p></a>
         </div>
         <div class="col-4">
           <a href="reporteAdmin.php"><img class="option_pdf" src="images/PDF.png" >
            <a href="registroAdmin.php"><p  style="color: black; position: absolute; left: 10%"><b>Reportes </b></p></a>
           </div></a>
         </div>
       </div>

     </main>

     <!-- Footer -->
     <?php
     include ("foot.php");
     ?>

   </body>
   </html>
