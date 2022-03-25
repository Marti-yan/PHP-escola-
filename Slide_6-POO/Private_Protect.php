<?php

class classe1 {
    private $var1 = "Ola, var1!<br>";
    protected $var2 = "Ola, var2!<br>";
    protected $var3 = "Ola, var3!<br>";

    function bomdia(){
        echo ".........Classe 1 ........<br>";
        print "Classe 1:". $this->var1 ."<br>";
        print "Classe 2:". $this->var2 ."<br>";
        print "Classe 3:". $this->var3 ."<br>";
    }
}

class classe2 extends classe1{
    function bomdia(){
        echo ".........Classe 2 herda........<br>";
        print "Classe 2:". $this->var2 ."<br>";
        print "classe 2:". $this->var3 ."<br>";
    }
}
$obj1 = new classe1();
$obj1 -> bomdia();
$obj2 = new classe2();
$obj2 -> bomdia();

?> 