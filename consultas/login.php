<?php
require ("activeSession.php");
require("conexionBaseDatos.php");



$name_user=$_POST['uname'];
$pass_user=$_POST['psw'];












$insertar_login="SELECT usuario, cedula
FROM usuario
WHERE usuario = '$name_user'
";

$ejecutar_insertar_login= pg_query($conexion, $insertar_login) or die("Error en la consulta");


$sacar=pg_fetch_array($ejecutar_insertar_login);









$document=$sacar['cedula'];
$dateTime = (new DateTime("now", new DateTimeZone('America/Lima')))->format('Y-m-d, H:i:s');
$hora = (new DateTime("now", new DateTimeZone('America/Lima')))->format('H:i:s');


$insertarDatosLogin=" INSERT INTO login (cedula, nombre_style, fecha, hora) VALUES
('".$document."', '".$name_user."', '".$dateTime."', '".$hora."')";


// Se ejecuta la consulta que almacena los registros en la base de datos, tabla Usuario.
$ejecucion=pg_query($insertarDatosLogin);

$consulta_login="SELECT usuario, password, admin
                    FROM usuario
                    WHERE usuario = '$name_user'";

$ejecutar_consulta_login= pg_query($conexion, $consulta_login) or die("Error en la consulta");


$extraer=pg_fetch_array($ejecutar_consulta_login);



if(password_verify($pass_user, $extraer['password']) AND $extraer['admin']=='t'){


    $_SESSION['nombre_style']=$name_user;
	$ok=pg_fetch_array($ejecucion);

	$consulta="SELECT cedula
	FROM usuario
	WHERE usuario = '$name_user'
	";

	$exe=pg_query($consulta);
	$a=pg_fetch_array($exe);
	

	$b=$a['cedula'];
	

	$actualiza="
	UPDATE login
	SET cedula = $b
	WHERE nombre_style = '$name_user'
	";
	$ejec=pg_query($actualiza);




			header ("Location:../vistas/html/inicioAdmin.php");

}else{
	if (password_verify($pass_user, $extraer['password']) ) {
	
	$_SESSION['nombre_style']=$name_user;
	$ok=pg_fetch_array($ejecucion);

	$consulta="SELECT cedula
	FROM usuario
	WHERE usuario = '$name_user'
	";

	$exe=pg_query($consulta);
	$a=pg_fetch_array($exe);
	

	$b=$a['cedula'];
	

	$actualiza="
	UPDATE login
	SET cedula = $b
	WHERE nombre_style = '$name_user'
	";
	$ejec=pg_query($actualiza);

	header ("Location:../vistas/html/inicio.php");
}else{

header ("Location:../vistas/html/index.php?fallo=true");
	}
	
}


?>