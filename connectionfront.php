<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <h1 class="title">Connection</h1>
    <br>
    <form class="sign-form" action="connectionbdd.php" method="POST">
      <?php
      if(isset($_GET['message'])) {
        if($_GET['message'] == "success") {
        echo"votre inscription a bien été prise en compte";
        }

          if($_GET['message'] == "error") {
          echo"<div class=titre>Le mail rentré n'existe pas</div>";
          }
      }
      ?>
      <div>
        <input class="input" type="text" name="pseudo" placeholder="pseudo" required autocomplete="off" />
      </div>
      <div>
        <input class="input" type="password" name="mdp"
          placeholder="mdp                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            "
          required autocomplete="off" />
      </div>
      <div><input type="submit" class="button"></button></div>
    </form>
   
    <div class="check-div">
      <label class="container">
        <span class="remember-text"> Se souvenir de moi </span>
        <input type="checkbox" checked="checked" />
        <span class="checkmark"></span>
      </label>

    </div>



</body>

</html>