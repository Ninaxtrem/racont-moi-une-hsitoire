<?php

//partie connexion//
$user = "root";
$pass = "";

try {
   
   $bdd = new PDO('mysql:host=localhost;dbname=raconte_moi_une_histoire;charset=utf8', $user, $pass);
   
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}

?>