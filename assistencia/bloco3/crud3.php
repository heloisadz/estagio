<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bloco1.css">
    <title>CRUD bloco1</title>
</head>
<body>


<?php
##permite acesso as variaves dentro do aquivo conexao

require_once('../conexao.php');

$E_1_ = $_POST['A_2_1_'];
$E_2_ = $_POST['A_2_1_'];

$E_3_outros = $_POST['A_2_1_'];

$E_4_ = $_POST['A_2_1_'];
$E_5_ = $_POST['A_2_1_'];
$E_6_ = $_POST['A_2_1_'];
$E_7_ = $_POST['A_2_1_'];
$E_8_ = $_POST['A_2_1_'];
$E_9_ = $_POST['A_2_1_'];
$E_10_ = $_POST['A_2_1_'];
$E_11_ = $_POST['A_2_1_'];


$sql = "INSERT INTO bloco3(
    E_1_, E_2_, E_3_outros, E_4_, E_5_, E_6_, E_7_, E_8_, E_9_outros, E_10_, E_11_
) VALUES (
    '$E_1_','$E_2_', '$E_3_outros', '$E_4_', '$E_5_', '$E_6_', '$E_7_','$E_8_','$E_9_outros', '$E_10_', '$E_11_'
)";
 
##junta o codigo sql a conexao do banco
        $sqlcombanco = $conexao->prepare($sql);

        ##executa o sql no banco de dados
        if($sqlcombanco->execute())
            {
                echo " <p><strong>OK!</strong> Registro realizado com sucesso!!!</p>"; 
                echo " <button class='button'><a href='../home.php'>voltar</a></button>";
            }
        