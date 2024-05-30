<?php
// Simple Calculator

function add ($num1, $num2) {
	$result = $num1 + $num2;
	return $result;
}

function divide ($num1,$num2) {
	$result = $num1 / $num2;
	return $result;
}

function multiply ($num1,$num2){
	$result = $num1 * $num2;
	return $result;
}
$sum = multiply (add(10,10), add (5,5));
$sum2 = add(6,6);
echo $sum;
echo '<br>'.$sum2;
?>