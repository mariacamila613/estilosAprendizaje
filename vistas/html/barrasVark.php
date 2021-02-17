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



$query="SELECT   fecha, visual, auditivo,  lector_escritor,  kinestesico
FROM  consolidado_felder_vark
WHERE documento='$document' AND test='Vark'";
$exe=pg_query($query);





while ($variable=pg_fetch_row($exe)) {

	$fecha[]=$variable[0];
	$visual[]=$variable[1];
	$auditivo[]=$variable[2];
	$lector[]=$variable[3];
	$kinestesico[]=$variable[4];
	
}

$datosFecha=json_encode($fecha);
$datosVisual=json_encode($visual);
$datosAuditivo=json_encode($auditivo);
$datosLector=json_encode($lector);
$datosKinestesico=json_encode($kinestesico);




?>

<div id="graficaBarrasVark"></div>


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

datosVisual=crearCadenaBarras('<?php echo $datosVisual ?>');
datosAuditivo=crearCadenaBarras('<?php echo $datosAuditivo ?>');
datosLector=crearCadenaBarras('<?php echo $datosLector ?>');
datosKinestesico=crearCadenaBarras('<?php echo $datosKinestesico ?>');


	var datosVisuales = 
	{
		x: datosFecha,
		y: datosVisual,
		 text: datosVisual.map(String),
		 textposition: 'auto',  

		 name: 'Visual',
		type: 'bar',
  text: datosVisual.map(String),
  textposition: 'auto',
  marker: {
    color: 'rgb(80,200,225,.5)',
    line: {
      color: 'rgb(210,210,210)',
      width: 1.5
    }
  }
		


	};


	var datosAuditivos = {


	x: datosFecha,
		y: datosAuditivo,
		 text: datosAuditivo.map(String),
		 textposition: 'auto',  

		 name: 'Auditivo',
		type: 'bar',
  text: datosAuditivo.map(String),
  textposition: 'auto',

  marker: {
    color: 'rgb(223,240,136)',
    line: {
      color: 'rgb(210,210,210)',
      width: 1.5
    }
  }
	

	};



	var datosLectores = {
		x: datosFecha,
		y: datosLector,
		name: 'Lector-Escritor',
		type: 'bar',
		 text: datosLector.map(String),
  textposition: 'auto',

  marker: {
    color: 'rgb(201,249,189)',
    line: {
      color: 'rgb(210,210,210)',
      width: 1.5
    }
  }
	
	};



	var datosKinestesicos = 
	{
		x: datosFecha,
		y: datosKinestesico,
		name: 'Pragmático',
		type: 'bar',
	    text: datosKinestesico.map(String),
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
  title: 'Test Vark',
    // paper_bgcolor : 'rgb(210,210,210)',
     //plot_bgcolor : 'rgb(210,210,210)',
  xaxis: {
    title: 'Fecha'
  },
  yaxis: {
    title: 'Porcentaje (%)'
  }


};
var data = [datosVisuales, datosAuditivos, datosLectores, datosKinestesicos];


	Plotly.newPlot('graficaBarrasVark', data, layout);

	
</script>