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



$sql="SELECT   fecha, visual, auditivo,  lector_escritor,  kinestesico
FROM  consolidado_felder_vark
WHERE documento='$document' AND test='Vark'

";
$result=pg_query($conexion, $sql);
$valoresY=array();
$valoresX=array();  

while ($variable=pg_fetch_row($result)) {

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

<div id="graficaLinealVark"></div>


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
datosVisual=crearCadenaLineal('<?php echo $datosVisual ?>');
datosAuditivo=crearCadenaLineal('<?php echo $datosAuditivo ?>');
datosLector=crearCadenaLineal('<?php echo $datosLector ?>');
datosKinestesico=crearCadenaLineal('<?php echo $datosKinestesico ?>');

var visual = {
  x:  datosFecha,
  y:  datosVisual,

  name: 'Visual',
  type: 'scatter'
    
};


var auditivo = {
  x: datosFecha,
  y: datosAuditivo,
 text: datosAuditivo.map(String),
   
  name: 'Auditivo',
  type: 'scatter'
};


var lector = {
  x: datosFecha,
  y: datosLector,
  name: 'Lector-Escritor',
  type: 'scatter'
};



var kinestesico = {
  x: datosFecha,
  y: datosKinestesico,
  name: 'kinestesico',

  type: 'scatter'
};



var layout = {
  title: 'Test Vark',
  //  paper_bgcolor : 'rgb(210,210,210)',
    // plot_bgcolor : 'rgb(210,210,210)',
  xaxis: {
    title: 'Fecha'
  },
  yaxis: {
    title: 'Porcentaje (%) '
  }


};



var data = [visual, auditivo, lector, kinestesico];

Plotly.newPlot('graficaLinealVark', data, layout);

  


</script>









