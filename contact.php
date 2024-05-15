<?php $page = 'contact' ?>
<?php include 'includes/header.php'; ?>



<div class="breadcrumb" id="breadcrumb">
    <div class="container">
        <div class="double-row">
            <div class="title">
                <h1>Contact Us</h1>
                <ol class="breadcrumb-item">
                    <li> <a href="./">Home </a></li>
                    <li class="active">- Contact Us</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="contact-inner">
    <div class="container">
        <div class="double-row">
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d55925.25231257113!2d153.29891163818252!3d-28.82908522905212!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b909de76162cf4d%3A0x50609b490442b30!2sGoonellabah%20NSW%202480%2C%20Australia!5e0!3m2!1sen!2snp!4v1679048057155!5m2!1sen!2snp" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="info">
                <div class="inner-info">
                    <h3 class="heading">Green Gully Gardening</h3>
                    <p class="des">Address: <span>Goonellabah NSW 2480</span> </p>
                    <p class="des">Phone: <span>0426 168 707</span> </p>
                    <p class="des">Email: <span><?= $email; ?></span> </p>

                </div>
            </div>
        </div>

    </div>
</div>

<div class="contact-form">
    <div class="container">
        <div class="row">
            <div class="col">
                <form class="form " action="https://formsubmit.co/<?php echo $email; ?>" method="post">
                    <div class="title">
                        <h4>GET IN TOUCH</h4>
                    </div>
                    <div class="form-group">
                        <input class="form-control" name="Name" type="text" placeholder="Name">
                        <input class="form-control" name="Email" type="text" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <input class="form-control" name="Phone" type="text" placeholder="Phone">

                        <input class="form-control" name="Address" type="text" placeholder="Address">
                    </div>
                    <div class="form-group">
                        <input class="form-control" name="Phone" type="text" placeholder="Services">

                    </div>
                    <div class="form-group">
                        <textarea class="form-control message" rows="5" name="Message" placeholder="Your Message"></textarea>
                    </div>
                    <button class="quote-submission">Submit</button>

                    <input type="hidden" name="_subject" value="Mail Submission!">
                    <input type="text" name="_honey" style="display:none">
                    <input type="hidden" name="_template" value="table">
                    <input type="hidden" name="_next" value="http://localhost/garden-gully-gardening-1/public/thanks">
                </form>
            </div>
        </div>
    </div>
</div>
<?php include 'includes/footer.php'; ?>