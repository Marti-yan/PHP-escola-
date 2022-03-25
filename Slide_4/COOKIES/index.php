<body>
    <?php 
        if (!isset($_COOKIE["visitCounter"])){
            $visitas = 1;
            setcookie('visitCounter', $visitas, time()+86400 * 10); //86400 = 1 dia
        } else {
            $_COOKIE["visitCounter"]++; 
            $visitas = $_COOKIE["visitCounter"];
            setcookie("visitCounter", $visitas, time()+86400 * 10);
        }
        echo"Numero de visitas".$visitas;
    ?>
</body>