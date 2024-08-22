<?php get_header(); ?>
<main id="content" role="main">
    <div class="page-page">
        <?php
        if (have_posts()) :
            while (have_posts()) : the_post();
        ?>
                <h1 class="page-title">
                    <div class="container">
                        <?php the_title(); ?>
                    </div>
                </h1>

                <div class="container">
                    <div class="main-col">
                        <div class="the-content"><?php the_content(); ?></div>
                    </div>
                    <div class="sidebar-container">
                        <?php get_template_part("template-parts/sidebar"); ?>
                    </div>
                </div>

        <?php endwhile;
        else :
            echo '<p>No content found</p>';
        endif;
        ?>
    </div>
</main>
<?php get_footer(); ?>