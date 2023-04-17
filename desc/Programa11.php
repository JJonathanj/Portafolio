<?php


require('fpdf.php');


	$pdf = new FPDF('p','mm','A4');
	$pdf->AddPage();
	$pdf->SetFont('Arial', 'B', 12);
	$pdf->Cell (30,10, utf8_decode('¡Hola, Mundo Jonathan Jahir Olivares Luna!'),1,0,'C');
	$pdf->Cell(20);
	$pdf->Output();
	
	
?>