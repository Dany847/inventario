<?php

require 'fpdf/fpdf.php';

class PDF extends FPDF
{
	function Header()
	{
		$this->Ln(10);
		$this->SetFillColor(255,255,255);
		$this->SetFont('Arial','B',11);
		$this->Image('img/TecNM_logo.png', 18, 10, 48 );
		$this->Image('img/logoitt.png', 155, 12, 25 );
		$this->SetFont('Arial','B',15);
		$this->Ln(25);
	}
	function Footer()
	{
		$this->SetY(-24);
		$this->SetFont('Arial','B',11);
		$this->Cell(0,22, utf8_decode('Página ').$this->PageNo().' de {nb}',0,0,'C' );
		$this->Cell( 250,20, 'Rev.0',0,0,'C' );
	}		
}
?>