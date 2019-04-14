<!DOCTYPE html>
<html>
<head>
	<title>Formulaire PHP</title>
</head>
<body>
	<a href="../../index.php">retour</a>
	<form action="index.php" method="get">
 		<label>Votre nom : </label><input type="text" name="nom" required /><br />
 		<label>Votre prénom : </label><input type="text" name="prenom" required /><br />
 		<label>Le numéro de votre addresse : </label><input type="text" name="numeroVoie" /><br />
 		<label>Le type de voie : </label><input type="text" name="typeVoie" /><br />
 		<label>Le nom de la voie : </label><input type="text" name="nomVoie" required /><br />
 		<label>Code postal : </label><input type="text" name="cp" required /><br />
 		<label>Le nom de la ville : </label><input type="text" name="nomVille" required /><br />
 		<p><input type="submit" value="Envoyer"></p>
	</form>

	<?php
		//var_dump($_GET);
		$identite = strtoupper($_GET['nom'])." ".ucfirst($_GET['prenom']);//ucfirst => mettre en majuscule la première lettre //strtoupper mettre tt en majuscule
		$addresse = $_GET['numeroVoie']." ".ucfirst($_GET['typeVoie'])." ".$_GET['nomVoie'];
		$ville = $_GET['cp']." ".strtoupper($_GET['nomVille']);
		if( isset($_GET['nom']) && 
			isset($_GET['prenom']) && 
			isset($_GET['nomVoie']) && 
			isset($_GET['cp']) && 
			isset($_GET['nomVille'])){
			echo "Bonjour ".$identite.", vous habitez le ".$addresse." à ".$ville.".<br />";
		}
	?>

</body>
</html>