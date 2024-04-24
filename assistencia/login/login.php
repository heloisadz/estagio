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
    <link rel="stylesheet" href="login.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <header>    <h1> RMA - REGISTRO MENSAL DE ATENDIMENTO DO CRAS</h1>
                    
</header>
       
        <main>
        
    <div>
        
        <form action="teste.php" method="POST">
        <h3>LOGIN</h3>
            <p>CPF:</p>
            <input type="text" name="CPF" placeholder="CPF">
            
            <p>Senha:</p>
            <input type="password" name="senha" placeholder="Senha">
            <br><br>
            <input class="inputSubmit" type="submit" name="submit" value="Enviar">
            <a href="../funcionario/cadfunc.php">Não possui login? Cadastre-se aqui!</a>
        </form>
    </div>
        </main>
       
    </div>
</body>
</html>