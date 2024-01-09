<?php

declare(strict_types=1);

/* EXERCISE 7

Copy your solution from exercise 6




Use typehinting everywhere!
*/

class Beverage
{
    //TODO: Make a static property in the Beverage class that can only be accessed from inside the class called address which has the value "Melkmarkt 9, 2000 Antwerpen".
    private static $address = "Melkmarkt 9, 2000 Antwerpen";
    private  $color;
    private $price;
    private  $temperature;

    public function __construct(string $color, float $price, string $temperature = 'cold')
    {
        $this->color = $color;
        $this->price = $price;
        $this->temperature = $temperature;
    }

    public function getInfo(): string
    {
        return "This beverage is {$this->temperature} and {$this->color}.";
    }

    public function getTemperature(): string
    {
        return $this->temperature;
    }
//TODO: Print the address without creating a new instant of the beverage class 2 times in two different ways.
    public static function getAddress(): string
    {
        return self::$address;
    }

}

// Access the static property using the static method
echo "Address: " . Beverage::getAddress();
// Access the static property without creating an instance ()
//echo "Address: " . Beverage::$address;
