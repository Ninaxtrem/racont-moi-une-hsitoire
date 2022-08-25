<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="slick/slick.css"/>



    <link rel="stylesheet" href="assets/css/livre.css">
    <title>Racont moi une Histoire</title>
</head>

<body>

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

    <!-- titre livre-->
   

    <h1> TITRE
    </h1>
  
    <!-- fin titre livre-->
    <!--lecteur-->
    <div class="contain">
        <div class="container">
            <div class="music-player">
                <div class="cover">
                    <img src="assets/img/logo2.jpg" alt="">
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
                            src="https://grandvincentmarion.github.io/HTML-Personal-website/img-codePen/kygo-stole-the-show.mp3"
                            type="audio/mp3" />
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
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quibusdam ratione neque ab cum vero
                        consectetur nesciunt, aspernatur incidunt facilis consequuntur enim, ea officiis repudiandae
                        temporibus modi nemo quasi sint veritatis.
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quibusdam ratione neque ab cum vero
                        consectetur nesciunt, aspernatur incidunt facilis consequuntur enim, ea officiis repudiandae
                        temporibus modi nemo quasi sint veritatis.
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quibusdam ratione neque ab cum vero
                        consectetur nesciunt, aspernatur incidunt facilis consequuntur enim, ea officiis repudiandae
                        temporibus modi nemo quasi sint veritatis.
                    </div>
                    <div class="col align-self-center">
                        <div class="mx-auto  w-75">
                            <p class="text-center">
                                <div class="titre">
                                    <h2>Catégorie</h2>
                                </div>
                                +7
                            </p>
                            <p class="text-center">
                                <div class="titre">
                                    <h2> Auteurs</h2>
                                </div>
                                Nom de lauteur
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>





    
        <!-- fin resumer -->



        <?php include("assets/include/foother.php") ?>






       
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