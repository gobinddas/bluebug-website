<?php
include('sidebar.php');
?>
<!-- Page Content  -->
<div id="content" class=" dashboard ">

  <div class="container">

    <h2 class="mb-4 common-heading">Admin Dashboard</h2>
    <div class="mainblock row col-6">
      <div class="block">
        <h4 class="common-heading" >
          Users
        </h4>
        <?php
        $sql = "SELECT * FROM users";
        $res = mysqli_query($conn, $sql);
        $count = mysqli_num_rows($res);

        ?><br>
        <h5  class="common-overview-title "><?php echo $count; ?></h5>
      </div>
      <div class="block">
        <h4 class="common-heading">
          Blogs
        </h4>
        <?php
        $sql = "SELECT * FROM blogs";
        $res = mysqli_query($conn, $sql);
        $count = mysqli_num_rows($res);

        ?><br>
        <h5 class="common-overview-title "><?php echo $count; ?></h5>
      </div>
      <div class="block">
        <h4 class="common-heading">
          Inquiries
        </h4><?php
              $sql = "SELECT * FROM inquiries where status='processing'";
              $res = mysqli_query($conn, $sql);
              $count = mysqli_num_rows($res);

              ?><br>
        <h5 class="common-overview-title "><?php echo $count; ?></h5>
      </div>
      <div class="block">
        <h4 class="common-heading">
          Completed inquiries
        </h4 ><?php
              $sql = "SELECT * FROM inquiries where status='completed'";
              $res = mysqli_query($conn, $sql);
              $count = mysqli_num_rows($res);

              ?><br>
        <h5 class="common-overview-title "><?php echo $count; ?></h5>
      </div>
    </div>
  </div>
</div>

</body>

</html>