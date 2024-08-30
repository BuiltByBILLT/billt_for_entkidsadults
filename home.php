<?php get_header(); ?>

<main id="content" role="main" class="blog-page">
    <h1 class="title">Announcements</h1>
    <div class="blog-list container">
        <?php if (have_posts()) : ?>

            <?php while (have_posts()) : the_post(); ?>
                <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <div class="entry-content">
                        <?php the_excerpt(); ?>
                    </div>
                </div>
            <?php endwhile; ?>

            <?php the_posts_navigation(); ?>
        <?php else : ?>
            <p><?php esc_html_e('No posts found.', 'your-theme-textdomain'); ?></p>
        <?php endif; ?>

    </div>
</main>

<?php get_footer(); ?>