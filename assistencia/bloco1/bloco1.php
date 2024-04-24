<?php
    require('/xampp/htdocs/assistencia/autenticao.php');
    session_start();
    autenticao();

?>

<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION["A11"] = $_POST["A11"];
    
    $_SESSION["A_1_2"] = $_POST["A_1_2"];

    $_SESSION["A_2_1"] = $_POST["A_2_1"];
    $_SESSION["A_2_2"] = $_POST["A_2_2"];

    $_SESSION["A_3_1_1"] = $_POST["A_3_1_1"];
    $_SESSION["A_3_1_2"] = $_POST["A_3_1_2"];

    $_SESSION["A_3_2_1"] = $_POST["A_3_2_1"];
    $_SESSION["A_3_2_2"] = $_POST["A_3_2_2"];

    $_SESSION["A_3_3_1"] = $_POST["A_3_3_1"];
    $_SESSION["A_3_3_2"] = $_POST["A_3_3_2"];

    $_SESSION["A_3_4_outros"] = $_POST["A_3_4_outros"];
    $_SESSION["A_3_4_1"] = $_POST["A_3_4_1"];
    $_SESSION["A_3_4_2"] = $_POST["A_3_4_2"];

    $_SESSION["B_1"] = $_POST["B_1"];
    $_SESSION["B_2"] = $_POST["B_2"];
    $_SESSION["B_3"] = $_POST["B_3"];
    $_SESSION["B_4"] = $_POST["B_4"];
    $_SESSION["B_5_1_1"] = $_POST["B_5_1_1"];
    $_SESSION["B_5_1_2"] = $_POST["B_5_1_2"];
    $_SESSION["B_5_2_1"] = $_POST["B_5_2_1"];
    $_SESSION["B_5_2_2"] = $_POST["B_5_2_2"];
    $_SESSION["B_6"] = $_POST["B_6"];
    $_SESSION["B_7_1_1"] = $_POST["B_7_1_1"];
    $_SESSION["B_7_1_2"] = $_POST["B_7_1_2"];
    $_SESSION["B_7_2_1"] = $_POST["B_7_2_1"];
    $_SESSION["B_7_2_2"] = $_POST["B_7_2_2"];
    $_SESSION["B_8"] = $_POST["B_8"];
    $_SESSION["B_9_1_1"] = $_POST["B_9_1_1"];
    $_SESSION["B_9_1_2"] = $_POST["B_9_1_2"];
    $_SESSION["B_9_2_1"] = $_POST["B_9_2_1"];
    $_SESSION["B_9_2_2"] = $_POST["B_9_2_2"];

    header("Location: ../bloco2/bloco2.php");
    
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BLOCO I - FAMÍLIAS EM ACOMPANHAMENTO PELO PAIF</title>
    <link rel="stylesheet" href="bloco1.css">
</head>


<body>
<div class="container">
        <header>
           <h1> RMA - REGISTRO MENSAL DE ATENDIMENTO DO CRAS</h1>
           <div class="bot">
           <a href="../logout.php" class="deslog"><b>Deslogar</b></a>
           </div>
        </header>
        <nav> 
            <a href="../home.php">Início</a>
        <a href="../assistencia/funcionario/cadfunc.php">Registrar funcionarios</a> 
        
        <a href="../assistencia/bairro/registro_bairro.php">Registrar Bairros</a>
        <a href="../assistencia/comunidade/registro_comunidade.php">Registrar Comunidades</a>
                <a href="../assistencia/impressao.php">Listra registros</a>
            </nav>
        <main>
        <form action="" method="POST" id="form1">
                    
        <div class="solo">
                    <b><p>TOTAL DE FAMÍLIAS <U>REFERENCIADAS</U> NESTA UNIDADE ATÉ A PRESENTE DATA</p></b>
                    </div>

                    <div class="simples">
                    <p>Equipe Fixa:</p>
                        <input type="number" name="equipefixa" id="um">
                    </div>
                    <div class="simples">
                    <p>Equipe Volante:</p>
                        <input type="number" name="equipevolante" id="um">
                    </div>
                    <br>
        
        
        
        
        
                    <h2>BLOCO I - FAMÍLIAS EM ACOMPANHAMENTO PELO PAIF</h2>
                    <h3>A. VOLUME DE FAMÍLIAS EM ACOMPANHAMENTO PELO PAIF</h3>

                    <div class="solo">
                    <b><p>A.1. Total de famílias em acompanhamento pelo PAIF até o <u>último dia do mês ANTERIOR</u></p></b>
                    </div>

                    <div class="simples">
                    <p>A.1.1. Equipe Fixa:</p>
                        <input type="number" name="A11" id="um">
                    </div>
                    <div class="simples">
                    <p>A.1.2. Equipe Volante:</p>
                        <input type="number" name="A_1_2" id="um">
                    </div>
                    <br>

                    <div class="solo">
                    <b><p>A.2. Total de <u>novas famílias</u> inseridas no acompanhamento do PAIF durante o mês de referência (A2 – MDS)</u></p></b>
                    </div>

                    <div class="simples">
                    <p>A.2.1. Equipe Fixa:</p>
                        <input type="number" name="A_2_1" id="um">
                    </div>
                    <div class="simples">
                    <p>A.2.2. Equipe Volante:</p>
                        <input type="number" name="A_2_2" id="um">
                    </div>
                    <br>


                    <div class="solo">
                    <b><p>A.3. Total de <u>famílias desligadas</u> do acompanhamento no mês de referência</p></b>
                    </div>
                       

                        <div class="solo">
                        <p>A.3.1. Mudança de território de abrangência do CRAS</p>
                        </div>
                    
                        <div class="simples">
                        <p>Quant. Equipe Fixa:</p>
                            <input type="number" name="A_3_1_1" id="um">
                        </div>
                        <div class="simples">
                        <p>Quant. Equipe Volante:</p>
                            <input type="number" name="A_3_1_2" id="um">
                        </div>
                        



                    <div class="solo">
                        <p>A.3.2. Família não aderiu ao acompanhamento</p>
                    </div>
                    <div class="simples">
                        <p>Quant. Equipe Fixa:</p>
                            <input type="number" name="A_3_2_1" id="um">
                        </div>
                        <div class="simples">
                        <p>Quant. Equipe Volante:</p>
                            <input type="number" name="A_3_2_2" id="um">
                        </div>
                        

                    <div class="solo">
                        <p>A.3.3. Superação de vulnerabilidades sociais ou alcance parcial de resultados no Plano de Acompanhamento Familiar – PAF</p>
                    </div>
                    

                    <div class="simples">
                        <p>Quant. Equipe Fixa:</p>
                            <input type="number" name="A_3_3_1" id="um">
                        </div>
                        <div class="simples">
                        <p>Quant. Equipe Volante:</p>
                            <input type="number" name="A_3_3_2" id="um">
                        </div>

                        

                    <div class="solo">
                        <p>A.3.4. Outros (Especificar)</p>
                    </div>
                    <div class="simples">
                        <p>Motivo:</p>
                            <input type="text" name="A_3_4_outros" id="um">
                        </div>
                    <div class="simples">
                        <p>Quant. Equipe Fixa:</p>
                            <input type="number" name="A_3_4_1" id="um">
                        </div>
                        <div class="simples">
                        <p>Quant. Equipe Volante:</p>
                            <input type="number" name="A_3_4_2" id="um">
                        </div>
                    <br>

















                    <h3>B. PERFIL DAS <u>NOVAS FAMÍLIAS</u> INSERIDAS NO ACOMPANHAMENTO DO PAIF (A2) NO MÊS DE REFERÊNCIA</h3>
                    
                    <div class="simples">
                        <b><p>B.1. Total de famílias em situação de extrema pobreza</p></b>
                        <input type="number" name="B_1" id="um">
                    </div>
                    <br>

                    <div class="simples">
                    <b><p>B.2. Total de famílias beneficiárias do Programa Auxílio Brasil – PAB (B2 – MDS)</p></b>
                        <input type="number" name="B_2" id="um">
                    </div>
                    <br>

                    <div class="simples">
                    <b><p>B.3. Total de família beneficiárias do PBF em descumprimento de condicionalidades (B3 - MDS)</p></b>
                        <input type="number" name="B_3" id="um">
                    </div>
                    <br>

                    <div class="simples">
                    <b><p>B.4. Total de famílias com membros beneficiários do Benefício de Prestação Continuada - BPC (B4 - MDS)</p></b>
                        <input type="number" name="B_4" id="um">
                    </div>
                    <br>

                    <div class="solo">
                    <b> <p>B.5. Quantidade e perfil das pessoas beneficiárias do BPC</p></b>
                    </div>
                    

                    <div class="duplo">
                        <p id="frase">B.5.1. Pessoa com Deficiência</p>
                        <div class="dois">
                        <p>Quantidade masculino:</p>
                            <input type="number" name="B_5_1_1" id="um">
                        <p>Quantidade Feminino:</p>
                            <input type="number" name="B_5_1_2" id="um">
                        </div>
                    </div>
                    <div class="duplo">
                        <p id="frase">B.5.2. Idoso</p>
                        <div class="dois">
                        <p>Quantidade masculino:</p>
                            <input type="number" name="B_5_2_1" id="um">
                        <p>Quantidade Feminino:</p>
                            <input type="number" name="B_5_2_2" id="um">
                            
                        </div>
                        </div>
                        <br>
                        <div class="simples">
                        <b><p>B.6. Total de famílias com crianças ou adolescentes em situação de trabalho infantil ou que estiveram na condição de trabalho infantil em algum momento (B5 – MDS)</p></b>
                        <input type="number" name="B_6" id="um">
                    </div>
                    <br>
                        <div class="solo">
                        <b><p>B.7. Quantidade e perfil de crianças e adolescentes em situação do trabalho infantil ou que estiveram na condição de trabalho infantil em algum momento</p></b>
                    </div>
                    
                    <div class="duplo">
                        <p id="frase">B.7.1. Masculino</p>
                        <div class="dois">
                        <p>0 a 12 anos:</p>
                            <input type="number" name="B_7_1_1" id="um">
                        <p>13 a 15 anos:</p>
                            <input type="number" name="B_7_1_2" id="um">
                        </div>
                    </div>

                    <div class="duplo">
                        <p id="frase">B.7.2. Feminino</p>
                        <div class="dois">
                        <p>0 a 12 anos:</p>
                            <input type="number" name="B_7_2_1" id="um">
                        <p>13 a 15 anos:</p>
                            <input type="number" name="B_7_2_2" id="um">
                        </div>
                    </div>
                        <br>


                        <br>
                        <div class="simples">
                        <b><p>B.8. Total de famílias com crianças ou adolescentes em serviço de acolhimento ou egressos desse serviço (B6 – MDS)</p></b>
                        <input type="number" name="B_8" id="um">
                    </div>
                    <br>

                        <div class="solo">
                        <b><p>B.9. Quantidade e perfil de crianças e adolescentes em serviço de acolhimento ou egressos desse serviço</p></b>
                    </div>
                    

                    <div class="duplo">
                        <p id="frase">B.9.1. Masculino</p>
                        <div class="dois">
                        <p>0 a 12 anos:</p>
                            <input type="number" name="B_9_1_1" id="um">
                        <p>13 a 17 anos:</p>
                            <input type="number" name="B_9_1_2" id="um">
                        </div>
                    </div>

                    <div class="duplo">
                        <p id="frase">B.9.2. Feminino</p>
                        <div class="dois">
                        <p>0 a 12 anos:</p>
                            <input type="number" name="B_9_2_1" id="um">
                        <p>13 a 17 anos:</p>
                            <input type="number" name="B_9_2_2" id="um">
                        </div>
                        </div>





                       
                   
                      <?php  //responsavel pelo preenchimento ficava aq, tentar colocar na ultima pag, se fr colocar um em cada vai fficar muito chato de preencher toda horas, cansativo e redundante ?>
                        <br>

                        <div class="botao">
                            <input type="submit" value="enviar" id="button" name="enviar">
                            
                        </div>
</form>
<?php exit();?>
</main>
</body>
</html>