; 'use strict';
(function() {

    Rad.prototype.formProduct = function(){
        var $displayer = $('[data-qty-show]');
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

            if ($container.find('li').length > 4) {
                $container.jCarouselLite({
                    btnNext: '[data-carrousel="thumbnails-vertical-next"]',
                    btnPrev: '[data-carrousel="thumbnails-vertical-prev"]',
                    vertical: true,
                    visible: 4,
                    afterEnd: function () {
                        destroy_zoom();
                        var cfg = $container.find('.active [data-img][data-big]');
                        $zoomImg.attr('data-zoom-image', cfg.attr('data-big'));
                        $zoomImg.find('img').attr('src', cfg.attr('data-img'));
                        init_zoom();
                    }
                });
                $('[data-carrousel="thumbnails-vertical-next"],[data-carrousel="thumbnails-vertical-prev"]').show();
            }
            else {
                $('[data-carrousel="thumbnails-vertical-next"],[data-carrousel="thumbnails-vertical-prev"]').hide();
            }

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
            $('.infos .menu li[data-menu] a').click(function(e){
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

            var $el = $('[data-color-choice]');
            var cls = $el.attr('data-dropdown-css-class') || null;
            $el.select2({
                formatSelection: formatResult,
                formatResult: formatResult,
                escapeMarkup: function (m) {
                    return m;
                },
                minimumResultsForSearch: Infinity,
                dropdownCssClass: cls
            });
        })();


        // Error tooltip upper submit button
        (function(){
            var getError = function () {
                var ret = null;
                $form.find('[data-empty]').each(function () {
                    var $this = $(this);
                    var $errorEl = $this;
                    if ($this.is('[data-select2-enabled]')) {
                        $errorEl = $this.parent().find('.select2-container');
                    }
                    else if ($this.closest('[data-error-me]').length) {
                        $errorEl = $this.closest('[data-tooltip-me]')
                    }

                    if ($(this).val() == 0) {
                        if (ret == null) {
                            ret = $this.attr('data-empty');
                        }
                        $errorEl.addClass('form-error');
                    }
                    else {
                        $errorEl.removeClass('form-error');
                    }
                });

                return ret;
            };

            var timer = null;
            var $btn = $form.find('[name="buy"]');
            $btn.click(function(e){
                if ($(document).width() <= 767) {
                    e.preventDefault();
                    var $bottom = $('.form-group.size-item');
                    $bottom.addClass('open');
                    var listenClose = function() {
                        setTimeout(function () {
                            $('body').one('click', function (e) {
                                console.log('ME');
                                if (!$bottom.is('.open')) {
                                    return;
                                }
                                if ($(window).height() - e.pageY > $bottom.height()) {
                                    e.preventDefault();
                                    e.stopPropagation();
                                    $bottom.removeClass('open');
                                }
                                else {
                                    listenClose();
                                }
                            });
                        }, 0);
                    };
                    listenClose();
                }
            });
            $('.size-chooser a[data-value][data-target]').click(function(e){
                e.preventDefault();
                var $this = $(this);
                console.log('ICI');
                $this.parent().find('.active').removeClass('active');
                $this.addClass('active');
                $($this.attr('data-target')).val($this.attr('data-value'));
            });

            $('.color-chooser a[data-value][data-target]').click(function(e){
                e.preventDefault();
                var $this = $(this);
                $this.parent().find('.active').removeClass('active');
                $this.addClass('active');
                var $sel = $($this.attr('data-target'));
                $sel.find('option:selected').prop('selected', false);
                $sel.find('option[value="' + $this.attr('data-value') + '"]').prop('selected', true).closest('select').trigger('change');
                $form.submit();
            });

            $form.on('submit', function (e) {
                var error = getError();
                if (timer !== null) {
                    clearTimeout(timer);
                    timer = null;
                }
                if (error !== null) {
                    e.preventDefault();
                    console.log('ICI, ERROR');
                    if ($(document).width() <= 767) {
                        alert(error);
                        return ;
                    }
                    timer = setTimeout(function () {
                        $btn.tooltip('destroy');
                        timer = null;
                    }, 3000);
                    $btn.tooltip({title: error, trigger: 'manual'}).tooltip('show');
                }
                else if ($(document).width() <= 767) {
                    $('.form-group.size-item.open').removeClass('open');
                }
            });
        })();

        // Quantity < x >
        (function(){
            if (!$displayer.length) {
                return;
            }
            var $container = $displayer.closest('form');
            var $minus = $container.find('.minus');
            var $plus = $container.find('.plus');
            var $value = $('[data-qty-value]');
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

        $('#show-big').click(function(e){
            e.preventDefault();
            $(this).closest('.img-big').find('img.img-responsive').click();
        })
    };

    rad.formProduct();
})();