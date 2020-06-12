<?php


$sql = "SELECT cedula, nombre  from usuario 
WHERE usuario='$varSeccion'
";
$ejecucion=pg_query($sql);
$docu=pg_fetch_array($ejecucion);
$document=$docu['cedula'];
$nombre=$docu['nombre'];



$consulta = "SELECT *  from usuario 
WHERE usuario='$varSeccion'
";
$exe=pg_query($consulta);
$consultaSQL=pg_fetch_array($exe);
$genre=$consultaSQL['genero'];
$programa=$consultaSQL['carrera'];
$fecha_nacimiento=$consultaSQL['fecha_nacimiento'];


$query = "SELECT *  from resp_usu
WHERE test='Chaea'

";
$eje=pg_query($query);
$consulta=pg_fetch_array($eje);
$fecha=$consulta['fecha'];




$consul="SELECT ru.fecha, test  from resp_usu as ru
WHERE cedula = '$document' AND test='Chaea'
GROUP BY ru.fecha, test
ORDER by ru.fecha desc ";

$execute=pg_query($consul);
$consu=pg_fetch_array($execute);

$fechaTest=$consu['fecha'];
$testEstilos=$consu['test'];








$cons="
SELECT activo, reflexivo, teorico, pragmatico, test, fecha
FROM consolidado
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
	  $aVacio="No hay ningún test";
}
if (is_null($reflexivo)) {
	  $bVacio="No hay ningún test";
}
if (is_null($teorico)) {
	  $cVacio="No hay ningún test";
}
if (is_null($pragmatico)) {
	  $dVacio="No hay ningún test";
}











$con="SELECT activo, reflexivo, teorico, pragmatico, test, fecha
FROM consolidado
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
	  $praVacio="No hay ningún test";
}
if (is_null($reflexiv)) {
	  $actVacio="No hay ningún test";
}
if (is_null($teoric)) {
	  $reVacio="No hay ningún test";
}
if (is_null($pragmatic)) {
	  $teoVacio="No hay ningún test";
}












?>