<?php

require ("../../consultas/conexionBaseDatos.php");

$query="SELECT id, pregunta FROM question_security";

$resultado=pg_query($conexion, $query);
$numReg=pg_num_rows($resultado);
if ($numReg>0) {

    while ($fila=pg_fetch_array($resultado)) {

        echo "<option value=".$fila['id'].">".$fila['pregunta']."</option>";
    }
}else{
    echo "No hay datos en la base de datos";
}

?>