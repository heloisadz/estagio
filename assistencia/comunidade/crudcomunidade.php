<?php
##permite acesso as variaves dentro do arquivo conexao
require_once('../conexao.php');

if (isset($_POST['comunidade'])) {
    $comunidade = $_POST['comunidade'];

    $sql = "INSERT INTO comunidade (comunidade) VALUES ('$comunidade')";

    ##junta o codigo sql a conexao do banco
    $sqlcombanco = $conexao->prepare($sql);

    ##executa o sql no banco de dados
    if ($sqlcombanco->execute()) {
        echo "<p><strong>OK!</strong> Registro realizado com sucesso!!!</p>";
        echo "<button class='button'><a href='../home.php'>voltar</a></button>";
    } else {
        echo "<p><strong>Erro!</strong> Não foi possível realizar o registro.</p>";
    }
} else {
    echo "<p><strong>Erro!</strong> Nenhum valor de 'bairro' recebido.</p>";
}





// Consulta SQL para buscar as comunidades
$sql_select_comunidade = "SELECT comunidade FROM comunidade";

// Preparar e executar a consulta SQL
$stmt = $conexao->prepare($sql_select_comunidade);
$stmt->execute();

// Buscar os resultados da consulta
$resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Verificar se há resultados
if ($resultados) {
   
} else {
    echo 'Nenhum resultado encontrado.';
}




?>
