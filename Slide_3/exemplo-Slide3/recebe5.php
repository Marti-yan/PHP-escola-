<h3>Dados recebidos</h3>
<?php
$mostra = true;

// Bloco de verificaçao de quantidade de caracteres para o nome;    
$tam_nome = strlen($_POST['nome']);
$nome = $_POST['nome'];
if (($tam_nome < 3) || ($tam_nome > 64)) {
    echo "O campo 'Nome' deve conter entre 3 e 64  caracteres <br> ";
    $mostra = false;
}

// Bloco de verificaçao de quantidade de caracteres para o email;    
$tam_email = strlen($_POST['email']);
$email = $_POST['email'];
if (($tam_email < 5) || ($tam_email > 64)) {
    $mostra = false;
    echo "O campo 'Email' deve conter entre 5 e 64 caracteres <br> ";
}
//----------------------------------------------------------------

if ($mostra) {
    echo "Nome: $nome   Email: $email <br>";
}
echo "<a href='index.html'> Voltar </a>"
?>