<?php
	include 'plantillah.php';
	require 'connect.php';
	
	 $consulta = $conn->query("select p.idhistorial, p.f_prestado, p.cantidad, p.estado, m.descripcion, u.nombre, u.apellidos
	 	from historial p
	 	inner join materiales m on p.idmaterial = m.idmaterial
	 	inner join usuarios u on p.idusuario = u.idusuario
	  ") or die(mysqli_error());
	$pdf = new PDF();
	$pdf->AliasNbPages();
	$pdf->AddPage();
	$pdf->SetFillColor(255,255,255);
	$pdf->SetFont('Arial','B',16);
	$pdf->Cell(185,1, utf8_decode('INSTITUTO TECNOLÓGICO DE TECOMATLÁN'),0,0,'C' );
	$pdf->Ln(5);
	$pdf->SetFillColor(255,255,255);
	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(185,6, utf8_decode('HISTORIAL DE PRÉSTAMO DE MATERIALES'),0,0,'C' );
	$pdf->Ln(10);
	$pdf->SetFillColor(255,255,255);
	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(70,6, utf8_decode('Nombre del responsable: '),0,0,'C' );
	$pdf->Ln(0);
	$pdf->SetFillColor(255,255,255);
	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(180,6, utf8_decode('Federico Francisco Martínez'),0,0,'C' );
	$pdf->Ln(10);
	$pdf->SetFillColor(255,255,255);
	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(10,6, utf8_decode(''),0,0,'C',1);
	$pdf->Cell(25,6, utf8_decode('FECHA'),1,0,'C',1);
	$pdf->Cell(65,6, utf8_decode('NOMBRE COMPLETO'),1,0,'C',1);
	$pdf->Cell(50,6, utf8_decode('MATERIAL'),1,0,'C',1);
	$pdf->Cell(25,6, utf8_decode('CANTIDAD'),1,1,'C',1);
	
	$pdf->SetFont('Arial','',10);
	
	while($fila = $consulta->fetch_array())
	{
		$pdf->Cell(10,6,utf8_decode(' '),0,0,'C');
		$pdf->Cell(25,6,utf8_decode($fila['f_prestado']),1,0,'C');
		$pdf->Cell(65,6,utf8_decode($fila['nombre'])." ".utf8_decode($fila['apellidos']),1,0,'C');
		$pdf->Cell(50,6,utf8_decode($fila['descripcion']),1,0,'C');
		$pdf->Cell(25,6,utf8_decode($fila['cantidad']),1,1,'C');
	}

	$pdf->Output();
?>