<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bloco1.css">
    <title>CRUD bloco1</title>
</head>
<body>

<?php
##permite acesso as variaves dentro do aquivo conexao

require_once('../conexao.php');


##cadastrar
if(isset($_POST['enviar'])){
        ##dados recebidos pelo metodo POST
        
    $A_1_1_ = $_POST["A_1_1_"];
    $A_1_2_ = $_POST["A_1_2_"];
    
   $valores[] = $A_1_1_;
   $valores[] = $A_1_2_;
 
          $soma = 0;


   foreach ($valores as $valor) {
      if(is_numeric($valor)){
          $soma = $soma + $valor;
      }
   }
;
   $total_A_1_ = $soma;

   echo' <br>';
   echo' total_A_1_:';
   echo' <br>';
   echo $total_A_1_;
// ------------------------------------------

        $A_2_1_= $_POST['A_2_1_'];
        $A_2_2_= $_POST['A_2_2_'];
        
       $valores_A_2_[] = $A_2_1_;
       $valores_A_2_[] = $A_2_2_;
     
              $total_A_2_ = 0;
    
    
       foreach ($valores_A_2_ as $valor_A_2_) {
          if(is_numeric($valor_A_2_)){
              $total_A_2_ = $total_A_2_ + $valor_A_2_;
          }
       }
    
       echo' <br>';
       echo' <br>';
       echo' <br>';
      
       echo' <br>';
       echo' total_A_2_:';
       echo' <br>';
       echo $total_A_2_;
// ----------------------------------------------------------
        
        $A_3_1_1_= $_POST['A_3_1_1_'];
        $A_3_1_2_= $_POST['A_3_1_2_'];
        
        
       $valores_A_3_1_[] = $A_3_1_1_;
       $valores_A_3_1_[] = $A_3_1_2_;
     
              $total_A_3_1_ = 0;
    
    
       foreach ($valores_A_3_1_ as $valor_A_3_1_) {
          if(is_numeric($valor_A_3_1_)){
            $total_A_3_1_ = $total_A_3_1_ + $valor_A_3_1_;
          }
       }
    
       echo' <br>';
       echo' <br>';
       echo' <br>';
      
       echo' <br>';
       echo' total_A_3_1_:';
       echo' <br>';
       echo $total_A_3_1_;
      
// ----------------------------------------------------------
        
        
       $A_3_2_1_= $_POST['A_3_2_1_'];
        $A_3_2_2_= $_POST['A_3_2_2_'];
        
        
       $valores_A_3_2_[] = $A_3_2_1_;
       $valores_A_3_2_[] = $A_3_2_2_;
     
              $total_A_3_2_ = 0;
    
    
       foreach ($valores_A_3_2_ as $valor_A_3_2_) {
          if(is_numeric($valor_A_3_2_)){
            $total_A_3_2_ = $total_A_3_2_ + $valor_A_3_2_;
          }
       }
    
       echo' <br>';
       echo' <br>';
       echo' <br>';
      
       echo' <br>';
       echo' total_A_3_2_:';
       echo' <br>';
       echo $total_A_3_2_;
      
// ----------------------------------------------------------
        $A_3_3_1_= $_POST['A_3_3_1_'];
        $A_3_3_2_ = $_POST['A_3_3_2_'];

       
       
       
      $valores_A_3_3_[] = $A_3_3_1_;
      $valores_A_3_3_[] = $A_3_3_2_;
    
             $total_A_3_3_ = 0;
   
   
      foreach ($valores_A_3_3_ as $valor_A_3_3_) {
         if(is_numeric($valor_A_3_3_)){
           $total_A_3_3_ = $total_A_3_3_ + $valor_A_3_3_;
         }
      }
   
      echo' <br>';
      echo' <br>';
      echo' <br>';
     
      echo' <br>';
      echo' total_A_3_3_:';
      echo' <br>';
      echo $total_A_3_3_;
     
// ----------------------------------------------------------


        $A_3_4_outros = $_POST['A_3_4_outros'];
        $A_3_4_1_= $_POST['A_3_4_1_'];
        $A_3_4_2_= $_POST['A_3_4_2_'];
       
      $valores_A_3_4_[] = $A_3_4_1_;
      $valores_A_3_4_[] = $A_3_4_2_;
    
             $total_A_3_4_ = 0;
   
   
      foreach ($valores_A_3_4_ as $valor_A_3_4_) {
         if(is_numeric($valor_A_3_4_)){
           $total_A_3_4_ = $total_A_3_4_ + $valor_A_3_4_;
         }
      }
   
      echo' <br>';
      echo' <br>';
      echo' <br>';
     
      echo' <br>';
      echo' total_A_3_4_:';
      echo' <br>';
      echo $total_A_3_4_;
     
// ----------------------------------------------------------

        $total_A_3_= $total_A_3_1_ + $total_A_3_2_ + $total_A_3_3_ +  $total_A_3_4_;
        echo'<br>';
        echo' <br>';
       echo' <br>';
       echo' <br>';
       echo' total A_3_:';
       echo' <br>';
        echo $total_A_3_;

        
        // ----------------------------------------------------------
        $A_3_quant_fixa = $A_3_1_1_ + $A_3_2_1_ + $A_3_3_1_ + $A_3_4_1_;
        $A_3_quant_vol = $A_3_1_2_ + $A_3_2_2_ + $A_3_3_2_ + $A_3_4_2_;
        
        $A_4_1_= $A_1_1_ + $A_2_1_ - $A_3_quant_fixa ;
        $A_4_2_= $A_1_2_ + $A_2_2_ - $A_3_quant_vol ;

        echo'<br>';
        echo' <br>';
       echo' <br>';
       echo' <br>';
        echo' total A_4_1_:';
        echo' <br>';
        echo $A_4_1_;
        
        
        echo'<br>';
        echo' <br>';
        echo' total A_4_2_:';
        echo' <br>';
        echo $A_4_2_;


        $total_A_4_= $A_4_1_ + $A_4_2_;

      echo'<br>';
        echo' <br>';
        echo' total A_4_:';
        echo' <br>';
        echo $total_A_4_;

        // ----------------------------------------------------------
        $B_1_= $_POST['B_1_'];
        $B_2_= $_POST['B_2_'];
        $B_3_= $_POST['B_3_'];
        $B_4_= $_POST['B_4_'];
        // ----------------------------------------------------------
        
        $B_5_1_1_= $_POST['B_5_1_1_'];
        $B_5_1_2_= $_POST['B_5_1_2_'];
       
      $valores_B_5_1_[] = $B_5_1_1_;
      $valores_B_5_1_[] = $B_5_1_2_;
    
             $total_B_5_1_ = 0;
   
   
      foreach ($valores_B_5_1_ as $valor_B_5_1_) {
         if(is_numeric($valor_B_5_1_)){
           $total_B_5_1_ = $total_B_5_1_ + $valor_B_5_1_;
         }
      }
   
      echo' <br>';
      echo' <br>';
      echo' <br>';
     
      echo' <br>';
      echo'total_B_5_1_: ';
      echo' <br>';
      echo $total_B_5_1_;
     
// ----------------------------------------------------------


        
        $B_5_2_1_= $_POST['B_5_2_1_'];
        $B_5_2_2_= $_POST['B_5_2_2_'];


    
       
      $valores_B_5_2_[] = $B_5_2_1_;
      $valores_B_5_2_[] = $B_5_2_2_;
    
             $total_B_5_2_ = 0;
   
   
      foreach ($valores_B_5_2_ as $valor_B_5_2_) {
         if(is_numeric($valor_B_5_2_)){
           $total_B_5_2_ = $total_B_5_2_ + $valor_B_5_2_;
         }
      }
   
      echo' <br>';
      echo' <br>';
      echo' <br>';
     
      echo' <br>';
      echo'total_B_5_2_: ';
      echo' <br>';
      echo $total_B_5_2_;
     
// ----------------------------------------------------------

        $total_B_5_= $total_B_5_1_ +$total_B_5_2_ ;
        echo' <br>';
        echo' <br>';
        echo' <br>';
        echo'total_B_5_: ';
        echo' <br>';
        echo $total_B_5_;
// ----------------------------------------------------------   
        $B_6_= $_POST['B_6_'];

        echo' <br>';
        echo' <br>';
        echo' <br>';
        echo'B_6_: ';
        echo' <br>';
        echo $B_6_;
// ----------------------------------------------------------        
        $B_7_1_1_= $_POST['B_7_1_1_'];
        $B_7_1_2_= $_POST['B_7_1_2_'];
       

    
       
      $valores_B_7_1_[] = $B_7_1_1_;
      $valores_B_7_1_[] = $B_7_1_2_;
    
             $total_B_7_1_ = 0;
   
   
      foreach ($valores_B_7_1_ as $valor_B_7_1_) {
         if(is_numeric($valor_B_7_1_)){
           $total_B_7_1_ = $total_B_7_1_ + $valor_B_7_1_;
         }
      }
   
      echo' <br>';
      echo' <br>';
      echo' <br>';
     
      echo' <br>';
      echo'total_B_7_1_: ';
      echo' <br>';
      echo $total_B_7_1_;
// ----------------------------------------------------------        
        

echo' <br>';
echo' <br>';
$B_7_2_1_= $_POST['B_7_2_1_'];
$B_7_2_2_= $_POST['B_7_2_2_'];
       
    
       
      $valores_B_7_2_[] = $B_7_2_1_;
      $valores_B_7_2_[] = $B_7_2_2_;
    
             $total_B_7_2_ = 0;
   
   
      foreach ($valores_B_7_2_ as $valor_B_7_2_) {
         if(is_numeric($valor_B_7_2_)){
           $total_B_7_2_ = $total_B_7_2_ + $valor_B_7_2_;
         }
      }
   
      echo' <br>';
      
     
      echo' <br>';
      echo'total_B_7_2_: ';
      echo' <br>';
      echo $total_B_7_2_;

// ----------------------------------------------------------

$total_B_7_ = $total_B_7_1_ + $valor_B_7_2_;







// ----------------------------------------------------------




        $B_8_= $_POST['B_8_'];
        echo' <br>';
echo' <br>';
echo' <br>';
echo' <br>';
        echo'B_8_: ';
        echo' <br>';
        echo $B_8_;

// ----------------------------------------------------------
        
        $B_9_1_1_= $_POST['B_9_1_1_'];
        $B_9_1_2_= $_POST['B_9_1_2_'];
    

        $valores_B_9_1_[] = $B_9_1_1_;
        $valores_B_9_1_[] = $B_9_1_2_;
      
               $total_B_9_1_ = 0;
     
     
        foreach ($valores_B_9_1_ as $valor_B_9_1_) {
           if(is_numeric($valor_B_9_1_)){
             $total_B_9_1_ = $total_B_9_1_ + $valor_B_9_1_;
           }
        }
     
        echo' <br>';
        echo' <br>';
        echo' <br>';
       
        echo' <br>';
        echo' total_B_9_1_:';
        echo' <br>';
        echo $total_B_9_1_;
        
// ----------------------------------------------------------

        $B_9_2_1_= $_POST['B_9_2_1_'];
        $B_9_2_2_= $_POST['B_9_2_2_'];
      
       
        $valores_B_9_2_[] = $B_9_2_1_;
        $valores_B_9_2_[] = $B_9_2_2_;
      
               $total_B_9_2_ = 0;
     
     
        foreach ($valores_B_9_2_ as $valor_B_9_2_) {
           if(is_numeric($valor_B_9_2_)){
             $total_B_9_2_ = $total_B_9_2_ + $valor_B_9_2_;
           }
        }
     
        echo' <br>';
        echo' <br>';
        echo' <br>';
       
        echo' <br>';
        echo' total_B_9_2_:';
        echo' <br>';
        echo $total_B_9_2_;
        


// ----------------------------------------------------------
        $total_B_9_=  $total_B_9_1_ +  $total_B_9_2_ ;
        echo' <br>';
echo' <br>';
echo' <br>';
echo' <br>';
        echo'total_B_9_: ';
        echo' <br>';
        echo $total_B_9_;

}


       
        ##codigo SQL
        $sql = "INSERT INTO bloco1(A_1_1_, A_1_2_, total_A_1_, A_2_1_, A_2_2_,total_A_2_,A_3_1_1_, A_3_1_2_,total_A_3_1_,A_3_2_1_, A_3_2_2_, total_A_3_2_,A_3_3_1_, A_3_3_2_,
          total_A_3_3_,A_3_4_outros, A_3_4_1_, A_3_4_2_, total_A_3_4_, total_A_3_, A_4_1_, A_4_2_, total_A_4_, B_1_, B_2_, B_3_, B_4_, B_5_1_1_,B_5_1_2_,
          total_B_5_1_,B_5_2_1_, B_5_2_2_, total_B_5_2_, total_B_5_, B_6_, B_7_1_1_, B_7_1_2_, total_B_7_1_, B_7_2_1_, B_7_2_2_, total_B_7_2_,
           total_B_7_,B_8_,B_9_1_1_, B_9_1_2_, total_B_9_1_, B_9_2_1_, B_9_2_2_, total_B_9_2_, total_B_9_)
         
         VALUES ('$A_1_1_', '$A_1_2_','$total_A_1_', '$A_2_1_', '$A_2_2_','$total_A_2_','$A_3_1_1_', '$A_3_1_2_','$total_A_3_1_','$A_3_2_1_', '$A_3_2_2_', '$total_A_3_2_','$A_3_3_1_', '$A_3_3_2_', '$total_A_3_3_','$A_3_4_outros', '$A_3_4_1_',
         '$A_3_4_2_', '$total_A_3_4_', '$total_A_3_','$A_4_1_', '$A_4_2_', '$total_A_4_', '$B_1_', '$B_2_', '$B_3_', '$B_4_', '$B_5_1_1_','$B_5_1_2_','$total_B_5_1_','$B_5_2_1_', '$B_5_2_2_', '$total_B_5_2_', '$total_B_5_', '$B_6_', '$B_7_1_1_', '$B_7_1_2_', '$total_B_7_1_',
         '$B_7_2_1_', '$B_7_2_2_', '$total_B_7_2_', '$total_B_7_','$B_8_','$B_9_1_1_', '$B_9_1_2_', '$total_B_9_1_', '$B_9_2_1_', '$B_9_2_2_', '$total_B_9_2_', '$total_B_9_')";
        
        ##junta o codigo sql a conexao do banco
        $sqlcombanco = $conexao->prepare($sql);

        ##executa o sql no banco de dados
        if($sqlcombanco->execute())
            {
                echo " <p><strong>OK!</strong> Registro realizado com sucesso!!!</p>"; 
                echo " <button class='button'><a href='../home.php'>voltar</a></button>";
            }
        

        

 //aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa





















































































##permite acesso as variaves dentro do aquivo conexao



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
        



























































##permite acesso as variaves dentro do aquivo conexao


$E_1_ = $_POST['A_2_1_'];
$E_2_ = $_POST['A_2_1_'];

$E_3_outros = $_POST['A_2_1_'];

$E_4_ = $_POST['A_2_1_'];
$E_5_ = $_POST['A_2_1_'];
$E_6_ = $_POST['A_2_1_'];
$E_7_ = $_POST['A_2_1_'];
$E_8_ = $_POST['A_2_1_'];
$E_9_ = $_POST['A_2_1_'];
$E_10_ = $_POST['A_2_1_'];
$E_11_ = $_POST['A_2_1_'];


$sql = "INSERT INTO bloco3(
    E_1_, E_2_, E_3_outros, E_4_, E_5_, E_6_, E_7_, E_8_, E_9_outros, E_10_, E_11_
) VALUES (
    '$E_1_','$E_2_', '$E_3_outros', '$E_4_', '$E_5_', '$E_6_', '$E_7_','$E_8_','$E_9_outros', '$E_10_', '$E_11_'
)";
 
##junta o codigo sql a conexao do banco
        $sqlcombanco = $conexao->prepare($sql);

        ##executa o sql no banco de dados
        if($sqlcombanco->execute())
            {
                echo " <p><strong>OK!</strong> Registro realizado com sucesso!!!</p>"; 
                echo " <button class='button'><a href='../home.php'>voltar</a></button>";
            }
        
















































































































##permite acesso as variaves dentro do aquivo conexao



$F_1_1_ = $_POST['F_1_1_'];
$F_1_2_ = $_POST['F_1_2_'];
$F_2_1_ = $_POST['F_2_1_'];
$F_2_2_ = $_POST['F_2_2_'];


$sql = "INSERT INTO bloco3(
    F_1_1_, F_1_2_, F_2_1_, F_2_2)
     VALUES (
    '$F_1_1_','$F_1_2_', '$F_2_1_', '$F_2_2'
)";
 
##junta o codigo sql a conexao do banco
        $sqlcombanco = $conexao->prepare($sql);

        ##executa o sql no banco de dados
        if($sqlcombanco->execute())
            {
                echo " <p><strong>OK!</strong> Registro realizado com sucesso!!!</p>"; 
                echo " <button class='button'><a href='../home.php'>voltar</a></button>";
            }
        ?>