<?php
require("../../consultas/moduloReportes/pdf/clasePdf.php");
require("../../consultas/conexionBaseDatos.php");
require ("../../consultas/activeSession.php");
error_reporting(0);
$sql = "SELECT cedula, nombre_style, carrera  from usuario
WHERE nombre_style='$varSeccion'
";
$ejecucion=pg_query($sql);
$docu=pg_fetch_array($ejecucion);
$document=$docu['cedula'];
$nombre=$docu['nombre_style'];
$carrera=$docu['carrera'];


//Selección de la cantidad de test.
$consultaCantidad="SELECT cantidad
FROM pregunta, resp_usu
WHERE cedula = '$document' AND pregunta.id_test=resp_usu.id_test AND resp_usu.id_test=2
GROUP BY cantidad

";
$extraer=pg_query($consultaCantidad);





$query="SELECT preg.pregunta, resp.fecha, resp.hora, resp.valor_respuesta, resp.test, resp.cantidad, resp.id_pregunta
FROM pregunta as preg, resp_usu as resp
WHERE cedula = '$document' AND preg.id_test=resp.id_test AND resp.id_test=2 AND resp.id_pregunta=preg.id_pregunta
GROUP BY preg.pregunta, resp.fecha, resp.hora, resp.valor_respuesta, preg.id_pregunta, resp.test, resp.cantidad, resp.id_pregunta
ORDER BY resp.id_pregunta";


$exe=pg_query($query);
$eje=pg_fetch_array($exe);
$test=$eje['test'];
$pregunta=$eje['pregunta'];

if ($test==null){
    echo'<script type="text/javascript">
    alert("No tienes ningún test registrado");
   window.close();
    </script>';
}

$fecha=$eje['fecha'];






$consolidado="SELECT activo, reflexivo, teorico, pragmatico, fecha
FROM consolidado
WHERE documento='$document' AND test='Chaea Junior'
ORDER BY fecha
";
$consolidad=pg_query($consolidado);


$pdf=new PDF ();
        $pdf->AddPage();
        $pdf->SetFillColor(243, 243, 190);
        $pdf->Ln(4);
        $pdf->Cell(0, 10, utf8_decode('Ahora te presentamos el histórico de tus test realizados en nuestra aplicación'), 0,0, 'C');
        $pdf->Ln(10);
        $pdf->SetFont('Arial', 'B', 9);
        $name=utf8_decode($nombre);
        $pdf->Write(5, "Nombre: $name");
        $pdf->Ln(5);
        $pdf->Write(5, "Documento: $document");
        $pdf->Ln(5);
        $programa=utf8_decode($carrera);
        $pdf->Write(5, "Programa Curricular: $programa");
        $pdf->Ln(5);
        $pdf->Write(5, "Test: Chaea Junior");
        $pdf->Ln(10);
        $pdf->Cell(25, 6, utf8_decode('Fecha'), 1, 0, 'C', 2);
        $pdf->Cell(40, 6, utf8_decode('Porcentajes de Activo'), 1, 0, 'C', 2);
        $pdf->Cell(40, 6, utf8_decode('Porcentajes de Reflexivo'), 1, 0, 'C', 2);
        $pdf->Cell(40, 6, utf8_decode('Porcentajes de Teórico'), 1, 0, 'C', 2);
        $pdf->Cell(43, 6, utf8_decode('Porcentajes de Pragmático'), 1, 0, 'C', 2);
        $pdf->SetFont('');


while ($totalRegistros=pg_fetch_array($consolidad) ) {
    $totalActivo=(int)$totalRegistros['activo'];
    $totalReflexivo=(int)$totalRegistros['reflexivo'];
    $totalTeorico=(int)$totalRegistros['teorico'];
    $totalPragmatico=(int)$totalRegistros['pragmatico'];
    $fecha=$totalRegistros['fecha'];
    
    $pdf->Ln(5);
    $pdf->Cell(25,6,utf8_decode($fecha),1,0,'C',1);
    $pdf->Cell(40,6,utf8_decode("$totalActivo%"),1,0,'C',1);
    $pdf->Cell(40,6,utf8_decode("$totalReflexivo%"),1,0,'C',1);
    $pdf->Cell(40,6,utf8_decode("$totalTeorico%"),1,0,'C',1);
    $pdf->Cell(43,6,utf8_decode("$totalPragmatico%"),1,0,'C',1);

}

//********************************-----------------------*******************************//
        $pdf->Ln(7);
   
        $pdf->SetFont('Arial', 'B', 9);
        $pdf->ln(1);
        $pdf->SetFont('');
        $pdf->Ln(7);
        $pdf->Cell(0, 0, utf8_decode('Preguntas en detalle con respuestas'), 0,0, 'C');
        $pdf->Ln(5);
        $pdf->SetFont('Arial', 'B', 7);
        $pdf->Cell(148, 6, 'PREGUNTA', 1, 0, 'C', 2);
        $pdf->Cell(20, 6, 'RESPUESTA', 1, 0, 'C', 2);
        $pdf->Cell(20, 6, 'FECHA', 1, 0, 'C', 2);
        $pdf->Ln(5);



while($sacar=pg_fetch_array($extraer) ){
$pdf->Ln(2);
    $canti=(int)$sacar['cantidad'];

for ($i=0; $i<$canti; $i++) {

while ($row=pg_fetch_array($exe) ) {



    if ($row['valor_respuesta']=='1') {
        $a="Sí";
    }else{
        $a="No";
    } $pdf->Ln(2);
    $pdf->SetFillColor(243, 243, 190);
    $pdf->Cell(148,6,utf8_decode($row['pregunta']),1,0,'L',1);

    $pdf->Cell(20,6,utf8_decode($a),1,0,'C',1);
    $pdf->Cell(20,6,utf8_decode($row['fecha']),1,0,'C',1);
    $pdf->Ln(5);
    $pdf->SetAuthor('GAIA - Unal Manizales', true);

}

}
 $pdf->Ln(5);

}
$pdf->OutPut();
