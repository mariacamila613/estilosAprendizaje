<?php
require("conexionBaseDatos.php");

$password=$_POST['password'];
$passwordAgain=$_POST['passwordAgain'];
$cedula=$_POST['cedula'];



if($password==$passwordAgain){

$passHash = password_hash($password,  PASSWORD_DEFAULT, [15]);
	
$actualizarDatos="UPDATE usuario
SET  password='$passHash'
WHERE cedula='$cedula'
";


$ejecucion=pg_query($actualizarDatos);
echo'<script type="text/javascript">
        alert("Contraseña modificada con éxito");
        window.location.href="../vistas/html/index.php";
        </script>';

	
}else{
	



echo'<script type="text/javascript">
        alert("Las contraseñas no son iguales, verifique nuevamente");
        window.location.href="../vistas/html/index.php";
        </script>';

}



?>