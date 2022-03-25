<?php
//incluindo head TESTE
include('include-head.php')
// ----------------------------------------------------------------
?>
<?php
$nome_dono = $_GET['nome-dono'];
$ctt = $_GET['contato'];
$animal_nome = $_GET['nome-animal'];
$raca = $_GET['raca'];
$data = $_GET['data'];
$procedimento = $_GET['procedimento'];
$porte = $_GET['porte'] ?? false;

if (empty($porte)) {
    echo "<h2> informe o tamnho do cachorro </h2>";
} else {
    echo "<h2>Cadastro do Pet</h2>
        <table>
            <tr>
                <th>Dono do Pet:</th>
                <td>" . $nome_dono . "</td>            
            </tr>
            <tr>
                <th>Tel Contato:</th>
                <td>" . $ctt . "</td>            
            </tr>
            <tr>
                <th>Nome do Animal:</th>
                <td>" . $animal_nome . "</td>            
            </tr>
            <tr>
                <th>Raça do pet:</th>
                <td>" . $raca . "</td>            
            </tr>
            <tr>
                <th>Data da consulta:</th>
                <td>" . $data . "</td>            
            </tr>
            <tr>
                <th>Procedimento:</th>
                <td>" . $procedimento . "</td>            
            </tr>
            <tr>
                <th>Porte do animal:</th>
                <td>" . $porte . "</td>            
            </tr> 
        </table>";
}

?>