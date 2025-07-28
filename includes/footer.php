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
                                <a href="index.php"><img src="../resources/logo_text.png" alt="logo" style="max-width: 250px;"></a>
                            </div>
                            <div class="footer-tittle">
                                <div class="footer-pera">
                                    <p><?php echo $siteConfig['site_description']; ?></p>
                                </div>
                            </div>
                            <!-- social -->
                            <div class="footer-social flex gap-4 mt-6">
                                <a href="<?php echo $siteConfig['social_media']['twitter']; ?>" class="hover:opacity-80 transition-opacity">
                                    <i class="fab fa-twitter text-xl p-3 rounded-full bg-[#438EC6] text-white hover:bg-opacity-90"></i>
                                </a>
                                <a href="<?php echo $siteConfig['social_media']['instagram']; ?>" class="hover:opacity-80 transition-opacity">
                                    <i class="fab fa-instagram text-xl p-3 rounded-full bg-[#E7782E] text-white hover:bg-opacity-90"></i>
                                </a>
                                <a href="<?php echo $siteConfig['social_media']['linkedin']; ?>" class="hover:opacity-80 transition-opacity">
                                    <i class="fab fa-linkedin text-xl p-3 rounded-full bg-[#E7782E] text-white hover:bg-opacity-90"></i>
                                </a>
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
                                <li><a href="blog.php">Blog</a></li>
                                <li><a href="contact.php">Contact</a></li>
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
                            <p><i class="fas fa-envelope" style="color: rgb(231, 120, 46);"></i> <a class="text-black" href="mailto:<?php echo $siteConfig['contact_email']; ?>"><?php echo $siteConfig['contact_email']; ?></a></p>
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