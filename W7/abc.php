<?php
class User{
    var $name;
    public $yob;
    private $married;

    function __construct($name,$yob,$married){
        $this->name=$name;
        $this->yob=$yob;
        $this->married=$married;
    }

    

    private function ff(){
        echo 'ff';
    }
    function print(){
        $this->ff();
        echo "My name is ".$this->name."<br>".
            'I was born in '.$this->yob.'<br>'.
            'I am '.($this->married ? 'married' : 'not married');
    }
    function fff(){
        echo "$this->xyz";
    }
}
$user1 = new User("Bui Anh luong",2001,false);
$user2 = new User("Bui Anh A",2002,true);
$user2->xyz = 10;
$user2->fff();

$ttt = function(){
    echo "123<br>";
};
$ttt();

$user1->ttt = function(){
    echo "<br>$this->name";
};
$user1->ttt->call($user2);//this long leo
?>