

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
           <h1> RMA - REGISTRO MENSAL DE ATENDIMENTO DO CRAS</h1>
        </header>
        <nav> 
                <h4></h4>
            </nav>
        <main>
          
  <form method="POST" action="crudfunc.php">
    <label for="">Nome</label>
     <input type="text" name="nome" required maxlength="100">

     
     <label for="">CPF</label>
     <input type="number" name="CPF" required maxlength="11"> 

     <label for="">Cargo</label>
    <select name="cargo" id="">
        <option value="1">Coordenador</option>
        <option value="2">Técnico</option>
    </select>

     <label for="">Email</label>
     <input type="text" name="email" required maxlength="100">

     <label for="">Senha</label>
     <input type="password" name="senha" required maxlength="20">
    
<div class="botao1">
     <input type="submit" name="cadastrar" value="cadastrar" class="botao">
     </div>
     </form>
     
     <div class="botao2">
     <button class="botaovoltar"><a href="../index.php">voltar</a></button>
     </div>
     </div>
    
</body>
</html>