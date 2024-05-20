<?php 
  include('config/constants.php');
  include('config/functions.php');
 
  if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        // something was posted
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        
        if(!empty($name) && !empty($phone) && !empty($email) && !empty($message)){

            
            $query = "INSERT INTO inquiries(name,phone,email,message,created_on) VALUES ('$name','$phone','$email','$message',NOW())";

            mysqli_query($conn,$query);

            header("Location: index.php");
        }
        else{
            echo "enter valid information!";
        }
    }
   
?>
<?php $page = 'contact' ?>
<?php include 'includes/header.php'; ?>





<section id="page-contact" class="page-contact">

    <div class="blur-hero"></div>
    <div class="container">

        <div class="hero-page-contact">
            <div class="hero-page-contact-content">
                <h4 class="common-sub-heading">CONTACT US</h4>

                <h2 class="common-heading">Let’s make your idea into reality</h2>
                <p class="common-description">All great things starts with an idea. Give us an opportunity to build your software and website and showcase your vision to the world.</p>
                <div class="hero-contact-image">
                    <img src="./images/contact2.png" alt="">
                </div>
            </div>

            <div class="hero-page-contact-form">
                <form action=""method="POST">
                    <label for="fname" class="common-overview-title">Full Name</label><br>
                    <input type="text" class="common-overview-description" id="fname" name="name" placeholder="eg. John Smith"><br>
                    <label for="email" class="common-overview-title">Email</label><br>
                    <input type="email" id="email" class="common-overview-description" name="email" placeholder="eg. John smith123@gmail.com"><br><p class="error"id="invalid_email"> </p>
                    <label for="phone" class="common-overview-title">Contact Number</label><br>
                    <input type="tel" id="phone" class="common-overview-description" name="phone" placeholder="+977 9808740455"maxlength="10"pattern="[0-9]{10}"><br><p class="error"id="invalid_phone"> </p>
                    <label for="message" class="common-overview-title">Whats your idea?</label><br>
                    <textarea name="message" rows="2" id="message" class="common-overview-description" placeholder="Tell us more about your project"></textarea>
                   <button class="btn-light">Let’s Start</button>
                </form>
            </div>

        </div>


    </div>
</section>

<?php include 'includes/footer.php'; ?>