<?php

session_start();
if (!isset($_SESSION["autenticado"]) || $_SESSION["autenticado"] != true){
    echo "Acesso nao autorizado! <br>";
    echo "Por gentileza faça seu login <a href=1-sessao_login.php> Clicando aqui</a>";
    exit();
} else {
    echo "voce esta logado como usuario: ". $_SESSION["usuario"];
    session_destroy();
}

?>