	<?php
require("conexionBaseDatos.php");

	
  if(isset($_GET["fallo"]) && $_GET["fallo"] == 'true')
                echo "<div style='color:red'>Usuario y/o contraseña inválidos.</div>";
     ?>
