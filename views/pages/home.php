<main id="main" class="main" role="main">

test...

<section class="uk-section" data-module="comments-module">
    <div class="uk-container uk-container-expand">

        <div class="comments-wrapper">
            <div class="uk-position-relative">
                <div uk-slideshow="animation: pull; max-height: 510;">
                    <div class="uk-visible-toggle uk-light" tabindex="-1">
                        <ul class="uk-slideshow-items">
                            <?php for ( $n=0;$n<3;$n++ ) : ?>
                            <li><img src="//placem.at/places?=640&360&txt=0&random=2<?=$n?>" alt="" uk-cover></li>
                            <?php endfor; ?>
                        </ul>
                    </div>
                    <ul class="uk-slideshow-nav uk-dotnav"></ul>
                </div>
            </div>

            <div class="uk-panel">
                <div class="uk-headings">
                    <h2><span>National Assets Services</span> Client Comments</h2>
                </div>
                <blockquote>
                    <p>The team you finally ended up with has done an OUTSTANDING job not to mention the assets that you provided. I can not go without saying that EVERYTHING you have done has more than met my expectations.</p>
                    <footer>
                        Don Senkeresty, San Jose, CA, <br>
                        Investor | Pinecrest Townhomes
                    </footer>
                </blockquote>

                <a href="#" class="uk-button uk-button-primary">Read More Client Comments</a>
            </div>
        </div>

    </div>
</section>


<?php

// Import Success Stories
get_template_part( _opt . 'stories' );

?>

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
get_template_part( _opt . 'news' );

?>
</main>