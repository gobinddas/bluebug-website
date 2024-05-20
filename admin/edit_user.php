<?php
 include('sidebar/sidebar.php');

?>
<?php
   $index_user_data = index_loginval($conn);

   $userid= $index_user_data['user_id'];
   $email=$index_user_data['email'];
   $id = $_GET['id'];


  if($index_user_data == false){
      header("Location: ../index.php");
  }
  $sql = "SELECT * FROM users WHERE id=$id";

  $res = mysqli_query($conn, $sql);

  $count = mysqli_num_rows($res);
  $row=mysqli_fetch_assoc($res);

  $id = $row['id'];
  $firstname = $row['firstname'];
  $lastname = $row['lastname'];
  $user_type = $row['user_type'];
  $email = $row['email'];
  $userid = $row['user_id'];
  $password = $row['password'];
  if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        // something was posted
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $user_type = $_POST['user_type'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        if(!empty($firstname) && !empty($lastname) && !empty($user_type)&& !empty($password)){

            $user_id = random_num(9);
            $query = "UPDATE users SET 
            firstname = '". $firstname ."',
            lastname = '". $lastname ."',
            user_type = '". $user_type ."',
            email = '". $email ."',
            password = '". $password ."'
            WHERE id='". $id ."'";

            mysqli_query($conn,$query);

            header("Location: manage_admin.php");
        }
        else{
            echo "enter valid information!";
        }
    }
   
?>
<!-- Page Content  -->
<div id="content" class="p-4 p-md-5 pt-5">




  <h2 class="mb-4">Bluebug Software: Edit Admin</h2>
  
          <form action="" method="POST" enctype="multipart/form-data">
            
              <input type="text"  placeholder="First name" name="firstname"value="<?php echo $firstname; ?>" required>
              
              <input type="text" placeholder="Last name" name="lastname"value="<?php echo $lastname; ?>"required>
              
          
          <select name="user_type" class="custom-select" style="width: 70%;">
            <?php if($user_type == "admin"){
                echo'<option value="admin" selected>Admin</option>';
               }
               else{
                echo'<option value="editor" selected>editor</option>';
               }
                ?>
                <option value="admin">Admin</option>
                <option value="editor">Editor</option>
            </select> <br>
            <input type="text" placeholder="email" name="email"value="<?php echo $email; ?>"required> <br>
            <input type="password" placeholder="password" name="password" value="<?php echo $password; ?>"required>
            <br>           
              
              <input type="submit" name="submit" value="Edit admin" class="subbtn">
          </form>
 
          
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          
          <!-- partial -->
        
        <!-- main-panel ends -->
  
 

  </div>

<script src="sidebar/js/jquery.min.js"></script>
<script src="sidebar/js/popper.js"></script>
<script src="sidebar/js/bootstrap.min.js"></script>
<script src="sidebar/js/main.js"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/41.3.1/classic/ckeditor.js"></script>
  <script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
  </script>
</body>
</html>
 