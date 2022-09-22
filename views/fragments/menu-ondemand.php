<?php 
global $post;
// switch ( $post->ID ) {

//     case '38': 
//         $dashboard = 'class="uk-active"'; 
//         break;
//     case '40': $profile   = 'class="uk-active"'; break;

// }

// echo $dashboard;
// echo '<br>';
// echo $profile;

// if ( $post->ID == '38' ) {
//     $classActive = 'class="uk-active"';
// } else if ( $post->ID == 'class="uk-active"' ) {
//     $classActive = 'class="uk-active"';
// }

$current_user = wp_get_current_user();
$display_name = $current_user->display_name;

if ( wp_is_mobile() ) : ?>
<a href="#main" id="skipToLink" class="skip-to-content-link">Skip to Content</a>
<div data-ondemand="menu">
    <nav class="uk-navbar-container" uk-navbar>
        <div class="uk-navbar-left">
            <a class="uk-navbar-item uk-logo" href="#" aria-label="<?php bloginfo(); ?>"></a>
        </div>
        <div class="uk-navbar-right">
            <div class="uk-navbar-nav">
                <li>
                    <a href="#" title=""><?php echo $display_name; ?></a>
                    <div class="uk-navbar-dropdown" uk-dropdown="mode: click; offset: 0">
                        <ul class="uk-nav uk-navbar-dropdown-nav">
                            <li><a href="<?php echo get_permalink( 32 ); ?>" target="_blank">Contact NAS</a></li>
                            <li><a href="<?php echo get_permalink( 28 ); ?>" target="_blank">NAS News</a></li>
                            <li><a href="<?php echo get_permalink( 32 ); ?>" target="_blank">Legal Information</a></li>
                            <li><a>Questions? 310 943 8171</a></li>
                            <li><a href="#modal-help" uk-toggle>Help</a></li>
                            <li class="uk-nav-divider"></li>
                            <li><?php echo do_shortcode('[wppb-logout text="" redirect_url="/ondemand" link_text="Log Out"]'); ?></li>
                        </ul>
                    </div>
                </li>
            </div>
        </div>
    </nav>
</div>
<?php else : ?>
<a href="#main" id="skipToLink" class="skip-to-content-link">Skip to Content</a>
<div data-ondemand="menu">
    <nav class="uk-navbar-container uk-grid-collapse uk-flex-between uk-flex-middle" uk-navbar uk-grid>
        <div class="uk-width-1-4">
            <a class="uk-navbar-item uk-logo" href="#" aria-label="<?php bloginfo(); ?>"></a>
        </div>
        <div class="uk-width-3-4">
            <div class="uk-grid-collapse uk-flex-middle" uk-grid>
                <div class="uk-width-1-2@s uk-visible@s | search-property">
                    <form class="uk-search uk-search-navbar">
                        <label for="search-property" aria-label="Search Property">
                            <span uk-search-icon></span>
                            <input id="search-property" class="uk-search-input" type="search" placeholder="Search Property">
                        </label>
                    </form>
                </div>
                <div class="uk-width-1-2@s | od-nav">
                    <div class="uk-flex uk-flex-between uk-visible@l">
                        <div>
                            <ul class="uk-subnav">
                                <li <?php echo ( $post->ID == '38' ) ? 'class="uk-active"' : ''; ?>><a href="<?php echo get_permalink( 38 ); ?>">Dashboard</a></li>
                                <li <?php echo ( $post->ID == '40' ) ? 'class="uk-active"' : ''; ?>><a href="<?php echo get_permalink( 40 ); ?>">Profile</a></li>
                                <li><a href="<?php echo get_permalink( 32 ); ?>" target="_blank">Contact NAS</a></li>
                                <li><a href="<?php echo get_permalink( 28 ); ?>" target="_blank">NAS News</a></li>
                            </ul>                            
                        </div>
                        <div class="uk-margin-right">
                            <?php if ( is_user_logged_in() ) {
                                echo do_shortcode('[wppb-logout text="" redirect_url="/dashboard" link_text="Log Out"]');
                            } ?>
                        </div>
                    </div>
                    <ul class="uk-navbar-nav uk-flex-right uk-hidden@l">
                        <li>
                            <a href="#"><?php echo $display_name; ?></a>
                            <div class="uk-navbar-dropdown" uk-dropdown="mode: click; offset: 0">
                                <ul class="uk-nav uk-navbar-dropdown-nav">
                                    <li><a href="<?php echo get_permalink( 38 ); ?>">Dashboard</a></li>
                                    <li><a href="<?php echo get_permalink( 40 ); ?>">Profile</a></li>
                                    <li><a href="<?php echo get_permalink( 32 ); ?>" target="_blank">Contact NAS</a></li>
                                    <li><a href="<?php echo get_permalink( 28 ); ?>" target="_blank">NAS News</a></li>
                                    <li class="uk-nav-divider"></li>
                                    <li><?php echo do_shortcode('[wppb-logout text="" redirect_url="/ondemand" link_text="Log Out"]'); ?></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</div>
<?php endif;