<?php
// Sticky Posts Only
add_action( 'news_sticky', 'news_sticky' );
function news_sticky() {
    $sticky = get_option( 'sticky_posts' );
    $sticky = array_slice( $sticky, 2 );

    $news_sticky = get_posts([
        'post_type'      => [ 'post' ],
        'posts_per_page' => 2,
        'post_status'    => 'publish',
        'has_password'   => false,
        'order'          => 'ASC',
        // For Sticky Posts
        'ignore_sticky_posts' => 5,
        'post__in' => $sticky
    ]);

    foreach ( $news_sticky as $sticky ) :
        $stickyID      = $sticky->ID;
        $stickyTitle   = $sticky->post_title;
        $stickyDate    = $sticky->post_date;
        $stickyContent = $sticky->post_content;

        $postIDs[] = $sticky->ID;
        ?>
        <li class="tn-item">
            <div class="uk-card uk-grid-collapse | featured-news" uk-grid>
                <div class="uk-card-media-left uk-cover-container uk-width-1-2@s">
                    <?php 
                    if ( has_post_thumbnail($postID) ) {
                        $featuredID = get_post_thumbnail_id($postID);
                        echo wp_get_attachment_image( $featuredID, 'medium', '', [ 'uk-cover' => '' ] );
                        echo '<canvas width="640" height="360"></canvas>';
                    } else {
                        echo '<div class="thumb-placeholder tp-medium"></div>';
                    } ?>
                </div>
                <div class="uk-width-1-2@s">
                    <div class="uk-card-body">
                        <h2 class="title"><?php echo $stickyTitle; ?></h2>
                        <div class="description"><?php echo custom_field_excerpt( $stickyContent, 25 ); ?></div>
                        <a href="<?php get_permalink( $stickyID ); ?>" class="uk-text-small | od-cta">Read More</a>
                    </div>
                </div>
            </div>
        </li>
        <?php
    endforeach;
    wp_reset_postdata();

    $sticky = get_option( 'sticky_posts' );

    $news_query = get_posts([
        'post_type'      => [ 'post' ],
        'posts_per_page' => 4,
        'post_status'    => 'publish',
        'has_password'   => false,
        'order'          => 'ASC',
        // 'orderby'        => 'rand',
        'post__not_in'   => $sticky,
        'ignore_sticky_posts' => 1
    ]);

    foreach ( $news_query as $news ) :
        $postID      = $news->ID;
        $postTitle   = $news->post_title;
        $postDate    = $news->post_date;
        $postContent = $news->post_content; ?>
        <li class="tn-item">
            <div class="uk-card uk-grid-collapse" uk-grid>
                <div class="uk-card-media-left uk-cover-container uk-width-auto">
                    <?php 
                    if ( has_post_thumbnail($postID) ) {
                        $featuredID = get_post_thumbnail_id($postID);
                        echo wp_get_attachment_image( $featuredID, 'medium', '', [ 'uk-cover' => '' ] );
                        echo '<canvas width="640" height="360"></canvas>';
                    } else {
                        echo '<div class="thumb-placeholder tp-small"></div>';
                    } ?>
                </div>
                <div class="uk-width-expand">
                    <div class="uk-card-body">
                        <h2 class="title"><?php echo $postTitle; ?></h2>
                        <div class="description"><?php echo custom_field_excerpt( $postContent, 25 ); ?></div>
                        <a href="<?php get_permalink( $postID ); ?>" class="uk-text-small | od-cta">Read More</a>
                    </div>
                </div>
            </div>
        </li>
        <?php 
    endforeach;
}

// Sticky Posts Only
add_action( 'news_random', 'news_random' );
function news_random() {

    $news_query = get_posts([
        'post_type'      => [ 'post' ],
        'posts_per_page' => 5,
        'post_status'    => 'publish',
        'has_password'   => false,
        'order'          => 'ASC',
        'orderby'        => 'rand',
    ]);

    foreach ( $news_query as $news ) :
        $postID      = $news->ID;
        $postTitle   = $news->post_title;
        $postDate    = $news->post_date;
        $postContent = $news->post_content; ?>
        <li class="tn-item">
            <div class="uk-card uk-grid-collapse" uk-grid>
                <div class="uk-card-media-left uk-cover-container uk-width-auto">
                    <?php 
                    if ( has_post_thumbnail($postID) ) {
                        $featuredID = get_post_thumbnail_id($postID);
                        echo wp_get_attachment_image( $featuredID, 'medium', '', [ 'uk-cover' => '' ] );
                        echo '<canvas width="640" height="360"></canvas>';
                    } else {
                        echo '<div class="thumb-placeholder tp-small"></div>';
                    } ?>
                </div>
                <div class="uk-width-expand">
                    <div class="uk-card-body">
                        <h2 class="title"><?php echo $postTitle; ?></h2>
                        <div class="description"><?php echo custom_field_excerpt( $postContent, 25 ); ?></div>
                        <a href="<?php get_permalink( $postID ); ?>" class="uk-text-small | od-cta">Read More</a>
                    </div>
                </div>
            </div>
        </li>
        <?php 
    endforeach;
}