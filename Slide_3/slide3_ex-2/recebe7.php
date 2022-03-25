<?php
$nome = $_POST['nome'];
$email = $_POST['email'];
$numero = $_POST['numero'];
$msg = $_POST['msg'];

$tam_nome = strlen($_POST['nome']);
$tam_numero = strlen($_POST['numero']);
$tam_msg = strlen($_POST['msg']);

if (($tam_nome >= 4)  && ($tam_numero >= 4) && ($tam_msg >= 4)){
    echo "Nome: $nome <br> Email: $email <br> Numero: $numero <br> Mensagem: $msg";
} else{
    echo "B.O";
}
// OUTRA FORMA DE MOSTRAR OS DADOS
// 
// if (($tam_nome < 4)  && ($tam_numero < 4) && ($tam_msg <4)){
//   echo"Todos os dados devem conter ao menos 4 caracteres";
// }else{
//    echo "Nome: $nome <br> Email: $email <br> Numero: $numero <br> Mensagem: $msg";
// };


?>