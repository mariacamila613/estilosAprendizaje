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



$s = "SELECT nombre from test 
WHERE id_test=1

";
	$ej=pg_query($s);
	$doc=pg_fetch_array($ej);
	$test=$doc['nombre'];



$b="SELECT cantidad 
FROM resp_usu
WHERE cedula='$document' AND test='Chaea'
ORDER BY cantidad desc 
limit 1 
";
$sac=pg_query($b);
$p=pg_fetch_array($sac);



$canti=$p['cantidad']+1;


$totalActivo=0;
$totalReflexivo=0;
$totalTeorico=0;
$totalPragmatico=0;



for($i=1; $i<=80; $i++){


	if(isset($_REQUEST[''+$i])){
			if($_REQUEST[''+$i]=="1" OR $_REQUEST[''+$i]=="0"){
				$a=$_REQUEST[''+$i];
			
				$dateTime = (new DateTime("now", new DateTimeZone('America/Lima')))->format('Y-m-d, H:i:s');
				$hora = (new DateTime("now", new DateTimeZone('America/Lima')))->format('H:i:s');
				$sql="INSERT INTO resp_usu (cedula, fecha, id_test, hora, valor_respuesta, id_pregunta, test, cantidad)
				 values ('".$document."', '".$dateTime."' ,1, '".$hora."','".$a."', $i, '".$test."', '".$canti."')  ";
				$exe=pg_query($sql);

					if(($i==3 AND $a=='1') OR ($i==5 AND $a=='1') OR ($i==7 AND $a=='1') OR ($i==9 AND $a=='1') OR ($i==13 AND $a=='1') OR ($i==20 AND $a=='1') OR ($i==26 AND $a=='1') OR ($i==27 AND $a=='1') OR ($i==35 AND $a=='1') OR ($i==37 AND $a=='1') or ($i==41 AND $a=='1')  or ($i==43 AND $a=='1') or ($i==46 AND $a=='1') or ($i==48 AND $a=='1') or ($i==51 AND $a=='1') or ($i==61 AND $a=='1') or ($i==67 AND $a=='1') or ($i==74 AND $a=='1') or ($i==75 AND $a=='1') or ($i==77 AND $a=='1')){
				    $totalActivo=$totalActivo+1;
                }


                	if(($i==10 AND $a=='1') OR ($i==16 AND $a=='1') OR ($i==18 AND $a=='1') OR ($i==19 AND $a=='1') OR ($i==28 AND $a=='1') OR ($i==31 AND $a=='1') OR ($i==32 AND $a=='1') OR ($i==34 AND $a=='1') OR ($i==36 AND $a=='1') OR ($i==39 AND $a=='1') or ($i==42 AND $a=='1')  or ($i==44 AND $a=='1') or ($i==49 AND $a=='1') or ($i==55 AND $a=='1') or ($i==58 AND $a=='1') or ($i==63 AND $a=='1') or ($i==65 AND $a=='1') or ($i==69 AND $a=='1') or ($i==70 AND $a=='1') or ($i==79 AND $a=='1')){
				    $totalReflexivo=$totalReflexivo+1;
                }


                	if(($i==2 AND $a=='1') OR ($i==4 AND $a=='1') OR ($i==6 AND $a=='1') OR ($i==11 AND $a=='1') OR ($i==15 AND $a=='1') OR ($i==17 AND $a=='1') OR ($i==21 AND $a=='1') OR ($i==23 AND $a=='1') OR ($i==25 AND $a=='1') OR ($i==29 AND $a=='1') or ($i==33 AND $a=='1')  or ($i==45 AND $a=='1') or ($i==50 AND $a=='1') or ($i==54 AND $a=='1') or ($i==60 AND $a=='1') or ($i==64 AND $a=='1') or ($i==66 AND $a=='1') or ($i==71 AND $a=='1') or ($i==78 AND $a=='1') or ($i==80 AND $a=='1')){
				    $totalTeorico=$totalTeorico+1;
                }

                 	if(($i==1 AND $a=='1') OR ($i==8 AND $a=='1') OR ($i==12 AND $a=='1') OR ($i==14 AND $a=='1') OR ($i==22 AND $a=='1') OR ($i==24 AND $a=='1') OR ($i==30 AND $a=='1') OR ($i==38 AND $a=='1') OR ($i==40 AND $a=='1') OR ($i==47 AND $a=='1') or ($i==52 AND $a=='1')  or ($i==53 AND $a=='1') or ($i==56 AND $a=='1') or ($i==57 AND $a=='1') or ($i==59 AND $a=='1') or ($i==62 AND $a=='1') or ($i==68 AND $a=='1') or ($i==72 AND $a=='1') or ($i==73 AND $a=='1') or ($i==76 AND $a=='1')){
				    $totalPragmatico=$totalPragmatico+1;
                }

			}
}else{
	$dateTime = (new DateTime("now", new DateTimeZone('America/Lima')))->format('Y-m-d, H:i:s');
				$hora = (new DateTime("now", new DateTimeZone('America/Lima')))->format('H:i:s');
	$sql="INSERT INTO resp_usu (fecha, id_test, hora, valor_respuesta, id_pregunta, test)
				 values ('".$dateTime."' ,1, '".$hora."', 0, $i, '".$test."')  ";
				$exe=pg_query($sql);
}

}




$totalPragma=(($totalPragmatico*100)/20);
$totalAct=(($totalActivo*100)/20);
$totalRefle=(($totalReflexivo*100)/20);
$totalTeor=(($totalTeorico*100)/20);


$sqlQuery="INSERT INTO consolidado (documento, fecha, hora, test, activo, reflexivo, teorico, pragmatico)
                values ('".$document."','".$dateTime."','".$hora."','Chaea','".$totalAct."','".$totalRefle."','".$totalTeor."','".$totalPragma."')";
$exe=pg_query($sqlQuery);


echo'<script type="text/javascript">
    alert("Hemos recibido tus respuestas");
    window.location.href="../vistas/html/perfiles.php";
    </script>';
