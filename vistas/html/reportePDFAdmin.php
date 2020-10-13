<?php
require("../../consultas/moduloReportes/pdf/clasePdf.php");
require("../../consultas/conexionBaseDatos.php");
require ("../../consultas/activeSession.php");
error_reporting(0);


//Selección de la cantidad de test.
$consultaCantidad="SELECT cantidad
FROM pregunta, resp_usu
WHERE pregunta.id_test=resp_usu.id_test AND resp_usu.id_test=1
GROUP BY cantidad

";
$extraer=pg_query($consultaCantidad);

$consolidado="SELECT activo, reflexivo, teorico, pragmatico, consolidado.fecha, documento, usuario.nombre_style, test
FROM consolidado, usuario
WHERE usuario.cedula=consolidado.documento
ORDER BY fecha
";
$consolidad=pg_query($consolidado);


$pdf=new PDF ();
$pdf->AddPage();
$pdf->SetFillColor(190, 0, 0);
$pdf->SetTextColor(255,255,255);
$pdf->SetTextColor(0,0,0);
$pdf->Ln(4);
$pdf->SetTextColor(0,0,0);
$pdf->Cell(0, 10, utf8_decode('El Grupo de Ambientes Inteligentes Adaptativos GAIA reporta:'), 0,0, 'C');
$pdf->Ln(10);
$pdf->SetFont('Arial', 'B', 9);
$programa=utf8_decode($carrera);
$pdf->Ln(5);
$pdf->Ln(10);
$pdf->SetTextColor(255,255,255);
$pdf->Cell(60, 6, utf8_decode('Nombre'), 1, 0, 'C', 2);
$pdf->Cell(20, 6, utf8_decode('Test'), 1, 0, 'C', 2);
$pdf->Cell(20, 6, utf8_decode('Fecha'), 1, 0, 'C', 2);
$pdf->Cell(20, 6, utf8_decode('Cédula'), 1, 0, 'C', 2);
$pdf->Cell(15, 6, utf8_decode('Activo'), 1, 0, 'C', 2);
$pdf->Cell(15, 6, utf8_decode('Reflexivo'), 1, 0, 'C', 2);
$pdf->Cell(15, 6, utf8_decode('Teórico'), 1, 0, 'C', 2);
$pdf->Cell(20, 6, utf8_decode('Pragmático'), 1, 0, 'C', 2);
$pdf->SetFont('');
$pdf->SetTextColor(0,0,0);


while ($totalRegistros=pg_fetch_array($consolidad) ) {
    $totalActivo=(int)$totalRegistros['activo'];
    $totalReflexivo=(int)$totalRegistros['reflexivo'];
    $totalTeorico=(int)$totalRegistros['teorico'];
    $totalPragmatico=(int)$totalRegistros['pragmatico'];
    $fecha=$totalRegistros['fecha'];
    $cedula=$totalRegistros['documento'];
    $nombre=$totalRegistros['nombre_style'];
    $test=$totalRegistros['test'];
    $pdf->Ln(5);
    $pdf->SetTextColor(0,0,0);
    $pdf->SetFillColor(255, 255, 255);
    $pdf->Cell(60,6,utf8_decode($nombre),1,0,'C',1);
    $pdf->Cell(20,6,utf8_decode($test),1,0,'C',1);
    $pdf->Cell(20,6,utf8_decode($fecha),1,0,'C',1);
    $pdf->Cell(20,6,utf8_decode($cedula),1,0,'C',1);
    $pdf->Cell(15,6,utf8_decode("$totalActivo%"),1,0,'C',1);
    $pdf->Cell(15,6,utf8_decode("$totalReflexivo%"),1,0,'C',1);
    $pdf->Cell(15,6,utf8_decode("$totalTeorico%"),1,0,'C',1);
    $pdf->Cell(20,6,utf8_decode("$totalPragmatico%"),1,0,'C',1);
}
$pdf->OutPut();
