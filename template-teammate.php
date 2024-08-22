<?php
/* 
Template Name: Teammate Template
*/
?>

<?php get_header(); ?>
<main id="content" role="main">
    <div id="container" class="container">
        <div class="teammate-page">
            <?php
            if (have_posts()) :
                while (have_posts()) : the_post();
            ?>
                    <div class="main-col">
                        <h1 class="teammate-title">
                            <?php the_title(); ?>
                        </h1>

                        <div class="the-content"><?php the_content(); ?></div>
                    </div>
                    <div class="sidebar-container">
                        <?php get_template_part("template-parts/sidebar"); ?>
                    </div>

            <?php endwhile;
            else :
                echo '<p>No content found</p>';
            endif;
            ?>
        </div>
    </div>
</main>
<?php get_footer(); ?>