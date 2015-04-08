(function(){
    var $html = $('html');
    $('#left-menu-toggler').click(function(e){
        $html.toggleClass('nav-left');
    });


    $('#right-menu-toggler').click(function(e){
        $html.toggleClass('nav-right');
    });

    //$('#left-menu-toggler').click(function(e){
    //    e.preventDefault();
    //    var leftBar     = $('nav.categories');
    //    var toMove      = $('#site-wrapper,.navbar-fixed-top');
    //    var isShowhing  = !(leftBar.data('displayed') == 1);
    //    console.log(isShowhing);
    //
    //    leftBar.css('left', !isShowhing ? 0 : -300);
    //    toMove.css({
    //        'margin-left': !isShowhing ? 300 : 0,
    //        'margin-right': !isShowhing ? -300 : 0
    //    });
    //    leftBar.animate({
    //        left: !isShowhing ? -300 : 0
    //    }, {duration: 200, queue: false});
    //    toMove.animate({
    //        marginLeft: isShowhing ? 300 : 0,
    //        marginRight: isShowhing ? -300 : 0
    //    }, {duration: 200, queue: false});
    //    leftBar.data('displayed', isShowhing);
    //});
    //
    //$('#right-menu-toggler').click(function(e){
    //    e.preventDefault();
    //    var rightBar     = $('.navbar .navbar-right');
    //    var toMove      = $('#site-wrapper,.navbar-fixed-top');
    //    var isShowhing  = !(rightBar.data('displayed') == 1);
    //
    //    rightBar.css('right', !isShowhing ? 0 : -300);
    //    toMove.css({
    //        'margin-right': !isShowhing ? 300 : 0,
    //        'margin-left': !isShowhing ? -300 : 0
    //    });
    //    rightBar.animate({
    //        right: !isShowhing ? -300 : 0
    //    }, {duration: 200, queue: false});
    //    toMove.animate({
    //        marginRight: isShowhing ? 300 : 0,
    //        marginLeft: isShowhing ? -300 : 0
    //    }, {duration: 200, queue: false});
    //    rightBar.data('displayed', isShowhing);
    //});
})();