<section class="uk-section" data-module="news-module">
    <div class="uk-container uk-container-expand">

        <div class="uk-position-relative" tabindex="-1" uk-slider="finite: true">
            <ul class="uk-slider-items uk-grid-small uk-child-width-1-2@s uk-child-width-1-3@m uk-child-width-1-4@l uk-child-width-1-5@xl uk-grid">
                <li>
                    <div class="uk-panel">
                        <h2><small>National Asset Services</small> News</h2>
                        <p>Timely news articles about NAS and properties in the NAS portfolio.</p>
                        <a href="#" class="readmore -large">Read More</a>
                    </div>
                </li>
                <?php 
                $news = [ 'post_type' => 'post', 'posts_per_page' => 6, 'order' => 'DESC', 'ignore_sticky_posts' => true ];
                query_posts( $news );

                while ( have_posts() ) : the_post(); ?>
                <li>
                    <figure class="uk-inline">
                        <?php 
                        if ( has_post_thumbnail($post->ID) ) {
                            $featuredID = get_post_thumbnail_id($post->ID);
                            echo wp_get_attachment_image( $featuredID, 'large' );
                        } else {
                            echo '<img src="//placem.at/places?w=640&h=550&txt=0&random=20'.$post->ID.'" width="640" height="550" alt="">';
                        } ?>                        
                        <figcaption class="uk-overlay-primary uk-position-cover uk-padding">
                            <?php $term_cat = get_the_terms( $post->ID, 'category' ); ?>
                            <span class="news-category"><?php echo $term_cat[0]->name; ?></span>
                            <h3 class="news-title"><?php the_title(); ?></h3>
                        </figcaption>
                    </figure>
                </li>
                <?php endwhile; wp_reset_query(); ?>
            </ul>

            <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" role="presentation" aria-label="Previous" uk-slidenav-previous uk-slider-item="previous"></a>
            <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" role="presentation" aria-label="Next" uk-slidenav-next uk-slider-item="next"></a>
        </div>        

    </div>
</section>