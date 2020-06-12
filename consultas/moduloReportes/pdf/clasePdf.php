<?php
require 'fpdf/fpdf.php';

class PDF extends FPDF{

    function Header(){


        $this->Image('unal.png', 55, 15, 50);
        $this->Image('descarga.png', 120, 15, 50);
        $this->SetTitle('Reporte Estilos de Aprendizaje', false);
        $this->Ln(10);
        $this->SetFont('Arial', 'B', 12);
        $this->Cell(30);
        $this->Ln(20);
   

    }

    function Footer (){
        $this->setY(-15);
        $this-> SetFont ('Arial', 'I',8);
        $this->Write(10, "Grupo de Ambientes Inteligentes Adaptativos - GAIA");
        $this->Cell(0,10, utf8_decode('Página ').$this->PageNo(),0,0,'R');
        $this->SetAuthor('GAIA - Unal Manizales', true);
    }


}

