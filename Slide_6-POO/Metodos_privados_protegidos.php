<?php 

class classe1 {
    private function metodoPrivado(){
        echo "Classe1::metodoPrivado() chamado. <br>";// e por fim ele acaba aqui [3]
    }
    protected function metodoProtegido(){
        echo "Classe1::metodoProtegido() chamado. <br>"; // depois ele passa pra ca [2]
        $this->metodoPrivado();// aqui ele chama o metodo privado
    }
}

class classe2 extends classe1{   //O objeto entra aqui [1] e herda a classe1 tambem 
    public function metodoPublico(){  
        echo "classe2::metodoPublico() chamado. <br>";
        $this->metodoProtegido(); //Aqui ele chama o metodo protegido 
    }
}
$obj = new classe2();
$obj->metodoPublico();

?>