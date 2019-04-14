<!DOCTYPE html>
<html>
<head>
	<title>Tableau PHP</title>
</head>
<body>
	<a href="../../index.php">retour</a>

<?php
	//exo 1
	$tableauMois = array('janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'aout', 'septembre', 'octobre', 'novembre', 'décembre');

	//exo 2
	echo $tableauMois[2]. '<br/>';

	//exo 3
	echo $tableauMois[5]. '<br/>';

	//exo 4
	$tableauMois[7] = 'août';
	//echo $tableauMois[7]. '<br/>';

	//exo 5
	$tableauHdF = array('02' => 'Aisne', '59' => 'Nord', '60' => 'Oise', '62' => 'Pas-de-Calais', '80' => 'Somme');
	/*$tableauHdF = [
					'02' => 'Aisne',
					'59' => 'Nord',
					'60' => 'Oise',
					'62' => 'Pas-de-Calais',
					'80' => 'Somme'
					];*/ //exo 5 bis

	//exo 6
	echo $tableauHdF['59']. '<br/>';

	//exo 7
	$tableauHdF['51'] = 'Marne';
	//var_dump($tableauHdF);

	//exo 8
	for ($i=0; $i < count($tableauMois); $i++) {
			echo ($tableauMois[$i]). '<br/>' ;
	}

	//exo 9
	foreach ($tableauHdF as $value) {
		echo $value. '<br/>';
	}

	//exo 10
	foreach ($tableauHdF as $numDepartement => $nomDepartement) {
		echo 'le numéro '.$numDepartement.' correspond à '.$nomDepartement. '<br/>';
	}
?>
</body>
</html>