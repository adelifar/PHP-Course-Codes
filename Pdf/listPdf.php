<?php
require 'fpdfp/fpdf.php';
class PDF extends FPDF
{
    //page header
    function Header()
    {
        //logo
        $this->Image('logo.jpg',10,8,33);

        $this->SetFont('Arial','B',20);
        $this->Cell(80);
        $this->Cell(50,10,'Header',1,0,'C');
        $this->Ln(30);
    }

    //footer
    function Footer()
    {
        $this->SetY(-15);
        $this->SetFont('Arial','I',8);
        //page number
        $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
    }
}
$pdf=new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',14);
for ($i = 0; $i < 30; $i++) {
    $pdf->Cell(0,10,'line number '.$i,0,1);
}
$pdf->Output();