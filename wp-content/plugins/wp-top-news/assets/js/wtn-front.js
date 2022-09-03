(function(window, $) {

    // USE STRICT
    "use strict";

    var wtnClass = $(".wtn-news-ticker")[0];

    if (wtnClass != null) {
        var rtl = wtnClass.getAttribute('data-rtl-type');

        $('.wtn-news-ticker-marquee').AcmeTicker({
            type: 'marquee',
            direction: (rtl == 'rtl' ? 'right' : 'left'),
            speed: 0.05
        });

        $('.wtn-news-ticker-horizontal').AcmeTicker({
            type: 'horizontal',
            direction: (rtl == 'rtl' ? 'left' : 'right'),
            speed: 1000
        });

        $('.wtn-news-ticker-typewriter').AcmeTicker({
            type: 'typewriter',
            direction: 'left',
            speed: 50
        });

        $('.wtn-news-ticker-vertical').AcmeTicker({
            type: 'vertical',
            direction: 'down',
            speed: 1000
        });
    }

})(window, jQuery);