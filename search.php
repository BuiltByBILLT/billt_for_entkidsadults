<?php get_header(); ?>

<main class="search-page">
    <h1 class="page-title">Search Results for: <?php echo get_search_query(); ?></h1>
    <div class="search-results-container">
        <?php if (have_posts()) : ?>
            <ul class="search-results-list">
                <?php while (have_posts()) : the_post(); ?>
                    <li>
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        <p><?php the_excerpt(); ?></p>
                    </li>
                <?php endwhile; ?>
            </ul>
        <?php else : ?>
            <p>No results found for "<?php echo get_search_query(); ?>". Please try again with different keywords.</p>
        <?php endif; ?>
    </div>
</main>

<?php get_footer(); ?>