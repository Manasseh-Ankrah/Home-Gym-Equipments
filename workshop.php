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

<body class="index-body">

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
                    <img src="gym_images/gym_treadmill_bg3.jpg" class="d-block w-100 contact-img" alt="gym_images/gym_treadmill_bg3.jpg">
                    <div class="carousel-caption d-none d-md-block bg-header">
                        <h1>Welcome To Our Workshop</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container mt-5 mb-5 ">
        <div class="row">
            <div class="col-md-6 ml-3 info-content">
                <h4 class="info-header mt-3"> Welcome to our Workshop This is what we do!</h4>
                <p> Our customers have access to some of the best home gym equipment available. The gym equipment listed here is some of the best available.</p>

                <ul class="list-cont">
                    <li class="mt-2">
                        <i class="bi bi-check icon-check"></i> Treadmill Repairs
                    </li>
                    <li class="mt-2">
                        <i class="bi bi-check icon-check"></i> Bench Repairs
                    </li>
                    <li class="mt-2">
                        <i class="bi bi-check icon-check"></i> Pullup Bar Adjustment
                    </li>
                    <li class="mt-2">
                        <i class="bi bi-check icon-check"></i> Metal Straightening
                    </li>
                    <li class="mt-2">
                        <i class="bi bi-check icon-check"></i> Make Quality Products
                    </li>
                </ul>

            </div>
            <div class="col-md-6" style="float: left;">
                <img src="gym_images/unica_3.jpg" class="d-block w-100 contact-img" alt="gym_images/gym_treadmill_bg4.jpg">

            </div>
        </div>
    </div>


    <div class="row mt-5 mb-5 video-container">
        <div class="col-md-8 ">
            <div class="card mb-3 ">
                <video src="videos/gym-vid2.mp4" controls="true" autoplay="true"></video>
                <!-- <img src="gym_images/gym1.jpeg" class="card-img-top middle-video" alt="gym_images/gym1.jpeg"> -->
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="section-headline services-head text-center">
                    <h2 class="mb-3">List of Repaired Gym Equipments</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="" data-image="https://images.pexels.com/photos/853168/pexels-photo-853168.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" data-target="#image-gallery">
                        <img class="img-thumbnail" src="gym_images/lliptical.jpg" alt="Another alt text">
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="" data-image="https://images.pexels.com/photos/158971/pexels-photo-158971.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" data-target="#image-gallery">
                        <img class="img-thumbnail" src="gym_images/treadmill.jpg" alt="Another alt text">
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="" data-image="https://images.pexels.com/photos/305070/pexels-photo-305070.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" data-target="#image-gallery">
                        <img class="img-thumbnail" src="gym_images/gym6.webp" alt="Another alt text">
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Test1" data-image="https://images.pexels.com/photos/853168/pexels-photo-853168.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" data-target="#image-gallery">
                        <img class="img-thumbnail" src="gym_images/bike3.jpg" alt="Another alt text">
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-3">
        <div class="row text-center mb-4">
            <div class="col-md-4 col-sm-4 col-xs-12 mt-2">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <a class="services-icon" href="#">
                            <i class="bi bi-binoculars card-icon"></i>
                        </a>
                        <h5 class="card-title">Exercise Mat</h5>
                        <p class="card-text">The Exercise Mat's thick foam and non-slip surface make it a perfect tool for performing both stretching and strength exercisefloor without it </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12 mt-2">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <a class="services-icon" href="#">
                            <i class="bi bi-brightness-high card-icon"></i>
                        </a>
                        <h5 class="card-title">Hexagon Dumbbell</h5>
                        <p class="card-text">Designed for strength and functional training. Do endless variations of standing and floor exercises thanks to the hexagon shape and knurled grip.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12 mt-2">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <a class="services-icon" href="#">
                            <i class="bi bi-card-checklist card-icon"></i>
                        </a>
                        <h5 class="card-title">Kettlebell</h5>
                        <p class="card-text">The heavy-duty kettlebells from Technogym are both elegant and safe. They're ideal for a wide range of consumers with varying degrees of fitness.</p>
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
                        <h6>You are here - <b style="color: yellow;">Workshop</b></h6>
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