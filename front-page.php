<div class='hero'>
    <h1>Front Page</h1>
    <p>This is the front page</p>
</div>



<?php get_header(); ?>
<main id="content" role="main">
    <div id="container" class="container">

        <?php get_template_part('includes/section', 'content'); ?>

    </div>
</main>
<?php get_footer(); ?>