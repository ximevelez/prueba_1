<?php
$interes = $_GET['interes'];
 
if($interes<500){
    $opera = $interes*0.02;
    $sub_opera = $interes +$opera;
    echo " Total de capital mas los intereses ".$sub_opera;
}elseif(($interes >= 500) && ($interes <= 1500)){
    $opera = $interes *0.045;
    $sub_opera = $interes + $opera;
    echo " Total de capital mas los intereses ".$sub_opera;
}elseif($interes>=1500){
    $opera = $interes*0.07;
    $sub_opera = $interes + $opera;
    echo " Total de capital mas los intereses ".$sub_opera;
}
 
?>
