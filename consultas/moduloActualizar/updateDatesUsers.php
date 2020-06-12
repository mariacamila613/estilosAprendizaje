<?php
// Notificar solamente errores de ejecución
error_reporting(E_ERROR | E_WARNING | E_PARSE);

include("../conexionBaseDatos.php");
include("../activeSession.php");


$nombreCompleto=$_POST["nombre"];

$fechaNacimiento=$_POST["birthday"];


if($contrasenia==$confirmarContrasenia){
//encriptación de la contraseña

$passHash = password_hash($contrasenia,  PASSWORD_DEFAULT, [15]);
}

$actualizarDatos="UPDATE usuario
SET  nombre='$nombreCompleto',  fecha_nacimiento='$fechaNacimiento'
WHERE usuario='$varSeccion'
";


$ejecucion=pg_query($actualizarDatos);
echo'<script type="text/javascript">
    alert("Datos actualizados");
    window.location.href="../../vistas/html/inicio.php";
    </script>';

