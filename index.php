<!DOCTYPE html>
<?php
include 'constants.php';
?>

<head>

    <meta charset="utf-8">

    <meta name="viewport" content="width=devidev-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>True Colors Transport Service</title>

    <link rel="stylesheet" type="text/css" href="library/font-awesome-4.3.0/css/font-awesome.min.css">
    <link rel="shortcut icon" type="image/x-icon" href="images/icon.png">
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <link rel="stylesheet" type="text/css" href="library/bootstrap/css/bootstrap-theme.min.css">
    <link rel="stylesheet" type="text/css" href="library/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">
    <link rel="stylesheet" type="text/css" href="css/green.css">
    <style>
         .about-us {
            text-align: center;
            padding: 60px 0;
            background-color: #808080; /* Gray background */
            color: white; /* White text */
        }
        .about-us .content-box {
            font-size: 20px;
            color: white;
            border: 2px solid white;
            padding: 20px;
            margin-top: 20px;
            font-weight: bold;
            transition: background-color 0.3s, color 0.3s;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Box shadow */
            background-color: #808080; /* Gray background */
            min-height: 270px; /* Set a minimum height to ensure uniform size */
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            text-align: center;
        }
        .about-us .content-box:hover {
            background-color: #3c8415; /* Green background on hover */
            color: white; /* White text on hover */
        }
        .about-us .content-box p, .about-us .content-box h5, .about-us .content-box h1 {
            text-align: left;
            margin: 10px 0;
            color: white; /* Ensure text color is white */
        }
        .about-us .content-box h5 {
            font-size: 18px;
        }
        footer {
            background-color: #343a40;
            padding: 20px 0;
            color: white;
        }
        footer .container {
            max-width: 800px;
            margin: 0 auto;
            text-align: center;
        }
        footer small {
            display: block;
            margin: 10px 0;
        }
    </style>
    </style>
</head>

<body>
    <div class="wrapper">
        <nav class=" nim-menu navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php">True Colors Transport Service</a>
                </div>

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#home" class="page-scroll">
                                <h3>Home</h3>
                            </a></li>
                        <li><a href="#about" class="page-scroll">
                                <h3>About</h3>
                            </a></li>
                        <li><a href="pro/signin.php" class="page-scroll">
                                <h3>Book Now</h3>
                            </a></li>
                        <li><a href="pro/adminsignin.php" class="page-scroll">
                                <h3>Admin</h3>
                            </a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <section class="main-heading" id="home">
            <div class="overlay">
                <div class="container">
                    <div class="row">
                        <div class="main-heading-content col-md-12 col-sm-12 text-center">
                            <h1 class="main-heading-title">UV Express Ticket Booking System</h1>
                            <p class="main-heading-text">WELCOME TO,<br />E - TICKETING FOR UV EXPRESS SERVICE</p>
                            <div class="btn-bar">
                                <a href="pro/signin.php" class="btn btn-custom theme_background_color">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="main-heading" id="home">
            <div class="overlay">
                <div class="container">
                    <div class="row">
                        <div class="main-heading-content col-md-12 col-sm-12 text-center">
                            <h1 class="main-heading-title">True Colors Transport Association, Inc.</h1>
                            <p class="main-heading-text">True Colors Transport Service offers a cutting-edge UV Express Ticket Booking System designed to make your commuting experience convenient and hassle-free.
                                <br />With our user-friendly online platform, booking your UV Express tickets has never been easier. 
                                <br/>Enjoy a seamless journey with True Colors Transport Service.
                            </p>
                            <div class="btn-bar">
                                <a href="#" class="btn btn-custom theme_background_color">Get Started</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="about-us" id="about">
        <div class="container">
            <div class="row">
                <h3>ABOUT US</h3>
                <div class="col-md-4">
                    <div class="content-box">
                        <h3>Who we are</h3><h4>We pride ourselves on our commitment to making the booking process seamless and stress-free for all passengers. Through our user-friendly online platform, customers can easily reserve their UV Express tickets in advance, ensuring a hassle-free commuting experience.</h4>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="content-box">
                        <h3>How we do it</h3><h4>Our journey began with a vision to revolutionize the way people travel by UV Express, simplifying the ticketing process and enhancing overall customer satisfaction. With a team of dedicated professionals, we have worked tirelessly to develop a system that prioritizes convenience and reliability.</h4>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="content-box">
                    <h3>Our story</h4><h4>At True Colors Transport Service, we believe in transparency, reliability, and customer-centricity. Our story is one of continuous innovation and dedication to providing a superior booking experience for all UV Express passengers.</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>

       <!-- Footer -->
    <footer>
        <div class="container">
            <h5>© 2024 UV Express Ticket Booking System in True Colors Transport Service</h5>
            <h6>Developers: Joshua Bautista, Albright Brice Cabasal, Charles Adrian Virtucio</h6>
        </div>
    </footer>
    </div>

    <script src="library/modernizr.custom.97074.js"></script>
    <script src="library/jquery-1.11.3.min.js"></script>
    <script src="library/bootstrap/js/bootstrap.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/typed.js"></script>
    <script type="text/javascript" src="js/SmoothScroll.js"></script>
</body>

</html>