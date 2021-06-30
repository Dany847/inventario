<?php
	include 'plantilla_e.php';
	require 'connect.php';
	 $consulta = $conn->query("select * from equipos  where idarea = '1'
	  ") or die(mysqli_error());
	$pdf = new PDF();
	$pdf->AliasNbPages();
	$pdf->AddPage();
	$pdf->SetFillColor(255,255,255);
	$pdf->SetFont('Arial','B',16);
	$pdf->Cell(200,1, utf8_decode('INSTITUTO TECNOLÓGICO DE TECOMATLÁN'),0,0,'C' );
	$pdf->Ln(5);
	$pdf->SetFillColor(255,255,255);
	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(140,6, utf8_decode('ÁREA: '),0,0,'C' );
	$pdf->Ln(0);
	$pdf->SetFillColor(255,255,255);
	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(230,6, utf8_decode('LABORATORIO DE BROMATOLOGÍA'),0,0,'C' );
	$pdf->Ln(10);
	$pdf->SetFillColor(255,255,255);
	$pdf->SetFont('Arial','',12);
	$pdf->Cell(70,6, utf8_decode('Nombre del responsable: '),0,0,'C' );
	$pdf->Ln(0);
	$pdf->SetFillColor(255,255,255);
	$pdf->SetFont('Arial','',12);
	$pdf->Cell(190,6, utf8_decode('M.C. Federico Francisco Martínez'),0,0,'C' );
	$pdf->Ln(5);
	$pdf->SetFillColor(255,255,255);
	$pdf->SetFont('Arial','',12);
	$pdf->Cell(39,6, utf8_decode('Periodo: '),0,0,'C' );
	$pdf->Ln(10);
	$pdf->SetFillColor(255,255,255);
	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(20,6, utf8_decode('CANTIDAD'),1,0,'C',1);
	$pdf->Cell(35,6, utf8_decode('DESCRIPCIÓN'),1,0,'C',1);
	$pdf->Cell(22,6, utf8_decode('MARCA'),1,0,'C',1);
	$pdf->Cell(25,6, utf8_decode('MODELO'),1,0,'C',1);
	$pdf->Cell(45,6, utf8_decode('N° DE SERIE'),1,0,'C',1);
	$pdf->Cell(43,6, utf8_decode('OBSERVACIONES'),1,1,'C',1);
	$pdf->SetFont('Arial','',8);
	while($fila = $consulta->fetch_array())
	{
		$pdf->Cell(20,6,utf8_decode($fila['cantidad']),1,0,'C');
		$pdf->Cell(35,6,utf8_decode($fila['descripcion']),1,0,'C');
		$pdf->Cell(22,6,utf8_decode($fila['marca']),1,0,'C');
		$pdf->Cell(25,6,utf8_decode($fila['modelo']),1,0,'C');
		$pdf->Cell(45,6,utf8_decode($fila['n_serie']),1,0,'C');
		$pdf->Cell(43,6,utf8_decode($fila['observaciones']),1,1,'C');
	}
	$pdf->Ln(6);
	$pdf->SetFillColor(255,255,255);
	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(200,6, utf8_decode('Vo. Bo. '),0,0,'C' );
	$pdf->SetFillColor(255,255,255);
	$pdf->Ln(10);
	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(200,6, utf8_decode('_____________________________'),0,0,'C' );
	$pdf->Ln(5);
	$pdf->SetFillColor(255,255,255);
	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(200,6, utf8_decode('M.C. Federico Francisco Martínez'),0,0,'C' );
	$pdf->Output();
?>

<?php
	 $consulta = $conn->query("select * from equipos  where idarea = '2'
	  ") or die(mysqli_error());
	$pdf = new PDF();
	$pdf->AliasNbPages();
	$pdf->AddPage();
	$pdf->SetFillColor(255,255,255);
	$pdf->SetFont('Arial','B',16);
	$pdf->Cell(200,1, utf8_decode('INSTITUTO TECNOLÓGICO DE TECOMATLÁN'),0,0,'C' );
	$pdf->Ln(5);
	$pdf->SetFillColor(255,255,255);
	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(140,6, utf8_decode('ÁREA: '),0,0,'C' );
	$pdf->Ln(0);
	$pdf->SetFillColor(255,255,255);
	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(230,6, utf8_decode('ÁREA DE PESADO'),0,0,'C' );
	$pdf->Ln(10);
	$pdf->SetFillColor(255,255,255);
	$pdf->SetFont('Arial','',12);
	$pdf->Cell(70,6, utf8_decode('Nombre del responsable: '),0,0,'C' );
	$pdf->Ln(0);
	$pdf->SetFillColor(255,255,255);
	$pdf->SetFont('Arial','',12);
	$pdf->Cell(190,6, utf8_decode('M.C. Federico Francisco Martínez'),0,0,'C' );
	$pdf->Ln(5);
	$pdf->SetFillColor(255,255,255);
	$pdf->SetFont('Arial','',12);
	$pdf->Cell(39,6, utf8_decode('Periodo: '),0,0,'C' );
	$pdf->Ln(10);
	$pdf->SetFillColor(255,255,255);
	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(20,6, utf8_decode('CANTIDAD'),1,0,'C',1);
	$pdf->Cell(35,6, utf8_decode('DESCRIPCIÓN'),1,0,'C',1);
	$pdf->Cell(22,6, utf8_decode('MARCA'),1,0,'C',1);
	$pdf->Cell(25,6, utf8_decode('MODELO'),1,0,'C',1);
	$pdf->Cell(45,6, utf8_decode('N° DE SERIE'),1,0,'C',1);
	$pdf->Cell(43,6, utf8_decode('OBSERVACIONES'),1,1,'C',1);
	$pdf->SetFont('Arial','',8);
	while($fila = $consulta->fetch_array())
	{
		$pdf->Cell(20,6,utf8_decode($fila['cantidad']),1,0,'C');
		$pdf->Cell(35,6,utf8_decode($fila['descripcion']),1,0,'C');
		$pdf->Cell(22,6,utf8_decode($fila['marca']),1,0,'C');
		$pdf->Cell(25,6,utf8_decode($fila['modelo']),1,0,'C');
		$pdf->Cell(45,6,utf8_decode($fila['n_serie']),1,0,'C');
		$pdf->Cell(43,6,utf8_decode($fila['observaciones']),1,1,'C');
	}
	$pdf->Ln(6);
	$pdf->SetFillColor(255,255,255);
	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(200,6, utf8_decode('Vo. Bo. '),0,0,'C' );
	$pdf->SetFillColor(255,255,255);
	$pdf->Ln(10);
	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(200,6, utf8_decode('_____________________________'),0,0,'C' );
	$pdf->Ln(5);
	$pdf->SetFillColor(255,255,255);
	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(200,6, utf8_decode('M.C. Federico Francisco Martínez'),0,0,'C' );
	$pdf->Output();
?>