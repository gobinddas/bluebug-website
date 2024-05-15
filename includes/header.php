<!doctype html>
<html lang="en">


<?php

$phone 	= 	"0426 168 707";
$email 	= 	"admin@greengullygardening.com.au";
$add	= 	"Goonellabah NSW 2480";
$abn	= 	"30 712 042 955";
$co		=	"Green Gully Gardening";
$map	=	"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d50200.65045295272!2d145.10640233785583!3d-38.15087270118522!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad60b2a48d44683%3A0x5045675218ce240!2sFrankston%20VIC%203199%2C%20Australia!5e0!3m2!1sen!2snp!4v1610361880128!5m2!1sen!2snp";

?>


<head>
    <!-- Meta -->
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
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


</head>
<!-- End of Head Section -->

<body>
    <header class="header fixed-header">
        <div class="container">
            <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand" href="./">
                    <figure>
                        <img src="images/logo.png" alt="" class="">
                    </figure>
                    <!-- <figure class="figure">
						  	<img src="images/logo-w.png" alt="" class="">	
						  </figure> -->
                </a>
                <button type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav"
                    aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler">
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
             <div><a class="btn-dark"  href="contact">Contact Now</a></div>
            </nav>
        </div>
    </header>
    <!-- Header Ends -->