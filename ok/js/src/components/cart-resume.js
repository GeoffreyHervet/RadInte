;'use strict';

(function(){
    var reset = function() {
        $('[data-remove-text][data-remove-btn] .cart-item .close').off().on('click', function (e) {
            e.preventDefault();

            var $cartItem = $(this).closest('.cart-item');
            var $textContainer = $cartItem.closest('[data-remove-text][data-remove-btn]');
            $cartItem.data('old', $cartItem.html());
            $cartItem.addClass('deleted').html('<div class="text">' + $textContainer.attr('data-remove-text') + '</div><a class="btn btn-danger">' + $textContainer.attr('data-remove-btn') + '</a>').find('a').click(function(e){
                e.preventDefault();
                $cartItem.html($cartItem.data('old'));
                reset();
            })
        });
    };
    reset();
})();