<?php session_start(); ?>
<h3>Validar_sessao.php </h3>
<?php 
if ($_SESSION["usuario"]=="yan"){
    echo "Bem Vindo: " .ucfirst($_SESSION['usuario']);
} else{
    echo "Usuario nao autorizado. <br> 
        <a href=1-sessao.php> Informe outro usuario</a>";
}
?>
