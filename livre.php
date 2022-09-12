<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="slick/slick.css"/>



    <link rel="stylesheet" href="assets/css/livre.css">
    <title>Racont moi une Histoire</title>
</head>

<body>
<?php include("bdd.php")
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
    <?php 
$sql = "SELECT * FROM livre WHERE id=".$_GET['id']."";
$requete=$bdd->prepare($sql);
$requete->execute();
$livre=$requete->fetch(); 
 

?>
    <!-- titre livre-->
   


    <h1> <?php echo $livre["nom"]?>
    </h1>
 
    <!-- fin titre livre-->
    <!--lecteur-->
    <div class="contain">
        <div class="container">
            <div class="music-player">
                <div class="cover">
                <img src="assets/img/<?= $livre ["photo"]?>" width= "300px"  height= "300px" >
                </div>
                <div class="titre">

                    <h3>Kygo</h3>
                    <div class="oeuvre">
                        <h2>Stole the show</h2>
                    </div>
                </div>
                <div class="lecteur">
                    <audio style="width: 100%;" class="fc-media">
                        <source
                            src="/assets/img/jordan hary potter.wav"
                            type="audio/wav" />
                          
                    </audio>
                </div>
            </div>
        </div>
    </div>
    
    <!--fin lecteur-->

    <!-- resumer -->

    <div class="resumer">
        <div class="container-fluid">
            <div class="row justify-content-end">
                <div class="d-flex flex-wrap-reverse justify-content-center">
                    <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                        <h2>Resumer</h2>
                        <h4><?php echo $livre["resumer"]?></h4>
                       
                    </div>
                    <div class="col align-self-center">
                        <div class="mx-auto  w-75">
                            <p class="text-center">
                                <div class="titre">
                                    <h2>Date de parrution</h2>
                                    <p><?php echo $livre["date_de_parrution"]?></p>
                                </div>
        
                            </p>
                            <p class="text-center">
                                <h2> Nom de lauteur </h2>
                                <div class="titre">
                                    <p><?php echo $livre["auteur"]?></p>
                                </div>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>





    
        <!-- fin resumer -->



        <!-- foother-->
        <footer class="bg-dark text-center text-white">
            <h3 class="text-center"> Les reseaux sociaux</h3>
            <div class="p-2 bd-highlight"> <a href="https://www.facebook.com/RoseEternails" class="text-white">
                    <h3><i class="fa-brands fa-facebook"></i></h3>
                </a></div>
            <div class="p-2 bd-highlight"><a
                    href="https://api.whatsapp.com/send?phone=33634240457&app=facebook&entry_point=page_cta&fbclid=IwAR3XEy4tffTwDwE7AQD6TSYrn5Dyy2B0QXSlIbuMtgO-knqcNUckE9x4ps0"
                    class="text-white">
                    <h2><i class="fa-brands fa-whatsapp"></i></h2>
                </a></div>

            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                © 2022 Copyright: by Nina
                <a class="text-white">Raconte moi une Histoire</a>
            </div>

        </footer>
        <!-- fin foother-->






       
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
        </script>
        <script src="https://code.jquery.com/jquery-3.0.0.js"></script>
        <script src="assets/js/livre.js"></script>
</body>

</html>