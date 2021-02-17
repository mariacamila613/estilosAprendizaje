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



$query="SELECT   fecha, visual, secuencial, global, auditivo, lector_escritor, kinestesico
FROM  consolidado_felder_vark
WHERE documento='$document' AND test='Felder-Vark'";
$exe=pg_query($query);





while ($variable=pg_fetch_row($exe)) {

  $fecha[]=$variable[0];
  $visual[]=$variable[1];
  $secuencial[]=$variable[2];
  $global[]=$variable[3];
  $auditivo[]=$variable[4];
  $lector[]=$variable[5];
  $kinestesico[]=$variable[6];
	
}

$datosFecha=json_encode($fecha);
$datosVisual=json_encode($visual);
$datosSecuencial=json_encode($secuencial);
$datosGlobal=json_encode($global);
$datosAuditivo=json_encode($auditivo);
$datosLector=json_encode($lector);
$datosKinestesico=json_encode($kinestesico);




?>

<div id="graficaBarrasFelderVark"></div>


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
datosSecuencial=crearCadenaBarras('<?php echo $datosSecuencial ?>');
datosGlobal=crearCadenaBarras('<?php echo $datosGlobal ?>');
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


	var datosSecuenciales = {


	x: datosFecha,
		y: datosSecuencial,
		 text: datosSecuencial.map(String),
		 textposition: 'auto',  

		 name: 'Secuencial',
		type: 'bar',
  text: datosSecuencial.map(String),
  textposition: 'auto',

  marker: {
    color: 'rgb(106, 234, 225 )',
    line: {
      color: 'rgb(210,210,210)',
      width: 1.5
    }
  }
	

	};


	var datosGlobales = {


	x: datosFecha,
		y: datosGlobal,
		 text: datosGlobal.map(String),
		 textposition: 'auto',  

		 name: 'Global',
		type: 'bar',
  text: datosGlobal.map(String),
  textposition: 'auto',

  marker: {
    color: 'rgb(156, 234, 106 )',
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
  title: 'Test Felder-Vark',
    // paper_bgcolor : 'rgb(210,210,210)',
     //plot_bgcolor : 'rgb(210,210,210)',
  xaxis: {
    title: 'Fecha'
  },
  yaxis: {
    title: 'Porcentaje (%)'
  }


};
var data = [datosVisuales,datosSecuenciales, datosGlobales, datosAuditivos, datosLectores, datosKinestesicos];
 
 

	Plotly.newPlot('graficaBarrasFelderVark', data, layout);

	
</script>