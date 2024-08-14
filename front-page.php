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



        <section class="announcements">

        </section>
        <section class="our-team-cards">

        </section>
        <section class="book-now">

        </section>
        <section class="our-offices">

        </section>
    </div>
</main>
<?php get_footer(); ?>