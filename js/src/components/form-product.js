; 'use strict';
(function() {

    Rad.prototype.formProduct = function(){
        var $displayer = $('#qty-show');
        var $form = $('form.product-buy');
        var $zoomImg = $('[data-zoom-image]');

        // Zoom image
        var init_zoom = function(){
            $zoomImg.each(function(){
                $(this).zoom({url: $(this).attr('data-zoom-image')});
            });
        };

        var destroy_zoom = function(){
            $('[data-zoom-image]').each(function(){
                $(this).trigger('zoom.destroy');
            });
        };

        init_zoom();


        // Carousel pictures
        (function(){
            var $container = $('div.thumbnails .carousel');
            if (!$container.length) {
                return ;
            }

            $zoomImg.click(function(){
                var imgs = [];
                $container.find('[data-big]').each(function(){
                    imgs.push($(this).attr('data-big'));
                });
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

            $container.jCarouselLite({
                btnNext: '.next',
                btnPrev: '.prev',
                vertical: true,
                visible: 4,
                afterEnd: function(){
                    destroy_zoom();
                    var cfg = $container.find('.active [data-img][data-big]');
                    $zoomImg.attr('data-zoom-image', cfg.attr('data-big'));
                    $zoomImg.find('img').attr('src', cfg.attr('data-img'));
                    init_zoom();
                }
            });

            $container.find('li').each(function() {
                var $this = $(this);
                $this.click(function(){
                    var $li = $container.find('li.active');
                    var nb = 0;

                    while (!$li.is($this) && nb < 10) {
                        nb++;
                        $li = $li.next();
                    }

                    $container.trigger('go', '+=' + nb);
                })
            });
        })();

        // Infos details spec...
        (function(){
            $('.infos .menu li a').click(function(e){
                e.preventDefault();
                var $this       = $(this);
                var $active     = $this.closest('ul').find('li.active');

                $($active.removeClass('active').find('a').attr('href')).addClass('hide').hide();
                var $target = $($this.attr('href'));
                $target.removeClass('hide').show().closest('.scroll-container').scrollpanel('update');
                $this.closest('li').addClass('active');

            });
        })();

        // Char left under textarea
        (function(){
            var $countLeft = $('#count-left[data-max]');

            if ($countLeft.length) {
                var max = parseInt($countLeft.attr('data-max'));
                var $textarea = $countLeft.closest('.form-group').find('textarea');

                $textarea.on('keypress keydown keyup change', function(){
                    var $this = $(this);
                    setTimeout(function(){
                        var value = $this.val().slice(0, max);
                        $this.val(value);
                        $countLeft.text(max - value.length);
                    })
                });
            }
        })();


        // Color select2 ()
        (function(){
            var formatResult = function (item) {
                var el = $(item.element[0]);
                return '<span class="round-color" style="background-color:' + el.attr('data-color') + ';"></span>' + item.text;
            };

            $('[data-color-choice]').select2({
                formatSelection: formatResult,
                formatResult: formatResult,
                escapeMarkup: function (m) {
                    return m;
                },
                minimumResultsForSearch: Infinity
            });
        })();


        // Error tooltip upper submit button
        (function(){
            var getError = function () {
                var ret = null;
                $form.find('[data-empty]').each(function () {
                    var $this = $(this);

                    if ($(this).val() == 0) {
                        ret = $this.attr('data-empty');
                    }
                });

                return ret;
            };

            var timer = null;
            var $btn = $form.find('[name="buy"]');
            $form.submit(function (e) {
                var error = getError();
                if (timer !== null) {
                    clearTimeout(timer);
                    $btn.tooltip('destory');
                }
                if (error !== null) {
                    e.preventDefault();
                    timer = setTimeout(function () {
                        $btn.tooltip('destroy');
                    }, 3000);
                    $btn.tooltip({title: error, trigger: 'manual'}).tooltip('show');
                }

            });
        })();

        // Quantity < x >
        (function(){
            if (!$displayer.length) {
                return;
            }
            var $container = $displayer.parent();
            var $minus = $container.find('.minus');
            var $plus = $container.find('.plus');
            var $value = $('#qty-value');
            var currentValue = parseInt($value.val());

            var setVal = function (add) {
                currentValue += add;
                $value.val(currentValue);
                $displayer.text(currentValue);
                if (currentValue == 1) {
                    $minus.addClass('disabled');
                }
                else {
                    $minus.removeClass('disabled');
                }
            };

            $minus.click(function () {
                if ($(this).is('.disabled')) {
                    return;
                }
                setVal(-1);
            });
            $plus.click(function () {
                if ($(this).is('.disabled')) {
                    return;
                }
                setVal(1);
            });
        })();

        // Carousel (see more of the brand XXX)
        (function(){
            var $container = $('.carousel-brand div').eq(0);
            if (!$container.length) {
                return ;
            }

            $container.jCarouselLite({
                btnNext: '.next-brand',
                visible: 3
            });

        })();
    };

    rad.formProduct();
})();