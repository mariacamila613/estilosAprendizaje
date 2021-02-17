
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



$vectorActivoOpcionesA=array();
$vectorActivoOpcionesB=array();
$vectorSensorialOpcionesA=array();
$vectorSensorialOpcionesB=array();
$vectorVisualOpcionesA=array();
$vectorVisualOpcionesB=array();
$vectorSecuencialOpcionesA=array();
$vectorSecuencialOpcionesB=array();



$respuesta1=(int)$_POST['1'];
if($respuesta1==-1){
	$respuesta1=1;
	array_push($vectorActivoOpcionesB, $respuesta1);
}else{
	array_push($vectorActivoOpcionesA, $respuesta1);
}

$respuesta2=(int)$_POST['2'];
if($respuesta2==-1){
	$respuesta2=1;
	array_push($vectorSensorialOpcionesB, $respuesta2);
}else{
	array_push($vectorSensorialOpcionesA, $respuesta2);
}

$respuesta3=(int)$_POST['3'];
if($respuesta3==-1){
	$respuesta3=1;
	array_push($vectorVisualOpcionesB, $respuesta3);
}else{
	array_push($vectorVisualOpcionesA, $respuesta3);
}

$respuesta4=(int)$_POST['4'];
if($respuesta4==-1){
	$respuesta4=1;
	array_push($vectorSecuencialOpcionesB, $respuesta4);
}else{
	array_push($vectorSecuencialOpcionesA, $respuesta4);
}

$respuesta5=(int)$_POST['5'];
if($respuesta5==-1){
	$respuesta5=1;
	array_push($vectorActivoOpcionesB, $respuesta5);
}else{
	array_push($vectorActivoOpcionesA, $respuesta5);
}

$respuesta6=(int)$_POST['6'];
if($respuesta6==-1){
	$respuesta6=1;
	array_push($vectorSensorialOpcionesB, $respuesta6);
}else{
	array_push($vectorSensorialOpcionesA, $respuesta6);
}

$respuesta7=(int)$_POST['7'];
if($respuesta7==-1){
	$respuesta7=1;
	array_push($vectorVisualOpcionesB, $respuesta7);
}else{
	array_push($vectorVisualOpcionesA, $respuesta7);
}

$respuesta8=(int)$_POST['8'];
if($respuesta8==-1){
	$respuesta8=1;
	array_push($vectorSecuencialOpcionesB, $respuesta8);
}else{
	array_push($vectorSecuencialOpcionesA, $respuesta8);
}

$respuesta9=(int)$_POST['9'];
if($respuesta9==-1){
	$respuesta9=1;
	array_push($vectorActivoOpcionesB, $respuesta9);
}else{
	array_push($vectorActivoOpcionesA, $respuesta9);
}

$respuesta10=(int)$_POST['10'];
if($respuesta10==-1){
	$respuesta10=1;
	array_push($vectorSensorialOpcionesB, $respuesta10);
}else{
	array_push($vectorSensorialOpcionesA, $respuesta10);
}

$respuesta11=(int)$_POST['11'];
if($respuesta11==-1){
	$respuesta11=1;
	array_push($vectorVisualOpcionesB, $respuesta11);
}else{
	array_push($vectorVisualOpcionesA, $respuesta11);
}

$respuesta12=(int)$_POST['12'];
if($respuesta12==-1){
	$respuesta12=1;
	array_push($vectorSecuencialOpcionesB, $respuesta12);
}else{
	array_push($vectorSecuencialOpcionesA, $respuesta12);
}

$respuesta13=(int)$_POST['13'];
if($respuesta13==-1){
	$respuesta13=1;
	array_push($vectorActivoOpcionesB, $respuesta13);
}else{
	array_push($vectorActivoOpcionesA, $respuesta13);
}

$respuesta14=(int)$_POST['14'];
if($respuesta14==-1){
	$respuesta14=1;
	array_push($vectorSensorialOpcionesB, $respuesta14);
}else{
	array_push($vectorSensorialOpcionesA, $respuesta14);
}

$respuesta15=(int)$_POST['15'];
if($respuesta15==-1){
	$respuesta15=1;
	array_push($vectorVisualOpcionesB, $respuesta15);
}else{
	array_push($vectorVisualOpcionesA, $respuesta15);
}

$respuesta16=(int)$_POST['16'];
if($respuesta16==-1){
	$respuesta16=1;
	array_push($vectorSecuencialOpcionesB, $respuesta16);
}else{
	array_push($vectorSecuencialOpcionesA, $respuesta16);
}

$respuesta17=(int)$_POST['17'];
if($respuesta17==-1){
	$respuesta17=1;
	array_push($vectorActivoOpcionesB, $respuesta17);
}else{
	array_push($vectorActivoOpcionesA, $respuesta17);
}

$respuesta18=(int)$_POST['18'];
if($respuesta18==-1){
	$respuesta18=1;
	array_push($vectorSensorialOpcionesB, $respuesta18);
}else{
	array_push($vectorSensorialOpcionesA, $respuesta18);
}

$respuesta19=(int)$_POST['19'];
if($respuesta19==-1){
	$respuesta19=1;
	array_push($vectorVisualOpcionesB, $respuesta19);
}else{
	array_push($vectorVisualOpcionesA, $respuesta19);
}

$respuesta20=(int)$_POST['20'];
if($respuesta20==-1){
	$respuesta20=1;
	array_push($vectorSecuencialOpcionesB, $respuesta20);
}else{
	array_push($vectorSecuencialOpcionesA, $respuesta20);
}

$respuesta21=(int)$_POST['21'];
if($respuesta21==-1){
	$respuesta21=1;
	array_push($vectorActivoOpcionesB, $respuesta21);
}else{
	array_push($vectorActivoOpcionesA, $respuesta21);
}

$respuesta22=(int)$_POST['22'];
if($respuesta22==-1){
	$respuesta22=1;
	array_push($vectorSensorialOpcionesB, $respuesta22);
}else{
	array_push($vectorSensorialOpcionesA, $respuesta22);
}

$respuesta23=(int)$_POST['23'];
if($respuesta23==-1){
	$respuesta23=1;
	array_push($vectorVisualOpcionesB, $respuesta23);
}else{
	array_push($vectorVisualOpcionesA, $respuesta23);
}

$respuesta24=(int)$_POST['24'];
if($respuesta24==-1){
	$respuesta24=1;
	array_push($vectorSecuencialOpcionesB, $respuesta24);
}else{
	array_push($vectorSecuencialOpcionesA, $respuesta24);
}

$respuesta25=(int)$_POST['25'];
if($respuesta25==-1){
	$respuesta25=1;
	array_push($vectorActivoOpcionesB, $respuesta25);
}else{
	array_push($vectorActivoOpcionesA, $respuesta25);
}

$respuesta26=(int)$_POST['26'];
if($respuesta26==-1){
	$respuesta26=1;
	array_push($vectorSensorialOpcionesB, $respuesta26);
}else{
	array_push($vectorSensorialOpcionesA, $respuesta26);
}

$respuesta27=(int)$_POST['27'];
if($respuesta27==-1){
	$respuesta27=1;
	array_push($vectorVisualOpcionesB, $respuesta27);
}else{
	array_push($vectorVisualOpcionesA, $respuesta27);
}

$respuesta28=(int)$_POST['28'];
if($respuesta28==-1){
	$respuesta28=1;
	array_push($vectorSecuencialOpcionesB, $respuesta28);
}else{
	array_push($vectorSecuencialOpcionesA, $respuesta28);
}

$respuesta29=(int)$_POST['29'];
if($respuesta29==-1){
	$respuesta29=1;
	array_push($vectorActivoOpcionesB, $respuesta29);
}else{
	array_push($vectorActivoOpcionesA, $respuesta29);
}

$respuesta30=(int)$_POST['30'];
if($respuesta30==-1){
	$respuesta30=1;
	array_push($vectorSensorialOpcionesB, $respuesta30);
}else{
	array_push($vectorSensorialOpcionesA, $respuesta30);
}

$respuesta31=(int)$_POST['31'];
if($respuesta31==-1){
	$respuesta31=1;
	array_push($vectorVisualOpcionesB, $respuesta31);
}else{
	array_push($vectorVisualOpcionesA, $respuesta31);
}

$respuesta32=(int)$_POST['32'];
if($respuesta32==-1){
	$respuesta32=1;
	array_push($vectorSecuencialOpcionesB, $respuesta32);
}else{
	array_push($vectorSecuencialOpcionesA, $respuesta32);
}

$respuesta33=(int)$_POST['33'];
if($respuesta33==-1){
	$respuesta33=1;
	array_push($vectorActivoOpcionesB, $respuesta33);
}else{
	array_push($vectorActivoOpcionesA, $respuesta33);
}

$respuesta34=(int)$_POST['34'];
if($respuesta34==-1){
	$respuesta34=1;
	array_push($vectorSensorialOpcionesB, $respuesta34);
}else{
	array_push($vectorSensorialOpcionesA, $respuesta34);
}

$respuesta35=(int)$_POST['35'];
if($respuesta35==-1){
	$respuesta35=1;
	array_push($vectorVisualOpcionesB, $respuesta35);
}else{
	array_push($vectorVisualOpcionesA, $respuesta35);
}

$respuesta36=(int)$_POST['36'];
if($respuesta36==-1){
	$respuesta36=1;
	array_push($vectorSecuencialOpcionesB, $respuesta36);
}else{
	array_push($vectorSecuencialOpcionesA, $respuesta36);
}

$respuesta37=(int)$_POST['37'];
if($respuesta37==-1){
	$respuesta37=1;
	array_push($vectorActivoOpcionesB, $respuesta37);
}else{
	array_push($vectorActivoOpcionesA, $respuesta37);
}

$respuesta38=(int)$_POST['38'];
if($respuesta38==-1){
	$respuesta38=1;
	array_push($vectorSensorialOpcionesB, $respuesta38);
}else{
	array_push($vectorSensorialOpcionesA, $respuesta38);
}

$respuesta39=(int)$_POST['39'];
if($respuesta39==-1){
	$respuesta39=1;
	array_push($vectorVisualOpcionesB, $respuesta39);
}else{
	array_push($vectorVisualOpcionesA, $respuesta39);
}

$respuesta40=(int)$_POST['40'];
if($respuesta40==-1){
	$respuesta40=1;
	array_push($vectorSecuencialOpcionesB, $respuesta40);
}else{
	array_push($vectorSecuencialOpcionesA, $respuesta40);
}

$respuesta41=(int)$_POST['41'];
if($respuesta41==-1){
	$respuesta41=1;
	array_push($vectorActivoOpcionesB, $respuesta41);
}else{
	array_push($vectorActivoOpcionesA, $respuesta41);
}

$respuesta42=(int)$_POST['42'];
if($respuesta42==-1){
	$respuesta42=1;
	array_push($vectorSensorialOpcionesB, $respuesta42);
}else{
	array_push($vectorSensorialOpcionesA, $respuesta42);
}

$respuesta43=(int)$_POST['43'];
if($respuesta43==-1){
	$respuesta43=1;
	array_push($vectorVisualOpcionesB, $respuesta43);
}else{
	array_push($vectorVisualOpcionesA, $respuesta43);
}

$respuesta44=(int)$_POST['44'];
if($respuesta44==-1){
	$respuesta44=1;
	array_push($vectorSecuencialOpcionesB, $respuesta44);
}else{
	array_push($vectorSecuencialOpcionesA, $respuesta44);
}






//Activo - Reflexivo: Si el mayor es A entonces es activo, si el mayor es B entonces es reflexivo
$activo=array_sum($vectorActivoOpcionesA);
$reflexivo=array_sum($vectorActivoOpcionesB);

$resultado1=0;
if ($activo>$reflexivo) {
	$resultado1=($activo-$reflexivo)."A";
}else{
	$resultado1=($reflexivo-$activo)."B";
}




//Sensorial - Intuitivo: Si el mayor es A entonces es sensorial, si el mayor es B entonces es intuitivo
$sensorial=array_sum($vectorSensorialOpcionesA);
$intuitivo=array_sum($vectorSensorialOpcionesB);

$resultado2=0;
if ($sensorial>$intuitivo) {
	$resultado2=($sensorial-$intuitivo)."A";
	// echo "el resultado es: ",$resultado2,"A";
}else{
	$resultado2=($intuitivo-$sensorial)."B";
	// echo "el resultado es: ",$resultado2,"B";
}




//Visual - Verbal: Si el mayor es A entonces es visual, si el amyor es B entonces es verbal.
$visual=array_sum($vectorVisualOpcionesA);
$verbal=array_sum($vectorVisualOpcionesB);

$resultado3=0;
if ($visual>$verbal) {
	$resultado3=($visual-$verbal)."A";
	// echo "el resultado es: ",$resultado3,"A";
}else{
	$resultado3=($verbal-$visual)."B";
	// echo "el resultado es: ",$resultado3,"B";
}





//Secuencial - Global: Si el mayor es A entonces es secuencial, si el mayor es B entonces es Global
$secuencial=array_sum($vectorSecuencialOpcionesA);
$global=array_sum($vectorSecuencialOpcionesB);

$resultado4=0;
if ($secuencial>$global) {
	$resultado4=($secuencial-$global)."A";
	// echo "el resultado es: ",$resultado4,"A";
}else{
	$resultado4=($global-$secuencial)."B";
	// echo "el resultado es: ",$resultado4,"B";
}

// var_dump($resultado1);
// var_dump($resultado2);
// var_dump($resultado4);
// var_dump($resultado3);

$dateTime = (new DateTime("now", new DateTimeZone('America/Lima')))->format('Y-m-d, H:i:s');
$hora = (new DateTime("now", new DateTimeZone('America/Lima')))->format('H:i:s');


$findme = 'A';
$posLetraA = strpos($resultado1, $findme);


$ladoAPerfil1;
$ladoBPerfil1;
$ladoAPerfil2;
$ladoBPerfil2;
$ladoAPerfil3;
$ladoBPerfil3;
$ladoAPerfil4;
$ladoBPerfil4;

if($posLetraA>0){
	//Se debe insertar por activo
	$ladoAPerfil1=$resultado1;
	$ladoBPerfil1;

}else{
	$ladoBPerfil1=$resultado1;
	$ladoAPerfil1;
	
}


$findme1 = 'A';
$posLetraA = strpos($resultado2, $findme1);

if($posLetraA>0){
	
	 //Se va al perfil "Sensorial"
	$ladoAPerfil2=$resultado2;
	$ladoBPerfil2;


}else{
     //Se va a perfil "Intuitivo"
	$ladoBPerfil2=$resultado2;
	$ladoAPerfil2;

}

$findme2 = 'A';
$posLetraA = strpos($resultado3, $findme2);

if($posLetraA>0){

	 //Se va al perfil "Visual"
	$ladoAPerfil3=$resultado3;
	$ladoBPerfil3;

}else{
     //Se va a perfil "Verbal"
	$ladoBPerfil3=$resultado3;
	$ladoAPerfil3;


}

$findme3 = 'A';
$posLetraA = strpos($resultado4, $findme3);

if($posLetraA>0){

	 //Se va al perfil "Secuencial"
	$ladoAPerfil4=$resultado4;
	$ladoBPerfil4;


}else{
     //Se va a perfil "Global"
	$ladoBPerfil4=$resultado4;
	$ladoAPerfil4;

}




$dateTime = (new DateTime("now", new DateTimeZone('America/Lima')))->format('Y-m-d, H:i:s');
$hora = (new DateTime("now", new DateTimeZone('America/Lima')))->format('H:i:s');



if($ladoAPerfil1==NULL){
	$campo1="reflexivo";
	$resultadoFinal1=$ladoBPerfil1;

}else{
	$campo1="activo";
	$resultadoFinal1=$ladoAPerfil1;
}

if($ladoAPerfil2==NULL){
	$campo2="intuitivo";
	$resultadoFinal2=$ladoBPerfil2;

}else{
	$campo2="sensorial";
	$resultadoFinal2=$ladoAPerfil2;
}
if($ladoAPerfil3==NULL){
	$campo3="verbal";
	$resultadoFinal3=$ladoBPerfil3;

}else{
	$campo3="visual";
	$resultadoFinal3=$ladoAPerfil3;
}

if($ladoAPerfil4==NULL){
	$campo4="global";
	$resultadoFinal4=$ladoBPerfil4;
	var_dump($resultadoFinal4);

}else{
	$campo4="secuencial";
	$resultadoFinal4=$ladoAPerfil4;

}


	$insertarUno="INSERT INTO consolidado_felder_vark (documento, fecha, hora, test, $campo1, $campo2, $campo3, $campo4)
	values ('".$document."','".$dateTime."','".$hora."','Felder','".$resultadoFinal1."','".$resultadoFinal2."','".$resultadoFinal3."','".$resultadoFinal4."')";
	$exe=pg_query($insertarUno);










header("Location: ../vistas/html/perfilesFelder.php");	

?>






