<?php 
	$bdd = new PDO("mysql:host=localhost; dbname=transport" , "root" , "");
	extract($_POST);
	if (isset($valider)) {
		$ajouterCamion = $bdd ->prepare('INSERT INTO camion (chauffeur,proprietaire,trajet) VALUES(?,?,?)');
		$ajouterCamion ->execute(array($chauffeur,$proprietaire,$trajet));
						echo "ajouter avec succes";
						header('lovation: afficher.php');
	}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST">
		<label>Nom/Prénom (Chauffeur)</label>
		<input type="text" name="chauffeur" required><br><br>
		<label>Nom/Prénom (Proprietaire)</label>
		<input type="text" name="proprietaire" required><br><br>
		<label>Trajet(km)</label>
		<input type="text" name="trajet" required><br><br><br>
		<input type="submit" name="valider">
	</form>
</body>
</html>