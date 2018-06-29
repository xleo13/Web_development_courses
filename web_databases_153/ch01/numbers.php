<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Numbers</title>
</head>
<body>
<?php # Script 1.8 - numbers.php

// Set the variables:
	$milk = 3.50;//cost of milk
	$eggs = 2.70;//cost of eggs
	$tortillas = 2.35;//cost of tortillas
	$orange_juice = 3.89;//cost of orange juice
	$salsa = 1.89;//cost of salsa
	$taxRate = .08;//san diego sales tax

// Calculate the total:
	$total = $milk + $eggs + $tortillas + $orange_juice + $salsa;
	$totalPlusTax = $total + ($total * $taxRate);

// Print the results:
echo "<p>the total grocery bill from store is $total, the total bill plus tax is $totalPlusTax</p>"
?>
</body>
</html>