
<?php $page = 'home' ?>
<?php 
  include('config/constants.php');
  include('config/functions.php');
  $index_user_data = index_loginval($conn);




   
?>
<?php include 'includes/header.php'; ?>


<?php include 'includes/banner.php'; ?>
<?php include 'includes/about.php'; ?>
<?php include 'includes/service.php'; ?>
<?php include 'includes/portfolio.php'; ?>

<?php include 'includes/testimonial.php'; ?>
<?php include 'includes/contact.php'; ?>


<?php include 'includes/footer.php'; ?>