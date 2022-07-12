<?php
// Property Lists
add_action( 'property_lists', 'property_lists' );
function property_lists() {

    $userID = get_current_user_id();
    $properties = get_field( 'client_properties', 'user_' . $userID );

    if ( $properties ) : ?>
    <ul class="mp-list">
        <?php foreach ( $properties as $post ) : setup_postdata($post); ?>
        <li class="mp-item">
            <div class="uk-card uk-grid-collapse" uk-grid>
                <div class="uk-card-media-left uk-cover-container uk-width-auto">
                    <?php 
                    if ( has_post_thumbnail($post->ID) ) {
                        $featuredID = get_post_thumbnail_id($post->ID);
                        echo wp_get_attachment_image( $featuredID, 'medium', '', [ 'uk-cover' => '' ] );
                        echo '<canvas width="640" height="360"></canvas>';
                    } else {
                        echo '<div class="thumb-placeholder tp-medium"></div>';
                    } ?>
                </div>
                <div class="uk-width-expand">
                    <div class="uk-card-body">
                        <h2 class="title"><?php echo $post->post_title; ?></h2>
                        <div class="description"><?php echo custom_field_excerpt( get_field( 'property_description', $post->ID ), 20 ); ?></div>
                        <ul class="uk-text-small | taxonomy">
                            <?php $term_cat = get_the_terms( $post->ID, 'ondemand-categories' ); ?>
                            <li>Category: <?php echo $term_cat[0]->name; ?></li>
                            <li><a href="<?php echo get_permalink( $post->ID ) ?>" class="od-cta">Click to see Documents</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </li>
        <?php endforeach;
        wp_reset_postdata(); ?>
    </ul>
    <?php endif; 
}