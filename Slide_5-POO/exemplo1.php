<body>

    <?php

    class Pessoa
    {
        public $nome;
        public $idade;
        public $email;

        function __construct($nome, $idade, $email){
            $this->nome = $nome;
            $this->idade = $idade;
            $this->email = $email;
            echo "Um novo objeto foi criado <br>";
        }

        public function notificar($mensagem){
            echo "Notificando: " . $this->nome . ":" . $mensagem;
        }
    }
$p1 = new Pessoa ("Yan",18,"yanloufraga2@gmail.com");
$p2 = new Pessoa ("Cleitin",15,"CleitinSilva@gmail.com");
$p1 -> notificar("Seu pedido foi confirmado!<br>");
$p2 -> notificar("Seu pedido foi confirmado!<br>");

    ?>

</body>