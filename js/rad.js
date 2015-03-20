jQuery(function($){
    var $body = $('body');
    $('#search-header').click(function(e){
        if ($body.width() <= 767) {
            e.preventDefault();
            var target = $($(this).attr('href'));
            target.toggle(0, function(){
                target.find('input').eq(0).focus();
            });
            console.log('input', target.find('input'));
            return false;
        }
    });

    $('#search-togggler, #navbar li+li').click(function(){
        var search = $('#search');
        if (search.is(':visible')) {
            search.hide();
        }
    });

    $('[data-mobile-click-scroll]').click(function(e) {
        if ($body.width() <= 767) {
            var target = $('[data-mobile-click-scroll]').eq(0);
            var top = target.offset().top;
            var scroller = $(this).attr('data-scroll-container');
            if (!scroller) {
                $scroller = $('html,body');
            }
            else  {
                scroller = $(scroller);
                top -= scroller.offset().top;
            }

            setTimeout(function(){
                scroller.animate({
                    scrollTop: top
                }, 'slow');
            });
        }
    });
});