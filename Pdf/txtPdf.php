<?php
require 'fpdfp/fpdf.php';

class PDF extends FPDF
{
    public function __construct(private string $title)
    {
        parent::__construct();
    }

    function Header()
    {
        $this->SetFont('Arial', 'B', 15);
        $w = $this->GetStringWidth($this->title) + 6;
        $this->SetX((210 + $w) / 2);
        $this->SetDrawColor(0, 120, 180);
        $this->SetFillColor(200, 200, 200);
        $this->SetTextColor(255, 0, 0);
        $this->SetLineWidth(1);
        $this->Cell($w, 9, $this->title, 1, 0, 'C', 1);
        $this->Ln(10);
    }

    function Footer()
    {
        $this->SetY(-20);
        $this->SetFont('Arial', 'I', 10);
        $this->SetTextColor(128);
        $this->Cell(0, 10, 'Page ' . $this->PageNo(), 0, 0, 'C');
    }

    function chapterTitle($num, $label)
    {
        $this->SetFont('Arial', '', 12);
        $this->SetFillColor(211, 211, 211);
        $this->Cell(0, 26, "Chapter $num: $label", 0, 1, 'L', 1);
        $this->Ln(4);
    }

    function chapterContent($file)
    {
        $txt = file_get_contents($file);
        $this->SetFont('Times', '', 12);
        $this->MultiCell(0, 5, $txt);
        $this->Ln();
        $this->SetFont('','I');
        $this->Cell(0,5,'(end of chapter)');
    }
    function showChapter($num,$title,$file)
    {
        $this->AddPage();
        $this->chapterTitle($num,$title);
        $this->chapterContent($file);
    }
}

$pdf = new PDF('Php Language');
$pdf->SetAuthor("Mehdi Adeli");
$pdf->showChapter(1,'Introduction','intro.txt');
$pdf->showChapter(2,'Arrays','array.txt');
$pdf->showChapter(3,'Object Oriented Programming','oop.txt');

$pdf->Output();
