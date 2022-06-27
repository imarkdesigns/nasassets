<?php
//! ===
//! Do not edit anything in this file unless you know what you're doing
//! ===

//* Assets Resources
add_action('wp_enqueue_scripts', function() {

    global $post;

    # UIkit version
    # 3.14.3
    wp_enqueue_style( 'uikit', _ui.'uikit.min.css' );
    wp_enqueue_script( 'uikit', _ui.'uikit.min.js', null, null, true );
    wp_enqueue_script( 'uikit-icon', _ui.'uikit-icons.min.js', null, null, true );

    wp_enqueue_style( 'adobe-fonts', '//use.typekit.net/mui5cyq.css' );
    wp_enqueue_style( 'fragments', _css.'fragments.css' );
    wp_enqueue_script( 'router', _js.'router.js', ['jquery'], null, true );
        
    # Localize Scripts
    $dirPath = [ 'dirPath' => get_template_directory_uri() ];
    wp_localize_script( 'router', 'directory_uri', $dirPath );


    # Reset PostName
    $postName = '';

    if ( is_page() ) {

        # Enqueue Styles for Page
        switch ( $post->ID ) {

            case '9': // About
            case '12': // Team
            case '14': // Success Stories
            case '16': // Client Comments
            case '18': // Loan Maturity Solutions
            case '20': // FAQs
            case '22': // Outreach
            case '24': // Asset Management
            case '26': // Property Management
            case '28': // News
            case '30': // Map
                $pageName = 'overview';
                break;

            case '2' : // Home
            case '32': // Contact
            case '34': // Sitemap
                $pageName = 'main';
                break;

            case '3' : 
                $pageName = 'legal'; 
                break;

            // OnDemand
            case '36': // OnDemand
            case '38': // Dashboard
            case '40': // Profile
            case '42': // Property
            case '45': // Contact
            case '47': // Password Reset
                $pageName = 'ondemand';
                break;

        }
        wp_enqueue_style( 'page', _css.$pageName.'.css' );

    }

    elseif ( is_singular( 'nas-ondemand' ) ) {
        wp_enqueue_style( 'post', _css.'ondemand.css' );
        wp_enqueue_script( 'od-map', 'https://maps.googleapis.com/maps/api/js?key='.$_ENV['ACF_GOOGLEMAP'].', null, null, true );
        wp_enqueue_script( 'od-js', _js.'acf-map.js', ['jquery'], null, true );
    }

}, 100);    