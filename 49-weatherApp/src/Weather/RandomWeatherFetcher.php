<?php
namespace App\Weather;
class RandomWeatherFetcher implements WeatherFetcherInterface
{

    public function fetch(string $city): WeatherInfo
    {
       $weatherTypes=[
           'stormy',
           'snowy',
           'sunny',
           'cloudy'
       ];
       return new WeatherInfo($city,rand(0,50),$weatherTypes[array_rand($weatherTypes)]);
    }
}
