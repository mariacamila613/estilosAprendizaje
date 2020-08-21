<?php

require("conexionBaseDatos.php");

$query="SELECT nombre, correo, admin, fecha
from usuario
";
$eje=pg_query($conexion, $query) or die("Error en la consulta");



?>
