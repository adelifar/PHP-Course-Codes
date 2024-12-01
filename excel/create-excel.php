<?php
require 'vendor/autoload.php';
$spreadsheet=new \PhpOffice\PhpSpreadsheet\Spreadsheet();
$sheet=$spreadsheet->getActiveSheet();

$sheet->setCellValue('A1','Mehdi');
$sheet->setCellValue('B1','Adeli');
$sheet->setCellValue('A2','Name');
$sheet->setCellValue('B2','LastName');

$writer=new PhpOffice\PhpSpreadsheet\Writer\Xlsx($spreadsheet);
$writer->save('hello.xlsx');

//download
header('Content-type: application/vnd.openxmlformats.spreadsheetml.sheet');
header('Content-Disposition: attachment; filename="Hello.xlsx');
$writer->save('php://output');