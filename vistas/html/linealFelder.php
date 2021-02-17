<?php  
require("../../consultas/conexionBaseDatos.php");
require ("../../consultas/activeSession.php");
error_reporting(0);
  
$sql = "SELECT cedula
FROM usuario 
WHERE nombre_style='$varSeccion'
";
$ejecucion=pg_query($sql);
$docu=pg_fetch_array($ejecucion);
$document=$docu['cedula'];



$sql="SELECT  fecha, activo, sensorial, visual, secuencial, reflexivo, intuitivo, verbal, global
FROM  consolidado_felder_vark
WHERE documento='$document' AND test='Felder'
";
$result=pg_query($sql);
// $valoresY=array();
// $valoresX=array();  

while ($variable=pg_fetch_row($result)) {

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

<div id="graficaLinealFelder"></div>


<script type="text/javascript">
	

function crearCadenaLineal(json){
	var parsed = JSON.parse (json);
	var arr=[];
	for (var x in parsed){
		arr.push(parsed[x]);
	} 
	return arr;
}
</script>





<script type="text/javascript">

datosFecha=crearCadenaLineal('<?php echo $datosFecha ?>');

datosActivo=crearCadenaLineal('<?php echo $datosActivo ?>');

datosSensorial=crearCadenaLineal('<?php echo $datosSensorial ?>');

datosVisual=crearCadenaLineal('<?php echo $datosVisual ?>');

datosSecuencial=crearCadenaLineal('<?php echo $datosSecuencial ?>');

datosReflexivo=crearCadenaLineal('<?php echo $datosReflexivo ?>');

datosIntuitivo=crearCadenaLineal('<?php echo $datosIntuitivo ?>');

datosVerbal=crearCadenaLineal('<?php echo $datosVerbal ?>');

datosGlobal=crearCadenaLineal('<?php echo $datosGlobal ?>');

var activo = {
  x:  datosFecha,
  y:  datosActivo,
  name: 'Activo',
  type: 'scatter'
    
};

var sensorial = {
  x: datosFecha,
  y: datosSensorial,
  name: 'Sensorial',
  type: 'scatter'
};


var visual = {
  x: datosFecha,
  y: datosVisual,
  name: 'Visual',
  type: 'scatter'
};



var secuencial = {
  x: datosFecha,
  y: datosSecuencial,
  name: 'Secuencial',
  type: 'scatter'
};

var reflexivo = {
  x: datosFecha,
  y: datosReflexivo,
  name: 'Reflexivo',
  type: 'scatter'
};

var intuitivo = {
  x: datosFecha,
  y: datosIntuitivo,
  name: 'Intuitivo',
  type: 'scatter'
};

var verbal = {
  x: datosFecha,
  y: datosVerbal,
  name: 'Verbal',
  type: 'scatter'
};

var global1 = {
  x: datosFecha,
  y: datosGlobal,
  name: 'Global',
  type: 'scatter'
};


var layout = {
  title: 'Felder',
    // paper_bgcolor : 'rgb(210,210,210)',
     //plot_bgcolor : 'rgb(210,210,210)',
  xaxis: {
    title: 'Fecha'
  },
  yaxis: {
    title: 'Clasificación '
  }


};



var data = [activo, sensorial, visual, secuencial, reflexivo, intuitivo, verbal, global1];

Plotly.newPlot('graficaLinealFelder', data, layout);

	


</script>