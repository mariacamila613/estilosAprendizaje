<?php
require ("activeSession.php");
require("conexionBaseDatos.php");
//Recibo por post
$email_user=$_POST['email'];
$pass_user=$_POST['psw'];
// var_dump($email_user);	



//Saco la cédula y el usuario
$insertar_login="SELECT nombre_style, cedula, correo
FROM usuario
WHERE correo = '$email_user'
";
$ejecutar_insertar_login= pg_query($insertar_login);
//Saco la cédula y el usuario de la tabla Usuario
$sacar=pg_fetch_array($ejecutar_insertar_login);

//Cédula
echo $document=$sacar['cedula'];
// exit();
//Variables
$dateTime = (new DateTime("now", new DateTimeZone('America/Lima')))->format('Y-m-d, H:i:s');
$hora = (new DateTime("now", new DateTimeZone('America/Lima')))->format('H:i:s');

// //Insertar en LOGIN
$insertarDatosLogin=" INSERT INTO login (cedula, email, fecha, hora) VALUES
('".$document."', '".$email_user."', '".$dateTime."', '".$hora."')";

// //Ejecuto insertar LOGIN
$ejecucion=pg_query($insertarDatosLogin);

// //Saco los datos de Usuario para validar
$consulta_login="
SELECT nombre_style, password, admin
FROM   usuario
WHERE  correo='$email_user'";

$ejecutar_consulta_login= pg_query($conexion, $consulta_login) or die("Error en la consulta");

// //Consulta
$extraer=pg_fetch_array($ejecutar_consulta_login);

$nombre=$extraer['nombre_style'];
// //Mirar la clave y ADMIN
if(password_verify($pass_user, $extraer['password']) AND $extraer['admin']=='Sí'){

	$_SESSION['nombre_style']=$nombre;
	// $ok=pg_fetch_array($ejecucion);

	// $consultaCedula="SELECT cedula
	// FROM usuario
	// WHERE correo = '$email_user'
	// ";

	// $exe=pg_query($consultaCedula);
	// $ced=pg_fetch_array($exe);
	

	// echo $documento=$ced['cedula'];

	// $actualiza="
	// UPDATE login
	// SET cedula = $document
	// WHERE email = '$email_user'
	// ";
	// $ejec=pg_query($actualiza);




	header ("Location:../vistas/html/inicioAdmin.php");


}else{
	if (password_verify($pass_user, $extraer['password']) ) {

	$_SESSION['nombre_style']=$nombre;
	$ok=pg_fetch_array($ejecucion);

		$consulta="SELECT cedula
		FROM usuario
		WHERE correo = '$email_user'
		";

		$exe=pg_query($consulta);
		$a=pg_fetch_array($exe);


		$b=$a['cedula'];


		$actualiza="
		UPDATE login
		SET cedula = '$b'
		WHERE email = '$email_user'
		";
		$ejec=pg_query($actualiza);

		header ("Location:../vistas/html/inicio.php");
	}else{

		header ("Location:../vistas/html/index.php?fallo=true");
	}
	
}


?>