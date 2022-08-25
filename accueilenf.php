<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <link rel="stylesheet" href="assets/css/style.css">
    <title>Racont moi une Histoire</title>
</head>

<body>
 <!-- slide -->
 <div class="carrousel">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/img/1.jpg" class="d-block w-100 h-10 !important" alt="...">
            </div>
            <div class="carousel-item">
                <img src="assets/img/2.jpg" class="d-block w-100 h-10 !important" alt="...">
            </div>
            <div class="carousel-item">
                <img src="assets/img/3.jpg" class="d-block w-100 h-10 !important" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    </div>

    <!-- fin slide -->
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



    <!-- foother-->
    <footer class="bg-dark text-center text-white">
        <h2 class="text-center"> Les reseaux sociaux</h2>
        <div class="p-2 bd-highlight"> <a href="https://www.facebook.com/RoseEternails" class="text-white">
                <h2><i class="fa-brands fa-facebook"></i></h2>
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
    <script src="assets/js/java.js"></script>
</body>

</html>