<?php

declare(strict_types=1);

/* EXERCISE 7

Copy your solution from exercise 6

TODO: Make a static property in the Beverage class that can only be accessed from inside the class called address which has the value "Melkmarkt 9, 2000 Antwerpen".
TODO: Print the address without creating a new instant of the beverage class 2 times in two different ways.

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

    public static function adress(){
        return "Melkmarkt 9, 2000 Antwerpen";
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


beverage::adress();
$classname = 'beverage';
print_r($classname::adress());

?>