<?php session_start();
require_once 'test.php';?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="style.css">
	<title>titre</title>
	<meta name="description" content="test">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</head>
<header class="header">
			<div><h1>hello <?=$_SESSION['e_mail']?></h1></div>
			<script>alert('bienvenue sur votre profil!')</script>
				<ul class="menu">
            <li>
                <a href="#">Contact</a>
                <ul class="contact">
                    <li><a href="">E_mail</a></li>
                    <li><a href="">Telephone</a></li>
                    <li><a href="">facebook</a></li>
                </ul>
            </li>
            <li>
                <a href="#">Help</a>
                <ul class="help">
                    <li><a href="">Réclamation</a></li>
                    <li><a href="">Problème site</a></li>
                    <li><a href="">outils</a></li>
                </ul>
            </li>
						<li>
                <a href="#">Profil</a>
                <ul class="profil">
                    <li><a href="">mes recherches</a></li>
                    <li><a href="">mon profil</a></li>
                    <li><a href="">mes messages</a></li>
										<li><a href="autre.php">Deconnection</a></li>
                </ul>
            </li>

</div>

</header>
<body>
	<form class="block" method="post" action="site.php" name="identiter" onsubmit="return checkForm()" max="2001-01-20">
	<div>
		<label for="age">âge</label>
 			 <select name="age">
 			 		<option value="age">de 18-25 ans</option>
					<option value="age">de 25-35 ans</option>
					<option value="age">de 35-45 ans</option>
					<option value="age">de plus de 45 ans</option>
 			 </select>
	</div>
	<div>
		<label for="ville">ville</label>
			 <input type="search" placeholder="Titre..." name='t'/>
		<div>
		 	<label for="sexe">sexe</label>
		 			<select name="sexe">
		  			 <option value="sexe">FEMME</option>
						 <option value="sexe">HOMME</option>
		  		</select>
	</div>
	<input class="valider" type="submit" name="submit_genre" value="Valider">
</form>
</body>
</html>
<script>
$('.menu li').hover(
			function(e) {
					 $(this).find('ul').toggle();
			},
			function(e) {
						$(this).find('ul').toggle();
	});
</script>
