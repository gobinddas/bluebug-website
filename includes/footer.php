<footer>
    <div class="containers">
        <div class="footer-wrapper">
            <div class="row">
                <div class="col-lg-4 col-md-6 ">
                    <div class="footer-block">
                        <div class="logo">
                            <img src="images/logo2.png" alt="">
                        </div>
                        <div class="footer-about-desc">
                            <p>Our well-trained, professional and experienced team ensures that our work meets
                                your highest expectations and sticks to a satisfactory schedule.
                            </p>
                        </div>
                        <div class="quote-block">
                            <p>Get a Quote</p>
                            <h6><?php echo $phone;?></h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6">
                    <div class="footer-block">
                        <div class="footer-title">
                            <h6>Link</h6>
                        </div>
                        <ul>
                            <li><a href="./" class="quick-link">Home</a></li>
                            <li><a href="about" class="quick-link">About Us</a></li>
                            <li><a href="service" class="quick-link">Services</a></li>
                            <li><a href="gallery" class="quick-link">Gallery</a></li>
                            <li><a href="contact" class="quick-link">Contact Us</a></li>
                            <li><a href="quote" class="quick-link">Quote</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-block">
                        <div class="footer-title">
                            <h6>Popular Services</h6>
                        </div>
                        <ul>
                            <li><div class="quick-link"> Lawn Mowing</div></li>
                            <li><div class="quick-link"> Acreage Mowing</div></li>
                            <li><div class="quick-link"> Landscaping</div></li>
                            <li><div class="quick-link"> High Pressure Cleaning</div></li>
                            <li><div class="quick-link"> Weed Management</div></li>
                            <li><div class="quick-link"> Tree Pruning</div></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-block">
                        <div class="footer-title">
                            <h6>Contact Info</h6>
                        </div>
                        <ul>
                            <li>
                                <a href="tel:<?php echo $phone; ?>" class="footer-cntct">
                                    <i class="fas fa-phone-alt"></i>
                                    <p><?php echo $phone; ?></p>
                                </a>
                            </li>
                            <li>
                                <a href="mailto:<?php echo $email; ?>" class="footer-cntct">
                                    <i class="fas fa-envelope-open"></i>
                                    <p><?php echo $email; ?></p>
                                </a>
                            </li>
                            <li>
                                <div class="footer-cntct">
                                    <i class="fas fa-map-marker-alt"></i>
                                    <p><?php echo $add; ?></p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mobile-call-button">
        <a href="tel:<?php echo $phone;?>"><i class="fa fa-phone"></i></a>
    </div>
</footer>


<div class="footer-bottom">
    <div class="containers">
        <div class="bottom-wrapper">
            <div class="block">
                <p>© Copyright <?php echo date('Y');?> </p>
                <a href="./"><?php echo $co;?></a>
            </div>
            <div class="develop">
                <div class="text-center">Designed & Developed by</div>
                <a href="https://www.codecrewz.com.au" target="_blank">Codecrewz Technology Pty Ltd</a>
            </div>
        </div>
    </div>
</div>




<div class="scrollevent"><a class="scrollToTop" href="#">
        <button class="btn btn-scroll-up"><i class="fa fa-chevron-up"></i></button></a>
</div>

<!-- Jquery Links -->
<!-- Jquery Source-->
<script type="text/javascript" src="js/jquery-v3.3.1.min.js"></script>
<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js">
</script>

<!-- Jquery Plugins-->
<script type="text/javascript" src="js/slick.min.js"></script>
<script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
<!-- Custom Jquery-->
<script type="text/javascript" src="js/main.js"></script>
</body>
<!-- End of Body Section -->

</html>
<!-- End -->