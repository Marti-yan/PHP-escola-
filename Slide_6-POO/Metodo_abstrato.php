<?php 

abstract class ClasseAbstrata{
    abstract public function teste();
}
class ClasseImplementa extends ClasseAbstrata{
    public function teste(){
        echo "Metodo teste() chamado. <br>";
    }
}
$obj = new ClasseImplementa();
$obj->teste();

?>