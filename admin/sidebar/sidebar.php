<?php 
  include('../config/constants.php');
  include('../config/functions.php');
  $index_user_data = index_loginval($conn);


  $user_id=$index_user_data['user_id'];
  $fname=$index_user_data['firstname'];

  if($index_user_data == false){
      header("Location: ../index.php");
  }
   ?>
<!doctype html>
<html lang="en">
  <head>
  	<title>Sidebar 02</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="sidebar/css/style.css">
		<link rel="shortcut icon" href="../images/favicon.ico">
		<link href="https://cdn.jsdelivr.net/npm/quill@2.0.0/dist/quill.snow.css" rel="stylesheet" />
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

   

  


    <!-- Custom Style -->
    <link rel="stylesheet" href="../css/style.css">
  <style>
			.ck-editor__editable[role="textbox"] {
			/* Editing area */
			min-height: 200px;
		}
  </style>
  </head>
  <body>
		
		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar">
				<div class="custom-menu">
					<button type="button" id="sidebarCollapse" class="btn btn-primary">
	          <i class="fa fa-bars"></i>
	          <span class="sr-only">Toggle Menu</span>
	        </button>
        </div>
				<div class="p-4 pt-5">
		  		<h1><a href="dashboard.php" class="logo"><img src="../images/logo_white.png" alt=""></a></h1>
	        <ul class="list-unstyled components mb-5">
				<h5 style="color: #0CB2DB;">welcome, <?php echo ucfirst($fname) ?></h3><br>
			<li class="active">
	              <a href="dashboard.php">Dashboard</a>
	          </li>
	          <li >
	            <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Blogs</a>
	            <ul class="collapse list-unstyled" id="homeSubmenu">
                <li>
                    <a href="add_blog.php">Add blogs</a>
                </li>
                <li>
                    <a href="manage_blogs.php">Manage blogs</a>
                </li>
                
	            </ul>
	          </li>
	          
	          <li>
              <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Users</a>
              <ul class="collapse list-unstyled" id="pageSubmenu">
                <li>
                    <a href="add_admin">Add Admin</a>
                </li>
                <li>
                    <a href="manage_admin">Manage Admin</a>
                </li>
                
              </ul>
	          </li>
	          <li>
              <a href="inquiry.php">Inquiries</a>
	          </li>
	          <li>
              <a href="past_inquiries">Past Inquiries</a>
	          </li>
			 
				<li>
				<a href="logout.php" style="color:#ff272A;">Logout</a>
				</li>
			  
			  
	        </ul>

				

	       
	        <div class="footer" style="margin-top: 100%;">
	        	<p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved Bluebug Software. <i class="icon-heart" aria-hidden="true"></i>  <a href="https://bluebugsoft.com" target="_blank" style="color:aqua">Bluebugsoft.com</a>
						  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
	        </div>

	      </div>
    	</nav>

        