<?php

require_once "Polygon.php";
//concrete class
class Rectangle extends Polygon{
    public $base;
    public $height;

    public function getArea(){
        return($this->wibasedth * this->height / 2);
    }
    public function getNumberOfSides(){
        return(3);
    }
}

?>