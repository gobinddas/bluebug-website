<?php
 include('sidebar.php');
?>
<style>
    table{
        font-size: 1.2rem;
    }
</style>
<!-- Page Content  -->
<div id="content" class="dashboard">


<div class="container">
<h2 class="mb-4 common-heading">Bluebug Software: Manage Blogs</h2>
<div class="main-panel">
        <div class="content-wrapper">
          <div class="table-responsive">
          <table class="table">
                <thead>
                    <tr>

                        <th>Id</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>User type</th>
                        <th>Username</th>
                        <th>User id</th>
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
                        $sql = "SELECT * FROM users LIMIT $offset, 10";
                        $sql2 = "SELECT * FROM users";
    
                        $res = mysqli_query($conn, $sql);
                        $res2 = mysqli_query($conn, $sql2);
    
                        $count = mysqli_num_rows($res2);
                        $rowsPerPage = 10; 
                        $total = ceil($count / $rowsPerPage);
                        
                        $sn=1;

                    if($count>0)
                    {
                        while($row=mysqli_fetch_assoc($res))
                        {
                            $id = $row['id'];
                            $firstname = $row['firstname'];
                            $lastname = $row['lastname'];
                            $user_type = $row['user_type'];
                            $email = $row['email'];
                            $userid = $row['user_id'];

                            ?>
                    <tr>
                        <td><?php echo $sn++; ?></td>
                        <td><?php echo ucfirst($firstname); ?></td>
                        <td><?php echo ucfirst($lastname); ?></td>
                        <td><?php echo $user_type; ?></td>
                        <td><?php echo $email; ?></td>
                        <td><?php echo $userid; ?></td>
                        
                        <td>
                            <a href="<?php echo SITEURL; ?>admin/edit_user.php?id=<?php echo $id; ?>"class="btn btn-info">Edit</a>
                            <a href="<?php echo SITEURL; ?>admin/delete_user.php?id=<?php echo $id; ?>" class="btn btn-danger">Delete</a>
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
</div>


</body>
</html>
