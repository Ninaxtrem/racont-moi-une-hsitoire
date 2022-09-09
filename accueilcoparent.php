<?php session_start();
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css">
  

  <link rel="stylesheet" href="assets/css/acparent.css">
  <title>Racont moi une Histoire</title>
</head>

<body>
<?php include("bdd.php")
?>
<?php 
$sql = "SELECT * FROM livre";
$requete=$bdd->prepare($sql);
$requete->execute();
$livre=$requete->fetch(); 

?>
    <!--Nav-->
    <div id="navbar">
    <a href="./index.php">
      <img src="assets/img/lg.png" alt="" width="90" height="70">
    </a>
    <div class="nav">
      <a href="profil.php">Profil</a>
    </div>
  
  </div>
  <!-- fin nav -->
<!-- photo-->  
<div class="une">
  <div class="image">
    <div class="photos">
  <img src="assets/img/<?= $livre ["photo"]?>" width= "400px"  height= "400px" >
    </div>
</div>
<p>A la une </p>
<div class="resumer">
  <h4> <?php echo $livre["nom"]?></h4>
  <?php echo $livre["resumer"]?>
</div>
</div>
   
<!-- fin photo -->
<!-- select livre -->


  <!--slide categories-->
  <?php 
$sql = "SELECT * FROM livre";
$requete=$bdd->prepare($sql);
$requete->execute();
?>
  <h3>Romance</h3>
  <div class="slider"> 
    <?php
   while ($livre = $requete->fetch())
   { 
    ?>
    <div class="livre">
    <a href="livre.php?id=<?= $livre["id"]?>">
  <img src="assets/img/<?= $livre ["photo"]?>" width= "200px"  height= "200px" >
    </a>
    <?php
   }
    ?>
  </div>
  </div>



  <div class="photo">
    <img class="image" src="assets/img/feg.jpg" heigth=300px width=100%></img>
  </div>
  <!--fin slide categories-->
  <!--slide categories-->
  <h3>Thriller</h3>
  <div class="slider2">
    <div class="img-div div1"></div>
    <div class="img-div div2"></div>
    <div class="img-div div3"></div>
    <div class="img-div div4"></div>
    <div class="img-div div5"></div>
    <div class="img-div div6"></div>
    <div class="img-div div7"></div>
    <div class="img-div div8"></div>
    <div class="img-div div9"></div>
    <div class="img-div div10"></div>
    <div class="img-div div11"></div>
    <div class="img-div div12"></div>
    <div class="img-div div13"></div>
    <div class="img-div div14"></div>
  </div>

  <div class="photo">
    <img class="image" src="assets/img/logo2.jpg" heigth=300px width=100%></img>
  </div>







  <!-- enregistreur -->
  <div class="lecteur">
    <div class="container-fluid">
      <div class="row justify-content-end">
        <div class="d-flex flex-wrap-reverse">
          <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <a href="http://localhost/nina/racont-moi-une-hsitoire/crudparent.php"><img src="assets/img/micro.png" class="img-fluid" alt="Responsive image"></a>
          </div>
          <div class="col align-self-center">
            <div class="mx-auto  w-75">
              <p>
              <h3 class="text-center"> Enregistrement</h3>
             Pour pouvoir enregistrer son livre il faut, 
             Clicker sur le microphone a gauche et suivre les etapes indiquer sur la page
             suivante.
      
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- fin enregistreur -->
  <!-- foother-->
  <footer class="bg-dark text-center text-white">
    <h2 class="text-center"> Les reseaux sociaux</h2>
    <div class="p-2 bd-highlight"> <a href="https://www.facebook.com/RoseEternails" class="text-white">
        <h2><i class="fa-brands fa-facebook"></i></h2>
      </a></div>
    <div class="p-2 bd-highlight"><a href="https://api.whatsapp.com/send?phone=33634240457&app=facebook&entry_point=page_cta&fbclid=IwAR3XEy4tffTwDwE7AQD6TSYrn5Dyy2B0QXSlIbuMtgO-knqcNUckE9x4ps0" class="text-white">
        <h2><i class="fa-brands fa-whatsapp"></i></h2>
      </a></div>

    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2022 Copyright: by Nina
      <a class="text-white">Raconte moi une Histoire</a>
    </div>

  </footer>
  <!-- fin foother-->





  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
  </script>
  <script src="https://code.jquery.com/jquery-3.0.0.js"></script>
  <script src="https://code.jquery.com/jquery-migrate-3.3.2.js"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

  <script src="assets/js/cat.js"></script>
</body>

</html>