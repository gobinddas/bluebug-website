<!doctype html>
<html lang="en">


<?php

$phone     =     "9808740455";
$email     =     "gobind98077@gmial.com";
$add    =     "Chabahil, kathmandu";
$co        =    "BlueBug Software";

?>


<head>
    <!-- Meta -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $co; ?></title>

    <!-- LInks -->
    <!-- Boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">



    <!-- FontAwesome version 6.5 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <!-- custom css  -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Favicon -->
    <link rel="shortcut icon" href="./images/favicon.ico">
   


</head>
<!-- End of Head Section -->

<body>
    <header class="header ">
        <div class="container">

            <nav class="navbar  navbar-expand-lg">
                <div class="container-fluid ">
                    <a class="navbar-brand" href="./"><img src="./images/logo.png" alt=""></a>

                    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">

                    <div class="blur-hero"></div>

                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasNavbarLabel"><img src="./images/logo.png" alt=""></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                            <ul class="navbar-nav  ">
                                <li class="nav-item  <?php if ($page == 'home') {
                                                            echo 'active';
                                                        } ?>">
                                    <a href="./" class="nav-link">Home</a>
                                </li>

                                <li class="nav-item <?php if ($page == 'about') {
                                                        echo 'active';
                                                    } ?>">
                                    <a href="about" class="nav-link">About Us</a>
                                </li>

                                <!-- <li class="nav-item <?php if ($page == 'service') {
                                                        echo 'active';
                                                    } ?>">
                                    <a href="service" class="nav-link">Our Services</a>
                                </li> -->

                                <!-- <li class="nav-item <?php if ($page == 'portfolio') {
                                                        echo 'active';
                                                    } ?>">
                                    <a href="portfolio" class="nav-link">Portfolio</a>
                                </li> -->
                                <li class="nav-item <?php if ($page == 'carrier') {
                                                        echo 'active';
                                                    } ?>">
                                    <a href="carrier" class="nav-link">Carrier</a>
                                </li>

                                <li class="nav-item <?php if ($page == 'Blogs') {
                                                        echo 'active';
                                                    } ?>">
                                    <a href="blog" class="nav-link contact">Blogs</a>
                                </li>
                                
                            </ul>
                            <div class="nav-btn"><a class="btn-dark" href="contact">Contact Now</a></div>

                        </div>
                    </div>
                  
                </div>
            </nav>
           

        </div>
    </header>
    <!-- Header Ends -->