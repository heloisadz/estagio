<?php
    session_start();
    // print_r($_REQUEST);
    if(isset($_POST['submit']) && !empty($_POST['CPF']) && !empty($_POST['senha']))
    {
        // Acessa
        include_once('../conexao.php');
        $cpf = $_POST['CPF'];
        $senha = $_POST['senha'];

        // print_r('Email: ' . $email);
        // print_r('<br>');
        // print_r('Senha: ' . $senha);

        $sql = "SELECT * FROM funcionario WHERE CPF = '$cpf' and senha = '$senha'";
        $home = "c:\xampp\htdocs\assistencia\index.php";
        $link = '/assistencia/home.php';
        $result = $conexao->prepare($sql);
        $result->execute();
        if($result->fetchall()){
            $_SESSION['cpf'] = $cpf;
            header('Location: /assistencia/home.php');
        }
        else{
            header('Location: login.php');
        }
        // print_r($sql);
        // print_r($result);

    }
?>
<link rel="stylesheet" href=">