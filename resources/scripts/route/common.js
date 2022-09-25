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

    // Check if folder ready to highlight & view
    $(window).on('load', () => {

        var $properties = jQuery('.my-properties'),
            $document   = jQuery('.file-management').find('ul.uk-accordion li[data-folder]');

        $properties.find('aside.uk-alert a.highlight-folder').on('click', () => {
            $document.addClass('tap-highlight uk-open')
                .find('.uk-accordion-title').attr('aria-expanded','true').parent()
                .find('.uk-accordion-content').removeAttr('hidden');
        });

    });


})(jQuery);

