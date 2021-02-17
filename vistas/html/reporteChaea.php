<?php 
require("../../consultas/moduloReportes/pdf/clasePdf.php");
require("../../consultas/conexionBaseDatos.php");
require ("../../consultas/activeSession.php");

include("../../consultas/consultaReporte.php");

error_reporting(0);


if (is_null($activo)) {
      $aVacio="No hay resultados";
      
      header("Location: reporteGeneral.php");
    
} 




$sql = "SELECT cedula, nombre_style from usuario
WHERE nombre_style='$varSeccion'
";
$ejecucion=pg_query($sql);
$docu=pg_fetch_array($ejecucion);
$document=$docu['cedula'];
$nombre=$docu['nombre_style'];


$consulta2 = "SELECT usuario.nombre_style, programa_curricular.nombre_carrera
FROM usuario, programa_curricular
WHERE cedula='$document' AND usuario.carrera = programa_curricular.codigo_carrera
";
$exe2=pg_query($consulta2);
$consultaSQL2=pg_fetch_array($exe2);
$carrera=$consultaSQL2['nombre_carrera'];

 



    $consolidado="SELECT activo, reflexivo, teorico, pragmatico, fecha
    FROM consolidado_chaea_chaea_junior
    WHERE documento='$document' AND test='Chaea'
    ORDER BY fecha
    ";
    $consolidad=pg_query($consolidado);
 
 
    $pdf=new PDF ();
    $pdf->AddPage();
    $pdf->SetFillColor(243, 243, 190);
    $pdf->Ln(4);
    $pdf->Cell(0, 10, utf8_decode('Ahora te presentamos el histórico de tus test realizados en nuestra aplicación'), 0,0, 'C');
    $pdf->Ln(15);
    $pdf->SetFont('Arial', '', 9);
    $name=utf8_decode($nombre);
    $pdf->Write(5, "Nombre: $name");
    $programa=utf8_decode($carrera);
    $pdf->Ln(5);
    $pdf->Write(5, "Documento: $document");
    $pdf->Ln(5);
    $pdf->Write(5, "Programa Curricular: $programa");
    $pdf->Ln(5);
    $pdf->Write(5, "Test: Chaea");

    $pdf->Ln(10);
    $pdf->MultiCell(190,5, utf8_decode('Activo: Son abiertos, improvisadores y espontáneos, no les importa correr riesgos o cometer errores. Retienen mejor la información haciendo algo con el conocimiento como discutirlo, explicarlo o aplicarlo. Les agrada el trabajo activo, desarrollan guías de estudio, carteleras, trabajos, talleres.'));
    $pdf->Ln(2);
    $pdf->MultiCell(190,5, utf8_decode('Reflexivo: Prefieren pensar detenidamente sobre el objeto de estudio y trabajar solos. Aumentan la comprensión en pasos lineales, pueden no entender el material, pero logran conectar lógicamente sus partes. Prefieren la elaboración de mapas conceptuales, diagramas de flujo, árboles de problemas.'));
    $pdf->Ln(2);
    $pdf->MultiCell(190,5, utf8_decode('Teorico: Se trata de estudiantes objetivos, con un profundo sentido crítico, metódico y disciplinado, que abordan los problemas desde un punto de vista lógico. Prefieren las actividades estructuradas que les permitan comprender sistemas complejos. Prefieren las clases magistrales.'));
    $pdf->Ln(2);
    $pdf->MultiCell(190,5, utf8_decode('Pragmatico: Recuerdan mejor lo que ven, figuras, demostraciones, diagramas, imágenes. Prefieren el apoyo de material didáctico. Prefieren descubrir posibilidades y relaciones, les agradan las innovaciones, captan mejor las abstracciones. '));

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
    $pdf->SetFillColor(190, 217, 243);
    $pdf->SetFont('');
    $pdf->Ln(7);
    // $pdf->Cell(0, 0, utf8_decode('Preguntas en detalle con respuestas'), 0,0, 'C');
    // $pdf->Ln(5);
    // $pdf->SetFont('Arial', 'B', 7);
    // $pdf->Cell(156, 6, 'PREGUNTA', 1, 0, 'C', 2);
    // $pdf->Cell(16, 6, 'RESPUESTA', 1, 0, 'C', 2);
    // $pdf->Cell(16, 6, 'FECHA', 1, 0, 'C', 2);
    $pdf->Ln(3);



    // while($sacar=pg_fetch_array($extraer) ){
    //     $pdf->Ln(4);
    //     $canti=(int)$sacar['cantidad'];

    //     for ($i=0; $i<$canti; $i++) {

    //         while ($row=pg_fetch_array($exe) ) {



    //             if ($row['valor_respuesta']=='1') {
    //                 $a="Sí";
    //             }else{
    //                 $a="No";
    //             } 
    //             $pdf->Ln(1);
    //             $pdf->Cell(156,6,utf8_decode($row['pregunta']),1,0,'L',1);

    //             $pdf->Cell(16,6,utf8_decode($a),1,0,'C',1);
    //             $pdf->Cell(16,6,utf8_decode($row['fecha']),1,0,'C',1);
    //             $pdf->Ln(5);
    //             $pdf->SetAuthor('GAIA - Unal Manizales', true);

    //         }

    //     }
    //     $pdf->Ln(5);

    // }


$pdf->OutPut();
