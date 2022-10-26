<?php
$hermano1 = $_GET['hermano1'];
$hermano2 = $_GET['hermano2'];

$diferencia = $hermano1 - $hermano2;
$diferencia2 = $hermano2 - $hermano1;

if($hermano1>$hermano2){

    echo "el hermano mayor tiene ".$hermano1." años y ". "es mayor por ".$diferencia." años";
}else{
    echo "el hermano mayor tiene ".$hermano2." años y ". "es mayor por ".$diferencia2." años";
        }

?>