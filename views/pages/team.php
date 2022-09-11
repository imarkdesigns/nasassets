<?php
// Fetch Data from Team
$teamLists = [ 'post_type' => 'nas-team', 'posts_per_page' => -1, 'order' => 'ASC' ];
query_posts( $teamLists );

?>
<main id="main" class="main" role="main">

    <section class="team | uk-section">
        <div class="uk-container uk-container-xlarge">

            <div class="uk-child-width-1-2@s uk-child-width-1-3@l uk-grid-medium uk-grid-match" uk-grid>
                <?php while ( have_posts() ) : the_post();
                $name        = get_field( 'profile_name' );
                $nominal     = get_field( 'profile_postnominal' );
                $designation = get_field( 'profile_designation' ); ?>
                <div>
                    <div class="uk-card uk-padding-remove">
                        <a href="<?php echo get_permalink(); ?>">
                        <figure class="uk-inline uk-margin-remove">
                            <?php the_post_thumbnail( 'full' ); ?>
                        </figure>
                        <figcaption class="uk-overlay uk-overlay-primary uk-position-bottom uk-position-small uk-padding-small">
                            <h2><?php echo $name; ?><?php echo !empty($nominal) ? ', <span class="uk-text-meta">'. $nominal .'</span>' : ''; ?></h2>
                            <p><?php echo $designation; ?></p>
                        </figcaption>
                        </a>
                    </div>
                </div>
                <?php endwhile; wp_reset_query(); ?>

            </div>

        </div>
    </section>

    <?php
    // Import News
    get_template_part( _opt . 'news' ); ?>

</main>