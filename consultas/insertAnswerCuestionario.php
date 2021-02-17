 
<?php

require("conexionBaseDatos.php");
require ("activeSession.php");

error_reporting(0);

 

$sql = "SELECT cedula from usuario
WHERE nombre_style='$varSeccion'

";
	$ejecucion=pg_query($sql);
	$docu=pg_fetch_array($ejecucion);
	$document=$docu['cedula'];



//PRIMERA: PREGUNTA ABIERTA
$res1=$_POST['respuesta1'];




 //SEGUNDA PREGUNTA: SELECCIÓN MULTIPLE
    if (is_array($_POST['checkbox'])) {
        $selected = '';
        $numRespuestas = count($_POST['checkbox']);
        $current = 0;
        foreach ($_POST['checkbox'] as $key => $value) {
            if ($current != $numRespuestas-1)
                $selected .= $value.', ';
            else
                $selected .= $value.'.';
            $current++;
        }
    }
  
 



 //TERCER PREGUNTA: SELECCIÓN MULTIPLE
    if (is_array($_POST['checkbox3'])) {
        $selected1 = '';
        $numRespuestas = count($_POST['checkbox3']);
        $current = 0;
        foreach ($_POST['checkbox3'] as $key => $value) {
            if ($current != $numRespuestas-1)
                $selected1 .= $value.', ';
            else
                $selected1 .= $value.'.';
            $current++;
        }
    }
  
   



$dateTime = (new DateTime("now", new DateTimeZone('America/Lima')))->format('Y-m-d, H:i:s');
$hora = (new DateTime("now", new DateTimeZone('America/Lima')))->format('H:i:s');



$sqlQuery2="INSERT INTO cuestionario (documento,respuesta1,respuesta2,respuesta3,fecha,hora)
                            VALUES ('".$document."','".$res1."','".$selected."','".$selected1."','".$dateTime."','".$hora."')";

$exe=pg_query($sqlQuery2);

header("Location: ../vistas/html/inicio.php");


 











