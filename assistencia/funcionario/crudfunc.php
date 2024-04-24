<?php
    session_start();
    if(isset($_SESSION['cpf'])){
        header('Location: ../index.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="crudfunc.css">
    <title>CRUD Funcionário</title>
</head>
<body>


<?php
##permite acesso as variaves dentro do aquivo conexao
require_once('../conexao.php');



##cadastrar
if(isset($_POST['cadastrar'])){
        ##dados recebidos pelo metodo POST
        $nome = $_POST["nome"];
        $CPF = $_POST["CPF"];
        $cargo = $_POST["cargo"];
        $email = $_POST["email"];
        $senha = $_POST["senha"];
        

        ##codigo SQL
        $sql = "INSERT INTO funcionario(nome,CPF,cargo, email, senha) 
                VALUES('$nome','$CPF',$cargo,'$email', '$senha')";

        ##junta o codigo sql a conexao do banco
        $sqlcombanco = $conexao->prepare($sql);

        ##executa o sql no banco de dados
        if($sqlcombanco->execute())
            {
                echo " <p><strong>OK!</strong> O funcionário
                $nome foi cadastrado com sucesso!!!</p>"; 
                echo " <button class='button'><a href='../home.php'>voltar</a></button>";
            }
        }
#######alterar
if(isset($_POST['update'])){


    ##dados recebidos pelo metodo POST
    $id=  $_POST["id"];
    $nome = $_POST["nome"];
    $CPF = $_POST["CPF"];
    $cargo = $_POST["cargo"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    
   
      ##codigo sql
    $sql = "UPDATE  funcionario SET nome= :nome, CPF= :CPF, cargo= :cargo, email= :email, senha= :senha WHERE id= :id ";
   
    ##junta o codigo sql a conexao do banco
    $stmt = $conexao->prepare($sql);

    ##diz o paramentro e o tipo  do paramentros
    $stmt->bindParam(':id',$id, PDO::PARAM_INT);
    $stmt->bindParam(':nome',$nome, PDO::PARAM_STR);
    $stmt->bindParam(':CPF',$CPF, PDO::PARAM_STR);
    $stmt->bindParam(':cargo',$cargo, PDO::PARAM_STR);
    $stmt->bindParam(':email',$email, PDO::PARAM_STR);
    $stmt->bindParam(':senha',$senha, PDO::PARAM_STR);
    $stmt->execute();
 


    if($stmt->execute())
        {
            echo " <p> <strong>OK!</strong> o aluno
             $nome foi Alterado com sucesso!!!</p>"; 

            echo " <button class='button'><a href='../index.php'>voltar</a></button>";
        }

}        


##Excluir
if(isset($_POST['excluir'])){
    $id = $_POST['id'];
    $sql ="DELETE FROM `funcionario` WHERE id={$id}";
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);   
    $stmt = $conexao->prepare($sql);
    $stmt->execute();

    if($stmt->execute())
        {
            echo "<p> <strong>OK!</strong> o aluno
             $id foi excluido!!!</p>"; 

            echo " <button class='button'><a href='listaalunos.php'>voltar</a></button>";
        }

}

        
?>

</body>
</html>




