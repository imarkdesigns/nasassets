<main id="main" class="main" role="main">

    <section class="news-lists | uk-section">
        <div class="uk-container">

            <div class="uk-headings">
                <h2>Latest News</h2>
            </div>

            <div class="uk-grid-match uk-flex-center" uk-grid>
                
                <div class="uk-width-1-1">
                    <a href="#" class="uk-card uk-card-default uk-flex-middle uk-grid-collapse uk-link-reset" uk-grid>
                        <div class="uk-card-media-left uk-width-1-1@s uk-width-2-3@m">
                            <img src="//placem.at/places?w=1280&h=720&txt=0&random=1" alt="">
                        </div>
                        <div class="uk-width-1-1@s uk-width-1-3@m">
                            <div class="uk-card-body">
                                <div class="title-category | uk-text-meta uk-margin-bottom">Category</div>
                                <h3 class="title-headline">NAS Delivers 270% Cumulative Return for Legacy Investors in Dallas Area Multifamily Property</h3>
                            </div>
                        </div>
                    </a>
                </div>

                <?php for ( $i=0;$i<6;$i++ ) : ?>
                <div class="uk-width-1-2@s uk-width-1-3@m">
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

                <?php for ( $i=0;$i<8;$i++ ) : ?>
                <div class="uk-width-1-2@s uk-width-1-3@m uk-width-1-4@l">
                    <a href="#" class="uk-card uk-card-default uk-link-reset">
                        <div class="uk-card-media-top">
                            <img src="//placem.at/places?w=640&h=360&txt=0&random=2<?=$i?>" alt="">
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
        <div class="uk-container">

            <div class="uk-headings">
                <h2>More from NAS News</h2>
            </div>

            <div class="uk-grid-match uk-grid-small" uk-grid uk-margin>
                <?php for ( $i=0;$i<8;$i++ ) : ?>
                <div class="uk-width-1-1@s uk-width-1-2@m">
                    <a href="#" class="uk-card uk-card-small uk-flex-middle uk-grid-collapse uk-link-reset" uk-grid>
                        <div class="uk-card-media-left uk-cover-container uk-width-auto uk-visible@m">
                            <img src="//placem.at/places?w=150&h=150&txt=0&random=3<?=$i?>" alt="">
                        </div>
                        <div class="uk-width-expand">
                            <div class="uk-card-body">
                                <div class="title-category | uk-text-meta uk-margin-bottom">Category</div>
                                <h3 class="title-headline">Karen E. Kennedy Named a Woman of Influence</h3>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ratione sequi, facere modi. Porro facilis sapiente sit libero aperiam veritatis vitae!</p>
                            </div>
                        </div>
                    </a>
                </div>
                <?php endfor; ?>
            </div>

        </div>
    </section>    


</main>