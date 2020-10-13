<?php

require ("../../consultas/activeSession.php");
require ("../../consultas/conexionBaseDatos.php");
require ("../../consultas/consultaUsuariosActuales.php");
include ("headAdmin.php");
include("nav.php");

?>

  <!-- Contenido -->
  <main class="detalle">
     <br><br><br>
    <div class="breadcrumb-class"><span>Usuarios registrados</span></div>



<table class="table table-hover">

      <tr>
        <th  class="table-warning" style="text-align: center;">Nombre</th>
        <th  class="table-warning" style="text-align: center;">Fecha de registro</th>
        <th  class="table-warning" style="text-align: center;">Administrador</th>
      </tr>
<?php

while($exe = pg_fetch_array($eje)) {
  $nombre=$exe['nombre_style'];
  $fecha=$exe['fecha'];
  $admin=$exe['admin'];
  ?>

        <tr>
          <td  class="table-Primary" style="text-align: center;"><?php echo $nombre;?></td>
          <td class="table-Primary" style="text-align: center;"><?php echo $fecha;?></td>
          <td  class="table-Primary" style="text-align: center;"><?php echo $admin;?></td>



          <?php

}


 ?>
  </table>
<!----------------------------------------------------->



  </main>

  <!-- Footer -->
  <?php
  include ("foot.php");
  ?>

</body>
</html>
