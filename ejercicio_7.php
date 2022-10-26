<?php
$nombre_apd = $_GET['nombre_apd'];
$asignatura = $_GET['asignatura'];
$calificación_f = $_GET['calificación_f'];


if($calificación_f>=7){
    if($calificación_f>10){
        echo " Debe digitar un numero del 1 al 10";
    }else{
        echo $nombre_apd." aprobado";
    }
}
if($calificación_f<7){
    if($calificación_f>0){
        echo $nombre_apd." reprobado";

    }else{
        echo "Debe digitar un numero del 1 al 10";
    }
}


?>