<?php

require ("../../consultas/conexionBaseDatos.php");

$query="SELECT nombre_carrera, codigo_carrera FROM programa_curricular";

$resultado=pg_query($conexion, $query);
$numReg=pg_num_rows($resultado);
if ($numReg>0) {

    while ($fila=pg_fetch_array($resultado)) {

        echo "<option value=".$fila['codigo_carrera'].">".$fila['nombre_carrera']."</option>";
    }
}else{
    echo "No hay datos en la base de datos";
}

?>