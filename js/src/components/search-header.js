(function(){
    var $body = $('body');

    $('#search-header').click(function(e){
        e.preventDefault();
        var target = $($(this).attr('href'));
        console.log(target);
        window.target = target;

        target.toggleClass('in');
        setTimeout(function(){
            $body.one('click', function() {
                target.toggleClass('in');
            });
        });

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
})();