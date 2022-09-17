<?php if ( is_front_page() ) : ?>
<header class="hero home | uk-position-relative">
    <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slideshow="animation: fade; min-height: 668;">
        <ul class="uk-slideshow-items">
            <?php $slides = get_field( 'hdr_slide' );
            foreach ( $slides as $slide ) : ?>
            <li>
                <?php echo wp_get_attachment_image( $slide['id'], 'full', '', [ 'uk-cover' => '' ] ); ?>
                <div class="description | uk-overlay uk-position-bottom-left">
                    <div><?php echo $slide['title']; ?> <small><?php echo $slide['caption']; ?></small></div>
                </div>
                <div class="uk-overlay-primary uk-position-cover"></div>
            </li>
            <?php endforeach; ?>
        </ul>

        <ul class="uk-thumbnav uk-position-bottom" uk-margin>
            <?php $i = 0; foreach ( $slides as $slide ) : ?>
            <li uk-slideshow-item="<?=$i++;?>" class="uk-active">
                <a href="#" uk-tooltip="title: <?php echo $slide['description']; ?>; pos: bottom;"><?php echo wp_get_attachment_image( $slide['id'], 'thumb' ); ?></a>
            </li>
            <?php endforeach; ?>
        </ul>

        <div class="headings | uk-overlay uk-position-bottom-left uk-light">
            <?php the_field( 'hdr_slide_overlay' ); ?>
        </div>
    </div>
    <!-- End of Slide -->

    <?php do_action( 'TrackRecord' ); ?>   
</header>

<?php elseif ( is_page( 12 ) ) : // Our Team ?>

<header class="hero team | uk-position-relative">
    <div class="uk-container uk-container-expand">

        <div class="uk-grid-collapse uk-grid-match uk-flex-middle" uk-grid>
            <div class="uk-width-1-2@m">
                <figure class="uk-cover-container">
                    <canvas width="960" height="950"></canvas>
                    <img src="<?php echo _uri.'/resources/images/bg-team-nas_hdr.png' ?>" alt="<?php bloginfo(); ?>" uk-cover>
                </figure>
            </div>
            <div class="uk-width-1-2@m uk-flex-first@m uk-flex-last">
                <div class="uk-panel uk-padding-large">
                    <h1><span class="uk-text-success">NAS</span> Team</h1>
                    <p>The National Asset Services commercial real estate management team is an experienced and proven group of professionals.  The executive team works with over 90 diversely structured ownership groups including; private investors and private investor groups, beneficiaries in Delaware Statutory Trusts (DST), and co-owners in tenant-in-common properties. The company’s portfolio consists of over 80 Properties in 25 States valued at over $2 billion.</p>
                    <p>The NAS team has been successful in delivering positive results for a wide range of diverse commercial real estate including; office, medical office, multifamily, retail, student housing, senior assisted living and industrial flex properties and offers.  The NAS executives have a wealth of experience in a wide-range of management and consulting services.</p>
                </div>
            </div>
        </div>

    </div>
</header>

<?php elseif ( is_singular( 'nas-team' ) ) : 

$title       = get_the_title();
$nominal     = get_field( 'profile_postnominal' );
$designation = get_field( 'profile_designation' ); ?>

<!-- <header class="hero profile | uk-position-relative" data-src="//placem.at/places?w=3840&h=1840&txt=0&random=1" uk-img> -->
<header class="hero profile | uk-position-relative">
    
    <div class="uk-cover-container">
        <canvas width="1920" height="920"></canvas>
        <img src="<?php echo _uri.'/resources/images/novanta-team.jpg'; ?>" alt="" uk-cover>

        <div class="uk-overlay-primary uk-position-cover"></div>
        <div class="uk-overlay uk-position-cover uk-light">
            <div class="profile-headings">
                <h1><?php echo $title ?><?php echo !empty($nominal) ? ', <span class="uk-text-meta">'. $nominal .'</span>' : ''; ?></h1>
                <p><?php echo $designation; ?></p>
            </div>            
        </div>
    </div>
    

</header>

<?php elseif ( is_page([ 30 ]) ) : ?>

<header class="hero map | uk-position-relative">

    <div class="uk-cover-container">
        <canvas width="1920" height="450"></canvas>
        <img src="//placem.at/places?w=1920&h=900&txt=0&random=1" alt="" uk-cover>

        <div class="uk-overlay-primary uk-position-cover"></div>
        <div class="uk-overlay uk-position-bottom-center uk-position-medium uk-text-center uk-light">
            <h1>NAS Managed Properties Since 2008</h1>
        </div>
    </div>

</header>
<nav class="hero-localnav | uk-background-secondary">
    <div class="uk-container uk-container-expand">
        <div class="uk-flex uk-flex-between uk-flex-middle overflow">

            <div>
                <h1>Categories</h1>
            </div>
            <div>
                <ul class="uk-subnav">
                    <li><a href="#">Office | Medical</a></li>
                    <li><a href="#">Industrial</a></li>
                    <li><a href="#">Multifamily</a></li>
                    <li><a href="#">Retail</a></li>
                    <li><a href="#">Senior Assisted Living</a></li>
                    <li><a href="#">Student Housing</a></li>
                    <li><a href="#">Championship Golf Course</a></li>
                </ul>
            </div>

        </div>
    </div>
</nav>

<?php elseif ( is_home() ) : ?>

<nav class="hero-localnav | uk-background-muted">
    <div class="uk-container uk-container-expand">
        <div class="uk-flex uk-flex-between uk-flex-middle overflow">

            <div>
                <h1>NAS News</h1>
            </div>
            <div>
                <div>
                    <button type="button" class="uk-button uk-button-small">Popular Categories <span uk-icon="icon: chevron-down; ratio: .7"></span></button>
                    <div class="uk-dropbar uk-dropbar-top" uk-drop="mode: click; stretch: x; target: !.hero-localnav; animation: slide-top; animate-out: true; duration: 700">
                        <ul class="uk-nav uk-navbar-dropdown-nav">
                            <li class="uk-active"><a href="#">Active</a></li>
                            <li><a href="#">Item</a></li>
                            <li class="uk-nav-header">Header</li>
                            <li><a href="#">Item</a></li>
                            <li><a href="#">Item</a></li>
                            <li class="uk-nav-divider"></li>
                            <li><a href="#">Item</a></li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
</nav>

<?php elseif ( is_page([ 14, 16, 22, 32 ]) ) : ?>

<header class="hero | uk-position-relative">

    <div class="uk-cover-container">
        <canvas width="1920" height="450"></canvas>
        <img src="//placem.at/places?w=1920&h=900&txt=0&random=1" alt="" uk-cover>

        <div class="uk-overlay-primary uk-position-cover"></div>
        <div class="uk-overlay uk-position-bottom-center uk-position-medium uk-text-center uk-light">
            <h1><?php the_title(); ?></h1>
        </div>
    </div>

</header>

<?php endif; ?>