<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Arreglo multidimensional</title>
</head>
<body>
<?php
$numeros=array();
$valor=100;

echo "<table border='1' cellpadding='8' cellspacing='0'>";
    echo "<h2>Contenido del arreglo</h2>";
for ($f=0; $f<3; $f++) {
	for ($c=0; $c<3; $c++){ 
		echo "<td aling=center>";
	    $numeros[$f][$c]=$valor;
		$valor+=10;
	    echo $numeros[$f][$c]." ";
	    echo "</td>";}
	echo "</tr>";
	}
	echo "</table>";

echo "<br><br>";

$numeros2=array();
$valor2=500;

echo "<table border='1' cellpadding='8' cellspacing='0'>";
for ($f=0; $f<3; $f++) {
	for ($c=0; $c<3; $c++){ 
		echo "<td aling=center>";
	    $numeros2[$f][$c]=$valor2;
		$valor2+=20;
	    echo $numeros2[$f][$c]." ";
	    echo "</td>";}
	echo "</tr>";
	}
	echo "</table>";

echo "<br><br>";


$numeros2=array();
$val=600;

echo "<table border='1' cellpadding='8' cellspacing='0'>";
for ($f=0; $f<3; $f++) {
	for ($c=0; $c<3; $c++){ 
		echo "<td aling=center>";
	    $n[$f][$c]=$val;
		$val+=$valor;
	    echo $n[$f][$c]." ";
	    echo "</td>";}
	echo "</tr>";
	}
	echo "</table>";


?>