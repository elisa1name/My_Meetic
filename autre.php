<?php
require_once 'test.php';

$session = new meetic();
$session->session();
if (isset($_POST['nom']) && !empty ($_POST['nom']) &&
    isset($_POST['prenom']) && !empty ($_POST['prenom']) &&
    isset($_POST['sexe']) && !empty ($_POST['sexe']) &&
    isset($_POST['civilite']) && !empty ($_POST['civilite']) &&
    isset($_POST['ville']) && !empty ($_POST['ville']) &&
    isset($_POST['e_mail']) && !empty ($_POST['e_mail']) &&
    isset($_POST['telephone']) && !empty ($_POST['telephone']) &&
    isset($_POST['mot_de_passe']) && !empty ($_POST['mot_de_passe']) &&
    isset($_POST['date_naissance']) && !empty ($_POST['date_naissance'])) {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $sexe = $_POST['sexe'];
    $civilite = $_POST['civilite'];
    $ville = $_POST['ville'];
    $e_mail = $_POST['e_mail'];
    $telephone = $_POST['telephone'];
    $mot_de_passe = $_POST['mot_de_passe'];
    $date_naissance = $_POST['date_naissance'];
    $siteweb = new meetic();
    $site = $siteweb->inscription($nom, $prenom, $sexe, $civilite, $ville, $e_mail, $telephone, $mot_de_passe, $date_naissance);
    }
      if(isset($_POST['submit_co'])){
        $siteweb = new meetic();
        $e_mail = $_POST['e_mail'];
        $mot_de_passe = $_POST['password'];
        $siteweb->connection($e_mail, $mot_de_passe);
      }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="meetic.css"/>
	<title>titre</title>
	<meta name="description" content="test">
</head>
<body>
	<header class="header">
    		<form class="block" method="post"  name="identiter"  action="autre.php" onsubmit="return checkForm()" max="2001-01-20">
          <h1>Inscription</h1>
          <div>
    	        <label for="sexe">Sexe</label>
    	        <input type="radio" name="sexe" value="F" /> Femme
    	        <input type="radio" name="sexe" value="H" /> Homme
    	    </div>
    			<div>
            <p>Nom</p>
    				<label for="nom"></label><input type="text" name="nom" required="required">
          </div>
          <div>
            <p>Prenom</p>
    				<label for="prenom"></label><input type="text" name="prenom" required="required">
          </div>
          <div>
    					<label for="civilite">civilite</label>
    					<select name="civilite" required="required">
    					<option value="M." selected>M.</option>
    					<option value="Mme." selected>Mme.</option>
    					<option value="Mlle." selected>Mlle.</option>
    					</select>
    			</div>
          <div>
          <p>Ville</p>
  				<label for="ville"></label><input type="text" name="ville"  required="required">
        </div>
        <div>
        <p>E_mail</p>
				<label for="e_mail"></label><input type="email" name="e_mail" required="required">
      </div>
      <div>
        <p>Telephone</p>
				<label for="telephone"></label><input type="telephone" name="telephone" required="required">
      </div>
      <div>
      <p>Password</p>
      <label for="mot_de_passe"></label><input type="password" name="mot_de_passe" required="required">
    </div>
    <div>
      <p>Date de naissance</p>
      <label for="date"></label><input type="date" name="date_naissance" required="required">
    </div>
    <input class="valider" type="submit" name="submit" value="Valider">
</form>
<form class="block1" method="post" name="identiter" action="" onsubmit="return checkForm()">
  <h1>Connection</h1>
  <p>Email</p>
  <label for="Email"></label><input type="email" name="Email" >
  <p>Password</p>
  <label for="password"></label><input type="password" name="password" ><br><br>
  <input class="valider" type="submit" name="submit_co" value="Valider">

</form>
</header>
</body>
</html>
