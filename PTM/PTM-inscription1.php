<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "prends_ton_matos";

$conn = mysqli_connect($servername, $username, $password, $dbname);
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$date = $_POST['date'];
$mdp = $_POST['mdp']; 
$email = $_POST['email'];
$INE = $_POST['INE'];

if(!empty($_POST['nom']) AND !empty($_POST['prenom']) AND !empty($_POST['date']) AND !empty($_POST['mdp']) AND !empty($_POST['email']) AND !empty($_POST['INE']))
    {
$requete = (" SELECT utilisateur ( nom, prenom, date, mdp, email , INE) VALUES ('$nom','$prenom','$date','$mdp',$email,'$INE')"); 
if ( !( $result = mysqli_query( $conn,$requete))){
die( 'Erreur de la requete : '.$requete );}}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PTM Inscription</title>
	<link rel="stylesheet" type="text/css" href="PTM/styles/PTM-inscription.css">
</head>
<body>
<img src="PTM/ressources/logo.png" alt="logo du site prends ton matos" id="logo" width="200"/>
<div id="shape1"></div>
<h1>Inscription</h1>
<form action="" method="POST">
<div class="formulaire">

<label id="nom">Nom</label>
<input type="text" name="nom" id="shape2">

<label id="prenom">Prénom</label>
<input type="prenom" name="prenom" id="shape3" autocomplete="off">

<label id="mdp">Mot de passe</label>
<input type="password" name="mdp" id="shape4">

<label id="email">Adresse-mail</label>
<input type="text" name="email" id="shape5">

<input type="submit" value="Inscription" id="inscription">
</div>
<p id="condition">6 caractères minimums</p>
<label id="date">Date de naissance</label>

<input type="date" id="date1" name="trip-start"
       value="2018-07-22">
<label id="ine">INE</label>
<input type="text" name="ine" id="shape7">
	   </form>
</body>
<footer>
	<div id="shape6"></div>
	<img src="PTM/ressources/logo.png" alt="2e apparition du logo du site" id="logo1" width="200"/>
	<h2 id="qsn">Qui sommes nous ?<br><p id="qsn1">Prends Ton Matos(PTM)</p></h2>
	<h2 id="support">Support :<br><p id="support1">FAQ<br>Privacy</p></h2>
	<h2 id="contact">Restons en contact :<br><p id="contact1">Vous pouvez nous contacter<br>au 01 60 95 75 54<br>admin@univ-eiffel.fr</p></h2>
</footer>
</html>