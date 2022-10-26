<?php
$precio = $_GET['precio'];
$descuento = $precio * 0.2;
$descuentof = $precio - $descuento;

  
if($precio>=20000){
    echo " valor a pagar ".$descuentof;
}else {
    echo " debe pagar ".$precio ." no se aplico el descuento ";
}

?>