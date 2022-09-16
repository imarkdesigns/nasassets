(function($) {

    // Hide Search Input Value
    UIkit.util.on('.nav-overlay', 'beforeshow', function () {
        jQuery('.uk-search-input').val('');
    });

})(jQuery);

