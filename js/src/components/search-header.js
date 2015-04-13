(function(){
    var $body = $('body');
    $('#search-header').click(function(e){
        var target = $($(this).attr('href'));
        if ($body.width() <= 767) {
            e.preventDefault();
            var form = $('#search-mobile').toggleClass('hide');
            if (!form.is('.hide')) {
                form.find('input').eq(0).focus();
            }
            return false;
        }
        else {
            setTimeout(function(){
                target.find('input').eq(0).focus();
            }, 200);
        }
    });

    $('#search-togggler, #navbar li+li').click(function(){
        var search = $('#search');
        if (search.is(':visible')) {
            search.hide();
        }
    });
})();