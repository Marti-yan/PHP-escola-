<?php 
    class Classe {
        static $variavel_estatica = 10;
        function soma ($numero){
            classe::$variavel_estatica += $numero;
        }
    }
    $obj = new Classe();
    $obj->soma(2);
    $obj2 = new Classe();
    $obj2 -> soma(3);
    print Classe::$variavel_estatica;
?>