<h3>Dados recebidos</h3>
<?php
$mostra = true;
// Bloco de verificaçao de quantidade de caracteres para o nome;--
$tam_nome = strlen($_POST['nome']);
$nome = $_POST['nome'];
if (($tam_nome < 3) || ($tam_nome > 64)) {
    echo "O campo 'Nome' deve conter entre 3 e 64  caracteres  ";
    $mostra = false;
}
// Bloco de verificaçao de quantidade de caracteres para o email;--
$tam_email = strlen($_POST['email']);
$email = $_POST['email'];
if (($tam_email < 5) || ($tam_email > 64)) {
    $mostra = false;
    echo "O campo 'Email' deve conter entre 5 e 64 caracteres  ";
}
//Bloco de verificaçao de quantidades de caracteres para a profissao;--
$tam_profissao = strlen($_POST['profissao']);
$profissao = $_POST['profissao'];
if ($tam_profissao < 4) {
    $mostra = false;
    echo "O campo 'profissao' deve conter no minimo 4 caracteres";
}
// Bloco de verificaçao de quantidades de caracteres para o Curso;--

$tam_curso = strlen($_POST['curso']);
$curso = $_POST['curso'];
if ($tam_curso < 5){
    $mostra = false;
    echo "O campo 'curso' deve conter no minimo 5 caracteres";
}

//----------------------------------------------------------------
if ($mostra) {
    echo "Nome: $nome  <br> 
    Email: $email <br> 
    Profissao: $profissao <br>
    Curso: $curso <br>";
}
echo " <br> <a href='index.html'> Voltar </a>"
?>