<?php 
	$bdd = new PDO("mysql:host=localhost; dbname=transport" , "root" , "");
	$afficherCamion = $bdd -> prepare("SELECT * FROM camion");
	$afficherCamion ->execute();
	$resultat = $afficherCamion -> fetchall();
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>je suis beau</title>
</head>
<body>
	<table>
		<thead>
			<tr>Chauffeur</tr>
			<tr>Proprietaire</tr>
			<tr>Trajet</tr>
		</thead>
		<?php foreach ($resultat as $donnees) {	?>
		<tbody>
			<tr>
			
				<td><?= $donnees['chauffeur'] ?></td>
				<td><?= $donnees['proprietaire'] ?></td>
				<td><?= $donnees['trajet'] ?></td>
				<td><a href="ajouter.php?id=<?=$donnees["id"];?>">Ajouter</a></td>
				<td><a href="supprimer.php?id=<?= $donnees['id'] ?>">Supprimer</a></td>
				<td><a href="modifier.php?id=<?= $donnees['id'] ?>">Modifier</a></td>
			</tr>
		</tbody>
		<?php }  ?>
	</table>
</body>
</html>