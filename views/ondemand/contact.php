<main id="main" class="main" role="main">
    <div uk-grid class="uk-grid-collapse uk-height-1-1">

        <div class="uk-width-3-4@l uk-flex-stretch">
            
            <div uk-grid class="uk-grid-small uk-grid-divider uk-height-1-1">
                <div class="uk-width-expand@m my-properties">
                    <hgroup>
                        <h1>Send Message</h1>
                    </hgroup>
                    <div class="uk-overflow-auto">
                        
                        

                    </div>
                </div>
                <div class="uk-width-large@m top-news-alt">
                    <hgroup>
                        <h1>NAS Top News</h1>
                    </hgroup>
                    <div class="uk-overflow-auto">
                        
                        <ul class="tn-lists">
                            <?php for ( $n=0;$n<5;$n++ ) : ?>
                            <li>
                                <div class="uk-card uk-grid-collapse" uk-grid>
                                    <div class="uk-card-media-left uk-cover-container uk-width-auto@s">
                                        <img src="//placem.at/places?w=640&h=360&txt=0&random=4<?=$n?>" alt="" uk-cover>
                                        <canvas width="640" height="360"></canvas>
                                    </div>
                                    <div class="uk-width-expand@s">
                                        <div class="uk-card-body">
                                            <h2 class="tn-title">NAS Delivers Multiple Buyer Options for Texas Multifamily Property</h2>
                                            <p class="tn-description">NAS has successfully delivered a buyer for Kings Cove, a Class “A” 192-unit, garden-style apartment community located about 28 miles northeast of downtown Houston in the Kingwood, TX submarket.</p>
                                            <a href="#" class="tn-link">Read More</a>
                                        </div>
                                    </div>
                                </div>                                
                            </li>
                            <?php endfor; ?>
                        </ul>

                    </div>
                </div>
            </div>

        </div>
        <div class="uk-width-1-4@l uk-flex-first@l uk-background-secondary uk-flex-stretch">
            
            Left Side Panel

        </div>

    </div>
</main>