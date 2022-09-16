<main id="main" class="main" role="main">

    <section class="news-lists | uk-section">
        <div class="uk-container uk-container-small">

            <div class="uk-headings">
                <h2>Latest News</h2>
            </div>

            <div class="uk-grid-match" uk-grid>
                
                <div class="uk-width-1-1">
                    <a href="#" class="uk-card uk-card-default uk-flex-middle uk-grid-collapse uk-link-reset" uk-grid>
                        <div class="uk-card-media-left uk-cover-container uk-height-large uk-width-1-2@s uk-width-2-3@m">
                            <img src="//placem.at/places?w=1280&h=450&txt=0&random=1" alt="" uk-cover>
                            <canvas width="1280" height="450"></canvas>
                        </div>
                        <div class="uk-width-1-2@s uk-width-1-3@m">
                            <div class="uk-card-body">
                                <div class="title-category | uk-text-meta uk-margin-bottom">Category</div>
                                <h3 class="title-headline">NAS Delivers 270% Cumulative Return for Legacy Investors in Dallas Area Multifamily Property</h3>
                            </div>
                        </div>
                    </a>
                </div>

                <?php for ( $i=0;$i<4;$i++ ) : ?>
                <div class="uk-width-1-2@s">
                    <a href="#" class="uk-card uk-card-default uk-link-reset">
                        <div class="uk-card-media-top">
                            <img src="//placem.at/places?w=1280&h=720&txt=0&random=2<?=$i?>" alt="">
                        </div>
                        <div class="uk-card-body">
                            <div class="title-category | uk-text-meta uk-margin-bottom">Category</div>
                            <h3 class="title-headline">Karen E. Kennedy Named a Woman of Influence</h3>
                        </div>
                    </a href="#">
                </div>
                <?php endfor; ?>

            </div>

        </div>
    </section>

    <?php
    // Import Success Stories
    get_template_part( _opt . 'stories' ); ?>

    <section class="more-news-lists uk-section">
        <div class="uk-container uk-container-small">

            <div class="uk-headings">
                <h2>More from NAS News</h2>
            </div>

            <div class="uk-grid-match uk-grid-small" uk-grid>
                <?php for ( $i=0;$i<12;$i++ ) : ?>
                <div class="uk-width-1-2@s">
                    <a href="#" class="uk-card uk-card-small uk-flex-middle uk-grid-collapse uk-link-reset" uk-grid>
                        <div class="uk-card-media-left uk-cover-container uk-width-auto">
                            <img src="//placem.at/places?w=150&h=150&txt=0&random=3<?=$i?>" alt="">
                        </div>
                        <div class="uk-width-expand">
                            <div class="uk-card-body">
                                NAS Delivers 270% Cumulative Return for Legacy Investors in Dallas Area Multifamily Property
                            </div>
                        </div>
                    </a>
                </div>
                <?php endfor; ?>
            </div>

        </div>
    </section>    


</main>