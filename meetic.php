<?php include ('site.php');?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="meetic.css"/>
	<title>titre</title>
	<meta name="description" content="test">
</head>

	<header class="header">
	<h1></h1><img class="logo" src="37500.9007.png" alt="image" width="100" height="100">
<h1 class="titre">LOVE ADDICT</h1>
	<div class="infos1"><button class="style" type="button">Connection</button>
		<div>
			<form class="block1" method="post" action="index.php" name="identiter" onsubmit="return checkForm()">
				<p>Email</p>
				<label for="Email"></label><input type="email" name="Email">
				<p>Password</p>
				<label for="password"></label><input type="password" name="password"><br><br>
				<input class="valider" type="submit" name="submit" value="Valider">
		</form>


	<div class="info"><button class="style1" type="button">S'inscrire</button>
	<div>
		<form class="block" method="post" action="site.php" name="identiter" onsubmit="return checkForm()">
			<div>
	        <label for="sexe">Sexe</label>
	        <input type="radio" name="sexe" value="F" /> Femme
	        <input type="radio" name="sexe" value="H" /> Homme
	    </div>
			<div>
					<label for="civilite">civilite</label>
					<select name="civilite">
					<option value="M." selected>M.</option>
					<option value="Mme." selected>Mme.</option>
					<option value="Mlle." selected>Mlle.</option>
					</select>
			</div>
				<p>Nom</p>
				<label for="nom"></label><input type="text" name="nom">
				<p>Prenom</p>
				<label for="Prenom"></label><input type="text" name="prenom">
				<p>Date de naissance</p>
				<label for="date"></label><input type="date" id='date' name="date_naissance">
				<p>Email</p>
				<label for="Email"></label><input type="email" name="e_mail">
				<p>Telephone</p>
				<label for="telephone"></label><input type="telephone" name="telephone">
				<p>Ville</p>
				<label for="ville"></label><input type="text" name="ville">
				<p>Password</p>
				<label for="password"></label><input type="password" name="mot_de_passe">
				<p>Répetez votre password</p>
				<label for="repeatpassword"></label><input type="password" name="repeatpassword"><br><br>
				<input class="valider" type="submit" name="submit" value="Valider">
		</form>


	</header>

<body class="body">

	<article><img class="femme" src="UNADJUSTEDNONRAW_thumb_1.jpg" alt="femme" width="400" height="200"></article>
	<article><img class="homme" src="1033678000.jpg" alt="homme" width="400" height="200"></article>


	<footer>
		<container class="container1">
	</footer>
	<script language="JavaScript">
	$('.style1').click(function(){
	$('.block').toggle();
});</script>

	<script language="JavaScript">
	$('.style').click(function(){
  $('.block1').toggle();
});</script>

	<script language="JavaScript">
	$('.Cherche_Femme').click(function(){
	$('.cherche').toggle();
});</script>

<script language="JavaScript">
	$('.Cherche_Homme').click(function(){
	$('.cherche1').toggle();
});</script>



</body>
</html>
