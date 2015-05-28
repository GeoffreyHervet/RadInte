;'use strict';

(function(){
    //var menu = $('#sticky-category');
    //if (!menu.length) {
    //    return ;
    //}
    //var stickyTop = menu.offset().top;
    //var offsetTop = $('.navbar.navbar-fixed-top').height() - 1;
    //var $body = $('body');
    //var basePaddingTop = parseInt($body.css('paddingTop'));
    //
    //
    //$(window).scroll(function(){
    //    if( $(window).scrollTop() > stickyTop - offsetTop ) {
    //        $body.css('paddingTop', basePaddingTop + offsetTop + 4);
    //        menu.css({position: 'fixed', top: offsetTop, left: 0, right: 0}).addClass('sticky');
    //    } else {
    //        $body.css('paddingTop', basePaddingTop);
    //        menu.css({position: 'static', top: 0}).removeClass('sticky');
    //    }
    //});
    //

    var $window = $(window);
    var $menu = $('#sticky-header');
    $window.on('scroll', function(){
        //if ($window.scrollTop() >  100) {
        if ($window.scrollTop() >  95) {
            $menu.show();
        }
        else {
            $menu.hide();
        }
    });

    $menu.find('#search-top').click(function(e){
        e.preventDefault();
        $window.scrollTop(0);
        $('#search-header').click();
    });

})();