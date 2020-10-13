<?php 
require("Classes/PHPExcel/IOFactory.php");
require("../conexionBaseDatos.php");
require("../moduloReportes/pdf/clasePdf.php");
require ("../activeSession.php");
error_reporting(0);


if($_FILES['fileName']['name']==""){
		header("Location: ../../vistas/html/reporteAdmin.php");
}else{
	$nombre=$_FILES['fileName']['name'];
	$guardado=$_FILES['fileName']['tmp_name'];
	$mover=move_uploaded_file($guardado, 'archivos/'.$nombre);
	$nombreArchivo=$_FILES['fileName']['name'];
	$partes_ruta = pathinfo('archivos/'.$nombre);
	if($partes_ruta['extension']=="xlsx" OR $partes_ruta['extension']=="xls"){
		
		// Cargo la hoja de cálculo
		$objPHPExcel = PHPExcel_IOFactory::load('archivos/'.$nombreArchivo);

				//Asigno la hoja de calculo activa
		$objPHPExcel->setActiveSheetIndex(0);
		
		//Obtengo el numero de filas del archivo
		$numRows = $objPHPExcel->setActiveSheetIndex(0)->getHighestRow();
	
		//Consultando el encabezado
		$arregloDocumentos=array();
		$i=1;
		//Mirando los valores
		$identificacion =$objPHPExcel->getActiveSheet()->getCell('B'.$i)->getCalculatedValue();
		// echo "El encabezado es: ",$identificacion;
			//Si el encabezado es tiene el mismo formato del SIA
			if($identificacion=="DOCUMENTO"){
				array_push($arregloDocumentos, $identificacion);

				for ($i = 2; $i <= $numRows; $i++) {
					$identificacion=$objPHPExcel->getActiveSheet()->getCell('B'.$i)->getCalculatedValue();
					array_push($arregloDocumentos, $identificacion);
				}
				$_SESSION['cedulas']=$arregloDocumentos;
				header("Location: ../../vistas/html/filtro.php");
			}else{
				// echo "El encabezado es: ",$identificacion;
				header("Location: ../../vistas/html/reporteAdmin.php");
			}
	}else{
			header("Location: ../../vistas/html/reporteAdmin.php");
	}

}








?>