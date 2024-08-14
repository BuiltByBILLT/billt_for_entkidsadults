<section class="announcements-section">
    <h2 class="subheading">Announcements</h2>
    <h2>Latest Updates</h2>
    <div class="announcement-content">
        <?php
        // Get the most recent post
        $recent_posts = wp_get_recent_posts(array(
            'numberposts' => 1, // Get only the latest post
            'post_status' => 'publish' // Only get published posts
        ));

        if (!empty($recent_posts)) {
            $recent_post = $recent_posts[0];
            echo '<p>' . wp_trim_words($recent_post['post_content'], 55, '...') . ' <a href="' . get_permalink($recent_post['ID']) . '" class="read-more">Read More ></a></p>';
        }
        ?>
    </div>
    <div class="buttons">
        <a href="/blog" class="see-all primary-button">See ALL</a>
    </div>
</section>