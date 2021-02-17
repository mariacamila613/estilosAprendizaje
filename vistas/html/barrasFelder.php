<?php 
  
require("../../consultas/conexionBaseDatos.php");
require ("../../consultas/activeSession.php");
error_reporting(0);

$sql = "SELECT cedula from usuario 
WHERE nombre_style='$varSeccion'
 
";
	$ejecucion=pg_query($sql);
	$docu=pg_fetch_array($ejecucion);
	$document=$docu['cedula'];



$query="SELECT  fecha, activo, sensorial, visual, secuencial, reflexivo, intuitivo, verbal, global
FROM  consolidado_felder_vark
WHERE documento='$document' AND test='Felder'";
$exe=pg_query($query);



while ($variable=pg_fetch_row($exe)) {

	$fecha[]=$variable[0];
	$activo[]=$variable[1];
	$sensorial[]=$variable[2];
	$visual[]=$variable[3];
	$secuencial[]=$variable[4];
	$reflexivo[]=$variable[5];
	$intuitivo[]=$variable[6];
	$verbal[]=$variable[7];
	$global[]=$variable[8];
	
}

$datosFecha=json_encode($fecha);
$datosActivo=json_encode($activo);
$datosSensorial=json_encode($sensorial);
$datosVisual=json_encode($visual);
$datosSecuencial=json_encode($secuencial);
$datosReflexivo=json_encode($reflexivo);
$datosIntuitivo=json_encode($intuitivo);
$datosVerbal=json_encode($verbal);
$datosGlobal=json_encode($global);



?>

<div id="graficaBarrasFelder"></div>


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
datosSensorial=crearCadenaBarras('<?php echo $datosSensorial ?>');
datosVisual=crearCadenaBarras('<?php echo $datosVisual ?>');
datosSecuencial=crearCadenaBarras('<?php echo $datosSecuencial ?>');
datosReflexivo=crearCadenaBarras('<?php echo $datosReflexivo ?>');
datosIntuitivo=crearCadenaBarras('<?php echo $datosIntuitivo ?>');
datosVerbal=crearCadenaBarras('<?php echo $datosVerbal ?>');
datosGlobal=crearCadenaBarras('<?php echo $datosGlobal ?>');



var datosActivos = {
	x: datosFecha,
	y: datosActivo,
	text: datosActivo.map(String),
	textposition: 'auto',  

	name: 'Activo',
	type: 'bar',
	text: datosActivo.map(String),
	textposition: 'auto',

	marker: {
		color: 'rgb(80,200,225,.5)',
		line: {
			color: 'rgb(210,210,210)',
			width: 1.5
		}
	}



};




var datosSensoriales = {


	x: datosFecha,
	y: datosSensorial,
	text: datosSensorial.map(String),
	textposition: 'auto',  

	name: 'Sensorial',
	type: 'bar',
	text: datosSensorial.map(String),
	textposition: 'auto',

	marker: {
		color: 'rgb(106, 112, 234 )',
		line: {
			color: 'rgb(210,210,210)',
			width: 1.5
		}
	}
	

};



	var datosVisuales = {
		x: datosFecha,
		y: datosVisual,
		name: 'Visual',
		type: 'bar',
		text: datosVisual.map(String),
		textposition: 'auto',

		marker: {
			color: 'rgb(201,249,189)',
			line: {
				color: 'rgb(210,210,210)',
				width: 1.5
			}
		}

	};


	var datosSecuenciales = 
	{
		x: datosFecha,
		y: datosSecuencial,
		name: 'Secuencial',
		type: 'bar',
		text: datosSecuencial.map(String),
		textposition: 'auto',

		marker: {
			color: 'rgb(233, 25, 176 )',
			line: {
				color: 'rgb(210,210,210)',
				width: 1.5
			}
		}

	};



var datosReflexivos = 
{
	x: datosFecha,
	y: datosReflexivo,
	text: datosReflexivo.map(String),
	textposition: 'auto',  

	name: 'Reflexivo',
	type: 'bar',
	text: datosReflexivo.map(String),
	textposition: 'auto',

	marker: {
		color: 'rgb(245, 116, 134,.5)',
		line: {
			color: 'rgb(210,210,210)',
			width: 1.5
		}
	}



};


var datosIntuitivos = {


	x: datosFecha,
	y: datosIntuitivo,
	text: datosIntuitivo.map(String),
	textposition: 'auto',  

	name: 'Intuitivo',
	type: 'bar',
	text: datosIntuitivo.map(String),
	textposition: 'auto',

	marker: {
		color: 'rgb(245, 233, 116 )',
		line: {
			color: 'rgb(210,210,210)',
			width: 1.5
		}
	}
	

};



	var datosVerbales = {
		x: datosFecha,
		y: datosVerbal,
		name: 'Verbal',
		type: 'bar',
		text: datosVerbal.map(String),
		textposition: 'auto',

		marker: {
			color: 'rgb(116, 245, 235 )',
			line: {
				color: 'rgb(210,210,210)',
				width: 1.5
			}
		}

	};



	var datosGlobales = 
	{
		x: datosFecha,
		y: datosGlobal,
		name: 'Global',
		type: 'bar',
		text: datosGlobal.map(String),
		textposition: 'auto',

		marker: {
			color: 'rgb(234, 234, 65 )',
			line: {
				color: 'rgb(210,210,210)',
				width: 1.5
			}
		}

	};





var layout = {
  title: 'Test Felder',
  	// paper_bgcolor : 'rgb(210,210,210)',
  	 //plot_bgcolor : 'rgb(210,210,210)',
  xaxis: {
    title: 'Fecha'
  },
  yaxis: {
    title: 'Clasificación'
  }


};
var data = [datosActivos, datosSensoriales, datosVisuales, datosSecuenciales, datosReflexivos, datosIntuitivos, datosVerbales, datosGlobales];

 
	Plotly.newPlot('graficaBarrasFelder', data, layout);

	
</script>

<?php


?>