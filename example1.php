<?php

class Animal 
{
    // The Properties
    public $animalType;
    public $order;
    public $amount;
    
    // The Constructor with incoming parameters in the brackets
    public function __construct($animalType, $order, $amount)
    {
        // in a sentence it would be: "set this class's properties with the same value as the incoming parameters"
        $this->animalType = $animalType;
        $this->order = $order;
        $this->amount = $amount;
    }
    
    // The functions
    public function sayHelloToAnimal()
    {
        echo "Hello, $this->animalType";
    }
}


$animal1 = new Animal("monkey", "mammal", 25);
$animal2 = new Animal("donkey", "mammal", 3);
$animal3 = new Animal("turkey", "bird", 500);

$animal1->sayHelloToAnimal(); // Will result in: "Hello, monkey"
$animal2->sayHelloToAnimal(); // Will result in: "Hello, donkey"
$animal3->sayHelloToAnimal(); // Will result in: "Hello, turkey"
?>