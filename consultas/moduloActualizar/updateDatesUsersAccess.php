<?php
// Notificar solamente errores de ejecución
error_reporting(E_ERROR | E_WARNING | E_PARSE);

include("../conexionBaseDatos.php");
include("../activeSession.php");

$contrasenia=$_POST["password"];
$confirmarContrasenia=$_POST["passwordAgain"];
$correo=$_POST["email"];


if($contrasenia==$confirmarContrasenia){
//encriptación de la contraseña

$passHash = password_hash($contrasenia,  PASSWORD_DEFAULT, [15]);
}

$actualizarDatos="UPDATE usuario
SET password='$passHash', correo='$correo'
WHERE usuario='$varSeccion'
";


$ejecucion=pg_query($actualizarDatos);

echo'<script type="text/javascript">
    alert("Datos actualizados");
    window.location.href="../../vistas/html/inicio.php";
    </script>';
