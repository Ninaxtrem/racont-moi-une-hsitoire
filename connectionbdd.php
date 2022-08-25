<?php
include "bdd.php";


$pseudo = $_POST['pseudo'];
$mdp = $_POST['mdp'];


$sql1 = "SELECT * FROM utilisateurs WHERE pseudo = :pseudo";
$requete1= $bdd->prepare($sql1);
$requete1->execute(array(
    ':pseudo'=>$pseudo,
));

$count = $requete1->rowCount();

if ($count == 1 ){

    while ($resultat = $requete1->fetch()){
        $mdp = $resultat['mdp'];

        if (password_verify($mdp, $resultat['mdp'])) {
            session_start();
            $_SESSION['id'] = $resultat['id'];
            $_SESSION['pseudo'] = $resultat['pseudo'];

            header("location:Livre.php");
            
        } else{
            
        }
    }

}
else{
    header("location:inscriptionfront.php?message=error");
}
