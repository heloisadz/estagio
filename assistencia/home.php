
<?php
    require('../assistencia/autenticao.php');
    session_start();
    autenticao();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <div class="container">
        <header>
           <h1> FORMULÁRIO RMA - REGISTRO MENSAL DE ATENDIMENTO DO CRAS </h1>
           <a href="../assistencia/logout.php" class="deslog"><b>Deslogar</b></a>
        </header>
        <nav> 
        <a id="links" href="../assistencia/funcionario/cadfunc.php">Registrar funcionarios</a> 
        <a id="links" href="../assistencia/bloco1/bloco1.php">Formulario RMA</a> 
        <a id="links" href="../assistencia/bairro/registro_bairro.php">Registrar Bairros</a>
        <a id="links" href="../assistencia/comunidade/registro_comunidade.php">Registrar Comunidades</a>
        <a id="links" href="../assistencia/impressao.php">Listra registros</a>
        <a id="links" href="/assistencia/login/login.php">login </a> 
        <a id="links" href="../assistencia/logout.php" class="deslog"><b>Deslogar</b></a>

            </nav>
        <main>
        
        <img width="100%" src="Untitled.png"  />
        </main>
        <footer></footer>

</div>
</body>
</html>