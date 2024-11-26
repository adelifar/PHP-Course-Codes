<?php
namespace App\Weather;

class WeatherInfo
{
    public function __construct(
        public string $city,
        public int $temperature,
        public string $type
    )
    {

    }
    public function getFahrenheit()
    {
        return round($this->getCelsius()*(9/5)+32);
    }
    public function getCelsius()
    {
        return round($this->temperature-273.15);
    }
}