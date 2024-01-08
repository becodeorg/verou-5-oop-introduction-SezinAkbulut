<?php

declare(strict_types=1);

/* EXERCISE 3



TODO: Make all the other prints work without error.
TODO: After fixing the errors. Change the color of Duvel to light instead of blond and also print this new color on the screen after all the other things that were already printed (to be sure that the color has changed).


Make sure that you use the variables and not just this text line.

TODO: Print this method on the screen on a new line.

USE TYPEHINTING EVERYWHERE!
*/
//TODO: Copy the code of exercise 2 to here and delete everything related to cola



class Beverage
{
    private $color;
    private $price;
    private $temperature;

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
}

class Beer extends Beverage
{
    private $name;
    private $alcoholPercentage;

    public function __construct(string $name, float $alcoholPercentage, string $color = 'blond', float $price = 3.5, string $temperature = 'cold')
    {
        parent::__construct($color, $price, $temperature);
        $this->name = $name;
        $this->alcoholPercentage = $alcoholPercentage;
        $this->color = $color;
    }

    private function beerInfo(): string
    {
        return "Hi, I'm {$this->name} and have an alcohol percentage of {$this->alcoholPercentage} and I have a {$this->color} color.}";
    }

    public function getAlcoholPercentage(): float
    {
        return $this->alcoholPercentage;
    }

    public function getTemperature(): string
    {
        return $this->getTemperature();
    }

    public function getColor(): string
    {
        return $this->color;

    }

    public function printBeerInfo()
    {
        echo $this->beerInfo();
        echo "<br>";
    }
}



// Instantiate an object representing Duvel
$duvel = new Beer('Duvel', 8.5, 'light', 3.5);

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
echo "<br>";
// Change the color of Duvel to light
$duvel->__construct('Duvel', 8.5, 'light', 3.5);
echo "<br>";
// Print the new color on the screen
echo "New Color: {$duvel->getColor()}";
echo "<br>";
// Print the beerInfo on the screen
$duvel->printBeerInfo();








