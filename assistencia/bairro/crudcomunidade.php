<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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
        echo "<p><strong>Erro!</strong> Não foi possível realizar o registro.</p>";
    }
} else {
    echo "<p><strong>Erro!</strong> Nenhum valor de 'bairro' recebido.</p>";
}
?>

</body>
</html>
