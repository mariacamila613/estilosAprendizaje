
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

 
$vectorV=array();
$vectorA=array();
$vectorR=array();
$vectorK=array();

$res1=(int)$_POST['1'];
if ($res1==2) {
	$res1=1;
    array_push($vectorV, $res1);
} elseif 
	($res1 == 3) {
	 $res1=1;
     array_push($vectorR, $res1);	
} elseif 
	($res1 == 4) {
 	 $res1=1;
	 array_push($vectorK, $res1);    
}else {	
     array_push($vectorA, $res1);
}


$res2=(int)$_POST['2'];
if ($res2==2) {
	$res2=1;
    array_push($vectorV, $res2);
} elseif 
	($res2 == 3) {
	 $res2=1;
     array_push($vectorR, $res2);	
} elseif 
	($res2 == 4) {
 	 $res2=1;
	 array_push($vectorK, $res2);    
}else {	
     array_push($vectorA, $res2);
}


$res3=(int)$_POST['3'];
if ($res3==2) {
	$res3=1;
    array_push($vectorK, $res3);
} elseif 
	($res3 == 3) {
	 $res3=1;
     array_push($vectorR, $res3);	
} elseif 
	($res3 == 4) {
 	 $res3=1;
	 array_push($vectorV, $res3);    
}else {	
     array_push($vectorA, $res3);
}


$res4=(int)$_POST['4'];
if ($res4==2) {
	$res4=1;
    array_push($vectorK, $res4);
} elseif 
	($res4 == 3) {
	 $res4=1;
     array_push($vectorV, $res4);	
} elseif 
	($res4 == 4) {
 	 $res4=1;
	 array_push($vectorA, $res4);    
}else {	
     array_push($vectorR, $res4);
}


$res5=(int)$_POST['5'];
if ($res5==2) {
	$res5=1;
    array_push($vectorR, $res5);
} elseif 
	($res5 == 3) {
	 $res5=1;
     array_push($vectorA, $res5);	
} elseif 
	($res5 == 4) {
 	 $res5=1;
	 array_push($vectorV, $res5);    
}else {	
     array_push($vectorK, $res5);
}


$res6=(int)$_POST['6'];
if ($res6==2) {
	$res6=1;
    array_push($vectorV, $res6);
} elseif 
	($res6 == 3) {
	 $res6=1;
     array_push($vectorR, $res6);	
} elseif 
	($res6 == 4) {
 	 $res6=1;
	 array_push($vectorA, $res6);    
}else {	
     array_push($vectorK, $res6);
}


$res7=(int)$_POST['7'];
if ($res7==2) {
	$res7=1;
    array_push($vectorA, $res7);
} elseif 
	($res7 == 3) {
	 $res7=1;
     array_push($vectorR, $res7);	
} elseif 
	($res7 == 4) {
 	 $res7=1;
	 array_push($vectorV, $res7);    
}else {	
     array_push($vectorK, $res7);
}


$res8=(int)$_POST['8'];
if ($res8==2) {
	$res8=1;
    array_push($vectorV, $res8);
} elseif 
	($res8 == 3) {
	 $res8=1;
     array_push($vectorK, $res8);	
} elseif 
	($res8 == 4) {
 	 $res8=1;
	 array_push($vectorA, $res8);    
}else {	
     array_push($vectorR, $res8);
}


$res9=(int)$_POST['9'];
if ($res9==2) {
	$res9=1;
    array_push($vectorA, $res9);
} elseif 
	($res9 == 3) {
	 $res9=1;
     array_push($vectorR, $res9);	
} elseif 
	($res9 == 4) {
 	 $res9=1;
	 array_push($vectorK, $res9);    
}else {	
     array_push($vectorV, $res9);
}

$res10=(int)$_POST['10'];
if ($res10==2) {
	$res10=1;
    array_push($vectorV, $res10);
} elseif 
	($res10 == 3) {
	 $res10=1;
     array_push($vectorK, $res10);	
} elseif 
	($res10== 4) {
 	 $res10=1;
	 array_push($vectorR, $res10);    
}else {	
     array_push($vectorA, $res10);
}


$res11=(int)$_POST['11'];
if ($res11==2) {
	$res11=1;
    array_push($vectorR, $res11);
} elseif 
	($res11 == 3) {
	 $res11=1;
     array_push($vectorV, $res11);	
} elseif 
	($res11== 4) {
 	 $res11=1;
	 array_push($vectorK, $res11);    
}else {	
     array_push($vectorA, $res11);
}


$res12=(int)$_POST['12'];
if ($res12==2) {
	$res12=1;
    array_push($vectorR, $res12);
} elseif 
	($res12 == 3) {
	 $res12=1;
     array_push($vectorA, $res12);	
} elseif 
	($res12== 4) {
 	 $res12=1;
	 array_push($vectorV, $res12);    
}else {	
     array_push($vectorK, $res12);
}


$res13=(int)$_POST['13'];
if ($res13==2) {
	$res13=1;
    array_push($vectorR, $res13);
} elseif 
	($res13 == 3) {
	 $res13=1;
     array_push($vectorA, $res13);	
} elseif 
	($res13== 4) {
 	 $res13=1;
	 array_push($vectorV, $res13);    
}else {	
     array_push($vectorK, $res13);
}


$res14=(int)$_POST['14'];
if ($res14==2) {
	$res14=1;
    array_push($vectorR, $res14);
} elseif 
	($res14 == 3) {
	 $res14=1;
     array_push($vectorV, $res14);	
} elseif 
	($res14== 4) {
 	 $res14=1;
	 array_push($vectorA, $res14);    
}else {	
     array_push($vectorK, $res14);
}


$res15=(int)$_POST['15'];
if ($res15==2) {
	$res15=1;
    array_push($vectorR, $res15);
} elseif 
	($res15 == 3) {
	 $res15=1;
     array_push($vectorA, $res15);	
} elseif 
	($res15== 4) {
 	 $res15=1;
	 array_push($vectorV, $res15);    
}else {	
     array_push($vectorK, $res15);
}

$res16=(int)$_POST['16'];
if ($res16==2) {
	$res16=1;
    array_push($vectorK, $res16);
} elseif 
	($res16 == 3) {
	 $res16=1;
     array_push($vectorA, $res16);	
} elseif 
	($res16== 4) {
 	 $res16=1;
	 array_push($vectorV, $res16);    
}else {	
     array_push($vectorR, $res16);
}




$visual=	array_sum($vectorV);
$auditivo=	array_sum($vectorA);
$lector=	array_sum($vectorR);
$kines=		array_sum($vectorK);



$dateTime = (new DateTime("now", new DateTimeZone('America/Lima')))->format('Y-m-d, H:i:s');
$hora = (new DateTime("now", new DateTimeZone('America/Lima')))->format('H:i:s');

$sqlQuery2="INSERT INTO consolidado_felder_vark (documento, fecha, hora, test, visual, auditivo, lector_escritor, kinestesico)
                values ('".$document."','".$dateTime."','".$hora."','Vark',".$visual.",".$auditivo.",".$lector.",".$kines.")";
$exe=pg_query($sqlQuery2);



header("Location: ../vistas/html/perfilesVark.php");














