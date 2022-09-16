<?php

function TrackRecord() { 

    $clientServed = get_field( 'record_clients_served', 'option' );
    $assetsRefinanced = get_field( 'record_assets_refinanced', 'option' );
    $assetsSold = get_field( 'record_assets_sold', 'option' );
    $properties = get_field( 'record_properties', 'option' );
    $states = get_field( 'record_states', 'option' );
    $totalDistribution = get_field( 'record_total_distribution', 'option' );
    $portfolioValue = get_field( 'record_portfolio_value', 'option' );
    $portfolioSF = get_field( 'record_portfolio_sf', 'option' );

    ?>

    <div class="track-record | uk-overlay uk-position-bottom-right">
        <h2>Investment Property Track Record - Since 2008</h2>
        <div class="record-wrapper | uk-light">
            <div class="record-item box-blue">
                <h3>
                    <img src="<?php echo _uri.'/resources/images/track-records/img-clients-served.png'; ?>" alt="Clients Served">
                    Client Served
                    <span class="record-value"><?php echo $clientServed; ?></span>
                </h3>
            </div>
            <div class="record-item box-blue">
                <h3>
                    <img src="<?php echo _uri.'/resources/images/track-records/img-assets-refinanced.png'; ?>" alt="Assets Refinanced">
                    Assets Refinanced
                    <span class="record-value"><?php echo $assetsRefinanced; ?></span>
                </h3>
            </div>
            <div class="record-item box-blue">
                <h3>
                    <img src="<?php echo _uri.'/resources/images/track-records/img-assets-sold.png'; ?>" alt="Assets Sold">
                    Assets Sold
                    <span class="record-value"><?php echo $assetsSold; ?></span>
                </h3>
            </div>
            <div class="record-item box-blue">
                <h3>
                    <img src="<?php echo _uri.'/resources/images/track-records/img-properties.png'; ?>" alt="Properties">
                    Properties
                    <span class="record-value"><?php echo $properties; ?></span>
                </h3>
            </div>
            <div class="record-item box-blue">
                <h3>
                    <img src="<?php echo _uri.'/resources/images/track-records/img-states.png'; ?>" alt="States">
                    States
                    <span class="record-value"><?php echo $states; ?></span>
                </h3>
            </div>
            <div class="record-item alt box-dark-green">
                <div class="record-info">
                    <?php echo '$'.$totalDistribution; ?>
                    <span class="notation">Million</span>
                    <small>Total Cash Distribution Delivered</small>
                </div>
            </div>
            <div class="record-item alt box-light-green">
                <div class="record-info">
                    <?php echo '$'.$portfolioValue; ?>
                    <span class="notation">Billion</span>
                    <small>Managed Portfolio Value</small>
                </div>
            </div>
            <div class="record-item alt box-orange">
                <div class="record-info">
                    <?php echo $portfolioSF; ?>
                    <span class="notation">Million</span>
                    <small>Managed Portfolio Square Footage</small>
                </div>
            </div>
        </div>
    </div> 

<?php }
add_action( 'TrackRecord', 'TrackRecord' );