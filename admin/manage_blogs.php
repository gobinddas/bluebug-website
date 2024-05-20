<?php
 include('sidebar.php');
?>
<style>
    table{
        font-size: 1.2rem;
    }
</style>
<!-- Page Content  -->
<div id="content" class="p-4 p-md-5 pt-5">

<h2 class="mb-4">Bluebug Software: Manage Blogs</h2>
<div class="main-panel">
        <div class="content-wrapper">
          <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>

                        <th>Id</th>
                        <th>Title</th>
                        <th>Blog image</th>
                        <th>Created at</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                if(isset($_GET['page'])){
                  $page = $_GET['page'];
                  }
                  else{
                      $page = 1;
                  }
                  
                  $offset = ($page - 1) * 5;
                    
                    // create a sql query to get all data
                    $sql = "SELECT * FROM blogs LIMIT $offset, 5";
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
                            $blogContent = $row['content'];
                            $Created_at = $row['created_on'];
                            ?>
                    <tr>
                        <td><?php echo $sn++; ?></td>
                        <td><?php echo $title; ?></td>
                        <td><img src="<?php echo SITEURL; ?>admin/blog/img/<?php echo $blogImage ?>" alt="" style="border-radius: 5px; width: 100px;;height: auto;"></td>
                        <td><?php echo $Created_at; ?></td>
                        <td>
                            <a href="<?php echo SITEURL; ?>admin/edit_blog.php?id=<?php echo $id; ?>"class="btn btn-info">Edit</a>
                            <a href="<?php echo SITEURL; ?>admin/deleteBlog.php?id=<?php echo $id; ?>&blogImage=<?php echo $blogImage ?>" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    <?php
                        }
                    }
                    else
                    {
                        echo "ERROR";
                    }

                    ?>
                </tbody>
            </table>
          </div>
          
        <nav aria-label="Page navigation example">
          <ul class="pagination justify-content-center">
            <li class="page-item ">
              <a class="page-link" href="<?php if($page <=1){echo '#';}else{echo "?page=".$page -1;} ?>" tabindex="-1">Previous</a>

            </li>
            
            <?php 
                
                
                for($i = 1; $i <= $total; $i++){

                    if($page==$i)
                    {
                        $active= "page_active";
                    }
                    else{
                        $active="";
                    }
            
                    // echo"<a href='?page=$i'><span class='$active'>". $i ."</span></a>";
                    echo"<li class='page-item'><a class='page-link' href='?page=$i'class='$active'>". $i ."</a></li>";

                }
                
                if($page!==$i)
                {
                 
                }
            
            ?>
            <!-- <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li> -->
            <li class="page-item">
              <a class="page-link" href="<?php if($page >= $total){echo '#';}else{echo "?page=".$page +1;} ?>">Next</a>
            </li>
          </ul>
        </nav>
        </div>

</div>

<script src="sidebar/js/jquery.min.js"></script>
<script src="sidebar/js/popper.js"></script>
<script src="sidebar/js/bootstrap.min.js"></script>
<script src="sidebar/js/main.js"></script>
</body>
</html>
