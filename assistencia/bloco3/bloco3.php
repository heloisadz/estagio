<?php
    require('/xampp/htdocs/assistencia/autenticao.php');
    session_start();
    autenticao();

    ?>
    
    <?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION["E_1"] = $_POST["E_1"];
    $_SESSION["E_2"] = $_POST["E_2"];
    $_SESSION["E_3"] = $_POST["E_3"];
    $_SESSION["E_4"] = $_POST["E_4"];
    $_SESSION["E_5"] = $_POST["E_5"];
    $_SESSION["E_6"] = $_POST["E_6"];
    $_SESSION["E_7"] = $_POST["E_7"];
    $_SESSION["E_8"] = $_POST["E_8"];
    $_SESSION["E_9"] = $_POST["E_9"];
    $_SESSION["E_10"] = $_POST["E_10"];
    $_SESSION["E_11"] = $_POST["E_11"];
    
    header("Location: ../bloco4/bloco4.php");
    exit();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BLOCO III - ATENDIMENTOS COLETIVOS REALIZADOS NO CRAS </title>
    <link rel="stylesheet" href="../bloco2/bloco2.css">
</head>
<body>
    <div class="container">
        
        <h2>BLOCO III - ATENDIMENTOS COLETIVOS REALIZADOS NO CRAS</h2>
                    <h3>E. VOLUME DE OFICINAS/GRUPOS DO PAIF E SCFV NO MÊS DE REFERÊNCIA</h3>
<main>
                    <form action="" method="post">
<div class="simples">
    <b><p>E.1. Total de oficina/grupo do PAIF</p></b>
    <input type="number" name="E_1_" id="um">
</div>
<br>
<div class="simples">
    <b><p>E.2. Total de FAMÍLIAS participando regularmente de oficinas/grupos no âmbito do PAIF (D1 – MDS)</p></b>
    <input type="number" name="E_2_" id="um">
</div>
<br>
<div class="desc">
    <b><p>E.3. Caso não tenha ocorrido oficina/grupo do PAIF, descrever o(s) motivo(s)</p></b>
    <textarea name="E_3_" id="texto-maior" cols="20" rows="2"></textarea>
</div>
<br>
<div class="simples">
    <b><p>E.4. Crianças de 0 a 6 anos em SCFV (D2 – MDS)</p></b>
    <input type="number" name="E_4_" id="um">
</div>  
<br>
<div class="simples">
    <b><p>E.5. Crianças/adolescentes de 7 a 14 anos em SCFV (D3 – MDS)</p></b>
    <input type="number" name="E_5_" id="um">
</div>
<br>
<div class="simples">
    <b><p>E.6. Adolescentes de 15 a 17 anos em SCFV (D4 – MDS)</p></b>
    <input type="number" name="E_6_" id="um">
</div>
<br>
<div class="simples">
    <b><p>E.7. Adultos entre 18 a 59 anos em SCFV (D8 – MDS) </p></b>
    <input type="number" name="E_7_" id="um">
</div>
<br>
<div class="simples">
    <b><p>E.8. Idosos em SCFV (D5 – MDS)</p></b>
    <input type="number" name="E_8_" id="um">
</div>
<br>
<div class="desc">
    <b><p>E.9. Caso o CRAS não tenha ofertado o SCFV (E.4. a E.8.) para alguma faixa etária citada acima, descrever o(s) motivo(s)</p></b>
    <textarea name="E_9_" id="texto-maior" cols="20" rows="2"></textarea>
</div>
<br>
<div class="simples">
    <b><p>E.10. Pessoas que participaram de palestras, oficinas e outras atividades coletivas de caráter não continuado 
(D6 – MDS)
</p></b>
    <input type="number" name="E_10_" id="um">
</div>
<br>
<div class="simples">
    <b><p>E.11. Pessoas com deficiência participando do SCFV ou de oficinas/grupos do PAIF (D7 – MDS)
</p></b>
    <input type="number" name="E_11_" id="um">
</div>
<br>
                    <div class="botao">
                    <a href="../bloco2/bloco2.php" id="button">Voltar</a>
                                                <input type="submit" value="Enviar" id="button">
                                            </div>
        </form>
        </main>
    </div>
</body>
</html>