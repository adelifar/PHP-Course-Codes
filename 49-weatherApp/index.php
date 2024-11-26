<?php

use App\Weather\FakeWeatherFetcher;
use App\Weather\RandomWeatherFetcher;
use App\Weather\RemoteWeatherFetcher;

require __DIR__.'/inc/all.php';
$fetcher=new RemoteWeatherFetcher();
$info=$fetcher->fetch('Karaj');
if (empty($info)){
    echo "Weather could not be fetched!";
    die();
}
require __DIR__.'/views/index.view.php';