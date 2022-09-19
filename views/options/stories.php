<?php
if ( !is_home() ) {
    $class = 'class="uk-section"';
} else {
    $class = 'class="uk-section uk-section-secondary"';
}

?>
<section <?=$class?> data-module="stories-module">
    <div class="uk-position-relative" tabindex="-1" uk-slider="finite: true">
        <ul class="uk-slider-items uk-grid-small uk-grid">

            <li class="uk-width-1-2@s uk-width-2-3@m uk-width-1-2@l uk-width-2-5@xl">
                <div class="uk-panel">
                    <div class="uk-headings">
                        <h2><span>National Assets Services</span> Success Stories</h2>
                    </div>
                    <p>National Asset Services is a nationally respected, owner-entrusted commercial real estate management company that has worked with over 90 ownership groups. With experience in managing diverse properties, located in diverse markets across the country, the NAS team knows that all owners have one goal in common:</p>
                    <h3>Increase Property Value. Optimize Property Performance.</h3>
                    <p>If you're looking for a better commercial real estate management company, put the NAS team to work for your asset today. You will quickly see how an experienced commercial property management company can make a real difference in the making of your property's success story.</p>
                </div>
            </li>
            <?php $home_stories = [ 'post_type' => 'nas-stories', 'posts_per_page' => 6, 'order' => 'ASC' ];
            query_posts( $home_stories ); 

            while ( have_posts() ) : the_post(); ?>
            <li class="uk-width-1-2@s uk-width-1-3@m uk-width-1-4@l uk-width-1-5@xl">
                <figure class="uk-inline">
                    <?php 
                    if ( has_post_thumbnail($post->ID) ) {
                        $featuredID = get_post_thumbnail_id($post->ID);
                        echo wp_get_attachment_image( $featuredID, 'stories-vertical-thumb' );
                    } else {
                        echo '<img src="//placem.at/places?w=640&h=700&txt=0&random=30'.$post->ID.'" width="640" height="700" alt="">';
                    } ?>                    
                    <figcaption class="uk-overlay-primary uk-position-bottom uk-padding">
                        <span class="story-address"><?php the_field( 'ss_location' ); ?></span>
                        <h3 class="story-title"><?php the_title(); ?></h3>
                        <p><?php the_field( 'ss_lead' ); ?></p>
                        <p><a href="#" class="uk-button uk-button-primary">Read More</a></p>
                    </figcaption>
                </figure>
            </li>
            <?php endwhile; wp_reset_query(); ?>
        </ul>

        <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" role="presentation" aria-label="Previous" uk-slidenav-previous uk-slider-item="previous"></a>
        <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" role="presentation" aria-label="Next" uk-slidenav-next uk-slider-item="next"></a>
    </div>
</section>

