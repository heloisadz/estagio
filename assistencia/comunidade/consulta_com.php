<?php
include '../conexao.php'; // Incluir apenas uma vez

// Consulta SQL para buscar as comunidades
$sql_select = "SELECT comunidade FROM comunidade";

try {
    // Preparar e executar a consulta SQL
    $stmt_select = $conexao->prepare($sql_select);
    $stmt_select->execute();

    // Buscar os resultados da consulta
    $resultados_comunidade = $stmt_select->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    // Tratar qualquer erro de consulta
    echo 'Erro: ' . $e->getMessage();
}
?>