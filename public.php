<?php

declare(strict_types=1);

/* EXERCISE 5

Copy the class of exercise 1.


TODO: Fix the errors without using getter and setter functions.

*/
class Beverage
{
    //TODO: Change the properties to private.
    private  $color;
    private  $price;
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

    public function getPrice(): float
    {
        return $this->price;
    }
}

// Instantiate an object representing cola
$cola = new Beverage('black', 3.5);

// Print the getInfo on the screen
echo $cola->getInfo();
echo "<br>";
// Print the temperature on the screen
echo "Temperature: {$cola->getTemperature()}";

//TODO: Change the price to 3.5 euro and print it also on the screen on a new line.
echo "<br>";
echo "Price: {$cola->getPrice()} euro";
echo "<br>";