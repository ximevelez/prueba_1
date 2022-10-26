<?php
$valoring = $_GET['valoring'];
$ganancia = $valoring * 0.15;
$gananciaf = $ganancia + $valoring;

echo " precio al que se debe vender ".$gananciaf;


?>