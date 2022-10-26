<?php
$asignatura = $_POST['asignatura'];
$nombre = $_POST['nombre'];
$nota1 = $_POST['nota1'];
$nota2 = $_POST['nota2'];
$nota3 = $_POST['nota3'];
$numero_notas = 3;
$promedio = ($nota1 + $nota2 + $nota3) / $numero_notas;

echo "el promedio de "  .$asignatura." ".$nombre." ".$promedio; 
?>