<?php
include("conexionBaseDatos.php");
$resultados=array();



$cedulas = array("1053863699","1007233447","1002633776","1002656028","1002609362","1002632626","1002566335","1004924953","1002634921","1002567338","1004755636","1002633205","1005966200","1053852205","1053861173","100723116","1006508246","1002633282","1060597640","1002609351","1053863939","1005089103","1002636539","1002632821","1019113377","1002609423","1193138571","1002656548","1053828905");


//echo $cedulas[0];

for($i=0; $i<29; $i++){

		$consulta="SELECT sum (valor_respuesta )as teorico
FROM resp_usu
WHERE cedula='$cedulas[$i]' AND (id_pregunta=2 OR id_pregunta=4 OR id_pregunta=6 OR id_pregunta=11 OR id_pregunta=15 OR id_pregunta=17 OR id_pregunta=21 OR id_pregunta=23 OR id_pregunta=25 OR id_pregunta=29 OR id_pregunta=33 OR id_pregunta=45 OR id_pregunta=50 OR id_pregunta=54 OR id_pregunta=60 OR id_pregunta=64 OR id_pregunta=66 OR id_pregunta=71 OR id_pregunta=78 OR id_pregunta=80) ";

	$exe=pg_query($conexion, $consulta);
	while ($extraer=pg_fetch_array($exe)) {
		$resultados=$extraer['teorico'];

		echo $resultados;
		echo '<br>';
	}
	
}


?>