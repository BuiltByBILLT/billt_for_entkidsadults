<?php
if (have_posts()) :
    while (have_posts()) : the_post();
?>
        <h1 class="page-title"><?php the_title(); ?></h1>
        <div><?php the_content(); ?></div>
<?php endwhile;
else :
    echo '<p>No content found</p>';
endif;
?>