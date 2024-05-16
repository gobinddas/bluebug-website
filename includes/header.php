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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <!-- FontAwesome version 4.7 -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- FontAwesome version 5.8 -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">

    <!-- FontAwesome version 5.10 -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.2/css/all.css">

    <!-- Simple Line Icons -->
    <link rel="stylesheet" href="css/simple-line-icons.css">

    <!-- Magnific Popup -->
    <link rel="stylesheet" href="css/magnific-popup.css">

    <!-- Slick Slider -->
    <link rel="stylesheet" href="css/slick.min.css">


    <!-- Custom Style -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Favicon -->
    <link rel="shortcut icon" href="images/logo2.png">
    <style>

    </style>


</head>
<!-- End of Head Section -->

<body>
    <header class="header fixed-header">
        <div class="containers">
            <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand" href="./">
                    <figure>
                        <img src="images/logo.png" alt="" class="">
                    </figure>
                    <!-- <figure class="figure">
						  	<img src="images/logo-w.png" alt="" class="">	
						  </figure> -->
                </a>
                <button type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler">
                    <img src="images/menu2.png" alt="">
                </button>
                <div class="collapse navbar-collapse text-right" id="navbarNav">
                    <ul class="navbar-nav">
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

                        <li class="nav-item <?php if ($page == 'service') {
                                                echo 'active';
                                            } ?>">
                            <a href="service" class="nav-link">Our Services</a>
                        </li>

                        <li class="nav-item <?php if ($page == 'portfolio') {
                                                echo 'active';
                                            } ?>">
                            <a href="portfolio" class="nav-link">Portfolio</a>
                        </li>

                        <li class="nav-item <?php if ($page == 'Blogs') {
                                                echo 'active';
                                            } ?>">
                            <a href="blog" class="nav-link contact">Blogs</a>
                        </li>


                    </ul>
                </div>
                <div><a class="btn-dark" href="contact">Contact Now</a></div>
            </nav>
        </div>
    </header>
    <!-- Header Ends -->