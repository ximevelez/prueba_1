<?php
$edad = $_GET['edad'];
$sexo = $_GET['sexo'];


if(($sexo=='f') &&($edad>=54)){
     echo " jubilado";


}elseif (($sexo=='m') &&($edad>=63)){
    echo " jubilado";
    
    }else{
        echo "no jubilado";
    }


?>