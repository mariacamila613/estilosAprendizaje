<?php 
require("../../consultas/moduloReportes/pdf/clasePdf.php");
require("../../consultas/conexionBaseDatos.php");
require ("../../consultas/activeSession.php");
include("../../consultas/consultaReporte.php");
error_reporting(0);


 if (is_null($activo2) AND is_null($sensorial2) AND is_null($visual2) AND is_null($secuencial2) AND is_null($reflexivo2) AND is_null($intuitivo2) AND is_null($verbal2) AND is_null($global2)) {
      $activo2Vacio="-";
      $sensorial2Vacio="-";
      $visual2Vacio="-";
      $secuencial2Vacio="-";
      $reflexivo2Vacio="-";
      $intuitivo2Vacio="-";
      $verbal2Vacio="-";
      $global2Vacio="-";
      header("Location: reporteGeneral.php");
}




$sql = "SELECT cedula, nombre_style  from usuario
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

 


    $consolidado="SELECT activo, sensorial, visual, secuencial, reflexivo, intuitivo, verbal, global, fecha
    FROM consolidado_felder_vark
    WHERE documento='$document' AND test='Felder'
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
    $pdf->Ln(5);
    $pdf->Write(5, "Documento: $document");
    $pdf->Ln(5);
    $programa=utf8_decode($carrera);
    $pdf->Write(5, "Programa Curricular: ".$programa);
    $pdf->Ln(5);
    $pdf->Write(5, "Test: Felder");

    $pdf->Ln(10);
    $pdf->MultiCell(190,5, utf8_decode('Activo: Indica preferencias hacia el procesamiento a través de la aplicación de los conocimientos y el trabajo en grupo. Tienden a retener y comprender mejor nueva información cuando hacen algo activo con ella (discutiéndola, aplicándola, explicándosela a otros).'));
    $pdf->Ln(2);
    $pdf->MultiCell(190,5, utf8_decode('Sensorial: Se orienta hacia la percepción de hechos de la realidad y detalles. Refiere a un tipo de pensamiento concreto, práctico y procedimental; sigue procedimientos muy bien establecidos; gustan de trabajo práctico (trabajo de laboratorio).'));
    $pdf->Ln(2);
    $pdf->MultiCell(190,5, utf8_decode('Visual: Representa mejor el contenido a través de materiales figurativos como diagramas, gráficas, películas, demostraciones, entre otros; recuerdan mejor lo que ven.'));
    $pdf->Ln(2);
    $pdf->MultiCell(190,5, utf8_decode('Secuencial: Se orienta hacia una comprensión de tipo analítica siguiendo procesos lineales y predeterminados. Aprenden en pequeños pasos incrementales cuando el siguiente paso está siempre lógicamente relacionado con el anterior; ordenados y lineales. '));
    $pdf->Ln(2);
    $pdf->MultiCell(190,5, utf8_decode('Reflexivo: Señala habilidades para adquirir conocimientos mediante la escucha y el pensamiento individual sobre los contenidos. Tienden a retener y comprender nueva información pensando y reflexionando sobre ella, prefieren aprender meditando, pensando y trabajando solos. '));
    $pdf->Ln(2);
    $pdf->MultiCell(190,5, utf8_decode('Intuitivo: Tiende hacia el descubrimiento de relaciones entre conceptos y significados subyacentes. Alude a habilidades creativas e innovadoras; orientados hacia las teorías y los significados; les gusta innovar y odian la repetición.'));
    $pdf->Ln(2);
    $pdf->MultiCell(190,5, utf8_decode('Verbal: Alude a las preferencias por las explicaciones orales u escritas; entienden mejor lo que leen o lo que oyen.'));
    $pdf->Ln(2);
    $pdf->MultiCell(190,5, utf8_decode('Global: Tiende hacia el entendimiento holístico captando el sentido amplio de los contenidos. Esta característica puede conllevar dificultades para explicar el modo en que llevan a cabo la comprensión de los conceptos y conclusiones. '));

    $pdf->Ln(10);
    $pdf->Cell(25, 6, utf8_decode('Fecha'), 1, 0, 'C', 2);
    $pdf->Cell(20, 6, utf8_decode(' Activo'), 1, 0, 'C', 2);
    $pdf->Cell(20, 6, utf8_decode(' Sensorial'), 1, 0, 'C', 2);
    $pdf->Cell(20, 6, utf8_decode(' Visual'), 1, 0, 'C', 2);
    $pdf->Cell(25, 6, utf8_decode(' Secuencial'), 1, 0, 'C', 2);
    $pdf->Cell(20, 6, utf8_decode(' Reflexivo'), 1, 0, 'C', 2);
    $pdf->Cell(20, 6, utf8_decode(' Intuitivo'), 1, 0, 'C', 2);
    $pdf->Cell(20, 6, utf8_decode(' Verbal'), 1, 0, 'C', 2);
    $pdf->Cell(20, 6, utf8_decode(' Global'), 1, 0, 'C', 2);
    $pdf->SetFont('');


    while ($totalRegistros=pg_fetch_array($consolidad) ) {
        $totalActivo=(int)$totalRegistros['activo'];
        $totalSensorial=(int)$totalRegistros['sensorial'];
        $totalVisual=(int)$totalRegistros['visual'];
        $totalSecuencial=(int)$totalRegistros['secuencial'];
        $totalReflexivo=(int)$totalRegistros['reflexivo'];
        $totalIntuitivo=(int)$totalRegistros['intuitivo'];
        $totalVerbal=(int)$totalRegistros['verbal'];
        $totalGlobal=(int)$totalRegistros['global'];
        $fecha=$totalRegistros['fecha'];
        
        $pdf->Ln(5);
        $pdf->Cell(25,6,utf8_decode($fecha),1,0,'C',1);
        $pdf->Cell(20,6,utf8_decode("$totalActivo"),1,0,'C',1);
        $pdf->Cell(20,6,utf8_decode("$totalSensorial"),1,0,'C',1);
        $pdf->Cell(20,6,utf8_decode("$totalVisual"),1,0,'C',1);
        $pdf->Cell(25,6,utf8_decode("$totalSecuencial"),1,0,'C',1);
        $pdf->Cell(20,6,utf8_decode("$totalReflexivo"),1,0,'C',1);
        $pdf->Cell(20,6,utf8_decode("$totalIntuitivo"),1,0,'C',1);
        $pdf->Cell(20,6,utf8_decode("$totalVerbal"),1,0,'C',1);
        $pdf->Cell(20,6,utf8_decode("$totalGlobal"),1,0,'C',1);

    }

//********************************-----------------------*******************************//
    $pdf->Ln(7);

    $pdf->SetFont('Arial', 'B', 9);
    $pdf->ln(1);
    $pdf->SetFont('');
    $pdf->Ln(7);
    //$pdf->Cell(0, 0, utf8_decode('Preguntas en detalle con respuestas'), 0,0, 'C');
    $pdf->Ln(5);
    $pdf->SetFont('Arial', 'B', 7);
 
    $pdf->Ln(5);
    $pdf->OutPut();


