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
                    <div class="sidebar">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quia doloribus iure molestiae! Optio architecto velit error consequatur consectetur voluptatibus ipsam accusantium ut! Architecto aspernatur nostrum qui quod numquam incidunt, dolor sed modi officia magni praesentium officiis quia blanditiis expedita enim exercitationem odio iste doloribus? Officiis dolorum voluptatem itaque odio reprehenderit.
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