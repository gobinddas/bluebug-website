<?php 
  include('config/constants.php');
  include('config/functions.php');
   
?>
<?php
$page = 'blog';
include 'includes/header.php'; ?>




<section id="blog-page" class="blog-page">

    <div class="blur-hero"></div>
    <div class="container">

        <div class="top-articles">
       
            <div class="articles-items">
                <div class="articles-img"><img src="./images/article2.jpg" alt=""></div>
                <div class="articles-content">
                    <h2 class="common-heading">Mastering Programming: Accelerated Learning</h2>
                    <p class="common-description"> To rapidly learn a programming language, focus on fundamentals, set clear goals, practice consistently, leverage interactive resources like tutorials and coding challenges, seek guidance from experienced mentors, collaborate on projects, and stay persistent. Embrace a growth mindset, break down complex concepts into manageable chunks, and regularly review and reinforce your understanding. By immersing yourself in coding tasks and embracing continuous learning, you can swiftly master programming languages and become a proficient developer.</p>
                </div>
            </div>
            <div class="articles-items">
                <div class="articles-img"><img src="./images/article2.jpg" alt=""></div>
                <div class="articles-content">
                    <h2 class="common-heading">Mastering Programming: Accelerated Learning</h2>
                    <p class="common-description"> To rapidly learn a programming language, focus on fundamentals, set clear goals, practice consistently, leverage interactive resources like tutorials and coding challenges, seek guidance from experienced mentors, collaborate on projects, and stay persistent. Embrace a growth mindset, break down complex concepts into manageable chunks, and regularly review and reinforce your understanding. By immersing yourself in coding tasks and embracing continuous learning, you can swiftly master programming languages and become a proficient developer.</p>
                </div>
            </div>
            

        </div>

        <div class="blog-part">
            <h4 class="common-sub-heading">Blog</h4>
            <h2 class="common-heading">Latest Insights from Bluebug Software</h2>
            <p class="common-description">Explore cutting-edge trends, tech tips, and company updates from Bluebug Software.</p>
            <div class="blog-collection row">
            <?php
                if(isset($_GET['page'])){
                  $page = $_GET['page'];
                  }
                  else{
                      $page = 1;
                  }
                  
                  $offset = ($page - 1) * 5;
                    
                    // create a sql query to get all data
                    $sql = "SELECT * FROM blogs LIMIT $offset, 9";
                    $sql2 = "SELECT * FROM blogs";

                    $res = mysqli_query($conn, $sql);
                    $res2 = mysqli_query($conn, $sql2);

                    $count = mysqli_num_rows($res2);
                    $rowsPerPage = 5;
                    $total = ceil($count / $rowsPerPage);
                    
                    $sn=1;
                    if($count>0)
                    {
                      
                        while($row=mysqli_fetch_assoc($res))
                        {
                            $id = $row['id'];
                            $title = $row['title'];
                            $blogImage = $row['image'];
                            $content = $row['content'];
                            $Created_at = $row['created_on'];
                            ?>
                <div class="blog-item col-md-4 mb-3" >
                    <a href="<?php echo SITEURL;?>blogpost?id=<?php echo $id ?>">
                    <img src="<?php echo SITEURL; ?>admin/blog/img/<?php echo $blogImage ?>" alt="">
                    <p class="date"><?php echo $Created_at; ?></p>
                    <a href="<?php echo SITEURL;?>blogpost?id=<?php echo $id ?>" class="common-overview-title "><?php echo $title; ?></a>
                    <div class="content"style="display: -webkit-box;    -webkit-line-clamp: 3;    -webkit-box-orient: vertical;    overflow: hidden;">

                        <p class="common-overview-description "><?php echo $content; ?></p>
                    </div>
                    <a href="<?php echo SITEURL;?>blogpost?id=<?php echo $id ?>"style="color: #069FCE;" >Read more.</a></a>
                </div>
                <?php
                        }
                    }
                    else
                    {
                        echo "ERROR";
                    }

                    ?>
                <!-- <div class="blog-item">
                    <img src="./images/blog1.png" alt="">
                    <p class="date">2024/10/1</p>
                    <a class="common-overview-title ">Blog Blog two</a>
                    <p class="common-overview-description ">Tailored applications to streamline
                        operations and enhance productivity.</p>
                </div>
                <div class="blog-item">
                    <img src="./images/blog1.png" alt="">
                    <p class="date">2024/10/1</p>
                    <a class="common-overview-title ">Blog Blog three</a>
                    <p class="common-overview-description ">Tailored applications to streamline
                        operations and enhance productivity.</p>
                </div> -->

            </div>

        </div>


    </div>
</section>




<?php include 'includes/footer.php'; ?>