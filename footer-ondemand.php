<?php
    $loggedIn = is_user_logged_in();
    $user = wp_get_current_user();
    $allowedRole = ['investor'];

    if ( $loggedIn && array_intersect( $allowedRole, $user->roles ) ) {
        get_template_part( _od_ftr );
    }
    wp_footer();
    
    get_template_part( _noie );
    get_template_part( _nojs );
    get_template_part( _kuki );

    // Add your custom script below this line

    // End

    echo '</body>'."\n"; // end of body
    echo '</html>';