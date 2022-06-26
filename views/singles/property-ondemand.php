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
                        <img src="//placem.at/places?w=2560&h=1140&txt=0&random=10" width="1280" height="570" alt="Featured Image" uk-cover>
                        <canvas width="1280" height="570"></canvas>

                        <aside class="uk-panel uk-hidden@m">
                            <a href="#property-documents" class="uk-button uk-button-secondary uk-width-1-1" uk-scroll> <span uk-icon="icon: folder" class="uk-margin-small-right"></span> See Documents</a>
                        </aside>
                    </div>

                    <div class="uk-overlay uk-position-small uk-position-top-right">
                        <div class="uk-card uk-card-secondary uk-card-small | contact-person">
                            <div class="uk-card-header">
                                <div class="uk-text-uppercase uk-text-center uk-text-small">Property Contact Person</div>
                            </div>
                            <div class="uk-card-body uk-grid-collapse uk-flex-middle" uk-grid>
                                <div class="uk-width-auto">
                                    <img class="uk-border-circle" width="48" height="48" src="//www.nasassets.com/uploads/2016/01/shirlee-j-kingsley_executive.jpg" alt="Contact Person">
                                </div>
                                <div class="uk-width-expand">
                                    <h3 class="uk-card-title">Shirlee J. Kingsley, <span class="uk-display-inline-block uk-text-small">CPM</span></h3>
                                    <div class="uk-text-meta">Vice President</div>
                                </div>
                            </div>
                            <div class="uk-card-footer uk-grid-collapse uk-flex-middle uk-flex-between | cp-cta" uk-grid>
                                <div class="uk-width-2-3"><a href="#" class="uk-button uk-button-text uk-link-reset">Visit Adi Peery Bio</a></div>
                                <div class="uk-width-1-3 uk-text-center"><a href="#" aria-label="Send Message"><span uk-icon="icon: mail"></span></a></div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="uk-section uk-section-secondary uk-section-xsmall | property-details">
                    <div class="pd-wrapper">
                        <div class="pd-info">
                            <address>
                                <p><strong>Address:</strong> 2200 SE 28th Street, Bentonville, AR</p>
                            </address>
                            <article>
                                <strong>Property Details:</strong>
                                2200 Bentonville is a newly constructed, two-story 30,829 square foot Class “A” office building. The property is located at 2200 SE 28th Street in Bentonville, Arkansas. The property is 100% leased and occupied by one tenant, The Clorox Sales Company. The property was strategically constructed 3.5 miles from the Walmart corporate headquarters and ½ mile from the Sam’s Club corporate headquarters. Bentonville is centrally located in Benton county with Rogers county adjacent to the east.
                            </article>
                        </div>
                        <div class="pd-additional-photos">
                            <div class="uk-position-relative uk-light" tabindex="-1" uk-slideshow="min-height:400">

                                <ul class="uk-slideshow-items">
                                    <li>
                                        <img src="//placem.at/places?w=640&h=360&txt=0&random=510" alt="" uk-cover>
                                        <div hidden class="uk-overlay uk-overlay-primary uk-position-bottom uk-text-center uk-transition-slide-bottom">
                                            <h3 class="uk-margin-remove">Bottom</h3>
                                            <p class="uk-margin-remove">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        </div>
                                    </li>
                                    <li>
                                        <img src="//placem.at/places?w=640&h=360&txt=0&random=112" alt="" uk-cover>
                                        <div hidden class="uk-overlay uk-overlay-primary uk-position-bottom uk-text-center uk-transition-slide-bottom">
                                            <h3 class="uk-margin-remove">Bottom</h3>
                                            <p class="uk-margin-remove">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        </div>
                                    </li>
                                    <li>
                                        <img src="//placem.at/places?w=640&h=360&txt=0&random=114" alt="" uk-cover>
                                        <div hidden class="uk-overlay uk-overlay-primary uk-position-bottom uk-text-center uk-transition-slide-bottom">
                                            <h3 class="uk-margin-remove">Bottom</h3>
                                            <p class="uk-margin-remove">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        </div>
                                    </li>
                                </ul>

                                <a class="uk-position-center-left uk-position-small uk-hidden-hover" aria-label="Previous" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
                                <a class="uk-position-center-right uk-position-small uk-hidden-hover" aria-label="Next" href="#" uk-slidenav-next uk-slideshow-item="next"></a>

                            </div>
                        </div>
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
                <figure class="uk-margin-remove">
                    <img src="<?php echo _uri.'/resources/images/ondemand/nasis-logo.png'; ?>" width="200" height="50" alt="">
                    <a href="#" class="uk-button uk-button-primary">View More Available Investments</a>
                </figure>
            </div>

            <div class="uk-panel | nas-investments">
                <div class="nasis-property">
                    <div class="uk-card uk-card-secondary uk-card-small">
                        <div class="uk-card-header">
                            <img src="<?php echo _uri.'/resources/images/ondemand/nasis-logo.png'; ?>" width="100" height="25" alt="NASIS Logo">
                            <h3>Available dst properties fractional interests starting at $100K</h3>
                            <p>Quality DST properties underwritten by the NASIS team. 1031 Exchange Eligible, Dependable Closings, Self-Directed IRA Qualified</p>
                        </div>
                        <div class="uk-card-body">
                            <figure class="uk-position-relative uk-margin-small-bottom">
                                <img src="//www.nasinvestmentsolutions.com/wp-content/uploads/2022/03/Waygate-Header-photo-1920-x-900.jpg" alt="Waygate">
                                <div class="uk-overlay-primary uk-position-cover"></div>
                                <figcaption class="uk-position-small uk-position-top">
                                    Waygate Technologies Increasing Above Market Cash-On-Cash Returns
                                </figcaption>
                            </figure>
                            <a href="#" class="uk-button uk-button-primary" target="_blank">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="nasis-brochure">
                    <div class="uk-card uk-card-small uk-grid-collapse" uk-grid>
                        <div class="uk-card-media-left uk-width-1-1 uk-cover-container">
                            <img src="//placem.at/things?w=70&h=90&txt=0&random=1" alt="" uk-cover>
                            <canvas width="70" height="90"></canvas>
                        </div>
                        <div class="uk-width-expand">
                            <div class="uk-card-body">
                                <h3 class="uk-card-title">Download Free - 1031: A Guide Through the Tax Deferred Real Estate Investment Process.</h3>
                                <p><a href="#">Download Free NASIS Guide Here</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php get_footer( 'ondemand' );