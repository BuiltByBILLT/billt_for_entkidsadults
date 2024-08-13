<?php get_header(); ?>
<main id="content" role="main">
    <div class='hero'>
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1>Expert Care For Your Ear, Nose & Throat Health</h1>
                    <p>Our team of board-certified physicians and audiologists are dedicated to providing the highest quality care for all of your ear, nose, and throat needs.</p>
                    <div class="row">
                        <button>Schedule appointment</button>
                        <button>Our Services</button>
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