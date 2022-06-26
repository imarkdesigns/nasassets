<main id="main" class="main" role="main">
    <div uk-grid class="uk-grid-collapse" uk-height-viewport="expand: true; min-height: 960; offset-bottom: 80px; offset-top: true">
        <div class="uk-width-3-4@l uk-flex-stretch">

            <div uk-grid class="uk-grid-collapse uk-height-1-1">
                <div class="uk-width-expand@m | my-profile">
                    <hgroup> <h1>OnDemand Profile</h1> </hgroup>
                    <div uk-overflow-auto>
                        <?php echo do_shortcode( '[wppb-edit-profile form_name="investors-update-form"]' ); ?>
                    </div>
                </div>
                <div class="uk-width-large@m | top-news">
                    <hgroup> <h2>NAS Top News</h2> </hgroup>
                    <div uk-overflow-auto>
                        <ul class="tn-list">
                            <?php for ( $n=0;$n<5;$n++ ) : ?>
                            <li class="tn-item">
                                <div class="uk-card uk-grid-collapse" uk-grid>
                                    <div class="uk-card-media-left uk-cover-container uk-width-auto">
                                        <img src="//placem.at/places?w=640&h=360&txt=0&random=3<?=$n?>" alt="" uk-cover>
                                        <canvas width="640" height="360"></canvas>
                                    </div>
                                    <div class="uk-width-expand">
                                        <div class="uk-card-body">
                                            <h2 class="title">NAS Delivers Multiple Buyer Options for Texas Multifamily Property</h2>
                                            <div class="description">NAS has successfully delivered a buyer for Kings Cove, a Class “A” 192-unit, garden-style apartment community located about 28 miles northeast of downtown Houston in the Kingwood, TX submarket.</div>
                                            <a href="#" class="uk-text-small | od-cta">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <?php endfor; ?>
                        </ul>
                    </div>                    
                </div>
            </div>

        </div>
        <div class="uk-width-1-4@l uk-background-secondary uk-flex-first@l | od-info">
            <div class="uk-panel | od-slogan">
                <h2>On<span>Demand</span> <small>information</small></h2>
                <h3>Anytime. Anywhere.</h3>
                <p>View confidential property information securely at any time on any device.</p>
            </div>

            <div class="uk-panel | nas-investments">
                <div class="nasis-property">
                    <div class="uk-card uk-card-small">
                        <div class="uk-card-header">
                            <img src="<?php echo _uri.'/resources/images/ondemand/nasis-logo.png'; ?>" width="100" height="25" alt="NASIS Logo">
                            <h3>Available dst properties fractional interests starting at $100K</h3>
                            <p>Quality DST properties underwritten by the NASIS team. 1031 Exchange Eligible, Dependable Closings, Self-Directed IRA Qualified</p>
                        </div>
                        <div class="uk-card-body">
                            <figure class="uk-position-relative uk-margin-small-bottom">
                                <img src="<?php echo _uri.'/resources/images/ondemand/img-investment-waygate.png'; ?>" alt="Waygate">
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
                        <div class="uk-card-media-left uk-width-auto uk-cover-container">
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