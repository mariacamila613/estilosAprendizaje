<?php

echo session_id();

session_start();
// error_reporting(0);
$varSeccion=$_SESSION['nombre_style'];






//$cedula=$_SESSION['cedula'];



if($varSeccion== null || $varSeccion==''){
    // echo "Debe iniciar sesion";
    header("Location: index.php");
    // die();
}
// echo $_SESSION['usuario'];


?>