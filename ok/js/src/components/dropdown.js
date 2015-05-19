;'use strict';
(function(){
    var $window = $(window);

    var isEnabled = function(){
        return $window.width() > 767;
    };

    var timer = null;
    $('li.dropdown').hover(function(){
        if (isEnabled()) {
            var $this = $(this);
            timer = setTimeout(function () {
                $this.addClass('open');
                timer = null;
            }, 100);
        }
    }, function(){
        if (isEnabled()) {
            $(this).removeClass('open');
        }
        if (timer != null) {
            clearTimeout(timer);
            timer = null;
        }
    });
})();