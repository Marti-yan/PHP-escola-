<body>
    <?php
    
    class Carro {
        protected $chassi;
        function __construct($chassi) {
            $this->chassi = $chassi;
            echo "um novo objeto Carro foi construido <br>";
        }
        public function getChassi(){
            return $this->chassi;
        }
    }
    $carro1 = new Carro("ABC12345");
    echo "[VIA METODO]CHASSI: ". $carro1->getChassi();
    echo "[DIRETO] CHASSI:". $carro1 -> chassi; // mostrando que nao funciona direto
    ?>
</body>