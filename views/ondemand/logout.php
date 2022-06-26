Logout
<?php 
    if ( is_user_logged_in() ) {
        echo do_shortcode('[wppb-logout text="You are currently logged in as {{meta_user_name}}." redirect_url="/dashboard" link_text="Log Out"]');
    }
?>