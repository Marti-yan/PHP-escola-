<?php

class Carro{
    protected $chassi;
    function __construct($chassi){
        $this->chassi = $chassi;
        echo "object carro criado <br>";
    }
    public function getChassi(){
        return $this->chassi;
    }
}
$c1 = new Carro("ABC12345");
echo "[VIA METODO] O Chassi do carro e : ".$c1->getChassi()."<br>";
?>