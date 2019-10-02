<?php
  class meetic
  {
    private $bdd;
    function __construct() {
      try {
        $this->bdd = new PDO('mysql:host=localhost;dbname=addict', 'root', 'root');
        $this->bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      } catch (PDOException $e) {
        die('Erreur : ' .$e->getMessage());
      }
  }
  public function session(){
    session_start();
  }
  public function inscription($nom, $prenom, $sexe, $civilite, $ville, $e_mail, $telephone, $mot_de_passe, $date_naissance) {

    $hashpass = password_hash($mot_de_passe, PASSWORD_DEFAULT);
      $req = "INSERT INTO utilisateur (nom, prenom, sexe, civilite, ville, e_mail, telephone, mot_de_passe, date_naissance)
      VALUES (:nom, :prenom, :sexe, :civilite, :ville, :e_mail, :telephone, :mot_de_passe , :date_naissance)";
        $resp = $this->bdd->prepare($req);
        $resp->bindValue(':nom', $nom);
        $resp->bindValue(':prenom', $prenom);
        $resp->bindValue(':sexe', $sexe);
        $resp->bindValue(':civilite', $civilite);
        $resp->bindValue(':ville', $ville);
        $resp->bindValue(':e_mail', $e_mail);
        $resp->bindValue(':telephone', $telephone);
        $resp->bindValue(':mot_de_passe', $hashpass);
        $resp->bindValue(':date_naissance', $date_naissance);
      $resp->execute();


  }

  public function connection($e_mail, $mot_de_passe) {

  $req = "SELECT e_mail, mot_de_passe FROM utilisateur WHERE e_mail = :e_mail";
  $resp = $this->bdd->prepare($req);
  $resp->bindValue(':e_mail', $e_mail);
  $resp->execute();
  $res = $resp->fetchAll();
      if (password_verify($mot_de_passe, $res[0]['mot_de_passe'])) {
          $_SESSION['e_mail']= $e_mail;
            header('Location: membre.php');
              exit();
        } else {
          echo 'Le mot de passe est invalide.';
        }

 }
}
?>
