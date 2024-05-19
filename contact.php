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
                <form action="/action_page.php">
                    <label for="fname" class="common-overview-title">Full Name</label><br>
                    <input type="text" class="common-overview-description" id="fname" name="fname" placeholder="eg. John Smith"><br>
                    <label for="email" class="common-overview-title">Email</label><br>
                    <input type="email" id="email" class="common-overview-description" name="email" placeholder="eg. John smith123@gmail.com"><br>
                    <label for="contact" class="common-overview-title">Contact Number</label><br>
                    <input type="text" id="contact" class="common-overview-description" name="contact" placeholder="+977 9808740455"><br>
                    <label for="message" class="common-overview-title">Whats your idea?</label><br>
                    <textarea name="message" rows="2" id="message" class="common-overview-description" placeholder="Tell us more about your project"></textarea>
                   <button class="btn-light">Let’s Start</button>
                </form>
            </div>

        </div>


    </div>
</section>

<?php include 'includes/footer.php'; ?>