<section class="uk-section" data-module="news-module">
    <div class="uk-container uk-container-expand">

        <div class="uk-position-relative uk-visible-toggle" tabindex="-1" uk-slider="finite: true; center: true; index: 2">
            <ul class="uk-slider-items uk-grid-small uk-child-width-1-2 uk-child-width-1-3@m uk-child-width-1-4@l uk-child-width-1-5@xl uk-grid">
                <li>
                    <div class="uk-panel">
                        <img src="<?php echo _uri.'/resources/images/img-nas_news.png'; ?>" alt="National Asset Services News">
                        <a href="#" class="readmore -large">Read More</a>
                    </div>
                </li>
                <?php 
                $title = [
                    'Karen E. Kennedy Named a Woman of Influence',
                    'NAS Adds New, Class-A Indiana Office Property to Management Portfolio',
                    'NAS Named Asset and Property Manager of Garver National Headquarters Campus',
                    'NAS Delivers Buyer to Country’s Largest TIC Ownership Group',
                    'Lorem ipsum dolor sit amet consectetur adipiscing elit',
                    'Mauris non sagittis nulla eget faucibus nunc',
                    'Quisque malesuada commodo dolor egestas sodales nibh congue quis'
                ];

                for ( $n=0;$n<=6;$n++ ) : ?>
                <li>
                    <figure class="uk-inline">
                        <img src="//placem.at/places?w=640&h=550&txt=0&random=20<?=$n?>" width="640" height="550" alt="">
                        <figcaption class="uk-overlay-primary uk-position-cover uk-padding">
                            <span class="news-category">News</span>
                            <h3 class="news-title"><?php echo $title[$n]; ?></h3>
                        </figcaption>
                    </figure>
                </li>
                <?php endfor; ?>
            </ul>

            <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" role="presentation" aria-label="Previous" uk-slidenav-previous uk-slider-item="previous"></a>
            <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" role="presentation" aria-label="Next" uk-slidenav-next uk-slider-item="next"></a>
        </div>        

    </div>
</section>