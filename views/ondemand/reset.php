<main id="main" class="main" role="main">
    <div class="uk-container uk-container-expand uk-cover-container uk-flex uk-flex-middle uk-flex-center" uk-height-viewport>
        <img src="//placem.at/places?w=1920&h=1024&txt=0&random=1" alt="" uk-cover>
        <div class="uk-overlay-primary uk-position-cover"></div>
        <div class="uk-overlay uk-position-center uk-light">
            <figure class="uk-width-large uk-margin-auto uk-text-center">
                <img src="<?php echo _uri.'/resources/images/logo-nasassets_x1.png'; ?>" alt="NAS - National Asset Services">
                <figcaption>
                    <h1>On<span>Demand</span></h1>
                    <h2>Information</h2>
                </figcaption>
            </figure>
            <?php echo do_shortcode('[wppb-recover-password redirect_url="/dashboard"]'); ?>
        </div>
    
    </div>
</main>
