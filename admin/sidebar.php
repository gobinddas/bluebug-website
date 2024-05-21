<?php
include('../config/constants.php');
include('../config/functions.php');
$index_user_data = index_loginval($conn);


$user_id = $index_user_data['user_id'];
$fname = $index_user_data['firstname'];

if ($index_user_data == false) {
  header("Location: ../index");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin - BlueBug </title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">






  <link rel="shortcut icon" href="./images/favicon.ico">

  <!-- Custom Style -->
  <link rel="stylesheet" href="sidebar.css">

  <!-- Favicon -->
  <link rel="shortcut icon" href="./images/favicon.ico">
  <style>

  </style>
  
</head>

<body>
  


  <header class="header ">
        <div class="container">

            <nav class="navbar  navbar-expand-lg">
                <div class="container-fluid ">
                    <a class="navbar-brand" href="#"><img src="../images/logo.png" alt=""></a>

                    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">

                        <div class="blur-hero"></div>

                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasNavbarLabel"><img src="../images/logo.png" alt=""></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                            <ul class="navbar-nav  ">
                            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="dashboard">Dashboard</a>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Blogs
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="add_blog">Add blog</a></li>
                <li><a class="dropdown-item" href="manage_blogs">Manage blog</a></li>

              </ul>

            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Admins
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="add_admin">Add Admins</a></li>
                <li><a class="dropdown-item" href="manage_admin">Manage Admins</a></li>

              </ul>

            </li>
            <li class="nav-item">
              <a class="nav-link" href="inquiry">Inquiries</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="past_inquiries">Past Inquiries</a>
            </li>

            

                            </ul>
                            <div class="nav-btn"><a class="btn-dark" href="logout">Logout</a></div>

                        </div>
                    </div>

                </div>
            </nav>


        </div>
    </header>




  <!-- boostap script  -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>