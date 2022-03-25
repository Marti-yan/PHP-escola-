
<?php

if ($_POST["campo_usuario"]=="Brasil" && $_POST["campo_senha"]=="abc123"){
    session_start();
    $_SESSION["usuario"] = $_POST["campo_usuario"];
    $_SESSION["senha"] = $_POST["campo_senha"];
    $_SESSION["autenticado"] = true;
    echo "Sessao criada com sucesso";
    
} else{
    echo "usuario nao autorizado...";
}  
  // header("Location: sessao_login_autenticado.php"); [ISSO E PARTE DO EXEMPLO]
?>
<!-- --- -->
<script>
    var timeout = setTimeout("document.location.href='sessao_login_autenticado.php'", 1500); // [ISSO NAO]
</script> 
<!-- Resolvi colocar isso pra ficar mais dinamico sem mudar os 'echo' do exemplo -->
<!-- com o 'header' original os echo ficam desnecessarios. -->