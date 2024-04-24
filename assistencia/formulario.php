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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EQ. FIXA RMA - REGISTRO MENSAL DE ATENDIMENTO DO CRAS</title>
    <link rel="stylesheet" href="formulario.css">
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
            <form action="impressao.php" method="$_POST">
                    <h2>BLOCO I - FAMÍLIAS EM ACOMPANHAMENTO PELO PAIF</h2>
                    <h3>A. VOLUME DE FAMÍLIAS EM ACOMPANHAMENTO PELO PAIF</h3>

                    <div class="solo">
                    <b><p>A.1. Total de famílias em acompanhamento pelo PAIF até o <u>último dia do mês ANTERIOR</u></p></b>
                    </div>

                    <div class="simples">
                    <p>A.1.1. Equipe Fixa:</p>
                        <input type="number" name="um" id="um">
                    </div>
                    <div class="simples">
                    <p>A.1.2. Equipe Volante:</p>
                        <input type="number" name="um" id="um">
                    </div>
                    <br>

                    <div class="solo">
                    <b><p>A.2. Total de <u>novas famílias</u> inseridas no acompanhamento do PAIF durante o mês de referência (A2 – MDS)</u></p></b>
                    </div>

                    <div class="simples">
                    <p>A.2.1. Equipe Fixa:</p>
                        <input type="number" name="um" id="um">
                    </div>
                    <div class="simples">
                    <p>A.2.2. Equipe Volante:</p>
                        <input type="number" name="um" id="um">
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
                            <input type="number" name="um" id="um">
                        </div>
                        <div class="simples">
                        <p>Quant. Equipe Volante:</p>
                            <input type="number" name="um" id="um">
                        </div>
                        



                    <div class="solo">
                        <p>A.3.2. Família não aderiu ao acompanhamento</p>
                    </div>
                    <div class="simples">
                        <p>Quant. Equipe Fixa:</p>
                            <input type="number" name="um" id="um">
                        </div>
                        <div class="simples">
                        <p>Quant. Equipe Volante:</p>
                            <input type="number" name="um" id="um">
                        </div>
                        

                    <div class="solo">
                        <p>A.3.3. Superação de vulnerabilidades sociais ou alcance parcial de resultados no Plano de Acompanhamento Familiar – PAF</p>
                    </div>
                    

                    <div class="simples">
                        <p>Quant. Equipe Fixa:</p>
                            <input type="number" name="um" id="um">
                        </div>
                        <div class="simples">
                        <p>Quant. Equipe Volante:</p>
                            <input type="number" name="um" id="um">
                        </div>

                        

                    <div class="solo">
                        <p>A.3.4. Outros (Especificar)</p>
                    </div>
                    <div class="simples">
                        <p>Quant. Equipe Fixa:</p>
                            <input type="number" name="um" id="um">
                        </div>
                        <div class="simples">
                        <p>Quant. Equipe Volante:</p>
                            <input type="number" name="um" id="um">
                        </div>
                    <br>

















                    <h3>B. PERFIL DAS <u>NOVAS FAMÍLIAS</u> INSERIDAS NO ACOMPANHAMENTO DO PAIF (A2) NO MÊS DE REFERÊNCIA</h3>
                    
                    <div class="simples">
                        <b><p>B.1. Total de famílias em situação de extrema pobreza</p></b>
                        <input type="number" name="um" id="um">
                    </div>
                    <br>

                    <div class="simples">
                    <b><p>B.2. Total de famílias beneficiárias do Programa Auxílio Brasil – PAB (B2 – MDS)</p></b>
                        <input type="number" name="um" id="um">
                    </div>
                    <br>

                    <div class="simples">
                    <b><p>B.3. Total de família beneficiárias do PBF em descumprimento de condicionalidades (B3 - MDS)</p></b>
                        <input type="number" name="um" id="um">
                    </div>
                    <br>

                    <div class="simples">
                    <b><p>B.4. Total de famílias com membros beneficiários do Benefício de Prestação Continuada - BPC (B4 - MDS)</p></b>
                        <input type="number" name="um" id="um">
                    </div>
                    <br>

                    <div class="solo">
                    <b> <p>B.5. Quantidade e perfil das pessoas beneficiárias do BPC</p></b>
                    </div>
                    

                    <div class="duplo">
                        <p id="frase">B.5.1. Pessoa com Deficiência</p>
                        <div class="dois">
                        <p>Quantidade masculino:</p>
                            <input type="number" name="um" id="um">
                        <p>Quantidade Feminino:</p>
                            <input type="number" name="um" id="um">
                        </div>
                    </div>
                    <div class="duplo">
                        <p id="frase">B.5.2. Idoso</p>
                        <div class="dois">
                        <p>Quantidade masculino:</p>
                            <input type="number" name="um" id="um">
                        <p>Quantidade Feminino:</p>
                            <input type="number" name="um" id="um">
                            
                        </div>
                        </div>
                        <br>
                        <div class="simples">
                        <b><p>B.6. Total de famílias com crianças ou adolescentes em situação de trabalho infantil ou que estiveram na condição de trabalho infantil em algum momento (B5 – MDS)</p></b>
                        <input type="number" name="um" id="um">
                    </div>
                    <br>
                        <div class="solo">
                        <b><p>B.7. Quantidade e perfil de crianças e adolescentes em situação do trabalho infantil ou que estiveram na condição de trabalho infantil em algum momento</p></b>
                    </div>
                    
                    <div class="duplo">
                        <p id="frase">B.7.1. Masculino</p>
                        <div class="dois">
                        <p>0 a 12 anos:</p>
                            <input type="number" name="um" id="um">
                        <p>13 a 15 anos:</p>
                            <input type="number" name="um" id="um">
                        </div>
                    </div>

                    <div class="duplo">
                        <p id="frase">B.7.2. Feminino</p>
                        <div class="dois">
                        <p>0 a 12 anos:</p>
                            <input type="number" name="um" id="um">
                        <p>13 a 15 anos:</p>
                            <input type="number" name="um" id="um">
                        </div>
                    </div>
                        <br>


                        <br>
                        <div class="simples">
                        <b><p>B.8. Total de famílias com crianças ou adolescentes em serviço de acolhimento ou egressos desse serviço (B6 – MDS)</p></b>
                        <input type="number" name="um" id="um">
                    </div>
                    <br>

                        <div class="solo">
                        <b><p>B.9. Quantidade e perfil de crianças e adolescentes em serviço de acolhimento ou egressos desse serviço</p></b>
                    </div>
                    

                    <div class="duplo">
                        <p id="frase">B.9.1. Masculino</p>
                        <div class="dois">
                        <p>0 a 12 anos:</p>
                            <input type="number" name="um" id="um">
                        <p>13 a 17 anos:</p>
                            <input type="number" name="um" id="um">
                        </div>
                    </div>

                    <div class="duplo">
                        <p id="frase">B.9.2. Feminino</p>
                        <div class="dois">
                        <p>0 a 12 anos:</p>
                            <input type="number" name="um" id="um">
                        <p>13 a 17 anos:</p>
                            <input type="number" name="um" id="um">
                        </div>
                        </div>




                       
                       


















                       
                        <h2>BLOCO II - ATENDIMENTOS PARTICULARIZADOS REALIZADOS NO CRAS</h2>
                        <h3>C. VOLUME DE <u>ATENDIMENTOS</u> PARTICULARIZADOS REALIZADOS NO MÊS DE REFERÊNCIA</h3>

                        
                        
                    

                    <div class="solo">
                        <b><p id="frase">C.2. Total de atendimentos realizados pelos técnicos de nível superior do PAIF</p></b>
                        </div>

                        <div class="duplo">
                            <p id="frase"> C.2.1. Equipe Fixa:</p>
                        <div class="dois">
                        <p>Presencial:</p>
                            <input type="number" name="um" id="um">
                        <p>Remoto:</p>
                            <input type="number" name="um" id="um">
                        </div>
                        </div>

                        <div class="duplo">
                            <p id="frase"> C.2.2. Equipe Volante:</p>
                        <div class="dois">
                        <p>Presencial:</p>
                            <input type="number" name="um" id="um">
                        <p>Remoto:</p>
                            <input type="number" name="um" id="um">
                        </div>
                            </div>
                        <br>

                    <div class="solo">
                    <b><p>C.3. Total de atendimentos realizados pelo digitador/atendente do Cadastro Único no CRAS</p></b>
                    </div>

                    <div class="simples">
                        <p>C.3.1. Inclusão (<b>1° CADASTRO</b>) no CADUNICO (C2 - MDS)</p>
                        <input type="number" name="dois" id="um">
                    </div>

                    <div class="simples">
                        <p>C.3.2. Atualização cadastral no CADUNICO (C3 - MDS)</p>
                        <input type="number" name="dois" id="um">
                    </div>

                    <div class="simples">
                        <p>C.3.3. Outros atendimentos do CADUNICO (orientações, impressão de folha resumo, etc.)</p>
                        <input type="text" name="dois" id="dois">
                    </div>
                    <br>

                    <div class="solo">
                    <b><p>C.4. Total de pessoas encaminhadas para acesso ao BPC (C4 - MDS)</p></b>
                    </div>

                    <div class="simples">
                        <p>C.4.1. Área Urbana</p>
                        <input type="number" name="dois" id="um">
                    </div>

                    <div class="simples">
                        <p>C.4.1. Área Rural</p>
                        <input type="number" name="dois" id="um">
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
                            <input type="number" name="um" id="um">
                        </div>
                        <div class="simples">
                        <p>Quant. Equipe Volante:</p>
                            <input type="number" name="um" id="um">
                        </div>
                       

                    <div class="simples">
                        <p>C.5.2. Visitas domiciliares realizadas pelos técnicos de nível médio do PAIF</p>
                        <input type="number" name="dois" id="um">
                    </div>
                    
                    <div class="simples">
                        <p>C.5.3. Visitas domiciliares realizadas pelos técnicos do Cadastro Único e PAB</p>
                        <input type="number" name="dois" id="um">
                    </div>
                    
                    <div class="simples">
                        <p>C.5.4. Visitas domiciliares realizadas pelos técnicos de nível médio do SCFV</p>
                        <input type="number" name="dois" id="um">
                    </div>
                    
                    <div class="simples">
                        <p>C.5.5. Visitas domiciliares realizadas pelos visitadores do Programa Criança Feliz</p>
                        <input type="number" name="dois" id="um">
                    </div>
                    <br>

                    <div class="solo">
                    <b><p>C.6. Benefícios Eventuais concedidos e/ou entregues </p></b>
                    </div>
                    <div class="simples">
                        <p>C.6.1. Auxílio Natalidade (C7 – MDS)</p>
                        <input type="number" name="dois" id="um">
                    </div>
                    <div class="simples">
                        <p>C.6.2. Auxílio Funeral (C8 – MDS)</p>
                        <input type="number" name="dois" id="um">
                    </div>
                    <div class="solo">
                    <b><p>C.6.3. Vulnerabilidade temporária (C9 – MDS)</p></b>
                    </div>
                    <div class="simples">
                        <p>C.6.3.1. Auxílio alimentação</p>
                        <input type="number" name="dois" id="um">
                    </div>
                    <div class="simples">
                        <p>C.6.3.2. Auxílio financeiro</p>
                        <input type="number" name="dois" id="um">
                    </div>

                    <div class="simples">
                        <p>C.6.3.3. Outros (Especificar) </p>
                        <input type="text" name="dois" id="dois">
                    </div>
                    <div class="simples">
                        <p>C.6.4. Calamidade Pública (C9 – MDS)</p>
                        <input type="number" name="dois" id="um">
                    </div>
                   <br>
                    <div class="solo">
                    <b><p>C.7. Total de famílias encaminhadas para o CREAS (C5 – MDS)	Total C.7.</p></b>
                    </div>
                    <div class="duplo">
                        <p id="frase">C.7.1. Violência física e/ou Psicológica</p>
                        <div class="dois">
                        <p>Área Urbana:</p>
                            <input type="number" name="um" id="um">
                            <p>Área Rural:</p>
                            <input type="number" name="um" id="um">
                        </div>
                    </div>

                    <div class="duplo">
                        <p id="frase">C.7.2. Violência sexual</p>
                        <div class="dois">
                        <p>Área Urbana:</p>
                            <input type="number" name="um" id="um">
                            <p>Área Rural:</p>
                            <input type="number" name="um" id="um">
                        </div>
                    </div>

                    <div class="duplo">
                        <p id="frase"> C.7.3. Negligência</p>
                        <div class="dois">
                        <p>Área Urbana:</p>
                            <input type="number" name="um" id="um">
                            <p>Área Rural:</p>
                            <input type="number" name="um" id="um">
                        </div>
                    </div>

                    <div class="duplo">
                        <p id="frase">C.7.4. Abandono</p>
                        <div class="dois">
                        <p>Área Urbana:</p>
                            <input type="number" name="um" id="um">
                            <p>Área Rural:</p>
                            <input type="number" name="um" id="um">
                        </div>
                    </div>

                    <div class="duplo">
                        <p id="frase">C.7.5. Trabalho infantil</p>
                        <div class="dois">
                        <p>Área Urbana:</p>
                            <input type="number" name="um" id="um">
                            <p>Área Rural:</p>
                            <input type="number" name="um" id="um">
                        </div>
                    </div>

                    <div class="duplo">
                        <p id="frase">C.7.6. Discriminação em decorrência da orientação sexual e/ou raça/etnia</p>
                        <div class="dois">
                        <p>Área Urbana:</p>
                            <input type="number" name="um" id="um">
                            <p>Área Rural:</p>
                            <input type="number" name="um" id="um">
                        </div>
                    </div>

                    <div class="duplo">
                        <p id="frase">C.7.7. Outros (Especificar):      <input type="text" name="" id="tres"></p>
                        
                        <div class="dois">
                        <p>Área Urbana:</p>
                            <input type="number" name="um" id="um">
                            <p>Área Rural:</p>
                            <input type="number" name="um" id="um">
                        </div>
                    </div>
                    






















                    <h3>D. OUTROS ENCAMINHAMENTOS REALIZADOS PELO PAIF NO MÊS DE REFERÊNCIA</h3>

                        
<div class="solo">
<b><p>D.1. Pessoas encaminhadas para o SCFV</p></b>
</div>

                    <div class="simples">
                        <p>D.1.1. Área Urbana</p>
                        <input type="number" name="dois" id="um">
                    </div>
                    <div class="simples">
                    <p>D.1.2. Área Rural</p>
                        <input type="number" name="dois" id="um">
                    </div>
<br>
<div class="solo">
<b><p>D.2. Famílias encaminhadas para o Cadastro Único</p></b>
</div>

                    <div class="simples">
                        <p>D.2.1. Área Urbana</p>
                        <input type="number" name="dois" id="um">
                    </div>
                    <div class="simples">
                    <p>D.2.2. Área Rural</p>
                        <input type="number" name="dois" id="um">
                    </div>
<br>
<div class="solo">
<b><p>D.3. Pessoas encaminhadas para cursos profissionalizantes</p></b>
</div>

                    <div class="simples">
                        <p>D.3.1. Área Urbana</p>
                        <input type="number" name="dois" id="um">
                    </div>
                    <div class="simples">
                    <p>D.3.2. Área Rural</p>
                        <input type="number" name="dois" id="um">
                    </div>

<br>

 <div class="solo">
 <b><p>D.4. Famílias encaminhadas para a educação</p></b>
</div>

                    <div class="simples">
                        <p>D.4.1. Área Urbana</p>
                        <input type="number" name="dois" id="um">
                    </div>
                    <div class="simples">
                    <p>D.4.2. Área Rural</p>
                        <input type="number" name="dois" id="um">
                    </div>
<br>
<div class="solo">
 <b><p>D.5. Famílias encaminhadas para a saúde</p></b>
</div>

                    <div class="simples">
                        <p>D.5.1. Área Urbana</p>
                        <input type="number" name="dois" id="um">
                    </div>
                    <div class="simples">
                    <p>D.5.2. Área Rural</p>
                        <input type="number" name="dois" id="um">
                    </div>
<br>
<div class="solo">
 <b><p>D.6. Famílias encaminhadas para programas habitacionais</p></b>
</div>

                    <div class="simples">
                        <p>D.6.1. Área Urbana</p>
                        <input type="number" name="dois" id="um">
                    </div>
                    <div class="simples">
                    <p>D.6.2. Área Rural</p>
                        <input type="number" name="dois" id="um">
                    </div>
       <br>             
 <div class="solo">
 <b><p>D.7. Famílias encaminhadas para confecção de documentos</p></b>
</div>

                    <div class="simples">
                        <p>D.7.1. Área Urbana</p>
                        <input type="number" name="dois" id="um">
                    </div>
                    <div class="simples">
                    <p>D.7.2. Área Rural</p>
                        <input type="number" name="dois" id="um">
                    </div>
<br>
<div class="solo">
<b><p>D.8. Famílias encaminhadas para o Sistema de Defesa de Direitos e de Justiça	Total</p></b>
</div>

                    <div class="simples">
                        <p>D.8.1. Conselho Tutelar</p>
                        <input type="number" name="dois" id="um">
                    </div>
                    <div class="simples">
                        <p>D.8.2. Ministério Público</p>
                        <input type="number" name="dois" id="um">
                    </div>
                    <div class="simples">
                    <p id="frase">D.8.3. Outros (Especificar):</p>
                    <input type="text" name="" id="dois">
                    </div>
                    <br>
                    
                    
<div class="texto">
                    <b><p>D.9. Outros encaminhamentos para além dos apresentados acima (especificar)</p></b>
                    <input type="text" name="" id="dois">
                    </div>















































                    <h2>BLOCO III - ATENDIMENTOS COLETIVOS REALIZADOS NO CRAS</h2>
                    <h3>E. VOLUME DE OFICINAS/GRUPOS DO PAIF E SCFV NO MÊS DE REFERÊNCIA</h3>

                        
<div class="simples">
    <b><p>E.1. Total de oficina/grupo do PAIF</p></b>
    <input type="number" name="dois" id="um">
</div>
<br>
<div class="simples">
    <b><p>E.2. Total de FAMÍLIAS participando regularmente de oficinas/grupos no âmbito do PAIF (D1 – MDS)</p></b>
    <input type="number" name="dois" id="um">
</div>
<br>
<div class="desc">
    <b><p>E.3. Caso não tenha ocorrido oficina/grupo do PAIF, descrever o(s) motivo(s)</p></b>
    <textarea name="texto-maior" id="texto-maior" cols="20" rows="2"></textarea>
</div>
<br>
<div class="simples">
    <b><p>E.4. Crianças de 0 a 6 anos em SCFV (D2 – MDS)</p></b>
    <input type="number" name="dois" id="um">
</div>  
<br>
<div class="simples">
    <b><p>E.5. Crianças/adolescentes de 7 a 14 anos em SCFV (D3 – MDS)</p></b>
    <input type="number" name="dois" id="um">
</div>
<br>
<div class="simples">
    <b><p>E.6. Adolescentes de 15 a 17 anos em SCFV (D4 – MDS)</p></b>
    <input type="number" name="dois" id="um">
</div>
<br>
<div class="simples">
    <b><p>E.7. Adultos entre 18 a 59 anos em SCFV (D8 – MDS) </p></b>
    <input type="number" name="dois" id="um">
</div>
<br>
<div class="simples">
    <b><p>E.8. Idosos em SCFV (D5 – MDS)</p></b>
    <input type="number" name="dois" id="um">
</div>
<br>
<div class="desc">
    <b><p>E9. Caso o CRAS não tenha ofertado o SCFV (E.4. a E.8.) para alguma faixa etária citada acima, descrever o(s) motivo(s)</p></b>
    <textarea name="texto-maior" id="texto-maior" cols="20" rows="2"></textarea>
</div>
<br>
<div class="simples">
    <b><p>E.10. Pessoas que participaram de palestras, oficinas e outras atividades coletivas de caráter não continuado 
(D6 – MDS)
</p></b>
    <input type="number" name="dois" id="um">
</div>
<br>
<div class="simples">
    <b><p>E.11. Pessoas com deficiência participando do SCFV ou de oficinas/grupos do PAIF (D7 – MDS)
</p></b>
    <input type="number" name="dois" id="um">
</div>
<br>









































































                    <h2>BLOCO IV - QUANTITATIVO DE ATENDIMENTOS DO CRAS POR TERRITÓRIO
</h2>
                    <h3>F. QUANTITATIVO DE ATENDIMENTOS DO CRAS POR BAIRROS E COMUNIDADES NO MÊS DE REFERÊNCIA

(Atendimentos dos técnicos de nível superior e médio do PAIF, técnico do Cadastro Único, técnicos de nível médio do SCFV e visitadores do PCF)
</h3>


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
        <td><input type="text" name="bairro" id="tab"></td>
        <td><input type="number" name="quantidade" id="tab"></td>
        <td><input type="email" name="bairro" id="tab"></td>
        <td><input type="number" name="quantidade" id="tab"></td>
      </tr>
      <tr>
        <td><input type="text" name="bairro" id="tab"></td>
        <td><input type="number" name="quantidade" id="tab"></td>
        <td><input type="email" name="bairro" id="tab"></td>
        <td><input type="number" name="quantidade" id="tab"></td>
      </tr>
      <tr>
        <td><input type="text" name="bairro" id="tab"></td>
        <td><input type="number" name="quantidade" id="tab"></td>
        <td><input type="email" name="bairro" id="tab"></td>
        <td><input type="number" name="quantidade" id="tab"></td>
      </tr>
      <tr>
        <td><input type="text" name="bairro" id="tab"></td>
        <td><input type="number" name="quantidade" id="tab"></td>
        <td><input type="email" name="bairro" id="tab"></td>
        <td><input type="number" name="quantidade" id="tab"></td>
      </tr>
      <tr>
        <td><input type="text" name="bairro" id="tab"></td>
        <td><input type="number" name="quantidade" id="tab"></td>
        <td><input type="email" name="bairro" id="tab"></td>
        <td><input type="number" name="quantidade" id="tab"></td>
      </tr>
      <tr>
        <td><input type="text" name="bairro" id="tab"></td>
        <td><input type="number" name="quantidade" id="tab"></td>
        <td><input type="email" name="bairro" id="tab"></td>
        <td><input type="number" name="quantidade" id="tab"></td>
      </tr>
      <tr>
        <td><input type="text" name="bairro" id="tab"></td>
        <td><input type="number" name="quantidade" id="tab"></td>
        <td><input type="email" name="bairro" id="tab"></td>
        <td><input type="number" name="quantidade" id="tab"></td>
      </tr>
      <tr>
        <td><input type="text" name="bairro" id="tab"></td>
        <td><input type="number" name="quantidade" id="tab"></td>
        <td><input type="email" name="bairro" id="tab"></td>
        <td><input type="number" name="quantidade" id="tab"></td>
      </tr>
    </table>  
                    </div>

            <br>





















































                    <div class="solo">                       
                    <b><p>F.2. Total de atendimentos do CRAS por comunidades</p>  </b>                
 </div>

 <div class="tabela2">
 <table>
      <tr>
        <th>F.2.1. Comunidade</th>
        <th>F.2.2. Quantidade</th>
        <th>F.2.1. Comunidade</th>
        <th>F.2.2. Quantidade</th>
        
      </tr>
      <tr>
        <td><input type="text" name="comunidade" id="tab"></td>
        <td><input type="number" name="quantidade" id="tab"></td>
        <td><input type="text" name="comunidade" id="tab"></td>
        <td><input type="number" name="quantidade" id="tab"></td>
      </tr>
      <tr>
        <td><input type="text" name="comunidade" id="tab"></td>
        <td><input type="number" name="quantidade" id="tab"></td>
        <td><input type="text" name="comunidade" id="tab"></td>
        <td><input type="number" name="quantidade" id="tab"></td>
      </tr>
      <tr>
        <td><input type="text" name="comunidade" id="tab"></td>
        <td><input type="number" name="quantidade" id="tab"></td>
        <td><input type="text" name="comunidade" id="tab"></td>
        <td><input type="number" name="quantidade" id="tab"></td>
      </tr>
      <tr>
        <td><input type="text" name="comunidade" id="tab"></td>
        <td><input type="number" name="quantidade" id="tab"></td>
        <td><input type="text" name="comunidade" id="tab"></td>
        <td><input type="number" name="quantidade" id="tab"></td>
      </tr>
      <tr>
        <td><input type="text" name="comunidade" id="tab"></td>
        <td><input type="number" name="quantidade" id="tab"></td>
        <td><input type="text" name="comunidade" id="tab"></td>
        <td><input type="number" name="quantidade" id="tab"></td>
      </tr>
      <tr>
        <td><input type="text" name="comunidade" id="tab"></td>
        <td><input type="number" name="quantidade" id="tab"></td>
        <td><input type="text" name="comunidade" id="tab"></td>
        <td><input type="number" name="quantidade" id="tab"></td>
      </tr>
      <tr>
        <td><input type="text" name="comunidade" id="tab"></td>
        <td><input type="number" name="quantidade" id="tab"></td>
        <td><input type="text" name="comunidade" id="tab"></td>
        <td><input type="number" name="quantidade" id="tab"></td>
      </tr>
      <tr>
        <td><input type="text" name="comunidade" id="tab"></td>
        <td><input type="number" name="quantidade" id="tab"></td>
        <td><input type="text" name="comunidade" id="tab"></td>
        <td><input type="number" name="quantidade" id="tab"></td>
      </tr>
      <tr>
        <td><input type="text" name="comunidade" id="tab"></td>
        <td><input type="number" name="quantidade" id="tab"></td>
        <td><input type="text" name="comunidade" id="tab"></td>
        <td><input type="number" name="quantidade" id="tab"></td>
      </tr>
      <tr>
        <td><input type="text" name="comunidade" id="tab"></td>
        <td><input type="number" name="quantidade" id="tab"></td>
        <td><input type="text" name="comunidade" id="tab"></td>
        <td><input type="number" name="quantidade" id="tab"></td>
      </tr>
      <tr>
        <td><input type="text" name="comunidade" id="tab"></td>
        <td><input type="number" name="quantidade" id="tab"></td>
        <td><input type="text" name="comunidade" id="tab"></td>
        <td><input type="number" name="quantidade" id="tab"></td>
      </tr>
      <tr>
        <td><input type="text" name="comunidade" id="tab"></td>
        <td><input type="number" name="quantidade" id="tab"></td>
        <td><input type="text" name="comunidade" id="tab"></td>
        <td><input type="number" name="quantidade" id="tab"></td>
      </tr>
      <tr>
        <td><input type="text" name="comunidade" id="tab"></td>
        <td><input type="number" name="quantidade" id="tab"></td>
        <td><input type="text" name="comunidade" id="tab"></td>
        <td><input type="number" name="quantidade" id="tab"></td>
      </tr>
      <tr>
        <td><input type="text" name="comunidade" id="tab"></td>
        <td><input type="number" name="quantidade" id="tab"></td>
        <td><input type="text" name="comunidade" id="tab"></td>
        <td><input type="number" name="quantidade" id="tab"></td>
      </tr>
      <tr>
        <td><input type="text" name="comunidade" id="tab"></td>
        <td><input type="number" name="quantidade" id="tab"></td>
        <td><input type="text" name="comunidade" id="tab"></td>
        <td><input type="number" name="quantidade" id="tab"></td>
      </tr>
      <tr>
        <td><input type="text" name="comunidade" id="tab"></td>
        <td><input type="number" name="quantidade" id="tab"></td>
        <td><input type="text" name="comunidade" id="tab"></td>
        <td><input type="number" name="quantidade" id="tab"></td>
      </tr>

      <tr>
        <td><input type="text" name="comunidade" id="tab"></td>
        <td><input type="number" name="quantidade" id="tab"></td>
        <td><input type="text" name="comunidade" id="tab"></td>
        <td><input type="number" name="quantidade" id="tab"></td>
      </tr>
      <tr>
        <td><input type="text" name="comunidade" id="tab"></td>
        <td><input type="number" name="quantidade" id="tab"></td>
        <td><input type="text" name="comunidade" id="tab"></td>
        <td><input type="number" name="quantidade" id="tab"></td>
      </tr>
      <tr>
        <td><input type="text" name="comunidade" id="tab"></td>
        <td><input type="number" name="quantidade" id="tab"></td>
        <td><input type="text" name="comunidade" id="tab"></td>
        <td><input type="number" name="quantidade" id="tab"></td>
      </tr>
      <tr>
        <td><input type="text" name="comunidade" id="tab"></td>
        <td><input type="number" name="quantidade" id="tab"></td>
        <td><input type="text" name="comunidade" id="tab"></td>
        <td><input type="number" name="quantidade" id="tab"></td>
      </tr>
      
      
    </table>  
                    </div>

            <br>

                    <div class="solo">
                    <b><p>Dados do Responsável pelo preenchimento</p></b>
</div>

                    <div class="composto">
                        <p>Nome do Responsável pelo Preenchimento:             <input type="text" name="dois" id="tres"></p>
                        
                    
                        <p id="frase">Cargo: <input type="text" name="" id="tres"></p>
                        
                        <div class="dois">
                        <p>CPF:     <input type="number" name="um" id="um"></p>
                            
                        
                        </div>
                    </div>
                        <br>

                        <div class="botao">
                            <input type="submit" value="Enviar" id="button">
                        </div>

            </form>
        </main>
       
</div>
</body>
</html>