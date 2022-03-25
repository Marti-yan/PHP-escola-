<?php 
session_start();
$_SESSION["usuario"] = strtolower($_POST["campo_usuario"]);  //'strtolower' passa todos os caracteres para minusculo
echo "Sessao criada para o usuario: ". ucfirst($_SESSION['usuario']).".<br>"; //'ucfirst' passa a PRIMEIRA letra da frase para maiusculo 
echo "<a href=validar_sessao.php> Verificar Acesso </a>";

// Nem 'strtolower' nem o 'ucfirst' foi pedido pelo exercicio
// So achei interessante colocar 
?>