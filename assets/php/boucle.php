<!DOCTYPE html>
<html>
<head>
	<title>Boucle PHP</title>
</head>
<body>
	<a href="../../index.php">retour</a>

<?php
	$age = 16;
	if ($age >= 18) {
		echo "Vous êtes majeur<br/>";
	}else{
		echo "Vous êtes mineur<br/>";
	}

	//exo 2
	$isEasy = false;
	if ($isEasy) {//$isEasy == true
		echo "C'est facile !!<br/>";
	}else{
		echo "C'est difficile !!!<br/>";
	}
	//Bonus
	echo ($isEasy) ? "C'est facile !!<br/>" : "C'est difficile !!!<br/>";
	//(condition) ? true : false;

	//exo 3
	$genre = 'homme';
	if ($age >= 18 && $genre == 'homme') {
		echo "Vous êtes un homme et vous êtes majeur<br/>";
	}elseif($age < 18 && $genre == 'homme'){
		echo "Vous êtes un homme et vous êtes mineur<br/>";
	}elseif($age >= 18 && $genre == 'femme') {
		echo "Vous êtes une femme et vous êtes majeure<br/>";
	}elseif($age < 18 && $genre == 'femme') {
		echo "Vous êtes une femme et vous êtes mineure<br/>";
	}else{
		echo "Merci de choisir entre \"homme\" ou \"femme\"<br/>";
	}
	
	//exo 4
	$magnetude = 5;
	switch ($magnetude) {
		case 1:
			echo "Micro-séisme impossible à ressentir.<br/>";
			break;
		case 2:
			echo "Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.<br/>";
			break;
		case 3:
			echo "Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.<br/>";
			break;
		case 4:
			echo "Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.<br/>";
			break;
		case 5:
			echo "Séisme capable d'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.<br/>";
			break;
		case 6:
			echo "Fort séisme capable d'engendrer des destructions majeures sur une large distance (180 km) autour de l'épicentre.<br/>";
			break;
		case 7:
			echo "Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.<br/>";
			break;
		case 8:
			echo "Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.<br/>";
			break;
		case 9:
			echo "Séisme capable de tout détruire sur une très vaste zone.<br/>";
			break;
		
		default:
			echo "Veuillez rentrer une magnétude entre 1 et 10.<br/>";
			break;
	}

	//exo 5
	/*<?php
     echo ($maVariable != 'Homme') ? 'C\'est une développeuse !!!' : 'C\'est un développeur !!!';
   ?>*/
   	if ($maVariable != 'Homme'){
		echo 'C\'est une développeuse !!!';
	}else{
		echo 'C\'est un développeur !!!';
	}

	//exo 6
	/*<?php
		echo ($monAge >= 18) ? 'Tu es majeur' : 'Tu n\'es pas majeur';
   ?>*/
	if ($monAge >= 18){
		echo 'Tu es majeur';
	}else{
		echo 'Tu n\'es pas majeur';
	}

	//exo 7
	/*<?php
     echo ($maVariable == false) ? 'c\'est pas bon !!!' : 'c\'est ok !!';
   ?>*/
	if ($maVariable == false){
		echo 'c\'est pas bon !!!';
	}else{
		echo 'c\'est ok !!';
	}

	//exo 8
	/*<?php
     echo ($maVariable) ? 'c'est ok !!' : 'c'est pas bon !!!';
   ?>*/
	if ($maVariable){
		echo 'c\'est ok !!';
	}else{
		echo 'c\'est pas bon !!!';
	}
?>
</body>
</html>