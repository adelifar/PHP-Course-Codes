<?php
require 'fpdfp/fpdf.php';

class PDF extends FPDF
{
    function getData($file)
    {
        $lines = file($file);
        $data = [];
        foreach ($lines as $line) {
            $data[] = explode(';', trim($line));
        }
        return $data;
    }

    function getSimpleTable($header, $data)
    {
        foreach ($header as $column)
            $this->Cell(40, 7, $column, 1);
        $this->Ln();
        foreach ($data as $row) {
            foreach ($row as $cell) {
                $this->Cell(40, 7, $cell, 1);
            }
            $this->Ln();
        }
    }

    function getStyledTable($header, $data)
    {
        $this->SetFillColor(255, 0, 0);
        $this->SetTextColor(255);
        $this->SetDrawColor(128, 0, 0);
        $this->SetLineWidth(.3);
        $this->SetFont('', 'B');

        $colWidth = [40, 35, 40, 45];
        for ($i = 0; $i < count($header); $i++) {
            $this->Cell($colWidth[$i], 7, $header[$i], 1, 0, 'C', 1);
        }
        $this->Ln();

        $this->SetFillColor(224, 235, 255);
        $this->SetTextColor(0);
        $this->SetFont('');

        $fill = 0;
        foreach ($data as $row) {
            $this->Cell($colWidth[0], 6, $row[0], 'LR', 0, 'L', $fill);
            $this->Cell($colWidth[1], 6, $row[1], 'LR', 0, 'L', $fill);
            $this->Cell($colWidth[2], 6, number_format($row[2]), 'LR', 0, 'R', $fill);
            $this->Cell($colWidth[3], 6, number_format($row[3]), 'LR', 0, 'R', $fill);
            $this->Ln();
            $fill = !$fill;
        }
        $this->Cell(array_sum($colWidth),0,'','T');

    }
}

$pdf = new PDF();
$header = ['Name', "City", 'Age', 'Salary'];
$pdf->SetFont('Arial', '', 14);
$pdf->AddPage();
$data = $pdf->getData('table.txt');
$pdf->getSimpleTable($header, $data);
$pdf->AddPage();
$pdf->getStyledTable($header,$data);
$pdf->Output();