<main id="main" class="main" role="main">

<section class="about | uk-section">
    <div class="uk-container uk-container-large">
        
        <article class="uk-article uk-child-width-1-2@m uk-flex-top" uk-grid>
            <div>
                <div class="uk-panel">
                    <h2>The <span class="uk-text-success">NAS</span> Brand of <br> 
                    Investment Property Management</h2>
                </div>
            </div>
            <div>
                <div class="uk-panel">
                    <p>Since 2008, NAS has served 2,568 investment clients and has established an impressive track record for investment property management. The track record includes generating over $595 million in cash distributions to property investors and managing a commercial real estate portfolio of 177 diverse commercial properties, comprised of 24.5 million square-feet, in 30 states. The overall value of NAS' managed portfolio in the company's 13-year history, totals over $3.305 billion.</p>
                    <p>National Asset Services was founded on the unwavering principle of putting our clients' best interests above everything else. This is a cornerstone of building trust. NAS is an incredible team of people who strongly believe in this ethic. Good intentions are not enough, however, to achieve positive results in the real estate world on a consistent basis. It also takes a lot of hard work and a wealth of experience and expertise.</p>
                    <div class="excerpt | uk-margin-bottom" hidden>
                        <p>That experience and expertise has come from managing hundreds of properties, during many phases of a property’s life cycle. The NAS team has worked with over 90 ownership groups who have invested in different property types, located in very diverse markets. These properties have been managed at a time when uncertainty seemed the only constant variable. The NAS team has also seen first-hand how market trends, mismanagement and unidentified realities can affect the performance of a property. Our clients have come to know our integrity, understanding of real estate markets and commitment to excellent service through the myriad of challenges and successes we’ve shared.</p>
                        <p>NAS has earned the confidence and faith that has been bestowed upon the management team because of the professional expertise that have been developed over the many years of the company executives’ commercial real estate tenure. The NAS team knows that every single client has worked hard for their investment capital and are dedicated to maximizing returns on each investment.</p>
                    </div>
                    <button type="button" class="toggle-excerpt" uk-toggle="target: .excerpt; animation: uk-animation-fade"> Read More </button>
                </div>
            </div>
            <div class="uk-width-1-1">
                <div class="uk-panel" uk-lightbox>
                    <figure class="uk-position-relative">
                        <div class="uk-overlay uk-position-center uk-light">
                            <h3><small>COMMERCIAL REAL ESTATE MANAGEMENT</small> NAS Company Video</h3>
                            <p>National Asset Services is a commercial real estate management company that delivers results for over 90 investment groups across America. NAS has a proven track record of managing a wide range of commercial real estate in a nationwide portfolio valued at over $3.315 billion.</p>
                            <p>Watch the company video and hear from actual clients about what makes the NAS brand of commercial property management a service that is nationally respected and owner entrusted.</p>
                        </div>
                        <img src="<?php echo _uri.'/resources/images/bg-company-video.jpg'; ?>" alt="">
                    </figure>
                    <a href="https://youtube.com/watch?v=PrKWZlkwv6w&rel=0" aria-label="Play Video" class="play-btn" uk-tooltip="title: Watch Video; pos: bottom;" data-attrs="width: 1280; height: 720;"></a>
                </div>
            </div>
        </div>

    </div>
</section>


<section class="uk-section" data-module="comments-module">
    <div class="uk-container uk-container-expand">

        <div class="uk-grid-large uk-flex-middle" uk-grid>
            <div class="uk-width-1-2@l">
                
                <div class="uk-position-relative">
                    <div uk-slideshow="animation: pull; autoplay: true; min-height: 360; max-height: 510">
                        <div class="uk-visible-toggle uk-light" tabindex="-1">
                            <ul class="uk-slideshow-items">
                                <?php 
                                $slides = [ 'press-ganey-slide1.jpg', 'press-ganey-slide2.jpg', 'press-ganey-slide3.jpg', 'press-ganey-slide4.jpg' ];
                                $slides_details = [ 'Press Ganey National Headquarters', 'Press Ganey Interior', 'Press Ganey Interior', 'Press Ganey Exterior' ];
                                for ( $n=0;$n<4;$n++ ) : ?>
                                <li>
                                    <img src="<?php echo _uri.'/resources/images/client-comments/'.$slides[$n]; ?>" alt="" uk-cover>
                                    <div class="slideshow-caption | uk-overlay uk-overlay-primary uk-position-bottom uk-transition-slide-bottom">
                                        <?php echo $slides_details[$n]; ?>
                                    </div>
                                </li>
                                <?php endfor; ?>
                            </ul>
                        </div>
                        <div class="uk-flex uk-flex-right uk-margin-small-top">                         
                            <ul class="uk-slideshow-nav uk-dotnav"></ul>
                        </div>
                    </div>
                    
                </div>

            </div>
            <div class="uk-width-expand@l uk-flex-first uk-flex-last@l">

                <?php $quote = [ 'post_type' => 'nas-comments', 'posts_per_page' => 1, 'orderby' => 'rand' ];
                query_posts( $quote ); ?>                
                <div class="featured-comments | uk-panel">
                    <div class="uk-headings">
                        <span uk-icon="icon: quote-right; ratio: 5"></span>
                        <h2><span>National Asset Services</span> Client Comments</h2>
                    </div>
                    <?php while ( have_posts() ) : the_post(); ?>
                    <blockquote class="uk-margin-large-bottom">
                        <p><?php the_field( 'cc_comment' ); ?></p>
                        <footer>
                            <?php the_title(); ?> <br>
                            <?php echo get_field( 'cc_designation' ) .' | '. get_field( 'cc_location' ); ?>
                        </footer>                        
                    </blockquote>
                    <?php endwhile; wp_reset_query(); ?>

                    <div class="uk-text-center">
                        <a href="#" class="uk-button uk-button-primary">Read More Client Comments</a>
                    </div>
                </div>

            </div>
        </div>

    </div>
</section>

<?php
// Import Success Stories
get_template_part( _opt . 'stories' ); ?>

<section class="uk-section" data-module="ondemand-module">
    <div class="uk-overlay-primary uk-position-cover"></div>
    <div class="uk-overlay uk-position-center-right uk-width-1-1@s uk-width-1-2@m">
        <h2>On<span>Demand</span> <span class="">information</span></h2>
        <h3>Anytime. Anywhere.</h3>
        <p>NAS is a commercial real estate management company dedicated to providing transparent information to clients. Property documents can be viewed at any time on any device. <a href="#">Learn More</a></p>
    </div>
</section>

<?php
// Import News
get_template_part( _opt . 'news' ); ?>

</main>