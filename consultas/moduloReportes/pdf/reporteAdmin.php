<?php
require("clasePdf.php");
require("../../conexionBaseDatos.php");
require ("../../activeSession.php");
error_reporting(0);



//Selección de la cantidad de test.
$consultaCantidad="SELECT cantidad
FROM pregunta, resp_usu
WHERE pregunta.id_test=resp_usu.id_test AND resp_usu.id_test=1
GROUP BY cantidad

";
$extraer=pg_query($consultaCantidad);





$query="SELECT preg.pregunta, resp.fecha, resp.hora, resp.valor_respuesta, resp.test, resp.cantidad, resp.id_pregunta
FROM pregunta as preg, resp_usu as resp
WHERE  preg.id_test=resp.id_test AND resp.id_test=1 AND resp.id_pregunta=preg.id_pregunta
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
    $cedula=$totalRegistros['documento'];
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

//********************************-----------------------*******************************//
        // $pdf->Ln(7);

        // $pdf->SetFont('Arial', 'B', 9);
        // $pdf->SetFillColor(190, 217, 243);
        // $pdf->SetFont('');
        //   $pdf->Ln(7);
        // $pdf->Cell(0, 0, utf8_decode('Preguntas en detalle con respuestas'), 0,0, 'C');
        // $pdf->Ln(5);
        // $pdf->SetFont('Arial', 'B', 7);
        // $pdf->Cell(156, 6, 'PREGUNTA', 1, 0, 'C', 2);
        // $pdf->Cell(16, 6, 'RESPUESTA', 1, 0, 'C', 2);
        // $pdf->Cell(16, 6, 'FECHA', 1, 0, 'C', 2);
        // $pdf->Ln(3);



// while($sacar=pg_fetch_array($extraer) ){
// $pdf->Ln(4);
//     $canti=(int)$sacar['cantidad'];

// for ($i=0; $i<$canti; $i++) {

// while ($row=pg_fetch_array($exe) ) {



//     if ($row['valor_respuesta']=='1') {
//         $a="Sí";
//     }else{
//         $a="No";
//     } 
//     $pdf->Ln(1);
//     $pdf->Cell(156,6,utf8_decode($row['pregunta']),1,0,'L',1);

//     $pdf->Cell(16,6,utf8_decode($a),1,0,'C',1);
//     $pdf->Cell(16,6,utf8_decode($row['fecha']),1,0,'C',1);
//     $pdf->Ln(5);
//     $pdf->SetAuthor('GAIA - Unal Manizales', true);

// }

// }
//  $pdf->Ln(5);

// }
$pdf->OutPut();
