<footer class="footer">

    <div class="container footer-container row">
        <div class="footer-brand">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-white.png" alt="Brand Logo">
            <p>Otolaryngology Specialists of North Texas provides comprehensive care for ear, nose, and throat conditions.</p>
            <p>Our mission is to offer the highest standard of medical services to our patients, combining advanced technology with compassionate care.</p>
            <div class="search">
                <h4>Keyword Search</h4>
                <?php get_template_part('template-parts/searchbar'); ?>
            </div>

        </div>

        <div class="footer-links">
            <div class="link-container">
                <h5>Useful Links</h5>
                <nav id="footer-nav" role="navigation">
                    <?php wp_nav_menu(array('theme_location' => 'footer-location', 'menu_class' => 'footer-nav')); ?>
                </nav>
            </div>
        </div>

        <div class="footer-offices">
            <?php get_template_part('template-parts/our-offices-section'); ?>
        </div>
    </div>

    <div class="footer-bottom">
        <p>© 2024 All Rights Reserved<span> • </span><br><a target="_blank" href="https://www.builtbybillt.com/">Built by BILLT</a></p>
    </div>
</footer>
</div>
<?php wp_footer(); ?>
</body>

</html>

<!-- <div class="footer-social">
    <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-facebook.png" alt="Facebook"></a>
    <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-instagram.png" alt="Instagram"></a>
    <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-twitter.png" alt="Twitter"></a>
</div> -->