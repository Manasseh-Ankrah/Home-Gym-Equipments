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
                    <img src="gym_images/watch7.webp" class="d-block w-100 featured-img" alt="gym_images/watch7.webp">
                </div>
            </div>
        </div>
    </section>

    <div class="container mt-5 mb-5 ">
        <div class="row">
            <div class="col-md-4" style="float: left;">
                <img src="gym_images/watch1.jpg" class="d-block w-100 contact-img" alt="gym_images/watch1.jpg">

            </div>
            <div class="col-md-8 ml-3 mt-1 feature-content text-center">
                <h4 class="info-header mt-5">Wearable Technology Categories!</h4>

                <ul class="list-cont">
                    <li class="mt-2">
                        <i class="bi bi-check icon-check"></i> Apple
                    </li>
                    <li class="mt-2">
                        <i class="bi bi-check icon-check"></i> Techno Smart
                    </li>
                    <li class="mt-2">
                        <i class="bi bi-check icon-check"></i> Huawei Smart Watch
                    </li>
                    <!-- <li class="mt-2">
                        <i class="bi bi-check icon-check"></i> Metal Straightening
                    </li> -->
                    <!-- <li class="mt-2">
                        <i class="bi bi-check icon-check"></i> Make Quality Products
                    </li> -->
                </ul>

                <!-- <div class="row text-center"> -->
                <!-- <div class="col-md-8 ml-3 feature-content text-center"> -->

                <input placeholder="Equipment Name" class="form-control mb-3" />
                <button class="btn btn-primary">Search</button>
                <!-- </div> -->
                <!-- </div> -->

            </div>

        </div>
    </div>


    <div class="container mt-5">
        <div class="row">
            <div class="row mt-3 mb-3">
                <div class="col-lg-4 col-md-4 col-xs-6 thumb">
                    <div class="card">
                        <img src="gym_images/wrist1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h4 class="card-text">Mini Tracker.</h4>
                            <p class="card-text">Distance and Steps tracker.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-xs-6 thumb">
                    <div class="card">
                        <img src="gym_images/wear6.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h4 class="card-text">Apple smart watch Series 5.</h4>
                            <p class="card-text">Apple smart watch (Series 5).</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-xs-6 thumb">
                    <div class="card">
                        <img src="gym_images/gloves.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h4 class="card-text">Smart Gloves.</h4>
                            <p class="card-text">Smart Gloves - Solid grip.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>




        <div class="row">
            <div class="row mt-3 mb-3">

                <div class="col-lg-4 col-md-4 col-xs-6 thumb">
                    <div class="card">
                        <img src="gym_images/wear1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h4 class="card-text">Apple Series 4.</h4>
                            <p class="card-text">Apple smart watch (Series 4).</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-xs-6 thumb ">
                    <div class="card">
                        <img src="gym_images/wrist2.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h4 class="card-text">Turbo Bracelet.</h4>
                            <p class="card-text"> Blood Pressure Tracking Bracelet.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-xs-6 thumb ">
                    <div class="card">
                        <img src="gym_images/wear2.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h4 class="card-text">Turbo Bracelet.</h4>
                            <p class="card-text"> Blood Pressure Tracking Bracelet.</p>
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
                        <h6>You are here - <b style="color: yellow;">Featured</b></h6>
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