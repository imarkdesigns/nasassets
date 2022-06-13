<?php
//! ===
//! Do not edit anything in this file unless you know what you're doing
//! ===

//* ACF Hooks
add_action('acf/init', function() {
    acf_update_setting('google_api_key', $_ENV['ACF_GOOGLEMAP']);
});

//* ACF Override UI
add_action('acf/input/admin_head', function() {

  echo '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">';
  // echo '<link rel="stylesheet" href="'._uri.'/build/editor/wp-acf-editor.css">'."\n";

});

//* Speed up ACF backend loading time
add_filter('acf/settings/remove_wp_meta_box', '__return_true');

//* ACF Options
/*
if ( function_exists( 'acf_add_options_page' ) ) :

    acf_add_options_page([
        'menu_slug'   => 'theme-fragments',
        'menu_title'  => 'Fragments',
        'page_title'  => 'Theme Fragments',
        'capability'  => 'edit_posts',
        'icon_url'    => 'dashicons-layout',
        'position'    => '20',
        'redirect'    => true
    ]);

        acf_add_options_sub_page([
            'menu_title'  => 'Header Settings',
            'page_title'  => 'Header Panel',
            'parent_slug' => 'theme-fragments'
        ]);

        acf_add_options_sub_page([
            'menu_title'  => 'Footer Settings',
            'page_title'  => 'Footer Panel',
            'parent_slug' => 'theme-fragments'
        ]);  

        acf_add_options_sub_page([
            'menu_title'  => 'Not Found Settings',
            'page_title'  => 'Not Found Panel',
            'parent_slug' => 'theme-fragments'
        ]);

        acf_add_options_sub_page([
            'menu_title'  => 'Notification Settings',
            'page_title'  => 'Public Notification Panel',
            'parent_slug' => 'theme-fragments'
        ]);


    acf_add_options_page([
        'menu_slug'   => 'theme-modules',
        'menu_title'  => 'Modules',
        'page_title'  => 'Theme Modules',
        'capability'  => 'edit_posts',
        'icon_url'    => 'dashicons-welcome-widgets-menus',
        'position'    => '21',
        'redirect'    => true
    ]);

        acf_add_options_sub_page([
            'menu_title'  => 'Brochure Download',
            'page_title'  => 'NAS Brochure Download',
            'parent_slug' => 'theme-modules'
        ]);

        acf_add_options_sub_page([
            'menu_title'  => 'Track Record',
            'page_title'  => 'Investment Property Track Record',
            'parent_slug' => 'theme-modules'
        ]);

endif;
*/