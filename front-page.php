<?php get_header(); ?>
<main id="content" role="main">
    <?php
    get_template_part('/template-parts/hero-section');
    ?>

    <div id="container" class="container front-page-container">
        <?php
        get_template_part('/template-parts/learn-more-section');
        ?>
        <?php
        get_template_part('/template-parts/why-us-section');
        ?>
        <?php
        get_template_part('/template-parts/announcements-section');
        ?>
        <?php
        get_template_part('/template-parts/our-team-section');
        ?>
        <section class="row  sidebar-row">
            <div class="col">
                <?php
                get_template_part('/template-parts/book-now-section');
                ?>
            </div>
            <div class="col">
                <?php
                get_template_part('/template-parts/our-offices-section');
                ?>
            </div>
        </section>
        <?php
        get_template_part('/template-parts/faq-section');
        ?>
    </div>
</main>
<?php get_footer(); ?>