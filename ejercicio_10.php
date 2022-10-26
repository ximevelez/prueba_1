<?php
$precio = $_GET['precio'];
$descuento = $precio * 0.2;

  
if($precio>=20000){
    echo " valor a pagar ".$descuento;
}else {
    echo " debe pagar ".$precio ." no se aplico el descuento ";
}

?>