<?php
 include('sidebar/sidebar.php');
?>
<style>
    table{
        font-size: 1.2rem;
    }
</style>
<!-- Page Content  -->
<div id="content" class="p-4 p-md-5 pt-5">

<h2 class="mb-4">Bluebug Software: Inquiries</h2>
<div class="main-panel">
<div class="content-wrapper">
          <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>

                        <th>Id</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Message</th>
                        <th>Created on</th>                        
                        
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
                      
                      $offset = ($page - 1) * 10;
                        
                        // create a sql query to get all data
                        $sql = "SELECT * FROM inquiries WHERE status= 'processing' LIMIT $offset, 10";
                        $sql2 = "SELECT * FROM inquiries WHERE status= 'processing'";
    
                        $res = mysqli_query($conn, $sql);
                        $res2 = mysqli_query($conn, $sql2);
    
                        $count = mysqli_num_rows($res2);
                        $rowsPerPage = 10; // You've already limited the query to 2 rows per page
                        $total = ceil($count / $rowsPerPage);
                        
                        $sn=1;

                    if($count>0)
                    {
                        while($row=mysqli_fetch_assoc($res))
                        {
                            $id = $row['id'];
                            $name = $row['name'];
                            $phone = $row['phone'];
                            $email = $row['email'];
                            $message = $row['message'];
                            $created_on = $row['created_on'];
                            

                            ?>
                    <tr>
                        <td><?php echo $sn++; ?></td>
                        <td><?php echo ucfirst($name); ?></td>
                        <td><?php echo $phone; ?></td>
                        <td><?php echo $email; ?></td>
                        <td><?php echo $message; ?></td>
                        <td><?php echo $created_on; ?></td>
                        
                        <td>
                            <a href="<?php echo SITEURL; ?>admin/inq_done.php?id=<?php echo $id; ?>"class="btn btn-info">Done</a>
                            <a href="<?php echo SITEURL; ?>admin/inq_delete.php?id=<?php echo $id; ?>" class="btn btn-danger">Delete</a>
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
