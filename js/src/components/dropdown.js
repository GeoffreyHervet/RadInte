;'use strict';
(function(){
    var $window = $(window);

    var isEnabled = function(){
        return $window.width() > 767;
    };

    $('li.dropdown').hover(function(){
        if (isEnabled()) {
            var $this = $(this);
            setTimeout(function () {
                $this.addClass('open');
            }, 100);
        }
    }, function(){
        if (isEnabled()) {
            $(this).removeClass('open');
        }
    });
})();