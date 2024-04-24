<?php
    require('/xampp/htdocs/assistencia/autenticao.php');
    session_start();
    autenticao();


?>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //$_SESSION["C_1"] = $_POST["C_1"];

    $_SESSION["C_2_1_1"] = $_POST["C_2_1_1"];
    $_SESSION["C_2_1_2"] = $_POST["C_2_1_2"];
    $_SESSION["total_C_2_1"] = $_POST["total_C_2_1"];
    $_SESSION["C_2_2_1"] = $_POST["C_2_2_1"];
    $_SESSION["C_2_2_2"] = $_POST["C_2_2_2"];
    $_SESSION["total_C_2_2"] = $_POST["total_C_2_2"];
    $_SESSION["total_C_2"] = $_POST["total_C_2"];
    $_SESSION["C_3_1"] = $_POST["C_3_1"];
    $_SESSION["C_3_2"] = $_POST["C_3_2"];
    $_SESSION["C_3_3"] = $_POST["C_3_3"];
    $_SESSION["total_C_3"] = $_POST["total_C_3"];
    $_SESSION["C_4_1"] = $_POST["C_4_1"];
    $_SESSION["C_4_2"] = $_POST["C_4_2"];
    $_SESSION["total_C_4"] = $_POST["total_C_4"];
    $_SESSION["C_5_1_1"] = $_POST["C_5_1_1"];
    $_SESSION["C_5_1_2"] = $_POST["C_5_1_2"];
    $_SESSION["C_5_2"] = $_POST["C_5_2"];
    $_SESSION["C_5_3"] = $_POST["C_5_3"];
    $_SESSION["C_5_4"] = $_POST["C_5_4"];
    $_SESSION["C_5_5"] = $_POST["C_5_5"];
    $_SESSION["C_5"] = $_POST["C_5"];
    $_SESSION["C_6_1"] = $_POST["C_6_1"];
    $_SESSION["C_6_2"] = $_POST["C_6_2"];
    $_SESSION["C_6_3_1"] = $_POST["C_6_3_1"];
    $_SESSION["C_6_3_2"] = $_POST["C_6_3_2"];
    $_SESSION["C_6_3_3"] = $_POST["C_6_3_3"];
    $_SESSION["C_6_3"] = $_POST["C_6_3"];
    $_SESSION["C_6_4"] = $_POST["C_6_4"];
    $_SESSION["total_C_6_3_e_total_C_6_4"] = $_POST["total_C_6_3_e_total_C_6_4"];
    $_SESSION["C_7_1_1"] = $_POST["C_7_1_1"];
    $_SESSION["C_7_1_2"] = $_POST["C_7_1_2"];
    $_SESSION["C_7_1"] = $_POST["C_7_1"];
    $_SESSION["C_7_2_1"] = $_POST["C_7_2_1"];
    $_SESSION["C_7_2_2"] = $_POST["C_7_2_2"];
    $_SESSION["C_7_2"] = $_POST["C_7_2"];
    $_SESSION["C_7_3_1"] = $_POST["C_7_3_1"];
    $_SESSION["C_7_3_2"] = $_POST["C_7_3_2"];
    $_SESSION["C_7_3"] = $_POST["C_7_3"];
    $_SESSION["C_7_4_1"] = $_POST["C_7_4_1"];
    $_SESSION["C_7_4_2"] = $_POST["C_7_4_2"];
    $_SESSION["C_7_4"] = $_POST["C_7_4"];
    $_SESSION["C_7_5_1"] = $_POST["C_7_5_1"];
    $_SESSION["C_7_5_2"] = $_POST["C_7_5_2"];
    $_SESSION["C_7_5"] = $_POST["C_7_5"];
    $_SESSION["C_7_6_1"] = $_POST["C_7_6_1"];
    $_SESSION["C_7_6_2"] = $_POST["C_7_6_2"];
    $_SESSION["C_7_6"] = $_POST["C_7_6"];
    $_SESSION["C_7_7_outros"] = $_POST["C_7_7_outros"];
    $_SESSION["C_7_7_1"] = $_POST["C_7_7_1"];
    $_SESSION["C_7_7_2"] = $_POST["C_7_7_2"];
    $_SESSION["C_7_7"] = $_POST["C_7_7"];
    $_SESSION["D_1_1"] = $_POST["D_1_1"];
    $_SESSION["D_1_2"] = $_POST["D_1_2"];
    $_SESSION["total_D_1"] = $_POST["total_D_1"];
    $_SESSION["D_2_1"] = $_POST["D_2_1"];
    $_SESSION["D_2_2"] = $_POST["D_2_2"];
    $_SESSION["total_D_2"] = $_POST["total_D_2"];
    $_SESSION["D_3_1"] = $_POST["D_3_1"];
    $_SESSION["D_3_2"] = $_POST["D_3_2"];
    $_SESSION["total_D_3"] = $_POST["total_D_3"];
    $_SESSION["D_4_1"] = $_POST["D_4_1"];
    $_SESSION["D_4_2"] = $_POST["D_4_2"];
    $_SESSION["total_D_4"] = $_POST["total_D_4"];
    $_SESSION["D_5_1"] = $_POST["D_5_1"];
    $_SESSION["D_5_2"] = $_POST["D_5_2"];
    $_SESSION["total_D_5"] = $_POST["total_D_5"];
    $_SESSION["D_6_1"] = $_POST["D_6_1"];
    $_SESSION["D_6_2"] = $_POST["D_6_2"];
    $_SESSION["total_D_6"] = $_POST["total_D_6"];
    $_SESSION["D_7_1"] = $_POST["D_7_1"];
    $_SESSION["D_7_2"] = $_POST["D_7_2"];
    $_SESSION["total_D_7"] = $_POST["total_D_7"];
    $_SESSION["D_8_1"] = $_POST["D_8_1"];
    $_SESSION["D_8_2"] = $_POST["D_8_2"];
    $_SESSION["D_8_3_outros"] = $_POST["D_8_3_outros"];
    $_SESSION["total_D_8"] = $_POST["total_D_8"];
    $_SESSION["D_9_outros"] = $_POST["D_9_outros"];
    $_SESSION["total_D_9"] = $_POST["total_D_9"];
    


    header("Location: ../bloco3/bloco3.php");
    exit();
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BLOCO II - ATENDIMENTOS PARTICULARIZADOS REALIZADOS NO CRAS</title>
    <link rel="stylesheet" href="bloco2.css">
</head>
<header>
           <h1> RMA - REGISTRO MENSAL DE ATENDIMENTO DO CRAS </h1>
        </header>
        
<body>
    <div class="container">
                        
                    <main>
                        <form action="" method="POST">
                                
        
<h2>BLOCO II - ATENDIMENTOS PARTICULARIZADOS REALIZADOS NO CRAS</h2>
                        <h3>C. VOLUME DE <u>ATENDIMENTOS</u> PARTICULARIZADOS REALIZADOS NO MÊS DE REFERÊNCIA</h3>

                        
                    <div class="solo">
                        <b><p id="frase">C.2. Total de atendimentos realizados pelos técnicos de nível superior do PAIF</p></b>
                        </div>

                        <div class="duplo">
                            <p id="frase"> C.2.1. Equipe Fixa:</p>
                        <div class="dois">
                        <p>Presencial:</p>
                            <input type="number" name="C_2_1_1" id="um">
                        <p>Remoto:</p>
                            <input type="number" name="C_2_1_2" id="um">
                        </div>
                        </div>

                        <div class="duplo">
                            <p id="frase"> C.2.2. Equipe Volante:</p>
                        <div class="dois">
                        <p>Presencial:</p>
                            <input type="number" name="C_2_2_1" id="um">
                        <p>Remoto:</p>
                            <input type="number" name="C_2_2_2" id="um">
                        </div>
                            </div>
                        <br>

                    <div class="solo">
                    <b><p>C.3. Total de atendimentos realizados pelo digitador/atendente do Cadastro Único no CRAS</p></b>
                    </div>

                    <div class="simples">
                        <p>C.3.1. Inclusão (<b>1° CADASTRO</b>) no CADUNICO (C2 - MDS)</p>
                        <input type="number" name="C_3_1" id="um">
                    </div>

                    <div class="simples">
                        <p>C.3.2. Atualização cadastral no CADUNICO (C3 - MDS)</p>
                        <input type="number" name="C_2_3" id="um">
                    </div>

                    <div class="simples">
                        <p>C.3.3. Outros atendimentos do CADUNICO (orientações, impressão de folha resumo, etc.)</p>
                        <input type="text" name="C_3_3" id="dois">
                    </div>
                    <br>

                    <div class="solo">
                    <b><p>C.4. Total de pessoas encaminhadas para acesso ao BPC (C4 - MDS)</p></b>
                    </div>

                    <div class="simples">
                        <p>C.4.1. Área Urbana</p>
                        <input type="number" name="C_4_1" id="um">
                    </div>

                    <div class="simples">
                        <p>C.4.1. Área Rural</p>
                        <input type="number" name="C_4_2" id="um">
                    </div>
                    <br>

                    
                    <div class="solo">
                    <b><p>C.5. Total de visitas domiciliares realizadas (C6 – MDS)	Total C.5.</p></b>
                    </div>
                    
                    
                    <div class="solo">
                        <p>C.5.1. Visitas domiciliares realizadas pelos técnicos de nível superior do PAIF</p>
                    </div>
                                
                    <div class="simples">
                        <p>Quant. Equipe Fixa:</p>
                            <input type="number" name="C_5_1_1" id="um">
                        </div>
                        <div class="simples">
                        <p>Quant. Equipe Volante:</p>
                            <input type="number" name="C_5_1_2" id="um">
                        </div>
                       

                    <div class="simples">
                        <p>C.5.2. Visitas domiciliares realizadas pelos técnicos de nível médio do PAIF</p>
                        <input type="number" name="C_5_2" id="um">
                    </div>
                    
                    <div class="simples">
                        <p>C.5.3. Visitas domiciliares realizadas pelos técnicos do Cadastro Único e PAB</p>
                        <input type="number" name="C_5_3" id="um">
                    </div>
                    
                    <div class="simples">
                        <p>C.5.4. Visitas domiciliares realizadas pelos técnicos de nível médio do SCFV</p>
                        <input type="number" name="C_5_4" id="um">
                    </div>
                    
                    <div class="simples">
                        <p>C.5.5. Visitas domiciliares realizadas pelos visitadores do Programa Criança Feliz</p>
                        <input type="number" name="C_5_5" id="um">
                    </div>
                    <br>

                    <div class="solo">
                    <b><p>C.6. Benefícios Eventuais concedidos e/ou entregues </p></b>
                    </div>
                    <div class="simples">
                        <p>C.6.1. Auxílio Natalidade (C7 – MDS)</p>
                        <input type="number" name="C_6_1" id="um">
                    </div>
                    <div class="simples">
                        <p>C.6.2. Auxílio Funeral (C8 – MDS)</p>
                        <input type="number" name="C_6_2" id="um">
                    </div>
                    <div class="solo">
                    <b><p>C.6.3. Vulnerabilidade temporária (C9 – MDS)</p></b>
                    </div>
                    <div class="simples">
                        <p>C.6.3.1. Auxílio alimentação</p>
                        <input type="number" name="C_6_3_1" id="um">
                    </div>
                    <div class="simples">
                        <p>C.6.3.2. Auxílio financeiro</p>
                        <input type="number" name="C_6_3_2" id="um">
                    </div>

                    <div class="simples">
                        <p>C.6.3.3. Outros (Especificar) </p>
                        <input type="text" name="C_6_3_3" id="um" placeholder="Digite aqui a especificação">
                    </div>


                    <div class="simples">
                        <p>C.6.4. Calamidade Pública (C9 – MDS)</p>
                        <input type="number" name="C_6_4" id="um">
                    </div>
                   <br>
                    <div class="solo">
                    <b><p>C.7. Total de famílias encaminhadas para o CREAS (C5 – MDS)	Total C.7.</p></b>
                    </div>
                    <div class="duplo">
                        <p id="frase">C.7.1. Violência física e/ou Psicológica</p>
                        <div class="dois">
                        <p>Área Urbana:</p>
                            <input type="number" name="C_7_1_1" id="um">
                            <p>Área Rural:</p>
                            <input type="number" name="C_7_1_2" id="um">
                        </div>
                    </div>

                    <div class="duplo">
                        <p id="frase">C.7.2. Violência sexual</p>
                        <div class="dois">
                        <p>Área Urbana:</p>
                            <input type="number" name="C_7_2_1" id="um">
                            <p>Área Rural:</p>
                            <input type="number" name="C_7_2_2" id="um">
                        </div>
                    </div>

                    <div class="duplo">
                        <p id="frase"> C.7.3. Negligência</p>
                        <div class="dois">
                        <p>Área Urbana:</p>
                            <input type="number" name="C_7_3_1" id="um">
                            <p>Área Rural:</p>
                            <input type="number" name="C_7_3_2" id="um">
                        </div>
                    </div>

                    <div class="duplo">
                        <p id="frase">C.7.4. Abandono</p>
                        <div class="dois">
                        <p>Área Urbana:</p>
                            <input type="number" name="C_7_4_1" id="um">
                            <p>Área Rural:</p>
                            <input type="number" name="C_7_4_2" id="um">
                        </div>
                    </div>

                    <div class="duplo">
                        <p id="frase">C.7.5. Trabalho infantil</p>
                        <div class="dois">
                        <p>Área Urbana:</p>
                            <input type="number" name="C_7_5_1" id="um">
                            <p>Área Rural:</p>
                            <input type="number" name="C_7_5_2" id="um">
                        </div>
                    </div>

                    <div class="duplo">
                        <p id="frase">C.7.6. Discriminação em decorrência da orientação sexual e/ou raça/etnia</p>
                        <div class="dois">
                        <p>Área Urbana:</p>
                            <input type="number" name="C_7_6_1" id="um">
                            <p>Área Rural:</p>
                            <input type="number" name="C_7_6_2" id="um">
                        </div>
                    </div>

                    <div class="duplo">
                        <p id="frase">C.7.7. Outros (Especificar):       <input type="text" name="C_7_7_outros" id="desc" ></p>
                        
                        <div class="dois">
                        <p>Área Urbana:</p>
                            <input type="number" name="C_7_7_1" id="um">
                            <p>Área Rural:</p>
                            <input type="number" name="C_7_7_2" id="um">
                        </div>
                    </div>
                   






















                    <h3>D. OUTROS ENCAMINHAMENTOS REALIZADOS PELO PAIF NO MÊS DE REFERÊNCIA</h3>

                        
<div class="solo">
<b><p>D.1. Pessoas encaminhadas para o SCFV</p></b>
</div>

                    <div class="simples">
                        <p>D.1.1. Área Urbana</p>
                        <input type="number" name="D_1_1" id="um">
                    </div>
                    <div class="simples">
                    <p>D.1.2. Área Rural</p>
                        <input type="number" name="D_1_2" id="um">
                    </div>
<br>
<div class="solo">
<b><p>D.2. Famílias encaminhadas para o Cadastro Único</p></b>
</div>

                    <div class="simples">
                        <p>D.2.1. Área Urbana</p>
                        <input type="number" name="D_2_1" id="um">
                    </div>
                    <div class="simples">
                    <p>D.2.2. Área Rural</p>
                        <input type="number" name="D_2_2" id="um">
                    </div>
<br>
<div class="solo">
<b><p>D.3. Pessoas encaminhadas para cursos profissionalizantes</p></b>
</div>

                    <div class="simples">
                        <p>D.3.1. Área Urbana</p>
                        <input type="number" name="D_3_1" id="um">
                    </div>
                    <div class="simples">
                    <p>D.3.2. Área Rural</p>
                        <input type="number" name="D_3_2" id="um">
                    </div>

<br>

 <div class="solo">
 <b><p>D.4. Famílias encaminhadas para a educação</p></b>
</div>

                    <div class="simples">
                        <p>D.4.1. Área Urbana</p>
                        <input type="number" name="D_4_1" id="um">
                    </div>
                    <div class="simples">
                    <p>D.4.2. Área Rural</p>
                        <input type="number" name="D_4_2" id="um">
                    </div>
<br>
<div class="solo">
 <b><p>D.5. Famílias encaminhadas para a saúde</p></b>
</div>

                    <div class="simples">
                        <p>D.5.1. Área Urbana</p>
                        <input type="number" name="D_5_1" id="um">
                    </div>
                    <div class="simples">
                    <p>D.5.2. Área Rural</p>
                        <input type="number" name="D_5_2" id="um">
                    </div>
<br>
<div class="solo">
 <b><p>D.6. Famílias encaminhadas para programas habitacionais</p></b>
</div>

                    <div class="simples">
                        <p>D.6.1. Área Urbana</p>
                        <input type="number" name="D_6_1" id="um">
                    </div>
                    <div class="simples">
                    <p>D.6.2. Área Rural</p>
                        <input type="number" name="D_6_2" id="um">
                    </div>
       <br>             
 <div class="solo">
 <b><p>D.7. Famílias encaminhadas para confecção de documentos</p></b>
</div>

                    <div class="simples">
                        <p>D.7.1. Área Urbana</p>
                        <input type="number" name="D_7_1" id="um">
                    </div>
                    <div class="simples">
                    <p>D.7.2. Área Rural</p>
                        <input type="number" name="D_7_2" id="um">
                    </div>
<br>
<div class="solo">
<b><p>D.8. Famílias encaminhadas para o Sistema de Defesa de Direitos e de Justiça	Total</p></b>
</div>

                    <div class="simples">
                        <p>D.8.1. Conselho Tutelar</p>
                        <input type="number" name="D_8_1" id="um">
                    </div>
                    <div class="simples">
                        <p>D.8.2. Ministério Público</p>
                        <input type="number" name="D_8_2" id="um">
                    </div>
                    <div class="simples">
                    <p id="frase">D.8.3. Outros (Especificar):</p>
                    <input type="text" name="D_8_3_outros" id="dois">
                    </div>
                    <br>
                    
                    
<div class="texto">
                    <b><p>D.9. Outros encaminhamentos para além dos apresentados acima (especificar)</p></b>
                    <input type="text" name="D_9_outros" id="dois">
                    </div>

                    <br>
                    <div class="botao">
                    <a href="../bloco1/bloco1.php" id="button">Voltar</a>
                            <input type="submit" value="Enviar" id="button">
                        </div>
                    </form>
                    </main>

                    
</div>
</body>
</html>