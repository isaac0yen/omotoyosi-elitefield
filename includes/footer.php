 <footer>
    <!-- Footer Start-->
    <div class="footer-area footer-padding" style="background-color: #f8f9fa;">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-footer-caption mb-50">
                        <div class="single-footer-caption mb-30">
                            <!-- logo -->
                            <div class="footer-logo mb-25">
                                <a href="index.php"><img src="./resources/omotoyosi-logo.png" alt="logo" style="max-width: 250px;"></a>
                            </div>
                            <div class="footer-tittle">
                                <div class="footer-pera">
                                    <p><?php echo $siteConfig['site_description']; ?></p>
                                </div>
                            </div>
                            <!-- social -->
                            <div class="footer-social">
                                <a href="<?php echo $siteConfig['social_media']['twitter']; ?>"><i class="fab fa-twitter" style="background-color: rgb(67, 142, 198);"></i></a>
                                <a href="<?php echo $siteConfig['social_media']['instagram']; ?>"><i class="fab fa-instagram" style="background-color: rgb(231, 120, 46);"></i></a>
                                <a href="<?php echo $siteConfig['social_media']['facebook']; ?>"><i class="fab fa-facebook-f" style="background-color: rgb(67, 142, 198);"></i></a>
                                <a href="<?php echo $siteConfig['social_media']['linkedin']; ?>"><i class="fab fa-linkedin" style="background-color: rgb(231, 120, 46);"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6">
                    <div class="single-footer-caption mb-50">
                        <div class="footer-tittle">
                            <h4 class="custom-text">Quick Links</h4>
                            <ul>
                                <li><a href="index.php">Home</a></li>
                                <li><a href="about.php">About</a></li>
                                <li><a href="donate.php">Donate</a></li>
                                <li><a href="blog.php">Blog</a></li>
                                <li><a href="contact.php">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="single-footer-caption mb-50">
                        <div class="footer-tittle">
                            <h4 class="custom-text-orange">Our Programs</h4>
                            <ul>
                                <li><a href="#">Educational Support</a></li>
                                <li><a href="#">Scholarship Program</a></li>
                                <li><a href="#">Mentorship</a></li>
                                <li><a href="#">Community Outreach</a></li>
                                <li><a href="#">Volunteer</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="single-footer-caption mb-50">
                        <div class="footer-tittle">
                            <h4 class="custom-text">Contact Us</h4>
                        </div>
                        <div class="footer-cap">
                            <p><i class="fas fa-map-marker-alt" style="color: rgb(231, 120, 46);"></i> <?php echo $siteConfig['contact_address']; ?></p>
                            <p><i class="fas fa-phone" style="color: rgb(67, 142, 198);"></i> <?php echo $siteConfig['contact_phone']; ?></p>
                            <p><i class="fas fa-envelope" style="color: rgb(231, 120, 46);"></i> <a href="mailto:<?php echo $siteConfig['contact_email']; ?>"><?php echo $siteConfig['contact_email']; ?></a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer-bottom -->
    <div class="footer-bottom-area" style="background-color: rgb(67, 142, 198);">
        <div class="container">
            <div class="footer-border">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="footer-copy-right text-center">
                            <p class="text-white">
                                Copyright &copy; <?php echo date('Y'); ?> <?php echo $siteConfig['site_name']; ?>. All Rights Reserved.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Scroll Up -->
<div id="back-top">
    <a title="Go to Top" href="#" style="background-color: rgb(231, 120, 46);"> <i class="fas fa-level-up-alt"></i></a>
</div>

</body>
</html>