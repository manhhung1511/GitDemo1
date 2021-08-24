<?php
class ConNguoi
{
    function __construct($name, $age)
    {
        $this->$name = $name;
        $this->$age = $age;
    }

    function manh()
    {
        echo $a =10;
        var_dump($this);
    }
    
}
$hung = new ConNguoi('manh', 20);
var_dump($hung->manh());