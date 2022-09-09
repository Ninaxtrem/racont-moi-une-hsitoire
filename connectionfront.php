<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/inscri.css">
  <title>Connection</title>
</head>

<body>
  <!-- sing ing -->

  <div class="logo">
  </div>
  <div class="logo2">
  </div>
  <div class="form">
  <div class="login-sqare">
    <h1 class="titles">Connection</h1>
    <br>
    <form class="sign-form" action="connectionbdd.php" method="POST">
      <?php
      if(isset($_GET['message'])) {
        if($_GET['message'] == "success") {
        echo"votre inscription a bien été prise en compte";
        }

          if($_GET['message'] == "error") {
          echo"<div class=titre>Le pseudo rentrée n'existe pas </div>";
          }
      }
      ?>
     
   
                                    
     <div class="form-group ">
     <label for="inputPassword6">Pseudo</label>
            <input type="text" name="pseudo" class="form-control" placeholder="Pseudo"> 
    <label for="inputPassword6">Mot de passe</label>
                    <input type="password" id="inputPassword6"  name="mdp" class="form-control" placeholder="Mot de passe" aria-describedby="passwordHelpInline">
                    <small id="passwordHelpInline" class="text-muted">

                    </small>
  </div>

                        <button type="submit" class="btn btn-outline-info">S'inscrire</button>

</form>
  
    </div>



</body>

</html>