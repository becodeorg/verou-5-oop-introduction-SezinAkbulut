<?php
declare(strict_types=1);

//EXERCISE 1
//TODO: Create a class beverage.
class Beverage
{
    public $color;
    public $price;
    public $temperature;

//TODO: Create the properties color (string), price (float) and temperature (string) and also foresee a construct.
//TODO: Have a default value "cold" in the construct for temperature.
public function __construct(string $color, float $price, string $temperature = 'cold')
{
    $this->color = $color;
    $this->price = $price;
    $this->temperature = $temperature;
}

//TODO: Make a getInfo function which returns "This beverage is <temperature> and <color>."
    public function getInfo(): string
    {
        return "This beverage is {$this->temperature} and {$this->color}.";
    }

    public function getTemperature(): string
    {
        return $this->temperature;
    }
}
//TODO: Instantiate an object which represents cola. Make sure that the color is set to black, the price equals 2 euro and the temperature to cold automatically
$cola = new Beverage('black', 2.0);

 //print the getInfo on the screen.
//TODO: Print the temperature on the screen.

//echo "Temperature: {$cola->getInfo()}";
echo $cola->getInfo() ;
echo "<br>";
echo "Temperature: {$cola->getTemperature()}";




//USE TYPEHINTING EVERYWHERE!













