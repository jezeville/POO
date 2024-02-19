<?php

declare(strict_types=1);

/* EXERCISE 4

Copy the code of exercise 3 to here and delete everything related to cola.

TODO: Make all properties protected.
TODO: Make all the other prints work without error without changing the beverage class.
TODO: Don't call getters in de child class.

USE TYPEHINTING EVERYWHERE!
*/

class beverage 
{
    protected string $color;
    protected float $price;
    protected string $temperature;

    public function __construct(string $a, float $b, string $c)
    {
        $this->color = $a;
        $this->price = $b;
        $this->temperature = $c;
    }

    public function getInfo()
    {
        echo "This beverage is $this->temperature and $this->color";
    } 

    public function getPrice(){
        return $this->price;
    }
}

class Beer extends beverage {
    protected string $name;
    protected float $alcoholPercentage;

    public function __construct(string $a , float $b, string $c, string $d, float $e){
        parent::__construct($a , $b, $c);
        $this->name = $d;
        $this->alcoholPercentage = $e;
    }

    private function beerInfo(){
        return "Hi i'm $this->name and have an alcohol percentage of $this->alcoholPercentage and I have a light color.";
    }
    
    public function getAlcoholPercentage(){
        echo $this->beerInfo() . '<br>';
        echo "The price is: " . $this->getPrice() . '<br>';
        return $this->alcoholPercentage;
    }
}


    $beer = new Beer("blond", 2.5, "cold", 'Duvel', 8.5);
    $beer2 = new Beer("blond", 3.5, "cold", 'Duvel', 8.5);

    print_r ($beer->getAlcoholPercentage());
    print_r ($beer2->getAlcoholPercentage());



?>
