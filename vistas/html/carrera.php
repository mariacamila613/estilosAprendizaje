<?php

require ("../../consultas/conexionBaseDatos.php");

$query="SELECT carrera FROM programa_curricular";

$resultado=pg_query($conexion, $query) or die("Error".pg_last_error());
$numReg=pg_num_rows($resultado);
if ($numReg>0) {

    while ($fila=pg_fetch_array($resultado)) {

        echo "<option value=".$fila['carrera'].">".$fila['carrera']."</option>";
    }
}else{
    echo "No hay datos en la base de datos";
}

	









//pg_close($conexion);

?>