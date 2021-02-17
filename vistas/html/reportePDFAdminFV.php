<?php 
require("../../consultas/moduloReportes/pdf/clasePdf2.php");
require("../../consultas/conexionBaseDatos.php");
require ("../../consultas/activeSession.php");
error_reporting(0);


$consolidado="SELECT activo, sensorial, visual, secuencial, reflexivo, intuitivo, verbal, global, auditivo, lector_escritor, kinestesico, consolidado_felder_vark.fecha, documento, usuario.nombre_style, test
FROM consolidado_felder_vark, usuario
WHERE usuario.cedula=consolidado_felder_vark.documento
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
$pdf->Cell(30, 6, utf8_decode('Test'), 1, 0, 'C', 2);
$pdf->Cell(30, 6, utf8_decode('Fecha'), 1, 0, 'C', 2);
$pdf->Cell(30, 6, utf8_decode('Cédula'), 1, 0, 'C', 2);
$pdf->Cell(15, 6, utf8_decode('Activo'), 1, 0, 'C', 2);
$pdf->Cell(18, 6, utf8_decode('Sensorial'), 1, 0, 'C', 2);
$pdf->Cell(15, 6, utf8_decode('Visual'), 1, 0, 'C', 2);
$pdf->Cell(20, 6, utf8_decode('Secuencial'), 1, 0, 'C', 2);
$pdf->Cell(20, 6, utf8_decode('Reflexivo'), 1, 0, 'C', 2);
$pdf->Cell(15, 6, utf8_decode('Intuitivo'), 1, 0, 'C', 2);
$pdf->Cell(15, 6, utf8_decode('Verbal'), 1, 0, 'C', 2);
$pdf->Cell(15, 6, utf8_decode('Global'), 1, 0, 'C', 2);
$pdf->Cell(15, 6, utf8_decode('Auditivo'), 1, 0, 'C', 2);
$pdf->Cell(30, 6, utf8_decode('Lector_escritor'), 1, 0, 'C', 2);
$pdf->Cell(20, 6, utf8_decode('Kinestesico'), 1, 0, 'C', 2);
$pdf->SetFont('');
$pdf->SetTextColor(0,0,0);


while ($totalRegistros=pg_fetch_array($consolidad) ) {
    $totalActivo=(int)$totalRegistros['activo'];
    $totalSensorial=(int)$totalRegistros['sensorial'];
    $totalVisual=(int)$totalRegistros['visual'];
    $totalSecuencial=(int)$totalRegistros['secuencial'];
    $totalReflexivo=(int)$totalRegistros['reflexivo'];
    $totalIntuitivo=(int)$totalRegistros['intuitivo'];
    $totalVerbal=(int)$totalRegistros['verbal'];
    $totalGlobal=(int)$totalRegistros['global'];
    $totalAuditivo=(int)$totalRegistros['auditivo'];
    $totalLector=(int)$totalRegistros['lector_escritor'];
    $totalKines=(int)$totalRegistros['kinestesico'];
    $fecha=$totalRegistros['fecha'];
    $cedula=$totalRegistros['documento'];
    $nombre=$totalRegistros['nombre_style'];
    $test=$totalRegistros['test'];
    $pdf->Ln(5);
    $pdf->SetTextColor(0,0,0);
    $pdf->SetFillColor(255, 255, 255);
    $pdf->Cell(60,6,utf8_decode($nombre),1,0,'C',1);
    $pdf->Cell(30,6,utf8_decode($test),1,0,'C',1);
    $pdf->Cell(30,6,utf8_decode($fecha),1,0,'C',1);
    $pdf->Cell(30,6,utf8_decode($cedula),1,0,'C',1);
    $pdf->Cell(15,6,utf8_decode("$totalActivo"),1,0,'C',1);
    $pdf->Cell(18,6,utf8_decode("$totalSensorial"),1,0,'C',1);
    $pdf->Cell(15,6,utf8_decode("$totalVisual"),1,0,'C',1);
    $pdf->Cell(20,6,utf8_decode("$totalSecuencial"),1,0,'C',1);
    $pdf->Cell(20,6,utf8_decode("$totalReflexivo"),1,0,'C',1);
    $pdf->Cell(15,6,utf8_decode("$totalIntuitivo"),1,0,'C',1);
    $pdf->Cell(15,6,utf8_decode("$totalVerbal"),1,0,'C',1);
    $pdf->Cell(15,6,utf8_decode("$totalGlobal"),1,0,'C',1);
    $pdf->Cell(15,6,utf8_decode("$totalAuditivo"),1,0,'C',1);
    $pdf->Cell(30,6,utf8_decode("$totalLector"),1,0,'C',1);
    $pdf->Cell(20,6,utf8_decode("$totalKines"),1,0,'C',1);

}
$pdf->OutPut();
