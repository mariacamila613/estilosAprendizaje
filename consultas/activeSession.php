<?php

echo session_id();
session_start();

$varSeccion=$_SESSION['nombre_style'];

if($varSeccion== null || $varSeccion==''){

    header("Location: index.php");

}



?>