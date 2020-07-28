<?php
require("conexionBaseDatos.php");

$token=$_POST['token'];
$cedula=$_POST['cedula'];
//echo $token;
$sql="SELECT token, cedula
FROM usuario 
WHERE cedula='$cedula'
";
$consulta=pg_query($sql);

while($recuperar = pg_fetch_array($consulta)) {
$documento=$recuperar['cedula'];
$key=$recuperar['token'];

$a=trim($token);
$b=trim($recuperar['token']);

if($a==$b){


	$passHash = password_hash($b,  PASSWORD_DEFAULT, [15]);

	header("Location: ../vistas/html/update.php?token=$passHash&cedula=$documento");

}else
				
			echo'<script type="text/javascript">
    		alert("El código no es el mismo enviado al correo");
    		window.history.back(-1);
    		</script>';

}

?>