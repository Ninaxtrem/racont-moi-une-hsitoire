<?php 
 include "bdd.php";
 
 $nom = $_POST['nom'];
 $prenoms = $_POST['prenoms'];
 $pseudo = $_POST['pseudo'];
 $mail = $_POST['mail'];
 $mdp2 = $_POST['mdp'];
 



$mdp = password_hash ($mdp2, PASSWORD_DEFAULT);
  
//gere le pseudo
$sql = "SELECT * FROM utilisateurs WHERE pseudo = :pseudo";
$requete= $bdd->prepare($sql);
$requete->execute(array(
":pseudo"=> $pseudo));

$countPseudo = $requete->rowCount();

if($countPseudo == 0){
    // Pour les mails 
    $sql1 = "SELECT * FROM utilisateurs WHERE mail = :mail";
    $requete1= $bdd->prepare($sql1);
    $requete1->execute(array(':mail'=>$mail));

    $countmail = $requete1->rowCount();

    if($countmail == 0){
        
        // potentiellement mettre la condition mdp 
        if(!preg_match('@^(?=.{10,}$)(?=(?:.*[A-Z]){1})(?=.*[a-z])(?=(?:.*[0-9]){1}).*@', $mdp2)) {
            header("location:inscriptionfront.php?message=error");
        }
        else {

            $sql = "INSERT INTO  utilisateurs (nom, prenoms, pseudo, mail, mdp) VALUES (:nom, :prenoms, :pseudo, :mail, :mdp)";
            $requete= $bdd->prepare($sql);
            $requete->execute(array(
                ':nom' => $nom,
                ':prenoms' => $prenoms,
                ':pseudo'=> $pseudo,
                ':mail'=> $mail,
                ':mdp'=> $mdp,
            ));    
    
            header("location:connectionfront.php?message=sucess");
    
        }
            //todo la regex esst pas bonne 
       


    }else{
     header("location:inscriptionfront.php?message=error3");
    }
    
    }
    else{
    header("location:inscriptionfront.php?message=error2");}
    // }
//     else{
//     header("location:inscriptionfront.php?message=error");
// }


?>
