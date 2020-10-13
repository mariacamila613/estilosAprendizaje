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



$sql="SELECT  fecha, activo, reflexivo,  teorico,  pragmatico
FROM  consolidado
WHERE documento='$document' AND test='Chaea Junior'
";
$result=pg_query($sql);
// $valoresY=array();
// $valoresX=array();  

while ($variable=pg_fetch_row($result)) {

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

<div id="graficaLineal"></div>


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

datosReflexivo=crearCadenaLineal('<?php echo $datosReflexivo ?>');

datosTeorico=crearCadenaLineal('<?php echo $datosTeorico ?>');

datosPragmatico=crearCadenaLineal('<?php echo $datosPragmatico ?>');

var activo = {
  x:  datosFecha,
  y:  datosActivo,
  name: 'Activo',
  type: 'scatter'
    
};


var reflexivo = {
  x: datosFecha,
  y: datosReflexivo,
  name: 'Reflexivo',
  type: 'scatter'
};


var teorico = {
  x: datosFecha,
  y: datosTeorico,
  name: 'Teórico',
  type: 'scatter'
};



var pragmatico = {
  x: datosFecha,
  y: datosPragmatico,
  name: 'Pragmático',

  type: 'scatter'
};



var layout = {
  title: 'Test Chaea Junior',
    // paper_bgcolor : 'rgb(210,210,210)',
     //plot_bgcolor : 'rgb(210,210,210)',
  xaxis: {
    title: 'Fecha'
  },
  yaxis: {
    title: 'Porcentaje (%) '
  }


};



var data = [activo, reflexivo, teorico, pragmatico];

Plotly.newPlot('graficaLineal', data, layout);

	


</script>