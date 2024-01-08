<?php

declare(strict_types=1);

/* EXERCISE 2





Remember for now we will use properties and methods that can be accessed from everywhere.





Make sure that each print is on a different line.
Try to get this error on the screen= Fatal error: Uncaught Error: Call to undefined method Beverage::getAlcoholPercentage() in /var/www/becode/workshop/exercise2.php on line 64
USE TYPEHINTING EVERYWHERE!
*/






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
}


//TODO: Also the name equal to Duvel and the alcohol percentage to 8,5%
$duvel = new Beer('Duvel', 8.5);

//TODO: Print the getAlcoholPercentage 2 times on the screen in two different ways, print the color on the screen and the getInfo.



//require_once "classes.php";


