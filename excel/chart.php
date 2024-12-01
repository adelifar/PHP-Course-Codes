<?php

use PhpOffice\PhpSpreadsheet\Chart\Chart;
use PhpOffice\PhpSpreadsheet\Chart\DataSeries;
use PhpOffice\PhpSpreadsheet\Chart\DataSeriesValues;
use PhpOffice\PhpSpreadsheet\Chart\Layout;
use PhpOffice\PhpSpreadsheet\Chart\Legend;
use PhpOffice\PhpSpreadsheet\Chart\PlotArea;
use PhpOffice\PhpSpreadsheet\Chart\Title;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

require 'vendor/autoload.php';

$spreadsheet = new \PhpOffice\PhpSpreadsheet\Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();

$data = [
    [null, 2020, 2021, 2023],
    ['d1', 12, 15, 21],
    ['d2', 56, 73, 86],
    ['d3', 52, 61, 69],
    ['d4', 30, 32, 0]
];

$sheet->fromArray($data);

$dataSeriesLabels = [
    new DataSeriesValues(DataSeriesValues::DATASERIES_TYPE_STRING, 'Worksheet!$B$1', null, 1), //2020
    new DataSeriesValues(DataSeriesValues::DATASERIES_TYPE_STRING, 'Worksheet!$C$1', null, 1), //2021
    new DataSeriesValues(DataSeriesValues::DATASERIES_TYPE_STRING, 'Worksheet!$D$1', null, 1), //2023
];

$xAxis = [
    new DataSeriesValues(DataSeriesValues::DATASERIES_TYPE_STRING, 'Worksheet!$A$2:$A$5', null, 4)//d1...d4
];
$dataSeriesValues = [
    new DataSeriesValues(DataSeriesValues::DATASERIES_TYPE_NUMBER, 'Worksheet!$B$2:$B$5', null, 4),
    new DataSeriesValues(DataSeriesValues::DATASERIES_TYPE_NUMBER, 'Worksheet!$C$2:$C$5', null, 4),
    new DataSeriesValues(DataSeriesValues::DATASERIES_TYPE_NUMBER, 'Worksheet!$D$2:$D$5', null, 4),
];

$series = new DataSeries(DataSeries::TYPE_BARCHART_3D,
    DataSeries::GROUPING_CLUSTERED,
    range(0, count($dataSeriesValues) - 1),
    $dataSeriesLabels,
    $xAxis,
    $dataSeriesValues);

$layout = new Layout();

$plotArea = new PlotArea($layout, [$series]);

$legend = new Legend(Legend::POSITION_TOP, null, false);

$title = new Title('PHP Chart');
$chart = new Chart('chart1', $title, $legend, $plotArea, true, DataSeries::EMPTY_AS_GAP,
    null, null
);

$chart->setTopLeftPosition('B8');
$chart->setBottomRightPosition('N25');

$sheet->addChart($chart);

$writer=new Xlsx($spreadsheet);
$writer->setIncludeCharts(true);
$writer->save('chart.xlsx');