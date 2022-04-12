<?php
include 'setup.php';
include 'server.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Ankrah Solomon - HGE</title>
    <meta content="" name="description">
    <meta content="" name="keywords">


    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
</head>

<body style="background-color: #3ec1d5;overflow-y:hidden">

    <?php
    echo $fetch_user;
    ?>


    <!-- <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container d-flex justify-content-between">

            <div class="logo">
                <h1><a href="index.html">HGE</a></h1>
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto" href="index.php">Home</a></li>
                    <li><a class="nav-link scrollto" href="information.php">Information</a></li>
                    <li><a class="nav-link scrollto active" href="wanted.php">Wanted</a></li>
                    <li><a class="nav-link scrollto" href="workshop.php">Workshop</a></li>
                    <li><a class="nav-link scrollto" href="gallery.php">Gallery</a></li>
                    <li><a class="nav-link scrollto" href="featured.php">Featured</a></li>
                    <li><a class="nav-link scrollto" href="contact.php">Contact</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>

        </div>
    </header> -->


    <div>
        <form action="" name="frmUser" method="post">

            <div class="container">
                <div class="row" style="display: flex;justify-content:center;margin-top:150px">
                    <div class="col-sm-6">

                        <h1 style="color: white;display: flex;justify-content:center">Edit Details</h1>
                        <P style="color: white;display: flex;justify-content:center">Fill up the form with correct values.</P>
                        <hr class="mb-3">
                        <div class="message" style="color: red;display: flex;justify-content:center">

                            <label for="username"><b>firstname</b></label>
                            <input class="form-control" id="firstname" type="text" name="firstname" required>


                            <label for="password"><b>lastname</b></label>
                            <input class="form-control" id="lastname" type="text" name="lastname" required>
                            <hr class="mb-3">

                            <div style="display: flex;justify-content:center;align-items:center;">
                                <input type="submit" class="btn btn-primary" id="login" name="submit" value="Edit">
                            </div>

                            <!-- <button class="btn btn-primary"><a href="#" name="submit" class="text-light">Login</a></button> -->
                            <!-- <p style="margin-top: 30px;color:white">Don't have an account? <a href="register.php">Register</a></p> -->
                        </div>
                    </div>
                </div>
        </form>
    </div>

    <!-- ======= Footer ======= -->
    <!-- <footer>

        <div class="footer-area-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="copyright text-center">
                            <p>
                                &copy; Copyright <strong>eBusiness</strong>. All Rights Reserved
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer> -->
    <!-- End  Footer -->

    <!-- <div id="preloader"></div> -->
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> -->
    <script src="assets/js/jquery.min.js"></script>

    <script src="assets/js/main.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


</body>

</html>