<a href="#main" id="skipToLink" class="skip-to-content-link">Skip to Content</a>
<div data-globals="menu">

    <nav class="uk-navbar-container" uk-navbar>
        <div class="uk-navbar-left">
            <a class="uk-navbar-item uk-logo" href="#" aria-label="<?php bloginfo(); ?>"></a>
        </div>

        <div class="uk-navbar-right">
            <ul class="uk-navbar-nav uk-visible@l">
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
                            <li><a href="<?php echo esc_url( '//nasinvestmentsolutions.com/' ); ?>">NAS Investment Solutions</a></li>
                            <li><a href="<?php echo esc_url( '//nasinvestmentsolutions.com/available-investments' ); ?>">Available Investments</a></li>
                            <li><a href="<?php echo esc_url( '//nasinvestmentsolutions.com/webinar' ); ?>">Webinars</a></li>
                            <li><a href="<?php echo esc_url( '//nasinvestmentsolutions.com/referral-program' ); ?>">Refer A Friend</a></li>
                        </ul>
                    </div>
                </li>
                <li class="uk-margin-small-left">
                    <a class="uk-navbar-toggle" href="#modal-full" uk-search-icon uk-toggle aria-label="Search"></a>
                </li>   
            </ul>
            <a class="uk-navbar-toggle uk-hidden@l" href="#" aria-label="Sidebar Menu">
                <span>Menu</span>
                <span uk-navbar-toggle-icon></span>
            </a>
        </div>
    </nav>

</div>