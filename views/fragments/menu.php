<?php
// Change menu position class
if ( !is_home() ) {
    $class = 'class="uk-position-top"';
} else {
    $class = 'class="uk-position-relative"';
}

?>
<a href="#main" id="skipToLink" class="skip-to-content-link">Skip to Content</a>
<div <?=$class;?> nas-global="menu">

    <nav class="uk-navbar-container" uk-navbar>
        <div class="uk-navbar-left">
            <a class="navbar | uk-navbar-item uk-logo" href="<?php echo home_url(); ?>" aria-label="<?php bloginfo(); ?>"></a>
        </div>

        <div class="nav-overlay uk-navbar-center uk-visible@l">
            <div class="navbar | uk-position-relative uk-width-xlarge" hidden>
                <form class="uk-search uk-search-default uk-width-1-1">
                    <span uk-search-icon></span>
                    <input class="uk-search-input" type="search" name="s" placeholder="Type your subject keywords here & press enter..." autocomplete="off" autofocus>
                </form>
                <a id="close-search" class="uk-navbar-toggle uk-position-center-right uk-position-small" uk-close uk-toggle="target: .navbar; animation: uk-animation-fade" href="#"></a>              
                <div class="quick-links | uk-background-muted">
                    <strong>Quick Links</strong>
                    <ul class="uk-list">
                        <li><a href="#">About NAS</a></li>
                        <li><a href="#">Frequently Asked Questions</a></li>
                        <li><a href="#">Client Comments</a></li>
                        <li><a href="#">Property Management</a></li>
                        <li><a href="#">Loan Maturity Solutions</a></li>
                        <li><a href="#">Team</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>                
            </div>
        </div>

        <div class="uk-navbar-right uk-visible@l">
            <ul class="navbar | uk-navbar-nav">
                <li><a href="<?php echo home_url(); ?>">Home</a></li>
                <li><a href="<?php echo esc_url( get_permalink( 36 ) ); ?>">Client Login</a></li>
                <li>
                    <a href="#">About NAS</a>
                    <div class="uk-navbar-dropdown" uk-dropdown="mode: click; offset: 1">
                        <ul class="uk-nav uk-navbar-dropdown-nav">
                            <li><a href="<?php echo esc_url( get_permalink( 9 ) ); ?>">About NAS</a></li>
                            <li><a href="<?php echo esc_url( get_permalink( 12 ) ); ?>">Our Team</a></li>
                            <li><a href="<?php echo esc_url( get_permalink( 14 ) ); ?>">Success Stories</a></li>
                            <li><a href="<?php echo esc_url( get_permalink( 16 ) ); ?>">Client Comments</a></li>
                            <li><a href="<?php echo esc_url( get_permalink( 18 ) ); ?>">Loan Maturity Solutions</a></li>
                            <li><a href="<?php echo esc_url( get_permalink( 20 ) ); ?>">FAQs</a></li>
                            <li><a href="#modal">Company Video</a></li>
                            <li><a href="<?php echo esc_url( get_permalink( 22 ) ); ?>">Outreach</a></li>
                            <li class="uk-nav-divider"></li>
                            <li><a href="#modal">Download Brochure</a></li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="#">Asset Management</a>
                    <div class="uk-navbar-dropdown" uk-dropdown="mode: click; offset: 1">
                        <ul class="uk-nav uk-navbar-dropdown-nav">
                            <li><a href="<?php echo esc_url( get_permalink( 24 ) . '#office' ); ?>">Office</a></li>
                            <li><a href="<?php echo esc_url( get_permalink( 24 ) . 'retail' ); ?>">Retail</a></li>
                            <li><a href="<?php echo esc_url( get_permalink( 24 ) . 'multifamily' ); ?>">Multifamily</a></li>
                            <li><a href="<?php echo esc_url( get_permalink( 24 ) . 'industrial-flex' ); ?>">Industrial Flex</a></li>
                            <li><a href="<?php echo esc_url( get_permalink( 24 ) . 'student-housing' ); ?>">Student Housing</a></li>
                            <li><a href="<?php echo esc_url( get_permalink( 24 ) . 'senior-assisted-living' ); ?>">Senior Assisted Living</a></li>
                        </ul>
                    </div>
                </li>
                <li><a href="<?php echo esc_url( get_permalink( 26 ) ); ?>">Property Management</a></li>
                <li><a href="<?php echo esc_url( get_permalink( 28 ) ); ?>">News</a></li>
                <li><a href="<?php echo esc_url( get_permalink( 30 ) ); ?>">Map</a></li>
                <li><a href="<?php echo esc_url( get_permalink( 32 ) ); ?>">Contact</a></li>
                <li>
                    <a href="#">NASIS</a>
                    <div class="uk-navbar-dropdown" uk-dropdown="mode: click; offset: 1">
                        <ul class="uk-nav uk-navbar-dropdown-nav">
                            <li><a href="<?php echo esc_url( "//www.nasinvestmentsolutions.com/" ); ?>">NAS Investment Solutions</a></li>
                            <li><a href="<?php echo esc_url( "//www.nasinvestmentsolutions.com/available-investments" ); ?>">Available Investments</a></li>
                            <li><a href="<?php echo esc_url( "//www.nasinvestmentsolutions.com/webinar" ); ?>">Webinars</a></li>
                            <li><a href="<?php echo esc_url( "//www.nasinvestmentsolutions.com/referral-program" ); ?>">Refer A Friend</a></li>
                        </ul>
                    </div>
                </li>
                <li class="uk-margin-medium-left">                   
                    <a id="open-search" class="uk-navbar-toggle" href="#" uk-search-icon uk-toggle="target: .navbar; animation: uk-animation-fade" aria-label="Search"> Search </a>
                </li>
            </ul>
        </div>
        <div class="uk-navbar-right uk-hidden@l">
            <a class="mobile-menu | uk-navbar-toggle" href="#mobile-menu" aria-label="Sidebar Menu" uk-toggle>
                <span>menu</span>
                <span uk-navbar-toggle-icon></span>
            </a>
        </div>
    </nav>

</div>