<?php get_header( 'ondemand' ); ?>
<main id="main" class="main" role="main">
    <div uk-grid class="uk-grid-collapse" uk-height-viewport="expand: true; min-height: 960; offset-bottom: 80px; offset-top: true">
        <div class="uk-width-expand@m | my-properties">
            <hgroup> <h1><?php the_title(); ?></h1> </hgroup>
            <div uk-overflow-auto>
                <aside class="uk-alert-warning uk-link-reset uk-text-small" uk-alert>
                    <a class="uk-alert-close" uk-close></a>
                    Year-end Tax Packages file was uploaded, ready to view & download. <a href="#" class="uk-text-bold">Click here to view & download</a>
                    <?php /* if ( wp_is_mobile() ) {
                        echo '<a href="#year-end-tax-packages" uk-scroll class="uk-text-bold">Click here to view and download</a>';
                    } else {
                        echo '<a href="#year-end-tax-packages" uk-toggle="cls: uk-alert-folder" class="uk-text-bold">Click here to view and download</a>';
                    } */ ?>
                </aside>
                <!-- Alert Notification -->

                <section class="uk-section uk-section-xsmall uk-position-relative uk-padding-remove-top | featured-image">
                    <div class="uk-cover-container">
                        <?php if ( has_post_thumbnail() ) {
                            $featuredID = get_post_thumbnail_id();
                            echo wp_get_attachment_image( $featuredID, 'large', '', [ 'uk-cover' => '' ] );
                            echo '<canvas width="1280" height="570"></canvas>';
                        } else {
                            echo '<div class="thumb-placeholder tp-medium"></div>';
                        } ?>                        

                        <aside class="uk-panel uk-hidden@m">
                            <a href="#property-documents" class="uk-button uk-button-secondary uk-width-1-1" uk-scroll> <span uk-icon="icon: folder" class="uk-margin-small-right"></span> See Documents</a>
                        </aside>
                    </div>

                    <?php $contact = get_field( 'property_contact_person' );
       
                    if ( $contact ) :
                        $cp = [ 'post_type' => 'nas-team', 'p' => $contact->ID ];
                        query_posts( $cp );

                        if ( $cp ) : ?>
                        <div class="uk-overlay uk-position-small uk-position-top-right">
                            <div class="uk-card uk-card-secondary uk-card-small | contact-person">
                                <?php while ( have_posts() ) : the_post();
                                // Hide user ID into md5
                                $cid = md5($cp['p']);

                                $name      = get_field('profile_name');
                                $pnominal  = get_field( 'profile_postnominal' );
                                $position  = get_field( 'profile_designation' );
                                $email     = get_field( 'profile_email' );
                                $permalink = get_permalink(); ?>
                                <div class="uk-card-header">
                                    <div class="uk-text-uppercase uk-text-center uk-text-small">Property Contact Person</div>
                                </div>

                                <div class="uk-card-body uk-grid-collapse uk-flex-middle" uk-grid>
                                    <div class="uk-width-auto">
                                        <?php $featured_image = get_post_thumbnail_id(); 
                                        echo wp_get_attachment_image( $featured_image, 'thumbnail', '', [ 'class' => 'uk-border-circle' ] ); ?>
                                    </div>
                                    <div class="uk-width-expand">
                                        <div class="uk-card-title"><?php echo $name; ?><?php echo ( $pnominal ) ? ', <span class="uk-display-inline-block uk-text-small">'.$pnominal.'</span>' : ''; ?></div>
                                        <div class="uk-text-meta"><?php echo $position; ?></div>
                                    </div>
                                </div>
                                <div class="uk-card-footer uk-grid-collapse uk-flex-middle uk-flex-between | cp-cta" uk-grid>
                                    <div class="uk-width-2-3"><a href="<?php echo $permalink; ?>" class="uk-button uk-button-text uk-link-reset" target="_blank">Visit <?php echo $name; ?> Bio</a></div>
                                    <div class="uk-width-1-3 uk-text-center"><a href="<?php echo get_permalink( 32 ).'?cid='.$cid; ?>" uk-tooltip="title: Send Message; pos: bottom" aria-label="Send Message" target="_blank"><span uk-icon="icon: mail"></span></a></div>
                                </div>
                                <?php endwhile; wp_reset_query(); ?>
                            </div>
                        </div>
                        <?php endif;
                    endif; ?>
                </section>

                <section class="uk-section" hidden>
                    <?php // $files = get_field('folder_lists'); 

                        while( have_rows('folder_lists') ) : the_row();

                            $sub_value = get_sub_field('document_file');

                            // var_dump($sub_value);

                            $pdf = count($sub_value);
                            for ( $n=0; $n<$pdf; $n++ ) {

                                echo $sub_value[$n]['title'] . '<br>';
                            }

                        endwhile;
                    ?>
                </section>


                <section class="uk-section uk-section-secondary uk-section-xsmall | property-details">
                    <div class="pd-wrapper">
                        <div class="pd-info">
                            <address>
                                <p><strong>Address:</strong> 
                                <?php $address = get_field( 'property_address' );
                                echo $address['street'] .', '. $address['city'].', '.$address['state']; ?></p>
                            </address>
                            <article>
                                <strong>Property Details:</strong>
                                <?php $description = get_field( 'property_description' );
                                echo $description; ?>
                            </article>
                        </div>
                        <?php
                        $additional_photos = get_field( 'property_additional_photos' );
                        if ( $additional_photos ) : ?>
                        <div class="pd-additional-photos">
                            <div class="uk-position-relative uk-light" tabindex="-1" uk-slideshow="min-height:400">

                                <ul class="uk-slideshow-items">
                                    <?php foreach ( $additional_photos as $photo ) : ?>
                                    <li> <?php echo wp_get_attachment_image( $photo['id'], 'medium', '', [ 'uk-cover' => '' ] ); ?> </li>
                                    <?php endforeach; ?>
                                </ul>

                                <a class="uk-position-center-left uk-position-small uk-hidden-hover" aria-label="Previous" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
                                <a class="uk-position-center-right uk-position-small uk-hidden-hover" aria-label="Next" href="#" uk-slidenav-next uk-slideshow-item="next"></a>

                            </div>
                        </div>
                        <?php endif; ?>
                    </div>
                </section>

                <section class="uk-section uk-section-xsmall | property-map">
                    <?php $location = get_field('property_map');
                    if( $location ): ?>
                        <div class="acf-map uk-box-shadow-small" data-zoom="16">
                            <div class="marker" data-lat="<?php echo esc_attr($location['lat']); ?>" data-lng="<?php echo esc_attr($location['lng']); ?>"></div>
                        </div>
                    <?php endif; ?>
                </section>

            </div>
        </div>
        <div class="uk-width-large@m uk-background-secondary | file-management">
            <hgroup id="property-documents"> <h2>Property Documents</h2> </hgroup>
            <div uk-overflow-auto>
                <?php $folder = [
                    'AM PM Agreements',
                    'Acquisitions 2017',
                    'Appraisals and BOVs',
                    'Budgets',
                    'Entity Compliance',
                    'Insurance',
                    'Loan Documents',
                    'Monthly Reports',
                    'Quarterly Operating Statements',
                    'TIC Documents',
                    'TIC Meetings',
                    'Year-end Financials',
                    'Year-end Tax Packages'
                ]; ?>
                <ul uk-accordion>
                    <?php for ($n=0;$n<count($folder);$n++) : 

                    if ( $folder[$n] == 'Year-end Tax Packages' ) {
                        $yetp = 'id="'.strtolower( str_replace(' ','-',$folder[$n]) ).'"';
                        if ( wp_is_mobile() ) {
                            $scrollspy = 'uk-scrollspy="cls: uk-background-primary uk-animation-shake; delay: 25"';
                        }
                    } ?>
                    <li <?php echo $yetp . ' ' . $scrollspy; ?>>
                        <a href="#" class="uk-accordion-title"><?php echo $folder[$n]; ?></a>
                        <div class="uk-accordion-content">
                            <ul uk-accordion>
                                <li>
                                    <a href="#" class="uk-accordion-title">PPM</a>
                                    <div class="uk-accordion-content"></div>
                                </li>
                                <li>
                                    <a href="#" class="uk-accordion-title">Settlement Statement</a>
                                    <div class="uk-accordion-content"></div>
                                </li>
                                <li>
                                    <a href="#" class="uk-accordion-title">Title</a>
                                    <div class="uk-accordion-content">
                                        <ul>
                                            <li><a href="#" uk-tooltip="title: Click to download; pos: bottom-left">2200 Bentonville Amendment #2 to PSA FE</a></li>
                                            <li><a href="#" uk-tooltip="title: Click to download; pos: bottom-left">Amendment 1 PSA Bentonville (fully executed)</a></li>
                                            <li><a href="#" uk-tooltip="title: Click to download; pos: bottom-left">PSA Clorox - NASIS - Fully Executed</a></li>
                                            <li><a href="#" uk-tooltip="title: Click to download; pos: bottom-left">Warranty Deed</a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                            <ul>
                                <li><a href="#" uk-tooltip="title: Click to download; pos: bottom-left">2200 Bentonville Amendment #2 to PSA FE</a></li>
                                <li><a href="#" uk-tooltip="title: Click to download; pos: bottom-left">Amendment 1 PSA Bentonville (fully executed)</a></li>
                                <li><a href="#" uk-tooltip="title: Click to download; pos: bottom-left">PSA Clorox - NASIS - Fully Executed</a></li>
                                <li><a href="#" uk-tooltip="title: Click to download; pos: bottom-left">Warranty Deed</a></li>
                            </ul>
                        </div>
                    </li>
                    <?php endfor; ?>
                </ul>
            </div>
            <!-- End Overflow -->
            <div class="uk-panel | nasis-available-investments">
            <?php
                $extURL   = get_field( 'nasis_url', 'option' );
                $btnLabel = get_field( 'nasis_btn_label', 'option' ); ?>

                <figure class="uk-margin-remove">
                    <img src="<?php echo _uri.'/resources/images/ondemand/nasis-logo.png'; ?>" width="200" height="50" alt="">
                    <a href="<?php echo esc_url( $extURL ); ?>" class="uk-button uk-button-primary" target="_blank"> <?php echo esc_html( $btnLabel ); ?> </a>
                </figure>
            </div>

            <div class="uk-panel | nas-investments">
            <?php
                $dstContent = get_field( 'dst_content', 'option' );
                $dstPhoto   = get_field( 'dst_photo', 'option' );
                $dstURL     = get_field( 'dst_url', 'option' );
                $dstLabel   = get_field( 'dst_btn_label', 'option' ); ?>
                <div class="nasis-property">
                    <div class="uk-card uk-card-secondary uk-card-small">
                        <div class="uk-card-header">
                            <img src="<?php echo _uri.'/resources/images/ondemand/nasis-logo.png'; ?>" width="100" height="25" alt="NASIS Logo">
                            <?php echo $dstContent; ?>
                        </div>
                        <div class="uk-card-body">
                            <figure class="uk-position-relative uk-margin-small-bottom">
                                <?php echo wp_get_attachment_image( $dstPhoto['id'], 'full' ); ?>
                                <div class="uk-overlay-primary uk-position-cover"></div>
                                <figcaption class="uk-position-small uk-position-top">
                                    <?php echo $dstPhoto['caption']; ?>
                                </figcaption>
                            </figure>
                            <a href="<?php echo esc_url( $dstURL ); ?>" class="uk-button uk-button-primary" target="_blank"><?php echo esc_html( $dstLabel ); ?></a>
                        </div>
                    </div>
                </div>
                <div class="nasis-brochure">
                <?php 
                    $brochure = get_field( 'pdf_brochure_file', 'option' );
                    $pbTitle = get_field( 'pb_title', 'option' );
                    $pbLabel = get_field( 'pb_btn_label', 'option' ); ?>
                    <div class="uk-card uk-card-small uk-grid-collapse" uk-grid>
                        <div class="uk-card-media-left uk-width-1-1 uk-cover-container">
                            <!-- <img src="<?php echo esc_attr($icon); ?>" alt="" uk-cover> -->
                            <?php echo wp_get_attachment_image( $brochure['id'], [ 9999, 90, true ] ); ?>
                        </div>
                        <div class="uk-width-expand">
                            <div class="uk-card-body">
                                <h3 class="uk-card-title"><?php echo $pbTitle; ?></h3>
                                <p><a href="<?php echo esc_url( $brochure['link'] ); ?>"><?php echo esc_html( $pbLabel ); ?></a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php get_footer( 'ondemand' );