<?php
require_once('counter.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function() {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/5f87064e2901b920769365bd/default';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>

    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/fontawesome/css/all.css" />
    <link href="css/style.css" rel="stylesheet">
    <title>Document</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <!-- <i class="fab fa-github fa-2x mx-3 ps-1"></i> -->
                <h3 class="p-1">HGE</h3>
            </a>
            <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <form class="me-3">
                    <div class="form-white input-group" style="width: 250px;">
                        <input type="search" class="form-control rounded" placeholder="Search or jump to..." aria-label="Search" aria-describedby="search-addon" />
                    </div>
                </form>
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="information.php">Information</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="register.php">Wanted</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="workshop.php">Workshop</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="gallery.php">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="featured.php">Featured</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                </ul>
                <ul class="navbar-nav d-flex flex-row ms-auto me-3">
                    <li class="nav-item me-3 me-lg-0 dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                            <!-- <a href="#">Account</a> -->
                            <i class="fas fa-plus"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider" />
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section>
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="gym_images/gym_treadmill_bg3.jpg" class="d-block w-100 bg-img wanted-slider" alt="gym_images/gym_treadmill_bg3.jpg">
                    <div class="carousel-caption d-none d-md-block bg-header">
                        <h1>Treadmills for fitness facilities, health and sports clubs</h1>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="gym_images/gym_treadmill_bg2.jpg" class="d-block w-100 bg-img wanted-slider" alt="gym_images/gym_treadmill_bg2.jpg">
                    <div class="carousel-caption d-none d-md-block bg-header">
                        <h1>Welcome to Home Gym Equipments</h1>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="gym_images/gym1.jpeg" class="d-block w-100 bg-img wanted-slider" alt="gym_images/gym1.jpeg">
                    <div class="carousel-caption d-none d-md-block bg-header">
                        <h1>The personalised workout at home</h1>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>

    <div class="container-fluid rss-container">
        <div class="row text-center">
            <div class="col-md-12">
                <h4 class="mt-4 text-white">Search for Equipment!</h4>
                <!-- <hr class="underline text-center" /> -->
                <form>
                    <div class="container">
                        <div class="row" style="display: flex;justify-content:center">
                            <div class="col-md-6">
                                <input placeholder="Equipment Name" class="form-control" />
                                <button class="btn btn-secondary text-center" style="margin-top:10px" id="clear-rss" type="button">Search</button>

                            </div>
                        </div>
                    </div>
                </form>
                <p id="rss-output"></p>
            </div>
        </div>
    </div>


    <div class="container mt-5">
        <div class="row">
            <!-- <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="section-headline services-head text-center">
                    <h2 class="mb-3 mt-3">Gallery</h2>
                </div>
            </div> -->
        </div>
        <div class="row">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="" data-image="" data-target="#image-gallery">
                        <img class="img-thumbnail" src="gym_images/gym10.webp" alt="Another alt text">
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="" data-image="" data-target="#image-gallery">
                        <img class="img-thumbnail" src="gym_images/hex-dumbbell_hero.jpg" alt="Another alt text">
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="" data-image="" data-target="#image-gallery">
                        <img class="img-thumbnail" src="gym_images/gym6.webp" alt="Another alt text">
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Test1" data-image="" data-target="#image-gallery">
                        <img class="img-thumbnail" src="gym_images/bike1.jpg" alt="Another alt text">
                    </a>
                </div>
            </div>
            <div class="row mt-3 mb-3">
                <div class="col-lg-4 col-md-4 col-xs-6 thumb">
                    <div class="card">
                        <img src="gym_images/bike3.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Electronic Bicycle.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-xs-6 thumb">
                    <div class="card">
                        <img src="gym_images/treadmill.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Treadmill Double handle.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-xs-6 thumb ">
                    <div class="card">
                        <img src="gym_images/lliptical.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Exercise Swing.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="" data-image="" data-target="#image-gallery">
                        <img class="img-thumbnail " src="gym_images/gym9.jpeg" alt="Another alt text">
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="" data-image="gym_images/gym9.jpg" data-target="#image-gallery">
                        <img class="img-thumbnail" src="gym_images/gym6.webp" alt="Another alt text">
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="" data-image="https://images.pexels.com/photos/305070/pexels-photo-305070.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" data-target="#image-gallery">
                        <img class="img-thumbnail" src="gym_images/unica_2.jpg" alt="Another alt text">
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Test1" data-image="" data-target="#image-gallery">
                        <img class="img-thumbnail" src="gym_images/gym3.webp" alt="Another alt text">
                    </a>
                </div>
            </div>
        </div>
    </div>


    <footer class="bg-dark text-center text-white">
        <!-- Grid container -->
        <div class="container text-center p-4 pb-0">
            <!-- Section: Social media -->
            <section class="mb-4 footer-icons">
                <!-- Facebook -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-facebook-f"></i></a>

                <!-- Twitter -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-twitter"></i></a>

                <!-- Google -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-google"></i></a>

                <!-- Instagram -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-instagram"></i></a>

                <!-- Linkedin -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-linkedin-in"></i></a>

                <!-- Github -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-github"></i></a>
            </section>
            <!-- Section: Social media -->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2020 Copyright:
            <a class="text-white" href="https://mdbootstrap.com/">HGE</a>
        </div>
        <!-- Copyright -->
    </footer>



    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>

</body>

</html>