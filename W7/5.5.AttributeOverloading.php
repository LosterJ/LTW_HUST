<?php

class PropertyTest{
    //Location for overloaded data.
    private $data = array();
    //Overloading not used on declared properties.
    public $declared = 1;
    //Overloading only used on this when accessed outside the class.
    private $hidden = 2;

    public function __set($name,$value){
        echo "Setting $name to $value<br>";
        $this->data[$name]=$value;
    }
    public function __get($name){
        echo "Getting '$name'<br>";
        if(array_key_exists($name,$this->data)){
            return $this->data[$name];
        }
        $trace = debug_backtrace();
        trigger_error('Undefined property via __get(): '.$name.' in '.$trace[0]['file'].' on line '.$trace[0]['line'],E_USER_NOTICE);
        return NULL;
    }

    public function __isset($name){
        echo "Is $name set?<br>";
        return isset($this->data[$name]);
    }
    public function __unset($name){
        echo "Unsetting $name<br>";
        unset($this->data[$name]);
    }
    public function getHidden(){
        return $this->hidden;
    }
}

echo "<pre><br>";

$obj = new PropertyTest;
$obj->a = 1;
echo $obj->a."<br>";
var_dump(isset($obj->a));
unset($obj->a);
var_dump(isset($obj->a));
echo "<br>".$obj->declared."<br>";
echo "Let's experiment with the private property named 'hidden':<br>";
echo "Privates are visible inside the class, so _get() not used...<br>";
echo $obj->getHidden()."<br>";
echo $obj->hidden."<br>";


?>