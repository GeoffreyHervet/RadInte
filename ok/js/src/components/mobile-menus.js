(function(){
    var $html = $('html');
    $('#left-menu-toggler').click(function(){
        $html.toggleClass('nav-left');
    });

    $('#right-menu-toggler').click(function(){
        $html.toggleClass('nav-right');
    });
})();