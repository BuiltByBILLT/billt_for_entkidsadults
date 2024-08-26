<footer class="footer">
    <div class="container">

        <div class="footer-container">
            <div class="footer-brand">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-white.png" alt="Brand Logo">
                <p>Otolaryngology Specialists of North Texas provides comprehensive care for ear, nose, and throat conditions.</p>
                <p>Our mission is to offer the highest standard of medical services to our patients, combining advanced technology with compassionate care.</p>
                <!-- <div class="footer-social">
                    <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-facebook.png" alt="Facebook"></a>
                    <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-instagram.png" alt="Instagram"></a>
                    <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-twitter.png" alt="Twitter"></a>
                </div> -->
            </div>

            <div class="footer-links">
                <div class="link-container">
                    <h5>Useful Links</h5>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Our Services</a></li>
                        <li><a href="#">Patient Portal</a></li>
                        <li><a href="#">Our Blog</a></li>
                        <li><a href="#">About Us</a></li>
                    </ul>
                </div>
            </div>

            <div class="footer-offices">
                <?php get_template_part('template-parts/our-offices-section'); ?>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <p>© 2024 All Rights Reserved • <a target="_blank" href="https://www.builtbybillt.com/">Built by BILLT</a></p>
    </div>
</footer>
</div>
<?php wp_footer(); ?>
</body>

</html>