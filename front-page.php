<?php get_header(); ?>
<main id="content" role="main">
    <div class='hero'>
        <div class="container">
            <div class="row">
                <div class="col left-col">
                    <h1 class="color-dark-blue">Expert Care For Your <span class="color-light-blue">Ear</span>, <span class="color-light-blue">Nose</span> & <span class="color-light-blue">Throat</span> Health</h1>
                    <div class="text">
                        <p>Otolaryngology Specialists of North Texas are committed to providing outstanding service to our patients and referring physicians.</p>
                        <p>Our practice goal is to improve the health and well-being of our patients and the communities we serve.</p>
                    </div>
                    <div class="row button-row">
                        <button class="primary-button">Schedule appointment</button>
                        <button class="outline-button">Our Services</button>
                    </div>
                    <div class="row icon-row">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/voted-best-d.png" alt="voted-best-d">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/plano-moms.png" alt="plano-moms">
                    </div>
                </div>
                <div class="col">
                </div>
            </div>
        </div>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Dr-Gambe-Dr-Kubala.png" alt="Dr-Gambe-Dr-Kubala">

    </div>

    <div id="container" class="container">

        <?php get_template_part('includes/section', 'content'); ?>

    </div>
</main>
<?php get_footer(); ?>