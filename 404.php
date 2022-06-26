<?php 
if ( !is_user_logged_in() ) {
    get_header();
} else {
    get_header( 'ondemand' );
}

?>
<main class="main" role="main">
    
    <section class="uk-section section-error">
        <div class="uk-container uk-container-small">
            <div class="uk-panel uk-padding uk-text-center">
                
                <hgroup>
                    <h4>Oopps! That Page Can't Be Found.</h4>
                    <h1>404</h1>
                </hgroup>
                <p>It looks like nothing was found at this location <br> Please use the top <strong>Menu</strong></p>

            </div>
        </div>
    </section>

</main>
<?php

if ( !is_user_logged_in() ) {
    get_footer();
} else {
    get_footer( 'ondemand' );
}
