<?php
session_start();

if ($_POST["usuario"]=="abc" && $_POST["senha"]=="123"){
    echo"correto";
} else{
    $_SESSION["nao_autenticado"]=true;
    header("Location: index.php");
    $_SESSION['erro'] = $_SESSION['erro']+1;
    //exit();
}

?>