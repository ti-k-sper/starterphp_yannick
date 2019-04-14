<!DOCTYPE html>
<html>
<head>
	<title>Condition PHP</title>
</head>
<body>
	<a href="../../index.php">retour</a>

<?php
	$uneVariable = 0;
	while ( $uneVariable < 10) {
		echo $uneVariable. '<br/>';
		$uneVariable++;
	}

	//exo 2
	$variableUne = 0;
	$variableDeux = 50;
	while ( $variableUne <= 20) {
		echo $variableUne * $variableDeux . '<br/>';
		$variableUne++;
	}

	//exo 3
	$variableTroi = 100;
	$variableQuatre = 50;
	while ( $variableTroi > 10) {
		$result = $variableTroi * $variableQuatre. '<br/>';
		echo $result;
		$variableTroi--;
	}

	//exo 4
	$variableCinq = 1;
	while ( $variableCinq < 10) {
		echo $variableCinq. '<br/>';
		$variableCinq += ($variableCinq / 2);
	}

	//exo 5
	for ($i=1; $i < 15; $i++) { 
		echo 'On y arrive presque<br/>';
	}

	//exo 6
	for ($i=20; $i >= 0; $i--) { 
		echo "C'est presque bon<br/>";
	}

	//exo 7
	for ($i=1; $i <= 100; $i+=15) { 
		echo "On tient le bon bout<br/>";
	}

	//exo 8
	for ($i=200; $i >= 0; $i-=12) { 
		echo "Enfin !!!!<br/>";
	}
?>
</body>
</html>