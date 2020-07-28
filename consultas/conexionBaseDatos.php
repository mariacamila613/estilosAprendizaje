<?php


$conexion=pg_connect("user=postgres password=ROOT port=5432 dbname=estilos host=localhost");

	if(!$conexion){
			echo "Existe un error en la conexión, contacte con el administrador";
	}else{
		echo"";

	}



?>
