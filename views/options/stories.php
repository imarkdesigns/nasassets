<?php
if ( !is_home() ) {
    $class = 'class="uk-section"';
} else {
    $class = 'class="uk-section uk-section-secondary"';
}

?>
<section <?=$class?> data-module="stories-module">
    <div class="uk-position-relative" tabindex="-1" uk-slider="finite: true">
        <ul class="uk-slider-items uk-grid-small uk-grid">

            <li class="uk-width-1-2@s uk-width-2-3@m uk-width-1-2@l uk-width-2-5@xl">
                <div class="uk-panel">
                    <div class="uk-headings">
                        <h2><span>National Assets Services</span> Success Stories</h2>
                    </div>
                    <p>National Asset Services is a nationally respected, owner-entrusted commercial real estate management company that has worked with over 90 ownership groups. With experience in managing diverse properties, located in diverse markets across the country, the NAS team knows that all owners have one goal in common:</p>
                    <h3>Increase Property Value. Optimize Property Performance.</h3>
                    <p>If you're looking for a better commercial real estate management company, put the NAS team to work for your asset today. You will quickly see how an experienced commercial property management company can make a real difference in the making of your property's success story.</p>
                </div>
            </li>
            <?php 
            $title = [
                'Crystal Lake Golf Club',
                'Kings Cove Reopens',
                'Gander Outdoors',
                'Lorem Ipsum Dolor',
                'Sit Amet Consectetur',
                'Mauris Non Sagittis Nulla',
            ];

            $address = [
                'Deerfield Beach, FL',
                'Kingwood, TX',
                'Spring, TX',
                'Los Angeles, CA',
                'Syracuse, NY',
                'Fort Worth, TX'
            ];

            $details = [
                'Successful Property Re-purposing Strategy Delivers Buyer for Crystal Lake Golf Club.',
                'Kings Cove was among the first multifamily properties to open after the devastation of Hurricane Harvey in Sept. 2017.  A $6 Million Property Renovation of the property was completed in March, 2018.',
                'The Gander Outdoors building at a Houston-are freestanding big box retail location was leased in just three Months.',
                'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab inventore itaque quidem vero numquam explicabo vel aut iste, eveniet magni fuga iusto nihil minima et nesciunt odit. Quis, cupiditate, culpa!',
                'Sed venenatis eros et neque eleifend, venenatis posuere sapien molestie. Maecenas at velit lobortis est tincidunt volutpat.',
                'Ut eu quam nec erat tempor vestibulum sit amet at neque. Etiam ut urna vulputate, luctus nibh et, iaculis metus.'
            ];

            for ( $n=1;$n<=5;$n++ ) : ?>
            <li class="uk-width-1-2@s uk-width-1-3@m uk-width-1-4@l uk-width-1-5@xl">
                <figure class="uk-inline">
                    <img src="//placem.at/places?w=640&h=700&txt=0&random=30<?=$n?>" width="640" height="700" alt="">
                    <figcaption class="uk-overlay-primary uk-position-bottom uk-padding">
                        <span class="story-address"><?php echo $address[$n]; ?></span>
                        <h3 class="story-title"><?php echo $title[$n]; ?></h3>
                        <p><?php echo $details[$n]; ?></p>
                        <p><a href="#" class="uk-button uk-button-primary">Read More</a></p>
                    </figcaption>
                </figure>
            </li>
            <?php endfor; ?>
        </ul>

        <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" role="presentation" aria-label="Previous" uk-slidenav-previous uk-slider-item="previous"></a>
        <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" role="presentation" aria-label="Next" uk-slidenav-next uk-slider-item="next"></a>
    </div>
</section>

