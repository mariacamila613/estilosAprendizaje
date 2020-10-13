<?php 

require("../../conexionBaseDatos.php");
require ("../../activeSession.php");

$sql = "SELECT cedula from login 
WHERE nombre='$varSeccion'

";
	$ejecucion=pg_query($sql);
	$docu=pg_fetch_array($ejecucion);
	$document=$docu['cedula'];



$query="SELECT   fecha, activo, reflexivo,  teorico,  pragmatico
FROM  consolidado
WHERE documento='$document' AND test='Chaea Junior'";
$exe=pg_query($query);





while ($variable=pg_fetch_row($exe)) {

	$fecha[]=$variable[0];
	$activo[]=$variable[1];
	$reflexivo[]=$variable[2];
	$teorico[]=$variable[3];
	$pragmatico[]=$variable[4];
	
}
$datosFecha=json_encode($fecha);
$datosActivo=json_encode($activo);
$datosReflexivo=json_encode($reflexivo);
$datosTeorico=json_encode($teorico);
$datosPragmatico=json_encode($pragmatico);




?>

<div id="graficaBarras"></div>


<script type="text/javascript">
	

function crearCadenaBarras(json){
	var parsed = JSON.parse (json);
	var arr=[];
	for (var x in parsed){
		arr.push(parsed[x]);
	} 
	return arr;
}
</script>





<script type="text/javascript">
	
datosFecha=crearCadenaBarras('<?php echo $datosFecha ?>');

datosActivo=crearCadenaBarras('<?php echo $datosActivo ?>');

datosReflexivo=crearCadenaBarras('<?php echo $datosReflexivo ?>');

datosTeorico=crearCadenaBarras('<?php echo $datosTeorico ?>');

datosPragmatico=crearCadenaBarras('<?php echo $datosPragmatico ?>');


	var datosActivos = 
	{
		x: datosFecha,
		y: datosActivo,
		type: 'bar'
	};


	var datosReflexivos = [
	{
		x: datosFecha,
		y: datosReflexivo,
		type: 'bar'
	}
	];


		var datosTeoricos = [
	{
		x: datosFecha,
		y: datosTeorico,
		type: 'bar'
	}
	];



	var datosPragmaticos = [
	{
		x: datosFecha,
		y: datosPragmatico,
		type: 'bar'
	}
	];


var data = [datosActivos, datosReflexivos, datosTeoricos, datosPragmaticos];




	Plotly.newPlot('graficaBarras', data);

	
</script>