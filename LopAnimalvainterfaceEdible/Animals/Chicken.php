<?php

include_once(dirname(__FILE__) . '/../AbstractClass/Animal.php');
include_once (dirname (__FILE__). '/../InterfaceClass/Edible.php');

class Chicken extends Animal implements  Edible
{
    public function makeSound()
    {
        return "Chicken: cluck-cluck!";
    }
    public function howtoEat(){
        return 'could be fried';
    }
}