<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
            <h1 class="title">Inscription</h1>

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
        echo"<div class='title'>mdp ne respecte pas</div>";
        }
      }
      
      ?>

            <form action="inscriptionbdd.php" method="POST" class="sign-form">
                <div>
                    <input class="input" type="text" name="nom" placeholder="Nom" required autocomplete="off" />
                </div>
                <div>
                    <input class="input" type="text" name="prenoms" placeholder="Prénoms" required autocomplete="off" />
                </div>
                <div>
                    <input class="input" type="text" name="pseudo" placeholder="Pseudo" required autocomplete="off" />
                </div>
                <div>
                    <input class="input" type="mail" name="mail" placeholder="Mail" required autocomplete="off" />
                </div>
                <div>
                    <input class="input" type="password" name="mdp" placeholder="Mot de passe" required
                        autocomplete="off" />
                </div>

                <div><input type="submit" class="button"></input></div>


             

                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
    <script src="assets/js/java.js"></script>
</body>

</html>