<?php


  

$sql = "SELECT cedula, nombre_style  from usuario 
WHERE nombre_style='$varSeccion'
";
$ejecucion=pg_query($sql);
$docu=pg_fetch_array($ejecucion);
$document=$docu['cedula'];
$nombre=$docu['nombre_style'];



$consulta = "SELECT *  from usuario 
WHERE nombre_style='$varSeccion'
";
$exe=pg_query($consulta);
$consultaSQL=pg_fetch_array($exe);
$genre=$consultaSQL['genero'];
$fecha_nacimiento=$consultaSQL['fecha_nacimiento'];



$consulta2 = "SELECT usuario.nombre_style, programa_curricular.nombre_carrera
FROM usuario, programa_curricular
WHERE cedula='$document' AND usuario.carrera = programa_curricular.codigo_carrera
";
$exe2=pg_query($consulta2);
$consultaSQL2=pg_fetch_array($exe2);
$programa=$consultaSQL2['nombre_carrera'];








//CHAEA
$cons="
SELECT activo, reflexivo, teorico, pragmatico, test, fecha
FROM consolidado_chaea_chaea_junior
WHERE documento='$document' AND test='Chaea'
ORDER BY id DESC 
LIMIT 1";

$a=pg_query($cons);
$b=pg_fetch_array($a);

$activo=$b['activo'];
$reflexivo=$b['reflexivo'];
$teorico=$b['teorico'];
$pragmatico=$b['pragmatico'];
$testChaea=$b['test'];
$dia=$b['fecha'];



$a=round($activo);
$b=round($reflexivo);
$c=round($teorico);
$d=round($pragmatico);



$aVacio=$a."%";


$bVacio=$b."%";


$cVacio=$c."%";


$dVacio=$d."%";


	

if (is_null($activo)) {
	  $aVacio="No hay resultados";
}
if (is_null($reflexivo)) {
	  $bVacio="No hay resultados";
}
if (is_null($teorico)) {
	  $cVacio="No hay resultados";
}
if (is_null($pragmatico)) {
	  $dVacio="No hay resultados";
}




 





//CHAEA JUNIOR
$con="SELECT activo, reflexivo, teorico, pragmatico, test, fecha
FROM consolidado_chaea_chaea_junior
WHERE documento='$document' AND test='Chaea Junior'
ORDER BY id DESC 
LIMIT 1";

$aA=pg_query($con);
$bB=pg_fetch_array($aA);

$activ=$bB['activo'];
$reflexiv=$bB['reflexivo'];
$teoric=$bB['teorico'];
$pragmatic=$bB['pragmatico'];


$testChaeaJunior=$bB['test'];
$diaJunior=$bB['fecha'];

$pra=round($pragmatic);
$praVacio=$pra."%";

$ac=round($activ);
$actVacio=$ac."%";

$re=round($reflexiv);
$reVacio=$re."%";

$teo=round($teoric);
$teoVacio=$re."%";


 if (is_null($activ)) {
	  $praVacio="No hay resultados";
}
if (is_null($reflexiv)) {
	  $actVacio="No hay resultados";
}
if (is_null($teoric)) {
	  $reVacio="No hay resultados";
}
if (is_null($pragmatic)) {
	  $teoVacio="No hay resultados";
}







//VARK
$con2="SELECT visual, auditivo, lector_escritor, kinestesico, test, fecha
FROM consolidado_felder_vark
WHERE documento='$document' AND test='Vark'
ORDER BY id DESC 
LIMIT 1";

$aAa=pg_query($con2);
$bBb=pg_fetch_array($aAa);

$activo1=$bBb['visual'];
$auditivo1=$bBb['auditivo'];
$lector_escritor1=$bBb['lector_escritor'];
$kinestesico1=$bBb['kinestesico'];


$testVark=$bBb['test'];
$diaVark=$bBb['fecha'];


$activo11=(round($activo1))*100/16;
$activoVacio11=$activo11."%";

$auditivo11=(round($auditivo1))*100/16;
$auditivoVacio11=$auditivo11."%";

$lector_escritor11=(round($lector_escritor1))*100/16;
$lectorVacio11=$lector_escritor11."%";

$kinestesico11=(round($kinestesico1))*100/16;
$kiestVacio11=$kinestesico11."%";


 if (is_null($activo1)) {
	  $activoVacio11="No hay resultados";
}
if (is_null($auditivo1)) {
	  $auditivoVacio11="No hay resultados";
}
if (is_null($lector_escritor1)) {
	  $lectorVacio11="No hay resultados";
}
if (is_null($kinestesico1)) {
	  $kiestVacio11="No hay resultados";
}







//FELDER
$con3="SELECT activo, sensorial, visual, secuencial, reflexivo, intuitivo, verbal, global, test, fecha
FROM consolidado_felder_vark
WHERE documento='$document' AND test='Felder'
ORDER BY id DESC 
LIMIT 1";

$w=pg_query($con3);
$z=pg_fetch_array($w);

$activo2=$z['activo'];
$sensorial2=$z['sensorial'];
$visual2=$z['visual'];
$secuencial2=$z['secuencial'];
$reflexivo2=$z['reflexivo'];
$intuitivo2=$z['intuitivo'];
$verbal2=$z['verbal'];
$global2=$z['global'];


$testFelder=$z['test'];
$diaFelder=$z['fecha'];


$activo22=round($activo2);
$activo2Vacio=$activo22."";

$sensorial22=round($sensorial2);
$sensorial2Vacio=$sensorial22."";

$visual22=round($visual2);
$visual2Vacio=$visual22."";

$secuencial22=round($secuencial2);
$secuencial2Vacio=$secuencial22."";

$reflexivo22=round($reflexivo2);
$reflexivo2Vacio=$reflexivo22."";

$intuitivo22=round($intuitivo2);
$intuitivo2Vacio=$intuitivo22."";

$verbal22=round($verbal2);
$verbal2Vacio=$verbal22."";

$global22=round($global2);
$global2Vacio=$global22."";


 if (is_null($activo2)) {
	  $activo2Vacio="-";
}
if (is_null($sensorial2)) {
	  $sensorial2Vacio="-";
}
if (is_null($visual2)) {
	  $visual2Vacio="-";
}
if (is_null($secuencial2)) {
	  $secuencial2Vacio="-";
}
 if (is_null($reflexivo2)) {
	  $reflexivo2Vacio="-";
}
if (is_null($intuitivo2)) {
	  $intuitivo2Vacio="-";
}
if (is_null($verbal2)) {
	  $verbal2Vacio="-";
}
if (is_null($global2)) {
	  $global2Vacio="-";
}




//FELDER-VARK
$con4="SELECT visual, secuencial, global, auditivo, lector_escritor, kinestesico, test, fecha
FROM consolidado_felder_vark
WHERE documento='$document' AND test='Felder-Vark'
ORDER BY id DESC 
LIMIT 1";

$m=pg_query($con4);
$n=pg_fetch_array($m);

$visual3=$n['visual'];
$secuencial3=$n['secuencial'];
$global3=$n['global'];
$lector3=$n['lector_escritor'];
$auditivo3=$n['auditivo'];
$kinestesico3=$n['kinestesico'];


$testFelderVark=$n['test'];
$diaFelderVark=$n['fecha'];



$visual33=round($visual3);
$visualVacio3=$visual33."";

$secuencial33=round($secuencial3);
$secuencialVacio3=$secuencial33."";

$global33=round($global3);
$globalVacio3=$global33."";


$lector33=round($lector3);
$lectorVacio3=$lector33."";

$auditivo33=round($auditivo3);
$auditivoVacio3=$auditivo33."";

$kinestesico33=round($kinestesico3);
$kiestVacio3=$kinestesico33."";


 if (is_null($visual3)) {
	  $visualVacio3="No hay resultados";
}
 if (is_null($lector3)) {
	  $lectorVacio3="No hay resultados";
}

 if (is_null($secuencial3)) {
	  $secuencialVacio3="No hay resultados";
}
if (is_null($global3)) {
	  $globalVacio3="No hay resultados";
}
if (is_null($auditivo3)) {
	  $auditivoVacio3="No hay resultados";
}
if (is_null($kinestesico3)) {
	  $kiestVacio3="No hay resultados";
}










?>