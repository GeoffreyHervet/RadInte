;'use strict';

(function(){
    var menu = $('#sticky-category');
    if (!menu.length) {
        return ;
    }
    var stickyTop = menu.offset().top;
    var offsetTop = $('.navbar.navbar-fixed-top').height() - 1;
    var $body = $('body');
    var basePaddingTop = parseInt($body.css('paddingTop'));


    $(window).scroll(function(){
        if( $(window).scrollTop() > stickyTop - offsetTop ) {
            $body.css('paddingTop', basePaddingTop + offsetTop + 4);
            menu.css({position: 'fixed', top: offsetTop, left: 0, right: 0}).addClass('sticky');
        } else {
            $body.css('paddingTop', basePaddingTop);
            menu.css({position: 'static', top: 0}).removeClass('sticky');
        }
    });

})();