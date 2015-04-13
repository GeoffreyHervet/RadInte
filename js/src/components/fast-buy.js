;'use strict';

(function(){
    var $modal = $('#fast-buy');

    if (!$modal.length) {
        return ;
    }

    $modal.on('loaded.bs.modal', function(){
        rad.formProduct();
        rad.select2Enabled();
        rad.fastBuy();
    });

    Rad.prototype.fastBuy = function(){
        var $slider         = $modal.find('.img-slider');
        var $img            = $slider.find('[data-display]');
        var $imgsContainer  = $slider.find('[data-imgs]');
        var $imgs           = $imgsContainer.find('img');
        var current         = -1;

        if (!$imgsContainer.length || !$imgsContainer.find('img').length) {
            $slider.find('.fast-buy-prev-img,.fast-buy-next-img').hide();
        } else {
            // in case of the previous fast-buy doest had multiple imgs
            $slider.find('.fast-buy-prev-img,.fast-buy-next-img').show();
        }

        $slider.find('.fast-buy-prev-img').click(function(){
            if (current == -1 || current == 0) {
                current = $imgs.length - 1;
            }
            else {
                current--;
                if (current == -1) {
                    current = $imgs.length - 1;
                }
            }

            changeImg();
        });

        $slider.find('.fast-buy-next-img').click(function(){
            current++;
            current %= $imgs.length;

            changeImg();
        });

        var changeImg = function() {
            var currentSrc = $img.attr('src');
            $img.attr('src', $imgs.eq(current).attr('src'));
            $imgs.eq(current).attr('src', currentSrc);
        };
    };
})();