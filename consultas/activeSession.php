<?php

echo session_id();
session_start();

$varSeccion=$_SESSION['nombre_style'];
// $a=$_SESSION['correo'];

if($varSeccion== null || $varSeccion==''){

    header("Location: index.php");

}



?>