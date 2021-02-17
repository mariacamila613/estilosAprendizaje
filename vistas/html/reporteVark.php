<?php 
require("../../consultas/moduloReportes/pdf/clasePdf.php");
require("../../consultas/conexionBaseDatos.php");
require ("../../consultas/activeSession.php");
include("../../consultas/consultaReporte.php");
error_reporting(0);



 if (is_null($activo1)) {
      $activoVacio11="No hay resultados";
      header("Location: reporteGeneral.php");
}



$sql = "SELECT cedula, nombre_style, carrera  from usuario
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

 


    $consolidado="SELECT visual, auditivo, lector_escritor, kinestesico, fecha
    FROM consolidado_felder_vark
    WHERE documento='$document' AND test='Vark'
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
    $pdf->Write(5, "Test: Vark");


    $pdf->Ln(10);
    $pdf->MultiCell(190,5, utf8_decode('Visual: Se refiere a las personas que aprenden preferentemente mediante la observación. Pueden tener dificultad para recordar instrucciones y mensajes verbales. Para ellos es muy importante ver la expresión facial y el lenguaje corporal de la persona que habla para poder entender y retener la lección. Durante charlas o conferencias prefieren seguir la conferencia en fotocopias y transparencias o tomar notas antes que seguir la explicación oral.'));
    $pdf->Ln(2);
    $pdf->MultiCell(190,5, utf8_decode('Auditivo: Se refiere a las personas que aprenden mejor cuando reciben la información oralmente y cuando pueden hablar y explicar esa información a otra persona. Tiene facilidad de palabra y expresan sus emociones verbales. Tienen éxito cuando las instrucciones son dadas en voz alta o ellos deben responder oralmente.'));
    $pdf->Ln(2);
    $pdf->MultiCell(190,5, utf8_decode('Lector-Escritor: Son las personas que aprenden bien leyendo o escribiendo el material que desea aprender. Los estudiantes de Lectura y Escritura son buenos estudiosos tradicionales. Encajan con el método de estudio convencional, enseñado por la escuela, de leer libros de texto y escribir notas, los estudiantes son buenos para tomar notas durante la clase y estudian mejor leyendo estas notas o copiándolas.'));
    $pdf->Ln(2);
    $pdf->MultiCell(190,5, utf8_decode('Kinestesico: Se refiere a las personas que aprenden por medio de las actividades físicas. Ellos aprenden cuando hacen cosas, a través del movimiento y la manipulación física, Necesitan moverse constantemente y buscan cualquier pretexto para levantarse. Les gusta tocarlo todo y a través de ello descubrir cómo funcionan las cosas. '));



    $pdf->Ln(10);
    $pdf->Cell(25, 6, utf8_decode('Fecha'), 1, 0, 'C', 2);
    $pdf->Cell(40, 6, utf8_decode('% Visual'), 1, 0, 'C', 2);
    $pdf->Cell(40, 6, utf8_decode('% Auditivo'), 1, 0, 'C', 2);
    $pdf->Cell(40, 6, utf8_decode('% Lector-Escritor'), 1, 0, 'C', 2);
    $pdf->Cell(43, 6, utf8_decode('% Kinestésico'), 1, 0, 'C', 2);
    $pdf->SetFont('');








    while ($totalRegistros=pg_fetch_array($consolidad) ) {
        $totalVisual=(int)$totalRegistros['visual'];
        $total1=$totalVisual*100/16;

        $totalAuditivo=(int)$totalRegistros['auditivo'];
        $total2=$totalAuditivo*100/16;

        $totalLector=(int)$totalRegistros['lector_escritor'];
        $total3=$totalLector*100/16;

        $totalKines=(int)$totalRegistros['kinestesico'];
        $total4=$totalKines*100/16;

        $fecha=$totalRegistros['fecha'];

        $pdf->Ln(5);
        $pdf->Cell(25,6,utf8_decode($fecha),1,0,'C',1);
        $pdf->Cell(40,6,utf8_decode("$total1"),1,0,'C',1);
        $pdf->Cell(40,6,utf8_decode("$total2"),1,0,'C',1);
        $pdf->Cell(40,6,utf8_decode("$total3"),1,0,'C',1);
        $pdf->Cell(43,6,utf8_decode("$total4"),1,0,'C',1);

    }

//********************************-----------------------*******************************//
    $pdf->Ln(7);

    $pdf->SetFont('Arial', 'B', 9);
    $pdf->SetFillColor(190, 217, 243);
    $pdf->SetFont('');
    $pdf->Ln(7);
    
    $pdf->Ln(3);



$pdf->OutPut();
