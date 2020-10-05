<?php 
require("Classes/PHPExcel/IOFactory.php");
require("../conexionBaseDatos.php");
require("../moduloReportes/pdf/clasePdf.php");
require ("../activeSession.php");




	$nombre=$_FILES['fileName']['name'];
	$guardado=$_FILES['fileName']['tmp_name'];
	$mover=move_uploaded_file($guardado, 'archivos/'.$nombre);
	$nombreArchivo=$_FILES['fileName']['name'];

		// Cargo la hoja de cálculo
	$objPHPExcel = PHPExcel_IOFactory::load('archivos/'.$nombreArchivo);

		//Asigno la hoja de calculo activa
	$objPHPExcel->setActiveSheetIndex(0);
		//Obtengo el numero de filas del archivo
	$numRows = $objPHPExcel->setActiveSheetIndex(0)->getHighestRow();


	$arregloDocumentos=array();

	for ($i = 1; $i <= $numRows; $i++) {

		$nombre = $objPHPExcel->getActiveSheet()->getCell('A'.$i)->getCalculatedValue();
		$identificacion = $objPHPExcel->getActiveSheet()->getCell('B'.$i)->getCalculatedValue();
		$carrera = $objPHPExcel->getActiveSheet()->getCell('C'.$i)->getCalculatedValue();

		array_push($arregloDocumentos, $identificacion);
	}
	foreach ($arregloDocumentos as $documentos ) {
		echo "<br>";
		echo $documentos;

	}


// $pdf=new PDF ();
//         $pdf->AddPage();
    
$_SESSION['cedulas']=$arregloDocumentos;



	header("Location: ../prueba.php");



// $pdf->OutPut();


























?>