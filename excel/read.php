<?php
require 'vendor/autoload.php';
$spreadsheet=\PhpOffice\PhpSpreadsheet\IOFactory::load(__DIR__.'/hello.xlsx');
$sheet=$spreadsheet->getActiveSheet();

$cellValue=$sheet->getCell('A2')->getValue();
//var_dump($cellValue);

foreach ($sheet->getRowIterator() as $row) {
    $cellIterator=$row->getCellIterator();
    foreach ($cellIterator as $cell)
        echo '|'.$cell->getColumn().$cell->getRow(). "->".$cell->getValue().'|';
    echo "<br>";
}