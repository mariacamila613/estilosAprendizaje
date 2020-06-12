<?php

require ("../../consultas/conexionBaseDatos.php");

$query="SELECT admin FROM administrador";

$resultado=pg_query($conexion, $query) or die("Error".pg_last_error());
$numReg=pg_num_rows($resultado);
if ($numReg>0) {

    while ($fila=pg_fetch_array($resultado)) {

        echo "<option value=".$fila['admin'].">".$fila['admin']."</option>";
    }
}else{
    echo "No hay datos en la base de datos";
}









//pg_close($conexion);

?>