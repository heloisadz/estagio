
<?php
session_start();
$_SESSION['crud1'] = array(
  'A_1_1_' => $_POST["A_1_1_"],
  'A_1_2_' => $_POST["A_1_2_"],
  'A_2_1_' => $_POST['A_2_1_'],
  'A_2_2_' => $_POST['A_2_2_'],
  'A_3_1_1_' => $_POST['A_3_1_1_'],
  'A_3_1_2_' => $_POST['A_3_1_2_'],
  'A_3_2_1_' => $_POST['A_3_2_1_'],
  'A_3_2_2_' => $_POST['A_3_2_2_'],
  'A_3_3_1_' => $_POST['A_3_3_1_'],
  'A_3_3_2_' => $_POST['A_3_3_2_'],
  'A_3_4_outros' => $_POST['A_3_4_outros'],
  'A_3_4_1_' => $_POST['A_3_4_1_'],
  'A_3_4_2_' => $_POST['A_3_4_2_'],
  'B_1_' => $_POST['B_1_'],
  'B_2_' => $_POST['B_2_'],
  'B_3_' => $_POST['B_3_'],
  'B_4_' => $_POST['B_4_'],
  'B_5_1_1_' => $_POST['B_5_1_1_'],
  'B_5_1_2_' => $_POST['B_5_1_2_'],
  'B_5_2_1_' => $_POST['B_5_2_1_'],
  'B_5_2_2_' => $_POST['B_5_2_2_'],
  'B_7_1_1_' => $_POST['B_7_1_1_'],
  'B_7_1_2_' => $_POST['B_7_1_2_'],
  'B_7_2_1_' => $_POST['B_7_2_1_'],
  'B_7_2_2_' => $_POST['B_7_2_2_'],
  'B_8_' => $_POST['B_8_'],
  'B_9_1_1_' => $_POST['B_9_1_1_'],
  'B_9_1_2_' => $_POST['B_9_1_2_'],
  'B_9_2_1_' => $_POST['B_9_2_1_'],
  'B_9_2_2_' => $_POST['B_9_2_2_']
);
?>












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
        
    $A_1_1_ = $_SESSION['A_1_1_'];
    $A_1_2_ = $_SESSION['A_1_2_'];
    
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
        

        
?>

</body>
</html>




