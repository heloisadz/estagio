<?php session_start();
require_once('../conexao.php');?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 
<?php 

function calcularTotal($sessao1, $sessao2) {
    $valor1 = $_SESSION[$sessao1];
    $valor2 = $_SESSION[$sessao2];

    $valores = array($valor1, $valor2);
    $soma = 0;

    foreach ($valores as $valor) {
        if (is_numeric($valor)) {
            $soma += $valor;
        }
    }

    return $soma;
}



function calcularA31($sessao1, $sessao2, $sessao3, $sessao4) {
    $valor1 = $_SESSION[$sessao1];
    $valor2 = $_SESSION[$sessao2];
    $valor3 = $_SESSION[$sessao3];
    $valor4 = $_SESSION[$sessao4];

    $valores = array($valor1, $valor2, $valor3, $valor4);
    $resultado = 0;

    foreach ($valores as $valor) {
        if (is_numeric($valor)) {
            $resultado += $valor;
        }
    }

    return $resultado;
}






function calcularA41($sessao1, $sessao2, $sessao3) {
    $valor11 = $_SESSION[$sessao1];
    $valor22 = $_SESSION[$sessao2];
    $valor33 = $_SESSION[$sessao3];

    // Soma os valores de $valor1 e $valor2
    $somas = $valor11 + $valor22;
    
    // Subtrai o valor de $valor3 da soma de $valor1 e $valor2
    $res = $somas - $valor33;

    return $res;
}
function calcularA42($sessao1, $sessao2, $sessao3) {
    $valor1 = $_SESSION[$sessao1];
    $valor2 = $_SESSION[$sessao2];
    $valor3 = $_SESSION[$sessao3];

    // Soma os valores de $valor1 e $valor2
    $soma_1_e_2 = $valor1 + $valor2;
    
    // Subtrai o valor de $valor3 da soma de $valor1 e $valor2
    $result = $soma_1_e_2 - $valor3;

    return $result;
}

function calcularA3($sessao1, $sessao2  ) {
    $valor1 = $_SESSION[$sessao1];
    $valor2 = $_SESSION[$sessao2];

    $somaA3 = $valor1 + $valor2;
    return $somaA3;
}

$total_A_1 = calcularTotal('A11', 'A_1_2');
echo 'total_A_1:<br>';
echo $total_A_1;
echo '<br>';
$_SESSION["total_A_1"] = $total_A_1;

$total_A_2 = calcularTotal('A_2_1', 'A_2_2');
echo 'total_A_2:<br>';
echo $total_A_2;
echo '<br>';
$_SESSION["total_A_2"] = $total_A_2;

$total_A_3_1 = calcularTotal('A_3_1_1', 'A_3_1_2');
echo 'total_A_3_1:<br>';
echo $total_A_3_1;
echo '<br>';
$_SESSION["total_A_3_1"] = $total_A_3_1;

$total_A_3_2 = calcularTotal('A_3_2_1', 'A_3_2_2');
echo 'total_A_3_2:<br>';
echo $total_A_3_2;
echo '<br>';
$_SESSION["total_A_3_2"] = $total_A_3_2;

$total_A_3_3 = calcularTotal('A_3_3_1', 'A_3_3_2');
echo 'total_A_3_3:<br>';
echo $total_A_3_3;
echo '<br>';
$_SESSION["total_A_3_3"] = $total_A_3_3;

$total_A_3_4 = calcularTotal('A_3_4_1', 'A_3_4_2');
echo 'total_A_3_4:<br>';
echo $total_A_3_4;
echo '<br>';
$_SESSION["total_A_3_4"] = $total_A_3_4;

$total_A_3_fixa = calcularA31('A_3_1_1', 'A_3_2_1', 'A_3_3_1', 'A_3_4_1');
echo 'total_A_3_fixa:<br>';
echo $total_A_3_fixa;
echo '<br>';
$_SESSION["total_A_3_fixa"] = $total_A_3_fixa;

$total_A_3_volante = calcularA31('A_3_1_2', 'A_3_2_2', 'A_3_3_2', 'A_3_4_2');
echo 'total_A_3_volante:<br>';
echo $total_A_3_volante;
echo '<br>';
$_SESSION["total_A_3_volante"] = $total_A_3_volante;


$total_A_3 = calcularA3('total_A_3_fixa', 'total_A_3_volante');
echo 'total_A_3:<br>';
echo $total_A_3;
echo '<br>';
$_SESSION["total_A_3"] = $total_A_3;


$A_4_1 = calcularA41('A11', 'A_2_1', 'total_A_3_fixa');
echo 'A_4_1:<br>';
echo $A_4_1;
echo '<br>';
$_SESSION["A_4_1"] = $A_4_1;

$A_4_2 = calcularA42('A_1_2', 'A_2_2','total_A_3_volante');
echo 'A_4_2:<br>';
echo $A_4_2;
echo '<br>';
$_SESSION["A_4_2"] = $A_4_2;

$total_A_4 = calcularTotal('A_4_1', 'A_4_2');
echo 'total_A_4:<br>';
echo $total_A_4;
echo '<br>';
$_SESSION["total_A_4"] = $total_A_4;

$total_A_3_4 = calcularTotal('A_3_4_1', 'A_3_4_2');
echo 'total_A_3_4:<br>';
echo $total_A_3_4;
echo '<br>';
$_SESSION["total_A_3_4"] = $total_A_3_4;

$B_5_1 = calcularTotal('B_5_1_1','B_5_1_2');
echo 'B_5_1: ';
echo $B_5_1;
echo '<br>';
$_SESSION["B_5_1"] = $B_5_1;


$B_5_2 = calcularTotal('B_5_2_1','B_5_2_2');
echo 'B_5_2: ';
echo $B_5_2;
echo '<br>';
$_SESSION["B_5_2"] = $B_5_2;

$total_B_5 = calcularTotal('B_5_1', 'B_5_2');
echo 'total_B_5:<br>';
echo $total_B_5;
echo '<br>';
$_SESSION["total_B_5"] = $total_B_5;

$total_B_7_1 = calcularTotal('B_7_1_1','B_7_1_2');
echo 'total_B_7_1: ';
echo $total_B_7_1;
echo '<br>';
$_SESSION["total_B_7_1"] = $total_B_7_1;

$total_B_7_2 = calcularTotal('B_7_2_1','B_7_2_2');
echo 'total_B_7_2: ';
echo $total_B_7_2;
echo '<br>';
$_SESSION["total_B_7_2"] = $total_B_7_2;

$total_B_7 = calcularTotal('total_B_7_1', 'total_B_7_2');
echo 'total_B_6:<br>';
echo $_SESSION["B_6"];
echo '<br>';

echo 'total_B_7:<br>';
echo $total_B_7;
echo '<br>';
$_SESSION["total_B_7"] = $total_B_7;

$total_B_9_1 = calcularTotal('B_9_1_1','B_9_1_2');
echo 'total_B_9_1: ';
echo $total_B_9_1;
echo '<br>';
$_SESSION["total_B_9_1"] = $total_B_9_1;


$total_B_9_2 = calcularTotal('B_9_2_1','B_9_2_2');
echo 'total_B_9_2: ';
echo $total_B_9_2;
echo '<br>';
$_SESSION["total_B_9_2"] = $total_B_9_2;


$total_B_9 = calcularTotal('total_B_9_1', 'total_B_9_2');
echo 'total_B_9:<br>';
echo $total_B_9;
echo '<br>';
$_SESSION["total_B_9"] = $total_B_9;


?>




























<?php
##codigo SQL
        $sql = "INSERT INTO bloco1(A_1_1_, A_1_2_, total_A_1_, A_2_1_, A_2_2_,total_A_2_,A_3_1_1_, A_3_1_2_,total_A_3_1_,A_3_2_1_, A_3_2_2_, total_A_3_2_,A_3_3_1_, A_3_3_2_,
          total_A_3_3_,A_3_4_outros, A_3_4_1_, A_3_4_2_, total_A_3_4_, total_A_3_, A_4_1_, A_4_2_, total_A_4_, B_1_, B_2_, B_3_, B_4_, B_5_1_1_,B_5_1_2_,
          total_B_5_1_,B_5_2_1_, B_5_2_2_, total_B_5_2_, total_B_5_, B_6_, B_7_1_1_, B_7_1_2_, total_B_7_1_, B_7_2_1_, B_7_2_2_, total_B_7_2_,
           total_B_7_,B_8_,B_9_1_1_, B_9_1_2_, total_B_9_1_, B_9_2_1_, B_9_2_2_, total_B_9_2_, total_B_9_)
         
         VALUES (
            ".$_SESSION['A11']."," .$_SESSION['A_1_2'].",".$_SESSION['total_A_1']."," .$_SESSION['A_2_1']."," .$_SESSION['A_2_2'].",".$_SESSION['total_A_2'].",".$_SESSION['A_3_1_1']."," .$_SESSION['A_3_1_2'].",".$_SESSION['total_A_3_1'].",".$_SESSION['A_3_2_1']."," .$_SESSION['A_3_2_2']."," .$_SESSION['total_A_3_2'].",".$_SESSION['A_3_3_1']."," .$_SESSION['A_3_3_2']."," .$_SESSION['total_A_3_3'].",".$_SESSION['A_3_4_outros']."," .$_SESSION['A_3_4_1'].",".$_SESSION['A_3_4_2']."," .$_SESSION['total_A_3_4']."," .$_SESSION['total_A_3'].",".$_SESSION['A_4_1']."," .$_SESSION['A_4_2']."," .$_SESSION['total_A_4']."," .$_SESSION['B_1']."," .$_SESSION['B_2']."," .$_SESSION['B_3']."," .$_SESSION['B_4']."," .$_SESSION['B_5_1_1'].",".$_SESSION['B_5_1_2'].",".$_SESSION['total_B_5_1'].",".$_SESSION['B_5_2_1']."," .$_SESSION['B_5_2_2']."," .$_SESSION['total_B_5_2']."," .$_SESSION['total_B_5']."," .$_SESSION['B_6']."," .$_SESSION['B_7_1_1']."," .$_SESSION['B_7_1_2']."," .$_SESSION['total_B_7_1'].","
         .$_SESSION['B_7_2_1']."," .$_SESSION['B_7_2_2']."," .$_SESSION['total_B_7_2']."," .$_SESSION['total_B_7'].",".$_SESSION['B_8'].",".$_SESSION['B_9_1_1']."," .$_SESSION['B_9_1_2']."," .$_SESSION['total_B_9_1']."," .$_SESSION['B_9_2_1']."," .$_SESSION['B_9_2_2']."," .$_SESSION['total_B_9_2']."," .$_SESSION['total_B_9'].")";
        
        
        
        
        
        
        
        
        
        
        
        ##junta o codigo sql a conexao do banco
        $sqlcombanco = $conexao->prepare($sql);

        ##executa o sql no banco de dados
        if($sqlcombanco->execute())
            {
                echo " <p><strong>OK!</strong> Registro realizado com sucesso!!!</p>"; 
                echo " <button class='button'><a href='../home.php'>voltar</a></button>";
            }
        ?>

           
</body>
</html>