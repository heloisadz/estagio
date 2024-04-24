<?php
    require('/xampp/htdocs/assistencia/autenticao.php');
    session_start();
    autenticao();
?>
<?php
    include 'C:\xampp\htdocs\assistencia\bairro\crudbairro.php';
    include 'C:\xampp\htdocs\assistencia\comunidade\crudcomunidade.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BLOCO IV - QUANTITATIVO DE ATENDIMENTOS DO CRAS POR TERRITÓRIO</title>
    <link rel="stylesheet" href="../bloco4/bloco4.css">
</head>
<body>
    <div class="container">
        <h2>BLOCO IV - QUANTITATIVO DE ATENDIMENTOS DO CRAS POR TERRITÓRIO</h2>
        <h3>F. QUANTITATIVO DE ATENDIMENTOS DO CRAS POR BAIRROS E COMUNIDADES NO MÊS DE REFERÊNCIA

        (Atendimentos dos técnicos de nível superior e médio do PAIF, técnico do Cadastro Único, técnicos de nível médio do SCFV e visitadores do PCF)
        </h3>
        <main>
            <form action="crud4.php" method="post">
                <div class="solo">                       
                    <b><p>F.1. Total de atendimentos do CRAS por bairros</p></b>                
                </div>
                <div class="tabela">
                    <table>
                        <tr>
                            <th>F.1.1. Bairro</th>
                            <th>F.1.2. Quantidade</th>
                            <th>F.1.1. Bairro</th>
                            <th>F.1.2. Quantidade</th>
                        </tr>
                        <tr>
                            <td>
                                <select name="bairro" id="tab">
                                    <?php foreach ($resultados_bairro as $resultado): ?>
                                    <option value="<?php echo $resultado['bairro']; ?>"><?php echo $resultado['bairro']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </td>
                            <td><input type="number" name="quantidade" id="tab"></td>
                            <td>
                                <select name="bairro" id="tab">
                                    <?php foreach ($resultados_bairro as $resultado): ?>
                                    <option value="<?php echo $resultado['bairro']; ?>"><?php echo $resultado['bairro']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </td>
                            <td><input type="number" name="quantidade" id="tab"></td>
                            <td>
                                <select name="bairro" id="tab">
                                    <?php foreach ($resultados_bairro as $resultado): ?>
                                    <option value="<?php echo $resultado['bairro']; ?>"><?php echo $resultado['bairro']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </td>
                            <td><input type="number" name="quantidade" id="tab"></td>
                            <td>
                                <select name="bairro" id="tab">
                                    <?php foreach ($resultados_bairro as $resultado): ?>
                                    <option value="<?php echo $resultado['bairro']; ?>"><?php echo $resultado['bairro']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </td>
                            <td><input type="number" name="quantidade" id="tab"></td>
                        </tr>


                        <tr>
                            <td>
                                <select name="bairro" id="tab">
                                    <?php foreach ($resultados_bairro as $resultado): ?>
                                    <option value="<?php echo $resultado['bairro']; ?>"><?php echo $resultado['bairro']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </td>
                            <td><input type="number" name="quantidade" id="tab"></td>
                            <td>
                                <select name="bairro" id="tab">
                                    <?php foreach ($resultados_bairro as $resultado): ?>
                                    <option value="<?php echo $resultado['bairro']; ?>"><?php echo $resultado['bairro']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </td>
                            <td><input type="number" name="quantidade" id="tab"></td>
                            <td>
                                <select name="bairro" id="tab">
                                    <?php foreach ($resultados_bairro as $resultado): ?>
                                    <option value="<?php echo $resultado['bairro']; ?>"><?php echo $resultado['bairro']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </td>
                            <td><input type="number" name="quantidade" id="tab"></td>
                            <td>
                                <select name="bairro" id="tab">
                                    <?php foreach ($resultados_bairro as $resultado): ?>
                                    <option value="<?php echo $resultado['bairro']; ?>"><?php echo $resultado['bairro']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </td>
                            <td><input type="number" name="quantidade" id="tab"></td>
                        </tr>

                        <tr>
                            <td>
                                <select name="bairro" id="tab">
                                    <?php foreach ($resultados_bairro as $resultado): ?>
                                    <option value="<?php echo $resultado['bairro']; ?>"><?php echo $resultado['bairro']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </td>
                            <td><input type="number" name="quantidade" id="tab"></td>
                            <td>
                                <select name="bairro" id="tab">
                                    <?php foreach ($resultados_bairro as $resultado): ?>
                                    <option value="<?php echo $resultado['bairro']; ?>"><?php echo $resultado['bairro']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </td>
                            <td><input type="number" name="quantidade" id="tab"></td>
                            <td>
                                <select name="bairro" id="tab">
                                    <?php foreach ($resultados_bairro as $resultado): ?>
                                    <option value="<?php echo $resultado['bairro']; ?>"><?php echo $resultado['bairro']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </td>
                            <td><input type="number" name="quantidade" id="tab"></td>
                            <td>
                                <select name="bairro" id="tab">
                                    <?php foreach ($resultados_bairro as $resultado): ?>
                                    <option value="<?php echo $resultado['bairro']; ?>"><?php echo $resultado['bairro']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </td>
                            <td><input type="number" name="quantidade" id="tab"></td>
                        </tr>

                        <tr>
                            <td>
                                <select name="bairro" id="tab">
                                    <?php foreach ($resultados_bairro as $resultado): ?>
                                    <option value="<?php echo $resultado['bairro']; ?>"><?php echo $resultado['bairro']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </td>
                            <td><input type="number" name="quantidade" id="tab"></td>
                            <td>
                                <select name="bairro" id="tab">
                                    <?php foreach ($resultados_bairro as $resultado): ?>
                                    <option value="<?php echo $resultado['bairro']; ?>"><?php echo $resultado['bairro']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </td>
                            <td><input type="number" name="quantidade" id="tab"></td>
                            <td>
                                <select name="bairro" id="tab">
                                    <?php foreach ($resultados_bairro as $resultado): ?>
                                    <option value="<?php echo $resultado['bairro']; ?>"><?php echo $resultado['bairro']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </td>
                            <td><input type="number" name="quantidade" id="tab"></td>
                            <td>
                                <select name="bairro" id="tab">
                                    <?php foreach ($resultados_bairro as $resultado): ?>
                                    <option value="<?php echo $resultado['bairro']; ?>"><?php echo $resultado['bairro']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </td>
                            <td><input type="number" name="quantidade" id="tab"></td>
                        </tr>

                        <tr>
                            <td>
                                <select name="bairro" id="tab">
                                    <?php foreach ($resultados_bairro as $resultado): ?>
                                    <option value="<?php echo $resultado['bairro']; ?>"><?php echo $resultado['bairro']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </td>
                            <td><input type="number" name="quantidade" id="tab"></td>
                            <td>
                                <select name="bairro" id="tab">
                                    <?php foreach ($resultados_bairro as $resultado): ?>
                                    <option value="<?php echo $resultado['bairro']; ?>"><?php echo $resultado['bairro']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </td>
                            <td><input type="number" name="quantidade" id="tab"></td>
                            <td>
                                <select name="bairro" id="tab">
                                    <?php foreach ($resultados_bairro as $resultado): ?>
                                    <option value="<?php echo $resultado['bairro']; ?>"><?php echo $resultado['bairro']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </td>
                            <td><input type="number" name="quantidade" id="tab"></td>
                            <td>
                                <select name="bairro" id="tab">
                                    <?php foreach ($resultados_bairro as $resultado): ?>
                                    <option value="<?php echo $resultado['bairro']; ?>"><?php echo $resultado['bairro']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </td>
                            <td><input type="number" name="quantidade" id="tab"></td>
                        </tr>

                        <tr>
                            <td>
                                <select name="bairro" id="tab">
                                    <?php foreach ($resultados_bairro as $resultado): ?>
                                    <option value="<?php echo $resultado['bairro']; ?>"><?php echo $resultado['bairro']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </td>
                            <td><input type="number" name="quantidade" id="tab"></td>
                            <td>
                                <select name="bairro" id="tab">
                                    <?php foreach ($resultados_bairro as $resultado): ?>
                                    <option value="<?php echo $resultado['bairro']; ?>"><?php echo $resultado['bairro']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </td>
                            <td><input type="number" name="quantidade" id="tab"></td>
                            <td>
                                <select name="bairro" id="tab">
                                    <?php foreach ($resultados_bairro as $resultado): ?>
                                    <option value="<?php echo $resultado['bairro']; ?>"><?php echo $resultado['bairro']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </td>
                            <td><input type="number" name="quantidade" id="tab"></td>
                            <td>
                                <select name="bairro" id="tab">
                                    <?php foreach ($resultados_bairro as $resultado): ?>
                                    <option value="<?php echo $resultado['bairro']; ?>"><?php echo $resultado['bairro']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </td>
                            <td><input type="number" name="quantidade" id="tab"></td>
                        </tr>
                        <!-- Outras linhas da tabela aqui -->
                    </table>
                </div>
                
                <div class="solo">                       
<b><p>F.2. Total de atendimentos do CRAS por comunidssdes</p></b>                
 </div>

 <div class="tabela">
 <table>
      <tr>
        <th>F.2.1. Comunidade</th>
        <th>F.1.2. Quantidade</th>
        <th>F.1.1. Comunidade</th>
        <th>F.1.2. Quantidade</th>
        
      </tr>
      <tr>
      <td>
        <select name="comunidade" id="tab">
          <?php foreach ($resultados as $resultado): ?>
             <option value="<?php echo $resultado['comunidade']; ?>"><?php echo $resultado['comunidade']; ?></option>
              <?php endforeach; ?>
        </select>
        </td>
        <td><input type="number" name="quantidade" id="tab"></td>
        <td>
        <select name="comunidade" id="tab">
          <?php foreach ($resultados as $resultado): ?>
             <option value="<?php echo $resultado['comunidade']; ?>"><?php echo $resultado['comunidade']; ?></option>
              <?php endforeach; ?>
        </select>
        </td>
        <td><input type="number" name="quantidade" id="tab"></td>
      </tr>
      <tr>
       <td>
        <select name="comunidade" id="tab">
          <?php foreach ($resultados as $resultado): ?>
             <option value="<?php echo $resultado['comunidade']; ?>"><?php echo $resultado['comunidade']; ?></option>
              <?php endforeach; ?>
        </select>
        </td>
        <td><input type="number" name="quantidade" id="tab"></td>
        <td>
        <select name="comunidade" id="tab">
          <?php foreach ($resultados as $resultado): ?>
             <option value="<?php echo $resultado['comunidade']; ?>"><?php echo $resultado['comunidade']; ?></option>
              <?php endforeach; ?>
        </select>
        </td>
        <td><input type="number" name="quantidade" id="tab"></td>
      </tr>
      <tr>
       <td>
        <select name="comunidade" id="tab">
          <?php foreach ($resultados as $resultado): ?>
             <option value="<?php echo $resultado['comunidade']; ?>"><?php echo $resultado['comunidade']; ?></option>
              <?php endforeach; ?>
        </select>
        </td>
        <td><input type="number" name="quantidade" id="tab"></td>
        <td>
        <select name="comunidade" id="tab">
          <?php foreach ($resultados as $resultado): ?>
             <option value="<?php echo $resultado['comunidade']; ?>"><?php echo $resultado['comunidade']; ?></option>
              <?php endforeach; ?>
        </select>
        </td>
        <td><input type="number" name="quantidade" id="tab"></td>
      </tr>
      <tr>
       <td>
        <select name="comunidade" id="tab">
          <?php foreach ($resultados as $resultado): ?>
             <option value="<?php echo $resultado['comunidade']; ?>"><?php echo $resultado['comunidade']; ?></option>
              <?php endforeach; ?>
        </select>
        </td>
        <td><input type="number" name="quantidade" id="tab"></td>
        <td>
        <select name="comunidade" id="tab">
          <?php foreach ($resultados as $resultado): ?>
             <option value="<?php echo $resultado['comunidade']; ?>"><?php echo $resultado['comunidade']; ?></option>
              <?php endforeach; ?>
        </select>
        </td>
        <td><input type="number" name="quantidade" id="tab"></td>
      </tr>
      <tr>
       <td>
        <select name="comunidade" id="tab">
          <?php foreach ($resultados as $resultado): ?>
             <option value="<?php echo $resultado['comunidade']; ?>"><?php echo $resultado['comunidade']; ?></option>
              <?php endforeach; ?>
        </select>
        </td>
        <td><input type="number" name="quantidade" id="tab"></td>
        <td>
        <select name="comunidade" id="tab">
          <?php foreach ($resultados as $resultado): ?>
             <option value="<?php echo $resultado['comunidade']; ?>"><?php echo $resultado['comunidade']; ?></option>
              <?php endforeach; ?>
        </select>
        </td>
        <td><input type="number" name="quantidade" id="tab"></td>
      </tr>
      <tr>
       <td>
        <select name="comunidade" id="tab">
          <?php foreach ($resultados as $resultado): ?>
             <option value="<?php echo $resultado['comunidade']; ?>"><?php echo $resultado['comunidade']; ?></option>
              <?php endforeach; ?>
        </select>
        </td>
        <td><input type="number" name="quantidade" id="tab"></td>
        <td>
        <select name="comunidade" id="tab">
          <?php foreach ($resultados as $resultado): ?>
             <option value="<?php echo $resultado['comunidade']; ?>"><?php echo $resultado['comunidade']; ?></option>
              <?php endforeach; ?>
        </select>
        </td>
        <td><input type="number" name="quantidade" id="tab"></td>
      </tr>
      <tr>
       <td>
        <select name="comunidade" id="tab">
          <?php foreach ($resultados as $resultado): ?>
             <option value="<?php echo $resultado['comunidade']; ?>"><?php echo $resultado['comunidade']; ?></option>
              <?php endforeach; ?>
        </select>
        </td>
        <td><input type="number" name="quantidade" id="tab"></td>
        <td>
        <select name="comunidade" id="tab">
          <?php foreach ($resultados as $resultado): ?>
             <option value="<?php echo $resultado['comunidade']; ?>"><?php echo $resultado['comunidade']; ?></option>
              <?php endforeach; ?>
        </select>
        </td>
        <td><input type="number" name="quantidade" id="tab"></td>
      </tr>
      <tr>
       <td>
        <select name="comunidade" id="tab">
          <?php foreach ($resultados as $resultado): ?>
             <option value="<?php echo $resultado['comunidade']; ?>"><?php echo $resultado['comunidade']; ?></option>
              <?php endforeach; ?>
        </select>
        </td>
        <td><input type="number" name="quantidade" id="tab"></td>
        <td>
        <select name="comunidade" id="tab">
          <?php foreach ($resultados as $resultado): ?>
             <option value="<?php echo $resultado['comunidade']; ?>"><?php echo $resultado['comunidade']; ?></option>
              <?php endforeach; ?>
        </select>
        </td>
        <td><input type="number" name="quantidade" id="tab"></td>
      </tr>
    </table>  
                    </div>












                <br>
                    <div class="solo">
                    <b><p>Dados do Responsável pelo preenchimento</p></b>
                    </div>

                    <div class="composto">
                        <p>Nome do Responsável pelo Preenchimento:             
                        <input type="text" name="dois" id="tres"></p>
                        <p id="frase">Cargo: <input type="text" name="" id="tres"></p>
                        
                        <div class="dois">
                        <p>CPF:     <input type="number" name="um" id="um"></p>
                        </div>
                    </div>
                        


                <br>
                <div class="botao">
                <a href="../bloco3/bloco3.php" id="button">Voltar</a>
                <input type="submit" value="Enviar" id="button">
                
                
                </div>
            </form>
         </main>
    


</body>
</html>