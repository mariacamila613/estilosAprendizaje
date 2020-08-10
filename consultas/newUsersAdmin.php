<?php

include("conexionBaseDatos.php");


//Se reciben por método Post las variables del formulario de registro ubicado en /vistas/html/registro.php
$nombreUsuario=$_POST["name"];
$documento=$_POST["document"];
$admin=$_POST["admin"];
$genero=$_POST["genero"];
$carrera=$_POST["carrera"];
$fechaNacimiento=$_POST["birthday"];
$usuario=$_POST["user"];
$pregunta=$_POST['pregunta'];
$pregunta_Respuesta=$_POST['securityAnswer'];
$contrasenia=$_POST["password"];
$confirmarContrasenia=$_POST["passwordAgain"];
$correo=$_POST["email"];
$fechaActual=(new DateTime("now", new DateTimeZone('America/Lima')))->format('d-m-y, H:i:s');
$hora = (new DateTime("now", new DateTimeZone('America/Lima')))->format('H:i:s');


if($contrasenia==$confirmarContrasenia){
//encriptación de la contraseña

	$passHash = password_hash($contrasenia,  PASSWORD_DEFAULT, [15]);

//Insertar en la base de datos los registros.
$insertarDatosRegistro=" INSERT INTO usuario (cedula, nombre, fecha_nacimiento, usuario, password, correo, fecha, hora, genero, carrera, pregunta, respuesta, admin) VALUES
('".$documento."', '".$nombreUsuario."', '".$fechaNacimiento."','".$usuario."', '".$passHash."', '".$correo."', '".$fechaActual."', '".$hora."', '".$genero."', '".$carrera."', '".$pregunta."','".$pregunta_Respuesta."','".$admin."')";


// Se ejecuta la consulta que almacena los registros en la base de datos, tabla Usuario.
$ejecucion=pg_query($insertarDatosRegistro);

//Si la consulta se ejecuta correctamente, se abren
	if(!$ejecucion){
		echo "Ha ocurrido un error, consulte con el administrador";

	}else{
		echo'<script type="text/javascript">
    alert("Usuario registrado con éxito");
    window.location.href="../vistas/html/gestionUsuarios.php";
    </script>';


	}


}else{
	header("Location: ../vistas/html/registro.php?fallo=true");

}


?>
