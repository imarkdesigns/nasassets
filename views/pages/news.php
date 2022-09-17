<main id="main" class="main" role="main">

    <section class="news-lists | uk-section">
        <div class="uk-container">

            <div class="uk-headings">
                <h2>Latest News</h2>
            </div>

            <div class="uk-grid-match uk-flex-center " uk-grid>
            <?php $featuredNews = [ 'post_type' => 'post', 'posts_per_page' => 1, 'order' => 'ASC', 'ignore_sticky_posts' => true ];
                query_posts( $featuredNews );
                
                while ( have_posts() ) : the_post(); ?>
                <div class="news-highlight | uk-width-1-1">
                    <a href="<?php echo get_permalink(); ?>" class="uk-card uk-card-default uk-flex-middle uk-grid-collapse uk-link-reset" uk-grid>
                        <div class="uk-card-media-left uk-width-1-1@s uk-width-2-3@m">
                            <?php 
                            if ( has_post_thumbnail($post->ID) ) {
                                $featuredID = get_post_thumbnail_id($post->ID);
                                echo wp_get_attachment_image( $featuredID, 'large' );
                            } else {
                                echo '<img src="//placem.at/places?w=1280&h=720&txt=0&random='.$post->ID.'" alt="">';
                            } ?>
                        </div>
                        <div class="uk-width-1-1@s uk-width-1-3@m">
                            <div class="uk-card-body">
                                <?php $term_cat = get_the_terms( $post->ID, 'category' ); ?>
                                <div class="title-category | uk-text-meta uk-margin-bottom"><?php echo $term_cat[0]->name; ?></div>
                                <h3 class="title-headline"><?php the_title(); ?></h3>
                            </div>
                        </div>
                    </a>
                </div>
                <?php 
                // Exclude featured post to next lists
                $featuredPostID = [];
                $featuredPostID[] = $post->ID;
                endwhile;

                $sticky = get_option( 'sticky_posts' );
                $firstBatchIDs = array_merge($sticky, $featuredPostID);
                $stickyNews = [ 'post_type' => 'post', 'posts_per_page' => 6, 'order' => 'ASC', 'post__not_in' => $firstBatchIDs, 'ignore_sticky_posts' => 1 ];
                query_posts( $stickyNews );
                
                $allPostIDs = [];
                while ( have_posts() ) : the_post(); 
                $allPostIDs[] = $post->ID; ?>
                <div class="listitem-medium | uk-width-1-2@s uk-width-1-3@m">
                    <a href="<?php echo get_permalink(); ?>" class="uk-card uk-card-default uk-link-reset">
                        <div class="uk-card-media-top">
                            <?php 
                            if ( has_post_thumbnail($post->ID) ) {
                                $featuredID = get_post_thumbnail_id($post->ID);
                                echo wp_get_attachment_image( $featuredID, 'large' );
                            } else {
                                echo '<img src="//placem.at/places?w=1280&h=720&txt=0&random='.$post->ID.'" alt="">';
                            } ?>
                        </div>
                        <div class="uk-card-body">
                            <?php $term_cat = get_the_terms( $post->ID, 'category' ); ?>
                            <div class="title-category | uk-text-meta uk-margin-bottom"><?php echo $term_cat[0]->name; ?></div>
                            <h3 class="title-headline"><?php the_title(); ?></h3>
                        </div>
                    </a>
                </div>
                <?php endwhile;

                $secondBatchIDs = array_merge($allPostIDs, $featuredPostID);
                $LatestListNews = [ 'post_type' => 'post', 'posts_per_page' => 8, 'order' => 'ASC', 'post__not_in' => $secondBatchIDs, 'ignore_sticky_posts' => 1 ];
                query_posts( $LatestListNews );

                while ( have_posts() ) : the_post(); ?>
                <div class="listitem-small | uk-width-1-2@s uk-width-1-3@m uk-width-1-4@l">
                    <a href="<?php echo get_permalink(); ?>" class="uk-card uk-card-default uk-link-reset">
                        <div class="uk-card-media-top">
                            <?php 
                            if ( has_post_thumbnail($post->ID) ) {
                                $featuredID = get_post_thumbnail_id($post->ID);
                                echo wp_get_attachment_image( $featuredID, 'large' );
                            } else {
                                echo '<img src="//placem.at/places?w=1280&h=720&txt=0&random='.$post->ID.'" alt="">';
                            } ?>
                        </div>
                        <div class="uk-card-body">
                            <?php $term_cat = get_the_terms( $post->ID, 'category' ); ?>
                            <div class="title-category | uk-text-meta uk-margin-bottom"><?php echo $term_cat[0]->name; ?></div>
                            <h3 class="title-headline"><?php the_title(); ?></h3>
                        </div>
                    </a>
                </div>
                <?php endwhile; wp_reset_query(); ?>

            </div>

        </div>
    </section>

    <?php
    // Import Success Stories
    get_template_part( _opt . 'stories' ); ?>

    <section class="more-news-lists uk-section">
        <div class="uk-container">

            <div class="uk-headings">
                <h2>More from NAS News</h2>
            </div>

            <div class="uk-grid-match uk-grid-small" uk-grid uk-margin>
                <?php for ( $i=0;$i<8;$i++ ) : ?>
                <div class="uk-width-1-1@s uk-width-1-2@m">
                    <a href="#" class="uk-card uk-card-small uk-flex-middle uk-grid-collapse uk-link-reset" uk-grid>
                        <div class="uk-card-media-left uk-cover-container uk-width-auto uk-visible@m">
                            <img src="//placem.at/places?w=150&h=150&txt=0&random=3<?=$i?>" alt="">
                        </div>
                        <div class="uk-width-expand">
                            <div class="uk-card-body">
                                <div class="title-category | uk-text-meta uk-margin-bottom">Category</div>
                                <h3 class="title-headline">Karen E. Kennedy Named a Woman of Influence</h3>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ratione sequi, facere modi. Porro facilis sapiente sit libero aperiam veritatis vitae!</p>
                            </div>
                        </div>
                    </a>
                </div>
                <?php endfor; ?>
            </div>

        </div>
    </section>    


</main>