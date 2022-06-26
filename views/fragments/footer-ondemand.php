<?php if ( wp_is_mobile() && is_user_logged_in() ) : ?>
<footer data-ondemand="footer">
    
    <div uk-grid class="uk-grid-collapse uk-child-width-1-2 uk-light">
        <div>
            <div class="uk-panel">
                <a href="#" aria-label="Dashboard"><span uk-icon="icon: thumbnails"></span> Dashboard</a>
            </div>
        </div>
        <div>
            <div class="uk-panel">
                <a href="#" aria-label="Profile"><span uk-icon="icon: user"></span> Profile</a>
            </div>
        </div>
    </div>

</footer>
<?php else : ?>
<footer data-ondemand="footer">

    <div uk-grid class="uk-grid-collapse uk-child-width-auto uk-flex-middle uk-light">
        <div>
            <div class="copyright">
                Copyright <?php echo date('Y'); ?>. <?php bloginfo(); ?>
            </div>
        </div>
        <div>
            <ul class="uk-subnav uk-subnav-divider">
                <li><a href="<?php echo get_permalink( 3 ); ?>" target="_blank">Legal Information</a></li>
                <li><a>Do you have questions? 310 943 8171</a></li>
                <li><a href="#" uk-toggle>Help</a></li>
            </ul>
        </div>
    </div>

</footer>
<?php endif;