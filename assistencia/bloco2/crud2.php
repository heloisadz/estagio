<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bloco1.css">
    <title>CRUD bloco2</title>
</head>
<body>


<?php
##permite acesso as variaves dentro do aquivo conexao

require_once('../conexao.php');

$C_1_ = $_POST["C.1."];



##cadastrar
if(isset($_POST['enviar'])){
    ##dados recebidos pelo metodo POST
    
    $C_2_1_1_ = $_POST["A_2_1_"];
    $C_2_1_2_ = $_POST["C_2_1_2_"];
$valores[] = $C_2_1_1_;
$valores[] = $C_2_1_2_;

      $soma = 0;


foreach ($valores as $valor) {
  if(is_numeric($valor)){
      $soma = $soma + $valor;
  }
}

$total_C_2_1_ = $soma;

echo' <br>';
echo' total_C_2_1_:';
echo' <br>';
echo $total_C_2_1_;

##$C_2_1_2_ = $_POST['C_2_1_2_'];
##$total_C_2_1_= $_POST['total_C_2_1_'];
// ------------------------------------------

$C_2_2_1_ = $_POST['C_2_2_1_'];
$C_2_2_2_ = $_POST['C_2_2_2_'];
$valores[] = $C_2_2_1_;
$valores[] = $C_2_2_2_;

$total_C_2_2_= 0;

foreach ($valores as $valor) {
  if(is_numeric($valor)){
    $total_C_2_2_ = $total_C_2_2_+ $valor;
  }
}
echo' <br>';
echo' total_C_2_2_:';
echo' <br>';
echo $total_C_2_2_;

// ------------------------------------------
$valores[] = $total_C_2_1_;
$valores[] = $total_C_2_2_;
$total_C_2_ = 0;

foreach ($valores as $valor) {
  if(is_numeric($valor)){
    $total_C_2_ = $total_C_2_ + $valor;
  }
}
echo' <br>';
echo' total_C_2_:';
echo' <br>';
echo $total_C_2_;

// ------------------------------------------
$C_3_1_ = $_POST['C_3_1_'];
$C_3_2_ = $_POST['C_3_2_'];
$C_3_3_ = $_POST['C_3_3_'];
$valores[] = $C_3_1_;
$valores[] = $C_3_2_;
$valores[] = $C_3_3_;
$total_C_3_ = 0;

foreach ($valores as $valor) {
    if(is_numeric($valor)){
        $total_C_3_ = $total_C_3_ + $valor;
    }
  }

echo' <br>';
echo' total_C_3_:';
echo' <br>';
echo $total_C_3_;

// ------------------------------------------

$C_4_1_ = $_POST['C_4_1_'];
$C_4_2_ = $_POST['C_4_2_'];
$valores[] = $C_4_1_;
$valores[] = $C_4_2_;
$total_C_4_ = 0;
foreach ($valores as $valor) {
    if(is_numeric($valor)){
        $total_C_4_ =$total_C_4_ + $valor;
    }
  }

echo' <br>';
echo' total_C_4_:';
echo' <br>';
echo $total_C_4_;
// ------------------------------------------
$C_5_1_1_ = $_POST['C_5_1_1_'];
$C_5_1_2_ = $_POST['C_5_1_2_'];
$valores[] = $C_5_1_1_;
$valores[] = $C_5_1_2_;
$total_C_5_1_ =0;
    foreach ($valores as $valor) {
        if(is_numeric($valor)){
            $total_C_5_1_ = $total_C_5_1_ + $valor;
        }
    }
echo' <br>';
echo' total_C_5_1_:';
echo' <br>';
echo $total_C_5_1_;
// ------------------------------------------

$C_5_2_ = $_POST['C_5_2_'];
$C_5_3_ = $_POST['C_5_3_'];
$C_5_4_ = $_POST['C_5_4_'];
$C_5_5_ = $_POST['C_5_5_'];
$valores[] = $total_C_5_1_;
$valores[] = $C_5_2_;
$valores[] = $C_5_3_;
$valores[] = $C_5_4_;
$valores[] = $C_5_5_;
$total_C_5_ =0;
foreach ($valores as $valor) {
    if(is_numeric($valor)){
        $total_C_5_ = $total_C_5_+ $valor;
    }
}
echo' <br>';
echo' total_C_5_:';
echo' <br>';
echo $total_C_5_;
// -----------------------------------------
$C_6_3_1_ = $_POST['C_6_3_1_'];
$C_6_3_2_ = $_POST['C_6_3_2_'];
$C_6_3_3_outros = $_POST['C_6_3_3_outros']; #só recebe, n soma n
$C_6_3_3_ = $_POST['C_6_3_3_'];
$valores[] = $C_6_3_1_;
$valores[] = $C_6_3_2_ ;
$valores[] = $C_6_3_3_;
$total_C_6_3_ =0;
foreach ($valores as $valor) {
    if(is_numeric($valor)){
        $total_C_6_3_ = $total_C_6_3_ + $valor;
    }
}
echo' <br>';
echo' total_C_6_3_ :';
echo' <br>';
echo $total_C_6_3_ ;


// ------------------------------------------
$total_C_6_4_ = $_POST['total_C_6_4_'];
$valores[] = $total_C_6_3_;
$valores[] = $C_6_4_ ;
$valores[] = $C_6_3_3_;
$total_C_6_3_e_total_C_6_4_ = 0;

foreach ($valores as $valor) {
  if(is_numeric($valor)){
    $total_C_6_3_e_total_C_6_4_ = $total_C_6_3_e_total_C_6_4_ + $valor;
  }
}
echo' <br>';
echo' total_C_6_3 e total_C_6_4_ juntos:';
echo' <br>';
echo $total_C_6_3_e_total_C_6_4_;

// ------------------------------------------

$total_C_6_3_e_total_C_6_4_= 
$total_C_6_1_ = $_POST['total_C_6_1_'];
$total_C_6_2_ = $_POST['total_C_6_2_'];
$total_C_6_ = $_POST['total_C_6_'];
$valores[] =$total_C_6_3_e_total_C_6_4_ ;
$valores[] = $total_C_6_1_;
$valores[] = $total_C_6_2_;
$total_C_6_ = 0;
foreach ($valores as $valor){
  if(is_numeric($valor)){
    $total_C_6_ = $total_C_6_ = $valor;
  }

}
echo' <br>';
echo' $total_C_6_:';
echo' <br>';
echo $total_C_6_;


// ------------------------------------------

$C_7_1_1_ = $_POST['C_7_1_1_'];
$C_7_1_2_ = $_POST['C_7_1_2_'];
$valores[] = $C_7_1_1_;
$valores[] = $C_7_1_2_;
$total_C_7_1_ = 0;
foreach ($valores as $valor){
  if (is_numeric($valor)){
    $total_C_7_1_ = $total_C_7_1_ = $valor;
  }
}
echo' <br>';
echo' $total_C_7_:';
echo' <br>';
echo $total_C_7_;

// ------------------------------------------

$C_7_2_1_ = $_POST['C_7_2_1_'];
$C_7_2_2_ = $_POST['C_7_2_2_'];
$valores[] = $C_7_2_1_;
$valores[] = $C_7_2_2_;
$total_C_7_2_ = 0;

foreach ($valores as $valor){
  if (is_numeric($valor)){
    $total_C_7_2_ = $total_C_7_2_ + $valor;
  }
}
  echo' <br>';
  echo' $total_C_7_2_:';
  echo' <br>';
  echo $total_C_7_2_;
// ------------------------------------------
$C_7_3_1_ = $_POST['C_7_3_1_'];
$C_7_3_2_ = $_POST['C_7_3_2_'];
$valores[] = $C_7_3_1_ ;
$valores[] = $C_7_3_2_ ;
$total_C_7_3_ = 0;


foreach ($valores as $valor){
  if (is_numeric($valor)){
    $total_C_7_3_ = $total_C_7_3_ + $valor;
  }
}
  echo' <br>';
  echo' $total_C_7_3_:';
  echo' <br>';
  echo $total_C_7_3_ ;

// ------------------------------------------

$C_7_4_1_ = $_POST['C_7_4_1_'];
$C_7_4_2_ = $_POST['C_7_4_2_'];
$valores[] = $C_7_4_1_;
$valores[] = $C_7_4_2_;
$total_C_7_4_ = 0;
foreach ($valores as $valor){
  if (is_numeric($valor)){
    $total_C_7_4_ = $total_C_7_4_ + $valor;
  }
}
  echo' <br>';
  echo' total_C_7_4_:';
  echo' <br>';
  echo $total_C_7_4_ ;
// ------------------------------------------
$C_7_5_1_ = $_POST['C_7_5_1_'];
$C_7_5_2_ = $_POST['C_7_5_2_'];
$valores[] = $C_7_5_1_;
$valores[] = $C_7_5_2_ ;
$total_C_7_5_ = 0;

foreach ($valores as $valor){
  if (is_numeric($valor)){
    $total_C_7_5_ = $total_C_7_5_ + $valor;
  }
}
  echo' <br>';
  echo' total_C_7_5_:';
  echo' <br>';
  echo $total_C_7_5_ ;
// ------------------------------------------

$C_7_6_1_ = $_POST['C_7_6_1_'];
$C_7_6_2_ = $_POST['C_7_6_2_'];
$valores[] = $C_7_6_1_;
$valores[] = $C_7_6_2_;
$total_C_7_6_ = 0;

foreach ($valores as $valor){
  if (is_numeric($valor)){
    $total_C_7_6_ = $total_C_7_6_ + $valor;
  }
}
  echo' <br>';
  echo' total_C_7_6_:';
  echo' <br>';
  echo $total_C_7_6_ ;
// ------------------------------------------

$C_7_7_outros = $_POST['C_7_7_outros'];
$C_7_7_1_ = $_POST['C_7_7_1_'];
$C_7_7_2_ = $_POST['C_7_7_2_'];
$valores[] = $C_7_7_1_;
$valores[] = $C_7_7_2_;
$total_C_7_7_ = 0;

foreach ($valores as $valor){
  if (is_numeric($valor)){
    $total_C_7_7_ = $total_C_7_7_ + $valor;
  }
}
  echo' <br>';
  echo' total_C_7_7_:';
  echo' <br>';
  echo $total_C_7_7_ ;
// ------------------------------------------
$C_7_ = 0;
$valores[] = $C_7_7_;
$valores[] = $C_7_6_;
$valores[] = $C_7_5_;
$valores[] = $C_7_4_;
$valores[] = $C_7_3_;
$valores[] = $C_7_2_;
$valores[] = $C_7_1_;

foreach ($valores as $valor){
  if (is_numeric($valor)){
    $C_7_ = $C_7_ + $valor;
  }
}
  echo' <br>';
  echo' C_7_:';
  echo' <br>';
  echo $C_7_;

// ------------------------------------------
$D_1_1_ = $_POST['D_1_1_'];
$D_1_2_ = $_POST['D_1_2_'];
$total_D_1_ = 0;

$valores[] = $D_1_1_;
$valores[] = $D_1_2_;


foreach ($valores as $valor){
  if (is_numeric($valor)){
    $total_D_1_ = $total_D_1_ + $valor;
  }
}
  echo' <br>';
  echo' total_D_1_';
  echo' <br>';
  echo $total_D_1_ ;
// ------------------------------------------
$D_2_1_ = $_POST['D_2_1_'];
$D_2_2_= $_POST['D_2_2_'];
$total_D_2_ = 0;


$valores[] = $D_2_1_;
$valores[] = $D_2_2_;


foreach ($valores as $valor){
  if (is_numeric($valor)){
    $total_D_2_ = $total_D_2_ + $valor;
  }
}
  echo' <br>';
  echo' total_D_2_';
  echo' <br>';
  echo $total_D_2_ ;
// ------------------------------------------

$D_3_1_ = $_POST['D_3_1_'];
$D_3_2_ = $_POST['D_3_2_'];
$total_D_3_ = 0;


$valores[] = $D_3_1_;
$valores[] = $D_3_2_;


foreach ($valores as $valor){
  if (is_numeric($valor)){
    $total_D_3_ = $total_D_3_ + $valor;
  }
}
  echo' <br>';
  echo' total_D_3_';
  echo' <br>';
  echo $total_D_3_ ;
// ------------------------------------------

$D_4_1_ = $_POST['D_4_1_'];
$D_4_2_ = $_POST['D_4_2_'];
$total_D_4_ = 0;


$valores[] = $D_4_1_;
$valores[] = $D_4_2_;


foreach ($valores as $valor){
  if (is_numeric($valor)){
    $total_D_4_ = $total_D_4_ + $valor;
  }
}
  echo' <br>';
  echo' total_D_4_';
  echo' <br>';
  echo $total_D_4_ ;
// ------------------------------------------

$D_5_1_ = $_POST['D_5_1_'];
$D_5_2_ = $_POST['D_5_2_'];
$total_D_5_ = 0;


$valores[] = $D_5_1_;
$valores[] = $D_5_2_;


foreach ($valores as $valor){
  if (is_numeric($valor)){
    $total_D_5_ = $total_D_5_ + $valor;
  }
}
  echo' <br>';
  echo' total_D_5_';
  echo' <br>';
  echo $total_D_5_ ;
// ------------------------------------------
$D_6_1_ = $_POST['D_6_1_'];
$D_6_2_ = $_POST['D_6_2_'];
$total_D_6_ = 0;


$valores[] = $D_6_1_;
$valores[] = $D_6_2_;


foreach ($valores as $valor){
  if (is_numeric($valor)){
    $total_D_6_ = $total_D_6_ + $valor;
  }
}
  echo' <br>';
  echo' total_D_6_';
  echo' <br>';
  echo $total_D_6_ ;
// ------------------------------------------

$D_7_1_ = $_POST['D_7_1_'];
$D_7_2_ = $_POST['D_7_2_'];
$total_D_7_ = 0;


$valores[] = $D_7_1_;
$valores[] = $D_7_2_;


foreach ($valores as $valor){
  if (is_numeric($valor)){
    $total_D_7_ = $total_D_7_ + $valor;
  }
}
  echo' <br>';
  echo' total_D_7_';
  echo' <br>';
  echo $total_D_7_ ;
// ------------------------------------------

$total_D_8_1_ = $_POST['total_D_8_1_'];
$total_D_8_2_ = $_POST['total_D_8_2_'];
$D_8_3_outros = $_POST['D_8_3_outros']; ##só recebe, n soma
$total_D_8_3_ = $_POST['total_D_8_3_'];
$total_D_8_ = 0;


$valores[] = $total_D_8_1_;
$valores[] = $total_D_8_2_;
$valores[] = $total_D_8_3_;



foreach ($valores as $valor){
  if (is_numeric($valor)){
    $total_D_8_ = $total_D_8_ + $valor;
  }
}
  echo' <br>';
  echo' total_D_8_';
  echo' <br>';
  echo $total_D_8_ ;
// ------------------------------------------

$D_9_outros = $_POST['D_9_outros'];##só recebe, n soma
$total_D_9_ = $_POST['total_D_9_'];

}



        ##codigo SQL
        $sql = "INSERT INTO bloco2 (
          C_1_,
          C_2_1_1_,
          C_2_1_2_,
          total_C_2_1_,
          C_2_2_1_,
          C_2_2_2_,
          total_C_2_2_,
          total_C_2_,
          C_3_1_,
          C_3_2_,
          C_3_3_,
          total_C_3_,
          C_4_1_,
          C_4_2_,
          total_C_4_,
          C_5_1_1_,
          C_5_1_2_,
          C_5_2_,
          C_5_3_,
          C_5_4_,
          C_5_5_,
          total_C_5_,
          C_6_3_1_,
          C_6_3_2_,
          C_6_3_3_outros,
          C_6_3_3_,
          total_C_6_3_,
          total_C_6_,
          total_C_6_1_,
          total_C_6_2_,
          total_C_6_4_,
          total_C_6_3_e_total_C_6_4_,
          C_7_,
          C_7_1_1_,
          C_7_1_2_,
          total_C_7_1_,
          C_7_2_1_,
          C_7_2_2_,
          total_C_7_2_,
          C_7_3_1_,
          C_7_3_2_,
          total_C_7_3_,
          C_7_4_1_,
          C_7_4_2_,
          total_C_7_4_,
          C_7_5_1_,
          C_7_5_2_,
          total_C_7_5_,
          C_7_6_1_,
          C_7_6_2_,
          total_C_7_6_,
          C_7_7_outros,
          C_7_7_1_,
          C_7_7_2_,
          total_C_7_7_,
          D_1_1_,
          D_1_2_,
          total_D_1_,
          D_2_1_,
          D_2_2_,
          total_D_2_,
          D_3_1_,
          D_3_2_,
          total_D_3_,
          D_4_1_,
          D_4_2_,
          total_D_4_,
          D_5_1_,
          D_5_2_,
          total_D_5_,
          D_6_1_,
          D_6_2_,
          total_D_6_,
          D_7_1_,
          D_7_2_,
          total_D_7_,
          total_D_8_1_,
          total_D_8_2_,
          D_8_3_outros,
          total_D_8_3_,
          total_D_8_,
          D_9_outros,
          total_D_9_
      ) VALUES (
          '$C_1_',
          '$C_2_1_1_',
         ' $C_2_1_2_',
          '$total_C_2_1_',
          '$C_2_2_1_',
          '$C_2_2_2_',
          '$total_C_2_2_',
          '$total_C_2_',
          '$C_3_1_',
          '$C_3_2_',
          '$C_3_3_',
          '$total_C_3_',
          '$C_4_1_',
          '$C_4_2_',
          '$total_C_4_',
          '$C_5_1_1_',
          '$C_5_1_2_',
          '$C_5_2_',
          '$C_5_3_',
          '$C_5_4_',
          '$C_5_5_',
          '$total_C_5_',
          '$C_6_3_1_',
          '$C_6_3_2_',
          '$C_6_3_3_outros',
          '$C_6_3_3_',
          '$total_C_6_3_',
          '$total_C_6_',
          '$total_C_6_1_',
          '$total_C_6_2_',
          '$total_C_6_4_',
          '$total_C_6_3_e_total_C_6_4_',
          '$C_7_',
          '$C_7_1_1_',
          '$C_7_1_2_',
          '$total_C_7_1_',
          '$C_7_2_1_',
          '$C_7_2_2_',
          '$total_C_7_2_',
          '$C_7_3_1_',
          '$C_7_3_2_',
          '$total_C_7_3_',
          '$C_7_4_1_',
          '$C_7_4_2_',
          '$total_C_7_4_',
          '$C_7_5_1_',
          '$C_7_5_2_',
          '$total_C_7_5_',
          '$C_7_6_1_',
          '$C_7_6_2_',
          '$total_C_7_6_',
          '$C_7_7_outros',
          '$C_7_7_1_',
          '$C_7_7_2_',
          '$total_C_7_7_',
          '$D_1_1_',
          '$D_1_2_',
          '$total_D_1_',
          '$D_2_1_',
          '$D_2_2_',
          '$total_D_2_',
          '$D_3_1_',
          '$D_3_2_',
          '$total_D_3_',
          '$D_4_1_',
         ' $D_4_2_',
          '$total_D_4_',
          '$D_5_1_',
          '$D_5_2_',
          '$total_D_5_',
          '$D_6_1_',
          '$D_6_2_',
          '$total_D_6_',
          '$D_7_1_',
          '$D_7_2_',
          '$total_D_7_',
          '$total_D_8_1_',
          '$total_D_8_2_',
          '$D_8_3_outros',
          '$total_D_8_3_',
          '$total_D_8_',
          '$D_9_outros',
          '$total_D_9_')";
      
        
        ##junta o codigo sql a conexao do banco
        $sqlcombanco = $conexao->prepare($sql);

        ##executa o sql no banco de dados
        if($sqlcombanco->execute())
            {
                echo " <p><strong>OK!</strong> Registro realizado com sucesso!!!</p>"; 
                echo " <button class='button'><a href='../home.php'>voltar</a></button>";
            }
        ?>