<?php
/**
 * Created by PhpStorm.
 * User: ZhouFurong
 * Date: 2019/8/16
 * Time: 17:12
 */

class Pencil
{
    protected $weight;
    protected $destinationCountry;

    public function setWeight($weight)
    {
        echo "weight set to: " . $weight . PHP_EOL;
        $this->weight = $weight;
        return $this;
    }

    public function setCountry($country)
    {
        echo "destination country is : ".$country.PHP_EOL;
        $this->destinationCountry = $country;
        return $this;
    }
}

$my