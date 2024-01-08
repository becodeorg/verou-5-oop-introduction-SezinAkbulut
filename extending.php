<?php

declare(strict_types=1);

/* EXERCISE 2

Make sure that each print is on a different line.
Try to get this error on the screen= Fatal error: Uncaught Error: Call to undefined method Beverage::getAlcoholPercentage() in /var/www/becode/workshop/exercise2.php on line 64
USE TYPEHINTING EVERYWHERE!
*/

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





//TODO: Make class beer that extends from Beverage.
class Beer extends Beverage
 {

//TODO: Create the properties name (string) and alcoholPercentage (float).
    public $name;
    public $alcoholPercentage;

//TODO: Foresee a construct that's allows us to use all the properties from beverage and that sets the values for name and alcoholpercentage.
    public function __construct(string $name, float $alcoholPercentage, string $color = 'blond', float $price = 3.5, string $temperature = 'cold')
    {
        //TODO: Instantiate an object which represents Duvel. Make sure that the color is set to blond, the price equals 3.5 euro and the temperature to cold automatically.
        parent::__construct($color, $price, $temperature);
        $this->name = $name;
        $this->alcoholPercentage = $alcoholPercentage;
    }
    //TODO: Make a getAlcoholPercentage function which returns the alocoholPercentage.
    public function getAlcoholPercentage(): float
    {
        return $this->alcoholPercentage;
    }
    public function getColor(): string
    {
        return $this->color;
    }
}


//TODO: Also the name equal to Duvel and the alcohol percentage to 8,5%
$duvel = new Beer('Duvel', 8.5);

//TODO: Print the getAlcoholPercentage 2 times on the screen in two different ways, print the color on the screen and the getInfo.

// Print the getAlcoholPercentage in two different ways
echo $duvel->getAlcoholPercentage() ;
echo "<br>";
echo "{$duvel->getAlcoholPercentage()}%" ;
echo "<br>";
// Print the color on the screen
echo "Color: {$duvel->getColor()}";
echo "<br>";
// Print the getInfo on the screen
echo $duvel->getInfo();

// Attempt to call getAlcoholPercentage on Beverage (should result in a fatal error)
$beverage = new Beverage('red', 1.5);
// Uncommenting the line below will cause a fatal error
 echo $beverage->getAlcoholPercentage();




