<?php
if(isset($_POST["submit"])) {
  try {
    $bdd = new PDO('mysql:host=localhost;dbname=addict', 'root', 'root');
  } catch (PDOException $e) {
    die('Erreur : ' .$e->getMessage());
  }
  $nom = $_POST['nom'];

  $req = "INSERT INTO utilisateur (nom, prenom, sexe, civilite, ville, e_mail, telephone, mot_de_passe, repeatpassword)
    VALUES ('$nom', 'c', 'e', 'kkk', 'fddfd', 'dfdfdf', 1234567890, 'dqdqsd', 'sfdsfsdfsdf')";
    $resp = $bdd->prepare($req);
    $resp->execute();
    $res = $resp->fetchAll();
  print_r($res);
  }
?>
