<?php
require 'vendor/autoload.php';
$spreadsheet=new \PhpOffice\PhpSpreadsheet\Spreadsheet();
$sheet=$spreadsheet->getActiveSheet();

$sheet->setCellValue('A1', 'Name');
$sheet->setCellValue('B1', 'Age');
$sheet->setCellValue('A2', 'Alice');
$sheet->setCellValue('B2', '30');
$sheet->setCellValue('A3', 'Bob');
$sheet->setCellValue('B3', '25');

$sheet->getColumnDimension('A')->setAutoSize(true);
$sheet->getColumnDimension('B')->setAutoSize(true);

$sheet->getStyle('A1:B1')->getFont()->setBold(true);

$sheet->setTitle("My data");
$sheet->getPageSetup()->setOrientation(\PhpOffice\PhpSpreadsheet\Worksheet\PageSetup::ORIENTATION_PORTRAIT);
$sheet->getPageMargins()->setTop(0.5);
$sheet->getPageMargins()->setLeft(0.7);



$writer=new PhpOffice\PhpSpreadsheet\Writer\Xlsx($spreadsheet);
$writer->save('hello.xlsx');

//download
header('Content-type: application/vnd.openxmlformats.spreadsheetml.sheet');
header('Content-Disposition: attachment; filename="Hello.xlsx');
$writer->save('php://output');