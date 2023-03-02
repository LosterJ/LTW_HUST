<?php

class Circle{
    private $r;

    function __construct($r){
        $this->r = $r;
    }

    function __set($name,$value){
        if($name=='radius') $this->r=$value;
        else echo "$name no exitsting in this object<br>";
    }

    function __get($name){
        if($name=='radius') return $this->r;
        else echo "$name no exitsting in this object<br>";
    }

    function __call($method,$args){
        if($method=='print') echo "Circle with radius = $this->r<br>";
        else echo "$name no exitsting in this object<br>";
    }
}
$c=new Circle(10);
$c->radius=20;
$c->print();

$o= new stdClass();
$o->a =10;
$o->b = 2;

$o2=(object)[
    'a'=>10,
    'b'=>20
];
var_dump($o);
var_dump($o2);
?>