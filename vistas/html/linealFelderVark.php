 

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



$sql="SELECT   fecha, visual, secuencial, global, auditivo, lector_escritor, kinestesico
FROM  consolidado_felder_vark
WHERE documento='$document' AND test='Felder-Vark'

";
$result=pg_query($conexion, $sql);
$valoresY=array();
$valoresX=array();  

while ($variable=pg_fetch_row($result)) {

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

<div id="graficaLinealFelderVark"></div>


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

datosVisual=crearCadenaBarras('<?php echo $datosVisual ?>');
datosSecuencial=crearCadenaBarras('<?php echo $datosSecuencial ?>');
datosGlobal=crearCadenaBarras('<?php echo $datosGlobal ?>');
datosAuditivo=crearCadenaBarras('<?php echo $datosAuditivo ?>');
datosLector=crearCadenaBarras('<?php echo $datosLector ?>');
datosKinestesico=crearCadenaBarras('<?php echo $datosKinestesico ?>');

var visual = {
  x:  datosFecha,
  y:  datosVisual,

  name: 'Visual',
  type: 'scatter'
    
};

var secuencial = {
  x:  datosFecha,
  y:  datosSecuencial,

  name: 'Secuencial',
  type: 'scatter'
    
};

var global1 = {
  x:  datosFecha,
  y:  datosGlobal,

  name: 'Global',
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
  name: 'Kinestesico',

  type: 'scatter'
};



var layout = {
  title: 'Test Felder-Vark',
  //  paper_bgcolor : 'rgb(210,210,210)',
    // plot_bgcolor : 'rgb(210,210,210)',
  xaxis: {
    title: 'Fecha'
  },
  yaxis: {
    title: 'Porcentaje (%) '
  }


};



var data = [visual, secuencial, global1, auditivo, lector, kinestesico];

Plotly.newPlot('graficaLinealFelderVark', data, layout);

  


</script>