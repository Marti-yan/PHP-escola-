<body>
    <h3>Exibiçao dos testes e variaçoes de codificaçao como ilustrativo de possibilidades de uso:</h3>
    <?php
    $teste_nome = isset($_GET['nome']);
    $teste_estado = isset($_GET['estado']);
    $teste_profissao = isset($_GET['profissao']);
    $opt1 = isset($_GET['opt1']);
    $opt2 = isset($_GET['opt2']);
    $opt3 = isset($_GET['opt3']);
    $opt4 = isset($_GET['opt4']);
    $opt5 = isset($_GET['opt5']);
    $nome = $_GET['nome'];
    $estado = $_REQUEST['estado'];
    $profissao = $_REQUEST['profissao'];
    ?>

    <b> Exibe 1 (um) se existe o objeto. vejam o teste a seguir </b> <br>

    Testa se se tem o objeto "Nome": <?= $teste_nome ?> <br>
    Testa se se tem o objeto "Estado": <?= $teste_estado ?> <br>
    Testa se se tem o objeto "Profissao": <?= $teste_profissao ?> <br>

    <hr>

    <h3> Dados Pessoais: </h3>
    Nome: <?= $nome ?> <br>
    Estado UF: <?= $estado ?> <br>
    Profissao: <?= $profissao ?> <br>
    Sexo:
    <?php
    if (isset($_GET['sexo'])) {
        echo $_GET['sexo'];
    }
    ?>
    <br>

    <h3> Preferencias: </h3>
    <?php
    if (!empty($_GET['opt1'])) {
        echo $_GET['opt1'] . "<br>"; // escreve direto oq esta dentro da variavel
    }
    if (!empty($_GET['opt2'])) {
        echo "Dança <br>"; //encreve necessariamente 'dança', idependente se esta escrito dança ou nao dentro da variavel 
    }
    if (!empty($opt3)) { //outra forma de chamar a variavel
        print "Musica <br>"; // outra forma de exibir texto no navegador.
    }
    if (!empty($opt4)) {
        echo $_GET['opt4'] . "<br>";
    }
    if (!empty($opt5)) {
        print "Carros <br>";
    }
    ?>

</body>