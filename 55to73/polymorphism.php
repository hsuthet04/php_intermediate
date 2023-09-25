<?php

require_once "vendor/autoload.php";
use polymorphism\square;
use polymorphism\circle;
class index{
    public function __construct(){
        $square = new square(20,20);
        $this->getsquarePrice($square);
        
        $circle = new circle(100);
        $this->getPrice($circle);
        // echo "square is ".$circle->getArea();
    }
    public function getsquarePrice(square $square){
        $area=$square->getArea();
        echo "total is".($area *20);
    }
    public function getPrice(circle $circle){
        $area=$circle->getArea();
        echo "total is".($area *20);
    }
}
new index();