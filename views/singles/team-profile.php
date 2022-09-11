<?php get_header(); 

$cabreID = get_field( 'profile_cabre' );
$email   = get_field( 'profile_email' );
$office  = get_field( 'profile_phone_office' );
$direct  = get_field( 'profile_phone_direct' );
$social  = get_field( 'profile_social' );
$vcard   = get_field( 'profile_vcard' );

?>
<main id="main" class="main" role="main">

    <aside class="headlines">
        <div class="headlines-grid | uk-grid-collapse uk-flex-middle" uk-grid uk-height-match="target: > div">
            <div class="hl-image | uk-width-auto@m">
                <div class="uk-cover-container">
                    <canvas width="450" height="550"></canvas>
                    <?php $featuredID = get_post_thumbnail_id();
                    echo wp_get_attachment_image( $featuredID, [ 450, 550, true ], '', [ 'uk-cover' => '' ] ); ?>                    
                </div>
            </div>
            <div class="hl-details | uk-width-expand@m">
                <div class="uk-panel uk-padding">
                    <h2>Professional Profile</h2>
                    <address>
                        <?php echo !empty($cabreID) ? 'CA BRE: '. $cabreID : ''; ?><br>
                        Office: <?php echo $office; ?> <br>
                        Direct: <?php echo $direct; ?>
                    </address>
                    <hr class="uk-divider-small">
                    <?php the_field( 'profile_lead' ); ?>
                    <div class="uk-button-group uk-margin-medium-top uk-light">
                        <a href="#bio" class="uk-button uk-button-default" uk-scroll>Contnue Reading</a>
                        <div class="uk-button uk-button-default">
                            <span uk-icon="icon: chevron-down"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </aside>

    <section id="bio" class="bio | uk-section uk-light">
        <div class="uk-container uk-container-xlarge">

            <?php if ( !empty( get_field( 'profile_bio' ) ) ) : ?>
            <div class="uk-child-width-1-2@m uk-grid-large uk-grid-match uk-flex-middle" uk-grid>
                <div>
                    <figure class="uk-cover-container">
                        <canvas width="800" height="900"></canvas>
                        <img src="<?php echo _uri.'/resources/images/img-bio-featured-photo.jpg'; ?>" alt="" uk-cover>
                    </figure>
                </div>
                <div>
                    <article class="uk-article">
                        <?php the_field( 'profile_bio' ); ?>
                    </article>
                </div>
            </div>
            <?php endif; ?>

        </div>
    </section>

    <?php
    // Import News
    get_template_part( _opt . 'news' ); ?>

</main>
<?php get_footer(); ?>