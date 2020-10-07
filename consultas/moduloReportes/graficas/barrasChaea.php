<?php 

require("../../conexionBaseDatos.php");
require ("../../activeSession.php");
error_reporting(0);

$sql = "SELECT cedula from usuario 
WHERE nombre_style='$varSeccion'

";
	$ejecucion=pg_query($sql);
	$docu=pg_fetch_array($ejecucion);
	$document=$docu['cedula'];



$query="SELECT   fecha, activo, reflexivo,  teorico,  pragmatico
FROM  consolidado
WHERE documento='$document' AND test='Chaea'";
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

<div id="graficaBarrasChaea"></div>


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


	var datosReflexivos = {


	x: datosFecha,
		y: datosReflexivo,
		 text: datosReflexivo.map(String),
		 textposition: 'auto',  

		 name: 'Activo',
		type: 'bar',
  text: datosReflexivo.map(String),
  textposition: 'auto',
  
  marker: {
    color: 'rgb(223,240,136)',
    line: {
      color: 'rgb(210,210,210)',
      width: 1.5
    }
  }
	

	};



			var datosTeoricos = 
	{
		x: datosFecha,
		y: datosTeorico,
		name: 'Teórico',
		type: 'bar',
		 text: datosTeorico.map(String),
  textposition: 'auto',

  marker: {
    color: 'rgb(201,249,189)',
    line: {
      color: 'rgb(210,210,210)',
      width: 1.5
    }
  }
	
	};



	var datosPragmaticos = 
	{
		x: datosFecha,
		y: datosPragmatico,
		name: 'Pragmático',
		type: 'bar',
	    text: datosPragmatico.map(String),
  		textposition: 'auto',
  
		marker: {
		color: 'rgb(249,189,243)',
		line: {
		      color: 'rgb(210,210,210)',
		      width: 1.5
		    }
		  }

	};


var layout = {
  title: 'Test Chaea',
  	// paper_bgcolor : 'rgb(210,210,210)',
  	 //plot_bgcolor : 'rgb(210,210,210)',
  xaxis: {
    title: 'Fecha'
  },
  yaxis: {
    title: 'Porcentaje (%)'
  }


};
var data = [datosActivos, datosReflexivos, datosTeoricos, datosPragmaticos];


	Plotly.newPlot('graficaBarrasChaea', data, layout);

	
</script>