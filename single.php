<?php get_header(); ?>
<main id="content" role="main">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <h1 class="title"><?php the_title(); ?></h1>
            <div class="container single-page">
                <div class="post-content">
                    <?php the_content(); ?>
                </div>
            </div>
        <?php endwhile;
    else : ?>
        <p><?php esc_html_e('Sorry, no posts matched your criteria.'); ?></p>
    <?php endif; ?>
</main>

<?php get_footer(); ?>