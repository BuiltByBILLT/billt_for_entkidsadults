<?php get_header(); ?>
<main id="content" role="main">
    <?php
    include(get_template_directory() . '/template-parts/hero-section.php');
    ?>

    <div id="container" class="container">
        <?php
        include(get_template_directory() . '/template-parts/learn-more-section.php');
        ?>
        <?php
        include(get_template_directory() . '/template-parts/why-us-section.php');
        ?>
        <?php
        include(get_template_directory() . '/template-parts/announcements-section.php');
        ?>
        <?php
        include(get_template_directory() . '/template-parts/our-team-section.php');
        ?>
        <div class="row">
            <div class="col">
                <?php
                include(get_template_directory() . '/template-parts/book-now-section.php');
                ?>
            </div>
            <div class="col">
                <?php
                include(get_template_directory() . '/template-parts/our-offices-section.php');
                ?>
            </div>
        </div>
        <?php
        include(get_template_directory() . '/template-parts/faq-section.php');
        ?>
    </div>
</main>
<?php get_footer(); ?>