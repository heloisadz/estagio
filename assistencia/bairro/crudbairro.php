<?php
##permite acesso as variaves dentro do arquivo conexao
require_once('../conexao.php');

if (isset($_POST['bairro'])) {
    $bairro = $_POST['bairro'];

    $sql = "INSERT INTO bairro (bairro) VALUES ('$bairro')";

    ##junta o codigo sql a conexao do banco
    $sqlcombanco = $conexao->prepare($sql);

    ##executa o sql no banco de dados
    if ($sqlcombanco->execute()) {
        echo "<p><strong>OK!</strong> Registro realizado com sucesso!!!</p>";
        echo "<button class='button'><a href='../home.php'>voltar</a></button>";
    } else {
        
    }
} else {
    
}




##permite acesso as variaves dentro do arquivo conexao
require_once('../conexao.php');

// Consulta SQL para buscar os bairros
$sql_select_bairro = "SELECT bairro FROM bairro";

// Preparar e executar a consulta SQL
$stmt = $conexao->prepare($sql_select_bairro);
$stmt->execute();

// Buscar os resultados da consulta
$resultados_bairro = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Verificar se há resultados
//if ($resultados_bairro) {
    //echo '<select name="bairro">';
   // foreach ($resultados_bairro as $bairro) {
    //    echo '<option value="' . $bairro['bairro'] . '">' . $bairro['bairro'] . '</option>';
    //}
  //  echo '</select>';
//} else {
//echo 'Nenhum resultado encontrado.';
//}



?>
