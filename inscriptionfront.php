<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/inscri.css">
    <title>Inscription</title>
</head>


<body>
<div class="logo">
</div> 
<div class="logo2">
</div>
    <div class="form">
        <div class="login-sqare">
            <h1 class="titles">Inscription</h1>

            <?php 
     if(isset($_GET['message'])){
      if($_GET['message'] == "error3") {
      echo"<div class='title'>Le compte existe deja</div>";
      }
    }
      if(isset($_GET['message'])){
        if($_GET['message'] == "error2") {
        echo"<div class='title'>Pseudo utilise</div> ";
        }
      }
   
      if(isset($_GET['message'])){
        if($_GET['message'] == "error") {
        echo"<div class='title'>Le mot de passe m'est pas respecter</div>";
        }
      }
      
      ?>

  

    <form action="inscriptionbdd.php" method="POST" class="sign-form">

    <div class="form-group ">
    <label for="inputPassword6">Nom</label>
    <input type="text" name="nom" class="form-control" placeholder="Nom"> 
   

        <label for="inputPassword6">Prenom</label>
        <input type="text" name="prenoms" class="form-control" placeholder="Prenom"> 
    
 
            <label for="inputPassword6">Pseudo</label>
            <input type="text" name="pseudo" class="form-control" placeholder="Pseudo"> 
   
                <label for="inputPassword6">Mail</label>
                <input type="mail" name="mail" class="form-control form-control-sm" id="colFormLabelSm" placeholder="Mail">
   
                    <label for="inputPassword6">Mot de passe</label>
                    <input type="password" id="inputPassword6"  name="mdp" class="form-control" placeholder="Mot de passe" aria-describedby="passwordHelpInline">
                    <small id="passwordHelpInline" class="text-muted">
                    Le mot de passe doit contenir, une majuscule, une miniscule, un chiffre, un caractere speciale.
                    </small>
  </div>

                        <button type="submit" class="btn btn-outline-info">S'inscrire</button>

</form>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
    <script src="assets/js/java.js"></script>
</body>

</html>