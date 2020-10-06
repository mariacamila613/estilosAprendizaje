<?php

include("../../conexionBaseDatos.php");
include("../../activeSession.php");
include("clasePdf.php");

$arrayAll= array();

$cedulas=$_SESSION['cedulas'];

foreach ($cedulas as $key) {

    $consolidado="SELECT *
    FROM consolidado, usuario
    WHERE usuario.cedula=consolidado.documento  AND consolidado.documento='$key'
    ORDER BY consolidado.fecha
    ";

    $consolidad=pg_query($consolidado);


    if ($totalRegistros=pg_fetch_array($consolidad) ) {
        
        $arrayOne=array($totalRegistros['activo'],$totalRegistros['reflexivo'],$totalRegistros['teorico'],$totalRegistros['pragmatico'],$totalRegistros['fecha'],$totalRegistros['documento'],$totalRegistros['nombre'],$totalRegistros['test']);
        
        $arrayAll[]=$arrayOne;
    }
}

$pdf=new PDF ();
        $pdf->AddPage();
        $pdf->SetFillColor(243, 243, 190);
        $pdf->Ln(4);
        $pdf->Cell(0, 10, utf8_decode('El Grupo de Ambientes Inteligentes Adaptativos GAIA reporta:'), 0,0, 'C');
        $pdf->Ln(10);
        $pdf->SetFont('Arial', 'B', 9);
        $pdf->Ln(5);
        $pdf->Ln(10);
        $pdf->Cell(60, 6, utf8_decode('Nombre completo'), 1, 0, 'C', 2);
        $pdf->Cell(20, 6, utf8_decode('Test'), 1, 0, 'C', 2);
        $pdf->Cell(14, 6, utf8_decode('Activo'), 1, 0, 'C', 2);
        $pdf->Cell(17, 6, utf8_decode('Reflexivo'), 1, 0, 'C', 2);
        $pdf->Cell(14, 6, utf8_decode('Teórico'), 1, 0, 'C', 2);
        $pdf->Cell(19, 6, utf8_decode('Pragmático'), 1, 0, 'C', 2); 
        $pdf->Cell(20, 6, utf8_decode('Fecha'), 1, 0, 'C', 2);
        $pdf->SetFont('');



foreach ($arrayAll as $datos) {
 
    $totalActivo=(int)$datos[0];
    $totalReflexivo=(int)$datos[1];
    $totalTeorico=(int)$datos[2];
    $fecha=$datos[4];
 
    $totalPragmatico=(int)$datos[3];


  
    $nombre=$datos[6];
    $test=$datos[7];

        $pdf->Ln(5);
        $pdf->SetFillColor(170, 247, 203);
        $pdf->Cell(60,6,utf8_decode($nombre),1,0,'C',1);
        $pdf->Cell(20,6,utf8_decode($test),1,0,'C',1);

        $pdf->Cell(14,6,utf8_decode("$totalActivo%"),1,0,'C',1);
        $pdf->Cell(17,6,utf8_decode("$totalReflexivo%"),1,0,'C',1);
        $pdf->Cell(14,6,utf8_decode("$totalTeorico%"),1,0,'C',1);
        $pdf->Cell(19,6,utf8_decode("$totalPragmatico%"),1,0,'C',1);
        $pdf->Cell(20,6,utf8_decode("$fecha"),1,0,'C',1);

}

$pdf->OutPut();
