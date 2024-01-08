<?php

declare(strict_types=1);

/* EXERCISE 3


TODO: Make all properties private.
TODO: Make all the other prints work without error.
TODO: After fixing the errors. Change the color of Duvel to light instead of blond and also print this new color on the screen after all the other things that were already printed (to be sure that the color has changed).
TODO: Create a new private method in the Beer class called beerInfo which returns "Hi i'm Duvel and have an alcochol percentage of 8.5 and I have a light color."

Make sure that you use the variables and not just this text line.

TODO: Print this method on the screen on a new line.

USE TYPEHINTING EVERYWHERE!
*/
//TODO: Copy the code of exercise 2 to here and delete everything related to cola




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
    }

}



