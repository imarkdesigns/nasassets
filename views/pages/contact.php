<?php
// Get User Info
$current_user = wp_get_current_user();
$investor_id     = $current_user->ID;
$investor_email  = ( !empty($current_user->user_email) ) ? $current_user->user_email : get_field( 'od_email', 'user_' . $investor_id );
$investor_name   = $current_user->display_name;
$investors_phone = ( !empty(get_field( 'od_phone_primary', 'user_' . $investor_id )) ? get_field( 'od_phone_primary', 'user_' . $investor_id ) : get_field( 'od_phone_secondary', 'user_' . $investor_id ) );

// Get Contact Person Email
$cpid = get_posts([ 'post_type' => 'nas-team', 'posts_per_page' => -1 ]);
if ( isset($_GET['cid']) ) {
    foreach($cpid as $id) {
        if ( $_GET['cid'] != md5($id->ID) )
            continue;

            $_GET['odc'] = get_field( 'profile_email', $id->ID );
            // echo $cid;
    }
}
?>
<main id="main" class="main" role="main">
    <div class="uk-container uk-container-large">

        <section class="uk-section">
            <div uk-grid class="uk-child-width-1-2@m">
                <div>
                    <div class="uk-headings">
                        <h2>We're here to help</h2>
                        <p>Leave a message and we will get back to you.</p>
                    </div>
                </div>
                <div>
                    <?php echo do_shortcode( '[wpforms id="967" title="false"]' ); ?>
                </div>
            </div>
        </section>

    </div>
</main>