<?php
ob_start();
 include('sidebar.php');
?><?php 
 
  $index_user_data = index_loginval($conn);

  $userid= $index_user_data['user_id'];
  $email=$index_user_data['email'];

  if($index_user_data == false){
      header("Location: ../index.php");
  }
  if($_SERVER['REQUEST_METHOD'] == "POST")
    {
      $mysqli = new mysqli('localhost','root', '', 'bluebug');
        // something was posted
        $title = $_POST['title'];
        $author = $_POST['author'];
        $blogContent = $mysqli -> real_escape_string($_POST['blogContent']);
        
        

        


        // for image
        if(isset($_FILES['blogImage']['name']))
        {
            $blogImage = $_FILES['blogImage']['name'];

            if($blogImage!="")
            {
                // rename image
                // get extension of selected image
                $ext = end(explode('.', $blogImage));

                // create new name for image
                $blogImage = "blog-".rand(00000,99999).".".$ext; 

                // upload image
                // get src path and destination path

                // source path is current location of the image
                $src=$_FILES['blogImage']['tmp_name'];

                // destination path for the image to be uploaded
                $dst = "blog/img/".$blogImage;
                
                // finally upload the food image
                $upload = move_uploaded_file($src, $dst);

                // checking
                if($upload==false)
                {

                    header("Location: add_blog.php");
                    $_SESSION['upload'] = '<script> alert("Failed to upload the image"); </script>';

                    die();
                }
            }
        }
        else{
            $blogImage = ""; //deafult value
        }
        if(!empty($title) && !empty($author) && !empty($blogImage) && !empty($blogContent)){

            
            $query = "INSERT INTO blogs(title,author,image,content,created_on) VALUES ('$title','$author','$blogImage','$blogContent',Now())";

            mysqli_query($conn,$query);

            header("Location: manage_blogs.php");
        }
        else{
            echo "enter valid information!";
        }
    }
   
?>

<!-- Page Content  -->
<div id="content" class=" dashboard">


<div class="container">

  <h2 class="mb-4 common-heading">Bluebug Software: Add Blog</h2>
  
          <form action="" method="POST" enctype="multipart/form-data">
              <input type="text" placeholder="Title" name="title"  required> <br>
              <input type="text" placeholder="Author" name="author" required><br>
              <label for="file">Select a image</label><br>
              
              <div class="upload-btn-wrapper">
          
                <input type="file" name="blogImage" class="inputfile" required>
              </div>
              <br>
              
                <textarea id="editor" placeholder="Write your blog post here..." rows="80" name="blogContent"></textarea><br>
              
  
              
              
              <input type="submit"name="submit" value="Publish" class="subbtn">
          </form>
 
          
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          
          <!-- partial -->
        
        <!-- main-panel ends -->
  
 

  </div>
  </div>

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

    