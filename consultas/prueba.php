<?php

include("conexionBaseDatos.php");
include("activeSession.php");
require("moduloReportes/pdf/clasePdf.php");
// error_reporting(0);






//Selección de la cantidad de test.
$consultaCantidad="SELECT cantidad
FROM pregunta, resp_usu
WHERE pregunta.id_test=resp_usu.id_test AND resp_usu.id_test=1
GROUP BY cantidad

";
$extraer=pg_query($consultaCantidad);


$consolidado="SELECT activo, reflexivo, teorico, pragmatico, consolidado.fecha, documento, usuario.nombre, test
FROM consolidado, usuario
WHERE usuario.cedula=consolidado.documento
ORDER BY fecha
";
$consolidad=pg_query($consolidado);


$pdf=new PDF ();
        $pdf->AddPage();
        $pdf->SetFillColor(243, 243, 190);
        $pdf->Ln(4);
        $pdf->Cell(0, 10, utf8_decode('El Grupo de Ambientes Inteligentes Adaptativos GAIA reporta:'), 0,0, 'C');
        $pdf->Ln(10);
        $pdf->SetFont('Arial', 'B', 9);
        // $name=utf8_decode($nombre);
        // $pdf->Write(5, "Nombre: $name");
        $programa=utf8_decode($carrera);
        $pdf->Ln(5);
        // $pdf->Write(5, "Documento: $document");
        // $pdf->Ln(5);
        // $pdf->Write(5, "Programa Curricular: $programa");
        // $pdf->Ln(5);
        // $pdf->Write(5, "Test: Chaea");
        $pdf->Ln(10);
        $pdf->Cell(45, 6, utf8_decode('Nombre'), 1, 0, 'C', 2);
        $pdf->Cell(20, 6, utf8_decode('Test'), 1, 0, 'C', 2);
        $pdf->Cell(20, 6, utf8_decode('Fecha'), 1, 0, 'C', 2);
        $pdf->Cell(20, 6, utf8_decode('Cédula'), 1, 0, 'C', 2);
        $pdf->Cell(20, 6, utf8_decode('Activo'), 1, 0, 'C', 2);
        $pdf->Cell(20, 6, utf8_decode('Reflexivo'), 1, 0, 'C', 2);
        $pdf->Cell(20, 6, utf8_decode('Teórico'), 1, 0, 'C', 2);
        $pdf->Cell(20, 6, utf8_decode('Pragmático'), 1, 0, 'C', 2);
        $pdf->SetFont('');










while ($totalRegistros=pg_fetch_array($consolidad) ) {

    $totalActivo=(int)$totalRegistros['activo'];
    $totalReflexivo=(int)$totalRegistros['reflexivo'];
    $totalTeorico=(int)$totalRegistros['teorico'];
    $totalPragmatico=(int)$totalRegistros['pragmatico'];

    $fecha=$totalRegistros['fecha'];
    $cedula=$_SESSION['cedulas'];
    $nombre=$totalRegistros['nombre'];
    $test=$totalRegistros['test'];

        $pdf->Ln(5);
        $pdf->SetFillColor(170, 247, 203);
        $pdf->Cell(45,6,utf8_decode($nombre),1,0,'C',1);
        $pdf->Cell(20,6,utf8_decode($test),1,0,'C',1);
        
        $pdf->Cell(20,6,utf8_decode($fecha),1,0,'C',1);
        $pdf->Cell(20,6,utf8_decode($cedula),1,0,'C',1);
        $pdf->Cell(20,6,utf8_decode("$totalActivo%"),1,0,'C',1);
        $pdf->Cell(20,6,utf8_decode("$totalReflexivo%"),1,0,'C',1);
        $pdf->Cell(20,6,utf8_decode("$totalTeorico%"),1,0,'C',1);
        $pdf->Cell(20,6,utf8_decode("$totalPragmatico%"),1,0,'C',1);

}


$pdf->OutPut();
