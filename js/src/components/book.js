;'use strict';
(function(){
    var $container = $('.container.book');
    if (!$container.length) {
        return ;
    }

    var $items = $container.find('[data-original]');
    var imgs = [];

    $items.each(function(){
        imgs.push($(this).attr('data-original'));
    });

    $container.find('.img img').click(function(){
            $.fancybox(imgs, {
                wrapCSS: 'fancy-product',
                closeBtn: true,
                arrows: true,
                autoPlay: false,
                loop: true,
                'nextEffect': 'none',
                'prevEffect': 'none',
                padding: 0,
                autoSize : false,
                width    : "auto",
                height   : '100%'
            });
    });
})();