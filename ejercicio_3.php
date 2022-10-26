<?php
$p_ganados = $_POST['p_ganados'];
$p_perdidos = $_POST['p_perdidos'];
$p_empatados = $_POST['p_empatados'];
$ganado = 3;
$empatados = 1;
$perdidos = 0;
$punto_ganado = $p_ganados*$ganado;
$punto_empatado = $p_empatados*$empatados;
$punto_perdido = $p_perdidos*$perdidos;

$total_puntos = $punto_ganado+$punto_perdido+$punto_empatado; 

echo "total "  ."puntos ganados " .$p_ganados."+ "."puntos perdidos " .$p_perdidos. "+ "."puntos empatados " .$p_empatados. "= ".$total_puntos; 
?>