<?php
include('sidebar.php');
?><?php

    $index_user_data = index_loginval($conn);

    $userid = $index_user_data['user_id'];
    $email = $index_user_data['email'];
    $id = $_GET['id'];
    //   getting data from DB
    $sql = "SELECT * FROM blogs WHERE id=$id";

    $res = mysqli_query($conn, $sql);

    $count = mysqli_num_rows($res);
    $row = mysqli_fetch_assoc($res);

    $id = $row['id'];
    $title = $row['title'];
    $author = $row['author'];
    $blogImage = $row['image'];
    $content = $row['content'];



    if ($index_user_data == false) {
        header("Location: ../index.php");
    }
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        // something was posted
        $title = $_POST['title'];
        $author = $_POST['author'];
        $content = $_POST['content'];






        // for image
        if (isset($_FILES['blogImage']['name'])) {
            $newblogImage = $_FILES['blogImage']['name'];

            if ($newblogImage != "") {
                // rename image
                // get extension of selected image
                $ext = end(explode('.', $newblogImage));

                // create new name for image
                $newblogImage = "blog-" . rand(00000, 99999) . "." . $ext;

                // upload image
                // get src path and destination path

                // source path is current location of the image
                $src = $_FILES['blogImage']['tmp_name'];

                // destination path for the image to be uploaded
                $dst = "blog/img/" . $newblogImage;

                // finally upload the food image
                $upload = move_uploaded_file($src, $dst);

                // checking
                if ($upload == false) {

                    header("Location: add_blog.php");
                    $_SESSION['upload'] = '<script> alert("Failed to upload the image"); </script>';

                    die();
                }
            }
        } else {
            $newblogImage1 = "($blogImage"; //deafult value
        }
        if (!empty($title) && !empty($author) && !empty($newblogImage) && !empty($content)) {


            $query = "UPDATE blogs SET
            title = '" . $title . "',
            image = '" . $newblogImage . "',
            content = '" . $content . "',
            author = '" . $author . "'
            WHERE id='" . $id . "'
            ";

            mysqli_query($conn, $query);

            header("Location: manage_blogs.php");
        } else {
            echo "enter valid information!";
        }
    }

    ?>

<!-- Page Content  -->
<div id="content" class="dashboard">



    <div class="container">
        <h2 class="mb-4 common-heading">Bluebug Software: Add Blog</h2>

        <form action="" method="POST" enctype="multipart/form-data">
            <input type="text" placeholder="Title" name="title" value="<?php echo $title; ?>" required> <br>
            <input type="text" placeholder="Author" name="author" value="<?php echo $author; ?>" required><br>
            <label for="file">current Image</label> <br>
            <img id="uploadPreview" src="<?php echo SITEURL; ?>admin/blog/img/<?php echo $blogImage ?>" alt="" style="border-radius: 5px; width: 100px;;height: auto;">
            <br>
            <label for="file">Change Image</label><br>



            <div class="upload-btn-wrapper">
                
                <input id="uploadImage" type="file" name="blogImage" class="inputfile" value="<?php echo SITEURL; ?>admin/blog/img/<?php echo $blogImage ?>" onchange="PreviewImage();" required>

            </div>
            <br>

            <textarea id="editor" placeholder="Write your blog post here..." rows="8" name="content"><?php echo $content; ?></textarea><br>




            <input type="submit" name="submit" value="Publish" class="subbtn">
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
        .create(document.querySelector('#editor'))
        .catch(error => {
            console.error(error);
        });
</script>
<script type="text/javascript">
    function PreviewImage() {
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("uploadImage").files[0]);

        oFReader.onload = function(oFREvent) {
            document.getElementById("uploadPreview").src = oFREvent.target.result;
        };
    };
</script>
</body>

</html>