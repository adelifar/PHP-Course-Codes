<?php

class City
{
    public function __construct(
        public int    $id,
        public string $city,
        public string $cityAscii,
        public string $country,
        public float  $lat,
        public float  $lng,
        public string $iso2,
        public string $iso3,
        public string $capital,
        public int    $population,
        public string $adminName

    )
    {
    }
    public function getCityWithCountry():string
    {
        return "{$this->city}({$this->getFlag()}{$this->country})";
    }
    public function getFlag():string
    {
        return getFlagForCountry($this->iso2);
    }
}
