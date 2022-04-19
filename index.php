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
                    <button class="btn btn-primary dropdown-toggle m-3 " type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                    <img src="gym_images/gym_treadmill_bg2.jpg" class="d-block w-100 bg-img" alt="gym_images/gym_treadmill_bg2.jpg">
                    <div class="carousel-caption d-none d-md-block bg-header">
                        <h1>Welcome to Home Gym Equipments</h1>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="gym_images/gym_treadmill_bg3.jpg" class="d-block w-100 bg-img" alt="gym_images/gym_treadmill_bg3.jpg">
                    <div class="carousel-caption d-none d-md-block bg-header">
                        <h1>Treadmills for fitness facilities, health and sports clubs</h1>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="gym_images/gym1.jpeg" class="d-block w-100 bg-img" alt="gym_images/gym1.jpeg">
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
    <!-- 
    <div class="container-fluid rss-container">
        <div class="row text-center">
            <div class="col-md-12">
                <h3 class="mt-4 text-white">RSS Feed: Checkout whats new!</h3>
                <form>
                    <div class="container">
                        <div class="row" style="display: flex;justify-content:center">
                            <div class="col-md-6">
                                <select id="rss-input" class="form-select" aria-label="Default select example">
                                    <option selected>Select an rss feed</option>
                                    <option value="1">Google</option>
                                    <option value="2">NBC</option>
                                </select>
                                <button class="btn btn-danger text-center" style="margin-top:10px" id="clear-rss" type="button">Clear Feed</button>

                            </div>
                        </div>
                    </div>
                </form>
                <p id="rss-output"></p>
            </div>
        </div>
    </div> -->


    <div class="container mt-3">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="section-headline services-head text-center">
                    <h2>What We Have</h2>
                </div>
            </div>
        </div>
        <div class="row text-center mb-4">
            <div class="col-md-4 col-sm-4 col-xs-12 mt-2">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <a class="services-icon" href="#">
                            <i class="bi bi-binoculars card-icon"></i>
                        </a>
                        <h5 class="card-title">Exercise Mat</h5>
                        <p class="card-text">The Exercise Mat's thick foam and non-slip surface make it a perfect tool for performing both stretching and strength exercisefloor without it </p>
                        <a href="#" class="btn btn-primary">Link</a>
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
                        <a href="#" class="btn btn-primary">Link</a>
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
                        <a href="#" class="btn btn-primary">Link</a>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="container-fluid counter-container">
        <div class="row text-center">
            <div class="card counter-card">
                <div class="card-body">
                    <h5 class="card-title">Visitors Counter</h5>
                    <h4 class="card-text">
                        <?php
                        echo  $counter;
                        ?>
                    </h4>
                    <a href="#" class="btn btn-primary">Counter</a>
                </div>
            </div>
        </div>
    </div>


    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="card mb-3 mt-3">
                    <img src="gym_images/training-image-01.jpg" class="card-img-top middle-img" alt="gym_images/gym1.jpeg">
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-3 card-element-1">
                    <div class="card-body">
                        <h5 class="card-title">Increased Muscle Tone</h5>
                        <p class="card-text">For full-body blasts, use the hexagon dumbbells for numerous weight training workouts..</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5 mb-5 video-container">
            <div class="col-md-8 ">
                <div class="card mb-3 ">
                    <video src="videos/gym-video.mp4" controls="true" loop autoplay></video>
                    <!-- <img src="gym_images/gym1.jpeg" class="card-img-top middle-video" alt="gym_images/gym1.jpeg"> -->
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="card mb-3 card-element-1">
                    <div class="card-body">
                        <h5 class="card-title">The complete bench for hundreds of strength and functional exercises</h5>
                        <p class="card-text">Get the all-in-one functional training gear that lets you do a variety of total-body exercises. In a small footprint, it combines elastic bands, hexagon dumbbells, weighted knuckles, and a training mat..</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-3">
                    <img src="gym_images/gym_bg2.jpg" class="card-img-top middle-img" alt="gym_images/gym1.jpeg">
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-5 mb-5 video-container">
        <div class="col-md-8 ">
            <div class="card mb-3 ">
                <video src="videos/gym-vid2.mp4" controls="true" autoplay loop></video>
                <!-- <img src="gym_images/gym1.jpeg" class="card-img-top middle-video" alt="gym_images/gym1.jpeg"> -->
            </div>
        </div>
    </div>






    <footer class="bg-dark text-center text-white">
        <div class="container">
            <div class="row">
                <h4 class="text-center mt-5">Site Map</h4>
                <div class="col-md-4 col-sm-6 mt-5">
                    <ul style="margin-left:40px;display: flex;justify-content:flex-start;flex-direction:column;align-items:flex-start">
                        <h6>You are here - <b style="color: yellow;">Home</b></h6>
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


    <!-- Ajax and javascript -->
    <script>
        // Event listener to select token
        document.getElementById('rss-input').addEventListener('change', function() {
            showRSS(this.value);
        });


        // Send token to get rss feed
        function showRSS(token) {
            var rssOutput = document.getElementById('rss-output');
            if (token.length == 0) {
                rssOutput.innerHTML = "";
                return;
            }

            if (XMLHttpRequest) {
                var xhr = new XMLHttpRequest();
            } else {
                var xhr = new ActiveXObject("Microsoft.XMLHTTP");
            }

            xhr.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    rssOutput.innerHTML = this.responseText;
                } else {
                    rssOutput.innerHTML = 'Fetching RSS feed from ' + token.toUpperCase() + ', please wait...';
                }
            }

            xhr.open('GET', 'getrssfeed.php?q=' + token, true);
            xhr.send();
        }

        // Clear the feed
        document.getElementById('clear-rss').addEventListener('click', function() {
            document.getElementById('rss-output').innerHTML = "";
        });
    </script>
</body>

</html>


<script>
    var free_cookieconsent = {
        cookievalue: "",
        cookiename: "FREE_CONSENT",
        reload: true,
        self: this,
        analytic: "checked",
        advertisements: "checked",
        personalisation: "checked",
        restorechecked: true,
        init: function(objname) {
            this.setCSS();
            this.createCC(objname);
            this.hideCC();
            this.setHeadText('<h3>We use cookies</h3>');
            this.setMainText('When you click &apos;Ok&apos;, you accept all cookies on our website. We can optimize our website. More info see <a href="/privacy-cookies">privacy- en cookies</a>');
            this.setAcceptButtonText('Ok');
            this.setRejectButtonText('No Thanks');
            if (this.getCookie(this.cookiename) == "") {
                this.showCC();
            }
        },
        setHeadText: function(text) {
            document.getElementById("headtext").innerHTML = text;
        },
        setMainText: function(text) {
            document.getElementById("maintext").innerHTML = text;
        },
        setAcceptButtonText: function(text) {
            document.getElementById("acceptbuttontext").innerHTML = text;
        },
        setRejectButtonText: function(text) {
            document.getElementById("rejectbuttontext").innerHTML = text;
        },
        hideCC: function() {
            document.getElementById('cookieConsent').style.display = "none";
        },
        showCC: function() {
            document.getElementById('cookieConsent').style.display = "block";
            var cc_cookie = this.getCookie(this.cookiename);
        },
        getGUID: function() {
            return 'xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx'.replace(/[xy]/g, function(c) {
                var r = Math.random() * 16 | 0,
                    v = c == 'x' ? r : (r & 0x3 | 0x8);
                return v.toString(16);
            });
        },
        setCookie: function(cname, cvalue, exdays, cdomain) {
            var d = new Date();
            var ccdomain = "";
            d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
            var expires = "expires=" + d.toUTCString();
            if (typeof(cdomain) != "undefined") {
                ccdomain = ";domain=" + cdomain;
            }
            document.cookie = cname + "=" + cvalue + ";" + expires + ccdomain + ";path=/";

        },
        getCookie: function(cname) {
            var name = cname + "=";
            var decodedCookie = decodeURIComponent(document.cookie);
            var ca = decodedCookie.split(';');
            for (var i = 0; i < ca.length; i++) {
                var c = ca[i];
                while (c.charAt(0) == ' ') {
                    c = c.substring(1);
                }
                if (c.indexOf(name) == 0) {
                    return c.substring(name.length, c.length);
                }
            }
            return "";
        },
        okButton: function() {
            this.hideCC();
            this.setCookie(this.cookiename, "A" + this.cookievalue, 365, location.host);
        },
        setCSS: function() {
            var css = '.cookieConsent {' +
                'font-family: ProximaNova-Regular,Helvetica,Arial,sans-serif;' +
                'position: fixed;' +
                'width: 100%;' +
                'bottom: 0;' +
                'background-color:#222222;' +
                'display: none;' +
                'z-index:999;' +
                '}' +
                ' .cookieConsent.open {' +
                '	 display: block;' +
                '}' +
                ' .cookieConsent__wrapper {' +
                'top:0;' +
                //'position: fixed;' + 
                'bottom: inherit;' +
                'z-index: 100;' +
                '-webkit-box-sizing: border-box;' +
                'box-sizing: border-box;' +
                'width: 100%;' +
                'padding: 25px 10px;' +
                'background-color: #eeeeee;' +
                'color: #ffffff;' +
                '}' +
                '.cookieConsent__container {' +
                ' padding: 5px;' +
                ' margin: 0 auto;' +
                '}' +
                '.cookieConsent__container a {' +
                ' color: #ffffff;' +
                ' text-decoration: underline;' +
                '}' +
                '.cookieConsent__container p {' +
                ' margin-top: 0;' +
                '}' +
                ' @media screen and (min-width: 760px) {' +
                ' .cookieConsent__container {' +
                '	 max-width: 770px;' +
                '	 margin: 0 auto;' +
                '}' +
                '}' +
                '.cookieConsent__form {' +
                ' display: -webkit-box;' +
                ' display: -ms-flexbox;' +
                ' display: flex;' +
                ' -webkit-box-pack: justify;' +
                ' -ms-flex-pack: justify;' +
                ' justify-content: space-between;' +
                '}' +
                '@media screen and (min-width: 760px) {' +
                ' .cookieConsent__form > div {' +
                ' -webkit-box-align: center;' +
                ' -ms-flex-align: center;' +
                ' align-items: center;' +
                '}' +
                '}' +
                '@media screen and (min-width: 760px) {' +
                ' .cookieConsent__form > div span {' +
                ' margin-right: 25px;' +
                '}' +
                '}' +
                '.cookieConsent__form-submit {' +
                ' width: 100%;' +
                ' display: -webkit-box;' +
                ' display: -ms-flexbox;' +
                ' display: flex;' +
                ' -webkit-box-align: end;' +
                ' -ms-flex-align: end;' +
                ' align-items: flex-end;' +
                ' -webkit-box-pack: end;' +
                ' -ms-flex-pack: end;' +
                ' justify-content: flex-end;' +
                '}' +

                ' .cookieConsent__form-submit > button {min-width: 180px; height: 48px;' +
                ' background-color: #64b265;' +
                ' padding: 5px 35px;' +
                ' border: none;' +
                ' border-radius: 6px;' +
                ' color: #ffffff;' +
                ' font-size: 16px;' +
                ' font-weight: 600;' +
                ' line-height: 24px;' +
                '}' +
                '.consentCategories {' +
                'display: -webkit-box;' +
                'display: -ms-flexbox;' +
                'display: none;' +
                '-webkit-box-orient: vertical;' +
                '-webkit-box-direction: normal;' +
                '-ms-flex-direction: column;' +
                'flex-direction: column;' +
                'font-weight: 600;' +
                '}' +
                '@media screen and (min-width: 760px) {' +
                ' .consentCategories {' +
                ' min-width: 70%;' +
                '}' +
                '}' +
                ' @media(max-width: 740px) {.cookieConsent__form-submit>button {width: 100%; margin-right: 0;}}' +
                ' @media(min-width: 740px) {button.accept-cookies {margin-right: 20px;}}' +
                'button.accept-cookies {background-color: #40b192;margin-bottom:12px;}' +
                'button.accept-cookies:hover{background-color: #328C73;cursor: pointer}' +
                'button.reject-cookies {background-color: #ffffff; border: 2px solid #40b192; color: #40b192; margin-bottom:12px;}' +
                'button.reject-cookies:hover{border-color: #328C73;color: #328C73;cursor: pointer}' +
                '.cookieConsent__form>div{flex-wrap:wrap; justify-content:flex-start; align-items:flex-start}' +
                '.cookieConsent__form>div label{ font-weight:normal; line-height:28px; padding-left:37px;}' +
                '.cookieConsent__container h3 {color: #4e4e4e; font-size:20px; margin: 12px 0; font-family: ProximaNova-Regular,Helvetica,Arial,sans-serif; font-weight: 600;}' +
                '.cookieConsent__container p {color: #585858; margin-bottom: 12px;}' +
                '.cookieConsent__container a {color: #562772; border-bottom: none;}' +
                '.cookieConsent__container a:hover {color: #3c1b4f;}';
            head = document.head || document.getElementsByTagName('head')[0],
                style = document.createElement('style');
            style.type = 'text/css';
            if (style.styleSheet) {
                // This is required for IE8 and below.
                style.styleSheet.cssText = css;
            } else {
                style.appendChild(document.createTextNode(css));
            }
            head.appendChild(style);
        },
        createCC: function(objname) {
            var self = this;
            var html = '<div id="cookieConsent" class="cookieConsent open">';
            html += '		<div class="cookieConsent__wrapper">';
            html += '		<div class="cookieConsent__container">';
            html += '			<div id="headtext"> </div>';
            html += '			<p id="maintext"> ';
            html += '			</p>';
            html += '			<form class="cookieConsent__form">';
            html += '				<div class="consentCategories">';
            html += '				</div>';
            html += '				<div class="cookieConsent__form-submit">';
            html += '					<button id="acceptbuttontext" type="button" class="accept-cookies" onclick="' + objname + '.setAllCookies();' + objname + '.okButton();"></button>';
            html += '					<button id="rejectbuttontext" type="button" class="reject-cookies" onclick="' + objname + '.setMinimalCookies();' + objname + '.okButton();"></button>';
            html += '				</div>';
            html += '			</form>';
            html += '		</div>';
            html += '	</div>';
            html += '</div>';
            var x = document.createElement("div");
            x.innerHTML = html;
            document.body.appendChild(x);
        },
        setAllCookies: function() {
            this.cookievalue = 'true';
        },
        setMinimalCookies: function() {
            this.cookievalue = 'false';
        }
    }
    var cc = Object.create(free_cookieconsent);
    cc.init("cc");
    //console.log('Init cookieconsent');
</script>