<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/enregistreur.css">

    <title>Racont moi une Histoire</title>
</head>
<body>
    <!--Nav-->
    <div class="sticky-top">
    <nav class="navbar navbar-dark bg-dark">
      <div class="container justify-content-between">
        <div class="d-none d-lg-block">
          <a href="./index.php">
            <img src="assets/img/lg.png" alt="" width="90" height="70">
          </a>
        </div>
        <div class="navbar navbar-expand-lg">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-content"
            aria-controls="navbar-content" aria-expanded="false" aria-label="toggle-navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        
        </div>
    </nav>
  </div>
    <!-- fin nav -->
   
<button id="startRecordingButton"><i class="fa-solid fa-microphone"> </i>Demarer l'enregistrement </button>
  <button id="stopRecordingButton"><i class="fa-solid fa-microphone-slash"></i>Arreter l'enregistrement </button>

  <button id="playButton"><i class="fa-solid fa-play"></i> Jouer </button>
  <button id="downloadButton"><i class="fa-solid fa-download"></i> Télécharger </button>

  <!-- foother-->
  <footer class="bg-dark text-center text-white">
        <h2 class="text-center"> Les reseaux sociaux</h2>
        <div class="p-2 bd-highlight"> <a href="https://www.facebook.com/RoseEternails" class="text-white">
               
            </a></div>
        <div class="p-2 bd-highlight"><a
                href="https://api.whatsapp.com/send?phone=33634240457&app=facebook&entry_point=page_cta&fbclid=IwAR3XEy4tffTwDwE7AQD6TSYrn5Dyy2B0QXSlIbuMtgO-knqcNUckE9x4ps0"
                class="text-white">
            </a></div>

        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2022 Copyright: by Nina
            <a class="text-white">Raconte moi une Histoire</a>
        </div>

    </footer>
    <!-- fin foother-->







    
    <script src="https://code.jquery.com/jquery-3.0.0.js"></script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.0.0.js"></script>
  <script src="assets/js/enregistreur.js"></script>
</body>
</html>