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
                <h3 class="hge"><a href="index.php" class="logo-text">HGE</a></h3>
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

                <div class="dropdown drop-cont">
                    <button class="btn btn-primary dropdown-toggle m-3" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Account
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                        <button class="dropdown-item" type="button"><a href="viewProfile.php" class="drop-item">View Profile</a></button>
                        <button class="dropdown-item" type="button"><a href="editProfile.php" class="drop-item">Edit Profile</a></button>
                        <button class="dropdown-item" type="button"><a href="logout.php" class="drop-item">Logout</a></button>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <section>
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="gym_images/gym1.jpeg" class="d-block w-100 bg-img wanted-slider" alt="gym_images/gym_treadmill_bg3.jpg">
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
                    <img src="gym_images/gym_treadmill_bg3.jpg" class="d-block w-100 bg-img wanted-slider" alt="gym_images/gym1.jpeg">
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
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="section-headline services-head text-center">
                    <h2 class="mb-3 mt-3">Gym Equipments for Sale</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="row mt-3 mb-3">
                <div class="col-lg-4 col-md-4 col-xs-6 thumb">
                    <div class="card">
                        <img src="gym_images/gym10.webp" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-text">20kg Dumbells.</h5>
                            <p class="card-text price-text">$ 200</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-xs-6 thumb">
                    <div class="card">
                        <img src="gym_images/treadmill.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-text">Treadmill Double handle.</h5>
                            <p class="card-text price-text">$ 4500</p>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-md-4 col-xs-6 thumb ">
                    <div class="card">
                        <img src="gym_images/gym6.webp" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-text">40kg Dumbells.</h5>
                            <p class="card-text price-text">$ 400</p>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row mt-3 mb-3">
                <div class="col-lg-4 col-md-4 col-xs-6 thumb">
                    <div class="card">
                        <img src="gym_images/bike3.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-text">Electronic Bicycle.</h5>
                            <p class="card-text price-text">$ 3000</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-xs-6 thumb">
                    <div class="card">
                        <img src="gym_images/hex-dumbbell_hero.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-text">10kg Dumbells.</h5>
                            <p class="card-text price-text">$ 100</p>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-md-4 col-xs-6 thumb ">
                    <div class="card">
                        <img src="gym_images/lliptical.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-text">Exercise Swing.</h5>
                            <p class="card-text price-text">$ 4000</p>
                        </div>
                    </div>
                </div>
            </div>



            <div class="row mt-3 mb-3">
                <div class="col-lg-4 col-md-4 col-xs-6 thumb">
                    <div class="card">
                        <img src="gym_images/gym9.jpeg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-text">Metallic Disk.</h5>
                            <p class="card-text price-text">$ 300</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-xs-6 thumb">
                    <div class="card">
                        <img src="gym_images/gym6.webp" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-text">7kg Dumbbell.</h5>
                            <p class="card-text price-text">$ 450</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-xs-6 thumb ">
                    <div class="card">
                        <img src="gym_images/gym3.webp" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-text">5kg Dumbell.</h5>
                            <p class="card-text price-text">$ 100</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <footer class="bg-dark text-center text-white">
        <div class="container">
            <div class="row">
                <h4 class="text-center mt-5">Site Map</h4>
                <div class="col-md-4 col-sm-6 mt-5">
                    <ul style="margin-left:40px;display: flex;justify-content:flex-start;flex-direction:column;align-items:flex-start">
                        <h6>You are here - <b style="color: yellow;">Wanted</b></h6>
                    </ul>
                </div>
                <div class="col-md-4 col-sm-6 mt-5">
                    <ul class="footer-list">
                        <h6>Useful Links</h6>
                        <li><a class="footer-list-item" href="index.php">Home</a></li>
                        <li><a class="footer-list-item" href="information.php">Information</a></li>
                        <li><a class="footer-list-item" href="register.php">Wanted</a></li>
                        <li><a class="footer-list-item" href="workshop.php">Workshop</a></li>
                        <li><a class="footer-list-item" href="gallery.php">Gallery</a></li>
                        <li><a class="footer-list-item" href="featured.php">Featured</a></li>
                        <li><a class="footer-list-item" href="contact.php">Contact</a></li>
                    </ul>
                </div>
                <div class="col-md-4 col-sm-6 mt-5">
                    <ul class="footer-list">
                        <h6>Product Categories</h6>
                        <li><a class="footer-list-item">Wearable Technologies</a></li>
                        <li><a class="footer-list-item">Dumbells</a></li>
                        <li><a class="footer-list-item">Inclined Benches</a></li>
                        <li><a class="footer-list-item">Foldable Mats</a></li>
                        <li><a class="footer-list-item">Steppers</a></li>
                        <li><a class="footer-list-item">Gym Sneakers</a></li>
                    </ul>
                </div>

            </div>
        </div>
        <div class="container text-center p-4 pb-0">
            <section class="mb-4 footer-icons">
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-facebook-f"></i></a>

                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-twitter"></i></a>

                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-google"></i></a>

                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-instagram"></i></a>

                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-linkedin-in"></i></a>

            </section>
        </div>

        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2020 Copyright:
            <a class="text-white" href="#">HGE</a>
        </div>
    </footer>


    <script src="js/jquery-3.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/new-bootstrap4.js"></script>

</body>

</html>