<?php
$nota1 = $_GET['nota1'];
$nota2 = $_GET['nota2'];
$nota3 = $_GET['nota3'];
$porcentaje1 = $nota1* 0.3;
$porcentaje2 = $nota2* 0.3;
$porcentaje3 = $nota3* 0.4;
$final = $porcentaje1+ $porcentaje2+ $porcentaje3;

if($final>=4.0){
    echo "aprobado ".$final;
}else{
    echo " no aprobado ".$final;
}


?>