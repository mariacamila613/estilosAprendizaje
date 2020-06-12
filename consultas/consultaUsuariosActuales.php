<?php

require("conexionBaseDatos.php");

$query="SELECT cedula , nombre, genero, carrera
FROM usuario";
$eje=pg_query($conexion, $query) or die("Error en la consulta");




echo '<table>';
 	echo '<tr>';
   		echo'<th>Documento</th>';
    	echo'<th>Apellido</th>';
    	echo'<th>Género</th>';
    	echo'<th>Carrera</th>';
  	echo'</tr>';
 	echo'<tr>';
    	


while($exe = pg_fetch_array($eje)) {
   	echo  '<td>'.$exe['cedula'];
    echo  '<td>'.$exe['nombre'];
    echo  '<td>'.$exe['genero'];
    echo  '<td>'.$exe['carrera'];
    echo '<br>';


}


?>
