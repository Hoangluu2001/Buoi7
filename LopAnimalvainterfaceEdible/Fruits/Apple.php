<?php
include_once (dirname(__FILE__).'/../AbstractClass/Fruits.php');
class Apple extends  Fruits{
    public function howToEat(){
        return "Apple could be slided";
    }
}