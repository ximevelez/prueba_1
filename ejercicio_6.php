<?php
$volantes = $_POST['volantes'];
$posters = $_POST['posters'];
$tarjetas = $_POST['tarjetas'];
$volante = 2.000;
$poster = 5.000;
$tarjeta = 500;
$total_vol = $volantes*$volante;
$total_pos = $posters*$poster;
$total_tar = $tarjetas*$tarjeta;

$total = $total_vol+$total_pos+$total_tar; 

echo "total "  ."volantes " .$volantes."+ "."posters " .$posters. "+ "."tarjetas " .$tarjetas. "= ".$total; 
?>