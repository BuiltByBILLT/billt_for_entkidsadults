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

                <div id="container" class="container">
                    <div><?php the_content(); ?></div>
                </div>

        <?php endwhile;
        else :
            echo '<p>No content found</p>';
        endif;
        ?>
    </div>
</main>
<?php get_footer(); ?>