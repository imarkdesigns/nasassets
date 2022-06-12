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

            case '11': // About
            case '13': // Team
            case '15': // Success Stories
            case '17': // Client Comments
            case '19': // Loan Maturity Solutions
            case '21': // FAQs
            case '23': // Outreach
            case '25': // Asset Management
            case '27': // Property Management
            case '29': // News
            case '31': // Map
                $pageName = 'overview';
                break;

            case '2' : // Home
            case '33': // Contact
            case '35': // Sitemap
                $pageName = 'main';
                break;

            case '3' : 
                $pageName = 'legal'; 
                break;

        }
        wp_enqueue_style( 'page', _css.$pageName.'.css' );

    }

    elseif ( is_singular() ) {
        
        
    }

}, 100);    