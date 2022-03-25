<?php
    $nome = $_POST['nome'];
    $data = $_POST['data'];
    $medico = $_POST['medico'];
    $especialidade = $_POST['especialidade'];

    echo "
            <h2> Dados Do Formulario </h2>
            <table>
            <tr> 
                <td>Nome do paciente:</td>
                <td>".$nome."</td>
            </tr>
            <tr> 
                <td>Data Consulta:</td>
                <td>$data</td>
            </tr>
            <tr> 
                <td>Medico:</td>
                <td>$medico</td>
            </tr>
            <tr> 
                <td>Especialidade</td>
                <td>$especialidade</td>
            </tr>           
            </table>    ";   


?>