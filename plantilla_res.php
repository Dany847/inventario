<?php

require 'fpdf/fpdf.php';

class PDF extends FPDF
{
	function Header()
	{
		$this->Ln(10);
		$this->SetFillColor(255,255,255);
		$this->SetFont('Arial','B',11);
		$this->Image('encabezados/residuo.png', 16, 12, 175 );
		$this->Cell(276,22, utf8_decode('Página ').$this->PageNo().' de {nb}',0,0,'C' );
		$this->SetFont('Arial','B',15);
		$this->Ln(25);
	}
	function Footer()
	{
		$this->SetY(-24);
		//$this->Image('img/pie.PNG', 5);
		$this->SetFont('Arial','B',11);
		$this->Cell( 50,20, 'ITT-AC-PO-012-06 ',0,0,'C' );
		$this->Cell( 250,20, 'Rev.0',0,0,'C' );
	}		
}
?>