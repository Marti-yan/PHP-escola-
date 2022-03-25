<?php
    if (!isset($SESSION)){
        session_start();
    }
   
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Slide-4 exercicio-1</title>
</head>
<body>
    <form action="verificar_login.php" method="post">

        <label for="Usuario">Usuario: </label>
        <input type="text" name="usuario" required> 
        <br> <br>
        <label for="senha">Senha:</label>
        <input type="password" name="senha" required>
        <br> <br>
        <div>
            <?php 
                if(isset($_SESSION["nao_autenticado"])):
            ?>
            Usuario ou Senha invalidas
            <br>
            <?php
                echo "Voce ja tentou ".$_SESSION['erro']." vez. <br>";
                echo "Quantidade maxima: 3";
                if ($_SESSION["erro"] > 2){
                    header("location: block_user.php");                    
                }
            ?>
            
            <?php 
                endif;
                unset($_SESSION["nao_autenticado"]);
            ?>
        </div>
        <button type="submit">Verificar</button>
    </form>
</body>
</html>