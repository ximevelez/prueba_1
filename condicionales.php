<?php
  $n1 = $_GET['n1'];
  $n2 = $_GET['n2'];
  $n3 = $_GET['n3'];
 /* *operadores de comparación
     == igualdad 
     > mayor que
     >= mayor o igual que 
     < menor que
     <= menor o igual que 
     
     && operador y
     or operador o*/

     if($n1>$n2){
        if($n1>$n3){
           echo $n1. "es mayor que ".$n2."y".$n3;
        }else{
            echo $n3. "es mayor que ".$n1."y".$n2;
        }
        // codigo que se resuelve si la respuesta a la pregunta es positiva
     }elseif($n2>$n3){       
          echo $n2. " es mayor que" .$n1."y".$n3;
        }else{
            echo $n3." es mayor que ".$n1."y".$n2;
        }
    
      //echo "ambos valores son diferentes";
      // codigo que se resuelve si la respuesta a la pregunta es negativa
     
?>