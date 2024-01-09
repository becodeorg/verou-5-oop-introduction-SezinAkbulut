<?php

declare(strict_types=1);

/* EXERCISE 6

Copy the classes of exercise 2.


Use typehinting everywhere!
*/
class Beverage
{
//TODO: Change the properties to private.
    private $color;
    private  $price;
    private  $temperature;

//TODO: Make a const barname with the value 'Het Vervolg'.
    const BAR_NAME = 'Het Vervolg';

//TODO: Create a function in beverage and use the constant.
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
//TODO: Print the constant on the screen.
    public function getBarName(): string
    {
        return self::BAR_NAME;
    }
}

class Beer extends Beverage
{
//TODO: Change the properties to private.
    private $name;
    private $alcoholPercentage;

//TODO: Make a const barname with the value 'Het Vervolg'.
    const BAR_NAME = 'Het Vervolg';

//TODO: Do the same in the beer class.
    public function __construct(string $name, float $alcoholPercentage, string $color = 'blond', float $price = 3.5, string $temperature = 'cold')
    {
        parent::__construct($color, $price, $temperature);
        $this->name = $name;
        $this->alcoholPercentage = $alcoholPercentage;
    }

    private function beerInfo(): string
    {
        return "Hi, I'm {$this->name} and have an alcohol percentage of {$this->alcoholPercentage} and I have a {$this->getTemperature()} color.";
    }

    public function getAlcoholPercentage(): float
    {
        return $this->alcoholPercentage;
    }

    public function getColor(): string
    {
        return $this->getTemperature();
    }

    public function printBeerInfo()
    {
        echo $this->beerInfo() . PHP_EOL;
    }

//TODO: Print the constant on the screen.
    public function getBarName(): string
    {
        return self::BAR_NAME;
    }
}

// Instantiate an object representing Duvel
$duvel = new Beer('Duvel', 8.5, 'light', 3.5);

//TODO: Print the output of these functions on the screen.
//TODO: Make sure that every print is on a new line.

echo "Beverage Bar Name: " . Beverage::BAR_NAME;
echo "<br>";
echo "Beer Bar Name: " . Beer::BAR_NAME;
echo "<br>";
// Print the output of the function in Beverage class
echo "Beverage Class Bar Name: " . $duvel->getBarName();
echo "<br>";
// Print the output of the function in Beer class
echo "Beer Class Bar Name: " . $duvel->getBarName();
