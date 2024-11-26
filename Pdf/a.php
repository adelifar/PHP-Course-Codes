<?php
require 'fpdfp/fpdf.php';
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(60,20,"Hello from Mehdi Adeli");
$pdf->Output();