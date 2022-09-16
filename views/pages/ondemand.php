<?php
// Get User's Role
$user = wp_get_current_user();
$role = $user->roles[0];

// if ( $role !== 'administrator' ) :

    // If user is not logged-in, redirect to login
    if ( !is_user_logged_in() && is_page([ 38, 40, 42, 45, 49 ]) ) {
        wp_redirect( get_permalink( 36 ) );
        exit;
    }

    // Display the login form
    if ( !is_user_logged_in() && is_page( 36 ) ) {
        get_template_part( _ondemand.'login' );        
    }

    // If user is logged-in, redirect to dashboard
    if ( is_user_logged_in() && is_page( 36 ) ) {
        wp_redirect( get_permalink( 38 ) );
        exit;
    }

    // Redirect user to respective pages
    if ( is_user_logged_in() ) {

        if ( is_page(38) ) {
            get_template_part( _ondemand.'dashboard' );
        } elseif ( is_page( 40 ) ) {
            get_template_part( _ondemand.'profile' );
        } elseif ( is_page( 42 ) ) {
            // Redirect "OnDemand/Property" url back to Dashboard
            wp_redirect( get_permalink( 38 ) );
            exit;
        }

    }

    // Display the password reset form
    if ( is_page( 47 ) ) {
        get_template_part( _ondemand.'reset' );
    }

// endif;

// if ( $role === 'administrator' ) :

//     wp_redirect( esc_url( site_url('acmx?wppb_force_wp_login=true') ) );
//     exit;

// endif;