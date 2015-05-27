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
                if ($this.is('nav.categories > ul > li')) {
                    var $sub = $this.find('.dropdown-menu');
                    if ($sub.length) {
                        $sub.css('margin-right', '');
                        var left = $sub.position().left + $sub.parent().position().left;
                        var width = $sub.parent().outerWidth();
                        var nav = $sub.closest('nav');

                        //position.top  += $sub.parent().position().top;
                        //left += $sub.parent().position().left;
                        //window.$sub = $sub;
                        //
                        //
                        //console.log('sub.width', $sub.width());
                        //console.log('nav.width', );
                        //console.log('position.left', position.left);

                        //console.log('nav.width', $sub.closest('nav').width());
                        //console.log('left', left);
                        //console.log('width', width);
                        //$sub.css('margin-right', position.left - $sub.closest('nav').width());
                        $sub.css('margin-right', (($sub.parent().offset().left - nav.offset().left) + $sub.parent().outerWidth()) - nav.width());
                        //-62px
                    }
                }
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