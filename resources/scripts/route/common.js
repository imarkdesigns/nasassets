(function($) {

    // Hide Search Input Value
    UIkit.util.on('.nav-overlay', 'beforeshow', function () {
        jQuery('.uk-search-input').val('');
    });

    // News - Rename Filters
    $(window).on('load', () => {
        $toggleValue = '<span class="eapps-google-maps-bar-button-filter-value" eapps-link="filtersToggleValue"></span>';
        // $('.eapps-google-maps-bar-button-filter').find('div:first').html( 'Sort By Property Category' + $toggleValue );
        $('body.map .eapps-google-maps-bar-button-filter').find('div:first').text( 'Sort By Property Category' );
    });

    // Toggle Excerpt
    UIkit.util.on('.excerpt', 'shown', function() {
        jQuery('.toggle-excerpt').text('Read Less');
    });

    UIkit.util.on('.excerpt', 'hidden', function() {
        jQuery('.toggle-excerpt').text('Read More');
    });



})(jQuery);

