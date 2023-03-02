<?php

class Vehicle{
    public $id;
    public $color;
    public $name;

    static $lastId = 0;
    static private function genId(){
        return ++ self::$lastId;
    }

    function __construct($color,$name){
        $this->color = $color;
        $this->name = $name;
        $this->id = self::genId();
    }

    function __clone(){
        $this->id = self::genId();
    }

    function fff(){
        echo "Vehicle::fff<br>";
    }

    function print(){
        self::fff();
        static::ggg();
        echo "Id: $this->id<br>Name: $this->name<br>Color: $this->color<br>";
    }
}

class Car extends Vehicle{
    function __construct($color,$name){
        parent::__construct($color,$name);
    }

    function fff():int{
        echo "Car::fff<br>";
        return 1;
    }

    function ggg(){
        echo "Car::ggg<br>";
    }

    function print(){
        echo "This is a car<br>";
        parent::print();
    }
}

class Bike extends Vehicle{
    function __construct($color,$name){
        parent::__construct($color,$name);
    }

    function fff():int{
        echo "Bike::fff<br>";
        return 1;
    }

    function ggg(){
        echo "Bike::ggg<br>";
    }

    function print(){
        echo "This is a bike<br>";
        parent::print();
    }
}

$v1 = new Car("ttt",'red');
$v1->print();
$v1->fff();

$v2 = new Bike("iii",'blue');

$v3 = new $v2("uuu",'green');

$v4 = new ($v2::class)("xxx",'yellow');

$v5 = $v1; //cung tro toi 1 object
$v6 = clone $v1; //tao moi va sao chep thong tin y het
$v6->print();
?>