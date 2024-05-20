<?php
 include('sidebar/sidebar.php');
?>
<!-- Page Content  -->
<div id="content" class="p-4 p-md-5 pt-5">

<h2 class="mb-4">Bluebug Software</h2>
<div class="mainblock">
  <div class="block">
    <h1>
      Users
    </h1>
    <?php
        $sql = "SELECT * FROM users";
        $res = mysqli_query($conn, $sql);
        $count = mysqli_num_rows($res);
                
    ?><br>
    <h4><?php echo $count;?></h4>
  </div>
  <div class="block">
    <h1>
      Blogs
    </h1>
    <?php
        $sql = "SELECT * FROM blogs";
        $res = mysqli_query($conn, $sql);
        $count = mysqli_num_rows($res);
                
    ?><br>
    <h5><?php echo $count;?></h5>
  </div>
  <div class="block">
    <h1>
      Inquiries
    </h1><?php
        $sql = "SELECT * FROM inquiries where status='processing'";
        $res = mysqli_query($conn, $sql);
        $count = mysqli_num_rows($res);
                
    ?><br>
    <h4><?php echo $count;?></h4>
  </div>
  <div class="block">
    <h2>
      Completed inquiries
    </h2><?php
        $sql = "SELECT * FROM inquiries where status='completed'";
        $res = mysqli_query($conn, $sql);
        $count = mysqli_num_rows($res);
                
    ?><br>
    <h4><?php echo $count;?></h4>
  </div>
</div>
</div>
</div>

<script src="sidebar/js/jquery.min.js"></script>
<script src="sidebar/js/popper.js"></script>
<script src="sidebar/js/bootstrap.min.js"></script>
<script src="sidebar/js/main.js"></script>
</body>
</html>
