<?php if ( is_front_page() ) : ?>
<header class="hero home | uk-position-relative">
    <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slideshow="animation: fade; min-height: 668;">
        <ul class="uk-slideshow-items">
            <?php for ($at=0;$at<6;$at++) : ?>
            <li>
                <img src="//placem.at/places?w=1920&h=1100&txt=0&random=1<?=$at;?>" alt="" uk-cover>
                <div class="description | uk-overlay uk-position-bottom-left">
                    <div>Walgreens Burbank <small>Burbank, Illinois United States</small></div>
                </div>
            </li>
            <?php endfor; ?>
        </ul>

        <ul class="uk-thumbnav uk-position-bottom" uk-margin>
            <?php for ($at=0;$at<6;$at++) : ?>
            <li uk-slideshow-item="<?=$at;?>" class="uk-active">
                <a href="#" uk-tooltip="title: hello; pos: bottom;"><img src="//placem.at/places?w=1920&h=1100&txt=0&random=1<?=$at;?>" width="120" height="120" alt=""></a>
            </li>
            <?php endfor; ?>
        </ul>


        <div class="headings | uk-overlay uk-position-bottom-left uk-light">
            <h1>Nationally <span>Respected</span> <br> Owner <span>Entrusted</span></h1>
            <ul>
                <li>Proven Performance</li>
                <li>Commercial Asset & Property Management</li>
            </ul>
        </div>

    </div>
    <!-- End of Slide -->

    <div class="track-record | uk-overlay uk-position-bottom-right">
        <h2>Investment Property Track Record - Since 2008</h2>
        <div class="record-wrapper | uk-light">
            <div class="record-item box-blue">
                <h3>
                    Client Served
                    <span class="record-value">2,568</span>
                </h3>
            </div>
            <div class="record-item box-blue">
                <h3>
                    Assets Refinanced
                    <span class="record-value">21</span>
                </h3>
            </div>
            <div class="record-item box-blue">
                <h3>
                    Assets Sold
                    <span class="record-value">73</span>
                </h3>
            </div>
            <div class="record-item box-blue">
                <h3>
                    Properties
                    <span class="record-value">177</span>
                </h3>
            </div>
            <div class="record-item box-blue">
                <h3>
                    States
                    <span class="record-value">30</span>
                </h3>
            </div>
            <div class="record-item alt box-dark-green">
                <div class="record-info">
                    $595.7
                    <span class="notation">Million</span>
                    <small>Total Cash Distribution Delivered</small>
                </div>
            </div>
            <div class="record-item alt box-light-green">
                <div class="record-info">
                    $3.3
                    <span class="notation">Billion</span>
                    <small>Managed Portfolio Value</small>
                </div>
            </div>
            <div class="record-item alt box-orange">
                <div class="record-info">
                    24.5
                    <span class="notation">Million</span>
                    <small>Managed Portfolio Square Footage</small>
                </div>
            </div>
        </div>
    </div>    



</header>

<?php else : ?>
<header class="hero -contact">
    <div class="uk-cover-container">
        <canvas width="1920" height="720"></canvas>
        <img src="//placem.at/places?w=1920&h=600&txt=0&random=1" alt="" uk-cover>
    </div>
</header>
<?php endif; ?>