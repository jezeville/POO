<?php

declare(strict_types=1);

/* EXERCISE 3
reen on a new line.

TODO: Copy the code of exercise 2 to here and delete everything related to cola.
TODO: Make all properties private.
TODO: Make all the other prints work without error.
TODO: After fixing the errors. Change the color of Duvel to light instead of blond and also print this new color on the screen after all the other things that were already printed (to be sure that the color has changed).
TODO: Create a new private method in the Beer class called beerInfo which returns "Hi i'm Duvel and have an alcochol percentage of 8.5 and I have a light color."

Make sure that you use the variables and not just this text line.

TODO: Print this method on the sc
USE TYPEHINTING EVERYWHERE!
*/

class beverage 
{
    private string $color;
    private float $price;
    private string $temperature;

    public function __construct($a, $b, $c)
    {
        $this->color = $a;
        $this->price = $b;
        $this->temperature = $c;
    }
    public function getInfo()
    {
        echo "This beverage is $this->temperature and $this->color";
    } 
}

    class Beer extends beverage {
        private string $name;
        private float $alcoholPercentage;

        public function __construct($a , $b, $c, $d,$e){
            parent::__construct($a , $b, $c);
            $this->name = $d;
            $this->alcoholPercentage = $e;
        }

        private function beerInfo(){
            return "Hi i'm Duvel and have an alcochol percentage of 8.5 and I have a light color.";
        }
        
        public function getAlcoholPercentage(){
            echo $this->beerInfo();
            return $this->alcoholPercentage;
        }
    }


    $beer = new Beer("blond", 3.5, "cold", 'Duvel', 8.5);

    print_r ($beer->getAlcoholPercentage());

?>