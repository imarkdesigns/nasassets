<main id="main" class="main" role="main">
    <div uk-grid class="uk-grid-collapse" uk-height-viewport="expand: true; min-height: 960; offset-bottom: 80px; offset-top: true">
        <div class="uk-width-expand@l uk-flex-stretch">
            <!-- Flex Start -->
            <div uk-grid class="uk-grid-collapse uk-height-1-1">
                <div class="uk-width-1-2@m | my-properties">
                    <hgroup> <h1>My Properties</h1> </hgroup>
                    <div uk-overflow-auto>
                        <?php do_action( 'property_lists' ); ?>
                    </div>
                </div>
                <!-- // -->
                <div class="uk-width-1-2@m | top-news">
                    <hgroup> <h2>NAS Top News</h2> </hgroup>
                    <div uk-overflow-auto>
                        <ul class="tn-list">
                            <?php do_action( 'news_sticky' ); ?>
                        </ul>
                    </div>
                </div>
                <!-- // -->
            </div>
            <!-- Flex End -->
        </div>
        <div class="uk-width-large@l uk-background-secondary uk-flex-first@l | od-info">
            <div class="uk-panel | od-slogan">
                <h2>On<span>Demand</span> <small>information</small></h2>
                <h3>Anytime. Anywhere.</h3>
                <p>View confidential property information securely at any time on any device.</p>
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
                    $pbLabel = get_field( 'pb_btn_label', 'option' ); 

                    $brochure_thumb = explode("pdf", $brochure['url']);
                    $brochure_thumb = substr($brochure_thumb[0], 0, -1);
                    $brochure_thumb = $brochure_thumb . '-pdf.jpg'; ?>
                    <div class="uk-card uk-card-small uk-grid-collapse" uk-grid>
                        <div class="uk-card-media-left uk-width-1-1 uk-cover-container">
                            <img src="<?php echo $brochure_thumb; ?>" alt="<?php echo $pbTitle; ?>" uk-cover>
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