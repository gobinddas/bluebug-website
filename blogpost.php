<?php 
  include('config/constants.php');
  include('config/functions.php');
   
?>
<?php
$page = 'blogpost';
include 'includes/header.php'; ?>




<section id="blogpost-page" class="blogpost-page">

    <div class="blur-hero"></div>
    <div class="container">



        <div class="articles-items"> 
            <?php
            $id = $_GET['id'];
            //   getting data from DB
            $sql = "SELECT * FROM blogs WHERE id=$id";
          
            $res = mysqli_query($conn, $sql);
          
            $count = mysqli_num_rows($res);
            $row=mysqli_fetch_assoc($res);
          
            $id = $row['id'];
            $title = $row['title'];
            $author = $row['author'];
            $blogImage = $row['image'];
            $content = $row['content'];
            $created_on = $row['created_on'];
            ?>
            <div class="articles-img"><img src="<?php echo SITEURL; ?>admin/blog/img/<?php echo $blogImage ?>" alt=""></div>
            <p class="date"><?php echo $created_on ?></p>
            <h2 class="common-heading"><?php echo $title ?></h2>
            <p class="common-overview-description "><?php echo $content ?></p>

        </div>






    </div>
</section>




<?php include 'includes/footer.php'; ?>