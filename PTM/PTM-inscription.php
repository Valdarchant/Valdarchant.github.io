


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PTM Inscription</title>
	<link rel="stylesheet" type="text/css" href="PTM/styles/PTM-inscription.css">
</head>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "prends_ton_matos";
$conn = mysqli_connect($servername, $username, $password, $dbname);
?>

<img src="PTM/ressources/logo.png" alt="logo du site prends ton matos" id="logo" width="200"/>
<div id="shape1"></div>
<h1>Inscription</h1>
<form action="PTM-inscription.php" method="POST">
<div class="formulaire">

<label id="nom">Nom</label>
<input type="text" name="nom" id="shape2">

<label id="prenom">Prénom</label>
<input type="prenom" name="prenom" id="shape3" autocomplete="off">

<label id="mdp">Mot de passe</label>
<input type="password" name="mdp" id="shape4">

<label id="email">Adresse-mail</label>
<input type="text" name="email" id="shape5">

<a href="PTM-connexion.html"  name="form"id="bouton"><input type="submit" value="Inscription" id="inscription"></a>

</div>
<p id="condition">6 caractères minimums</p>
<label id="date">Date de naissance</label>

<input type="date" id="date1" name="date"
       value="2018-07-22">
<label id="ine">INE</label>
<input type="text" name="INE" id="shape7">
<hr>
</form>
<?php

if (isset($_POST['nom'])){

	$nom = $_POST['nom'];
	$prenom = $_POST['prenom'];
	$INE = $_POST['INE'];
	$email = $_POST['email'];
	$mdp = $_POST['mdp'];
	$date = $_POST['date'];

	$requete = ("INSERT INTO utilisateur (nom) VALUE ($nom)");

	if (!($result = mysqli_querty($conn, $requete)));

	die ('Erreur dans la requete : '.$requete);
}

?>

</body>
<footer>
	<div id="shape6"></div>
	<img src="PTM/ressources/logo.png" alt="2e apparition du logo du site" id="logo1" width="200"/>
	<h2 id="qsn">Qui sommes nous ?<br><p id="qsn1">Prends Ton Matos(PTM)</p></h2>
	<h2 id="support">Support :<br><p id="support1">FAQ<br>Privacy</p></h2>
	<h2 id="contact">Restons en contact :<br><p id="contact1">Vous pouvez nous contacter<br>au 01 60 95 75 54<br>admin@univ-eiffel.fr</p></h2>
</footer>
</html>

<!-- login mot de passe corresspond
marche 
$session id u -->