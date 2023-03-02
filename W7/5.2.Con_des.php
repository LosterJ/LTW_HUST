<?php

class BaseClass{
    protected $name = "BaseClass";
        function __construct(){
            echo "In $this->name constructor.<br>";
        }
        function __destruct(){
            echo "Destroying $this->name.<br>";
        }
}
class SubClass extends BaseClass{
    function __construct(){
        $this->name = "SubClass";
        parent::__construct();
    }
    function __destruct(){
        parent::__destruct();
    }
}
$obj2 = new BaseClass();

$obj1 = new SubClass();

?>