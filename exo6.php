<?php

declare(strict_types=1);

/* EXERCISE 6

Copy the classes of exercise 2.

TODO: Change the properties to private.
TODO: Make a const barname with the value 'Het Vervolg'.
TODO: Print the constant on the screen.
TODO: Create a function in beverage and use the constant.
TODO: Do the same in the beer class.
TODO: Print the output of these functions on the screen.
TODO: Make sure that every print is on a new line.

Use typehinting everywhere!
*/

class beverage 
{
    const barname = 'Het Vervolg';
    private string $color;
    private float $price;
    private string $temperature;

    public function __construct($color, $price, $temperature = "cold")
    {
        $this->color = $color;
        $this->price = $price;
        $this->temperature = $temperature;
    }
    public function getInfo()
    {
        echo "This beverage is $this->temperature and $this->color";
    } 

    public function getConst1(){
        echo self::barname;
    }
}

class Beer extends beverage {
    private string $name;
    private float $alcoholPercentage;

    public function __construct($color , $price, $temperature,$name,$alcoholPercentage){
        parent::__construct($color , $price, $temperature);
        $this->name = $name;
        $this->alcoholPercentage = $alcoholPercentage;
    }

    public function getAlcoholPercentage(){
        return $this->alcoholPercentage;
    }

    public function getConst2(){
        echo self::barname;
    }

}



$beer1 = new beer ("blond", 3.5, "cold", 'Duvel', 8.5);
$beer1->getConst1();
echo "<br>";
$beer1->getConst2();

?>