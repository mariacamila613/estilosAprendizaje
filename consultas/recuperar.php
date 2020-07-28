<?php
require("conexionBaseDatos.php");


$cedula=$_POST["cedula"];
$user=$_POST["user"];
$email=$_POST["email"];
$pregunta=$_POST["pregunta"];
$securityAnswer=$_POST["securityAnswer"];


$query="SELECT cedula, nombre, correo, pregunta, respuesta
FROM usuario
WHERE cedula='$cedula'";

$consulta=pg_query($query);

$desino=$email;
while($recuperar = pg_fetch_array($consulta)) {
$documento=$recuperar['cedula'];
$nombre=$recuperar['nombre'];
$correo=$recuperar['correo'];
$preguntaSeguridad=$recuperar['pregunta'];
$respuesta=$recuperar['respuesta'];
	

	
		if ($documento==$cedula AND $user==$nombre AND $correo==$email AND $preguntaSeguridad==$pregunta AND $respuesta==$securityAnswer) {

			$permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyz';
			$encabezado="Con este código podrás restablecer la contraseña, recuerda que sólo tienes 5 minutos";
		
			$mensaje=substr(str_shuffle($permitted_chars), 0, 25);
			$sql="UPDATE usuario
			SET  token='$mensaje'
			WHERE cedula='$cedula'
			";
			$ejecutar=pg_query($sql);
			$envio=mail($desino, "Recuperación de contraseña", $mensaje, $encabezado);

			@var_dump($envio);

			$token = password_hash($mensaje,  PASSWORD_DEFAULT, [15]);

				header("Location: ../vistas/html/cambiarContraseña.php?token=$token&documento=$documento"); 
		}else{
				
			echo'<script type="text/javascript">
    		alert("Los datos no coinciden con los de tu registro");
    		window.location.href="../vistas/html/recuperaContraseña.php";
    		</script>';
		


		}

	
}


?>
