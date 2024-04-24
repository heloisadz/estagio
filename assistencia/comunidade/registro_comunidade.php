

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Funcionário</title>
    <link rel="stylesheet" href="func.css">
</head>
<body>
<div class="container">
<header>
           <h1> Cadastro de Comunidades</h1>
        </header>
        <nav> 
                <h4></h4>
            </nav>
        <main>
          
  <form method="POST" action="../comunidade/crudcomunidade.php">
    <label for="">Comunidade:</label>
     <input type="text" name="comunidade" required maxlength="100">


<div class="botao1">
     <input type="submit" name="cadastrar" value="cadastrar" class="botao">
     </div>
     </form>
     
     <div class="botao2">
     <button class="botaovoltar"><a href="../home.php">voltar</a></button>
     </div>
     </div>
    
</body>
</html>