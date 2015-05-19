'use strict';

var Rad = function(){

};

jQuery(function($){
    var rad = new Rad();
    //= require_tree components
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
                        setTimeout(function() {
                            $('html').one('click', function (e) {
                                if (!$bottom.is('.open')) {
                                    return;
                                }
                                $bottom.removeClass('open');
                            });
                        });
                    }
                });
                $('.size-chooser a[data-value][data-target]').click(function(e){
                    e.stopPropagation();
                    e.preventDefault();
                    var $this = $(this);
                    console.log('ICI');
                    $this.parent().find('.active').removeClass('active');
                    $this.addClass('active');
                    $($this.attr('data-target')).val($this.attr('data-value'));
                    $form.submit();
                });
    
                $('.color-chooser a[data-value][data-target]').click(function(e){
                    e.stopPropagation();
                    e.preventDefault();
                    var $this = $(this);
                    $this.parent().find('.active').removeClass('active');
                    $this.addClass('active');
                    var $sel = $($this.attr('data-target'));
                    $sel.find('option:selected').prop('selected', false);
                    $sel.find('option[value="' + $this.attr('data-value') + '"]').prop('selected', true).closest('select').trigger('change');
                });
    
                $form.on('submit', function (e) {
                    var error = getError();
                    if (timer !== null) {
                        clearTimeout(timer);
                        timer = null;
                    }
                    if (error !== null) {
                        e.preventDefault();
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
    
                    alert('Form sumited');
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
    (function(){
        var $html = $('html');
        $('#left-menu-toggler').click(function(){
            $html.toggleClass('nav-left');
        });
    
        $('#right-menu-toggler').click(function(){
            $html.toggleClass('nav-right');
        });
    })();
    ;'use strict';
    (function(){
        var $container = $('.img-big.visible-xs');
        if (!$container.length) {
            return ;
        }
    })();
    ;'use strict';
    
    (function(){
        var swiper = new Swiper('.swiper-container', {
            pagination: '.swiper-pagination',
            paginationClickable: true,
            loop: true
        });
    })();
    (function(){
        var $body = $('body');
    
        $('#search-header').click(function(e){
            e.preventDefault();
            var target = $($(this).attr('href'));
            target.toggleClass('toggle in');
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
    ; 'use strict';
    (function(){
        var was_init = false;
        Rad.prototype.select2Enabled = function() {
            $('[data-select2-enabled]').each(function () {
                var opts = {};
                var $this = $(this);
    
                if (was_init) {
                    $this.select2('destroy');
                }
    
                was_init = true;
    
                if ($this.attr('data-nosearch')) {
                    opts.minimumResultsForSearch = Infinity;
                }
                var cls = $this.attr('data-dropdown-css-class');
                if (cls) {
                    opts.dropdownCssClass = cls;
                }
    
                $(this).select2(opts);
            });
        };
    
        rad.select2Enabled();
    })();
    ;'use strict';
    
    (function(){
        var menu = $('#sticky-category');
        if (!menu.length) {
            return ;
        }
        var stickyTop = menu.offset().top;
        var offsetTop = $('.navbar.navbar-fixed-top').height() - 1;
        var $body = $('body');
        var basePaddingTop = parseInt($body.css('paddingTop'));
    
    
        $(window).scroll(function(){
            if( $(window).scrollTop() > stickyTop - offsetTop ) {
                $body.css('paddingTop', basePaddingTop + offsetTop + 4);
                menu.css({position: 'fixed', top: offsetTop, left: 0, right: 0}).addClass('sticky');
            } else {
                $body.css('paddingTop', basePaddingTop);
                menu.css({position: 'static', top: 0}).removeClass('sticky');
            }
        });
    
    })();
    (function($){
        var init_summary = function(){
            $('.summary-scroll').each(function(){
                var $this = $(this);
                var isInit = $this.data('init');
                if (!isInit) {
                    $this.data('init', true);
                    var container = $this.find('.scroll-container');
                    if (container.length) {
                        container
                            .height($this.height() - 20)
                            .scrollpanel()
                        ;
                    }
    
                    $this.find('.list-summary a').click(function(e){
                        e.preventDefault();
                        $(this).closest('ul').find('.active').removeClass('active');
                        $(this).closest('li').addClass('active');
                        container.find('[data-item]').addClass('hide');
                        container.find($(this).attr('href')).removeClass('hide');
                        container.scrollpanel('update');
                    });
                }
            });
        };
    
    
        (function($){
            var container = $('.scroll-container');
            container.each(function(){
                var $this = $(this);
                if (!$this.closest('.summary-scroll').length) {
                    $this.scrollpanel();
                }
            });
        })($);
    
        $('.modal').on('shown.bs.modal', init_summary);
        init_summary();
    })($);
    ;'use strict';
    
    (function(){
        var getWidth = function(){
            return $('body').width() > 992 ? 854 : 750;
        };
        var iframe = function(src, width){
            return '<iframe width="'+ width + '" height="510" allowfullscreen="1" mozallowfullscreen="1" webkitallowfullscreen="1" src="' + src + '"></iframe>';
        };
    
        $('[data-video]').click(function(e){
            if ($.browser.desktop) {
                var width = getWidth();
                e.preventDefault();
                var $modal = $('#video-modal');
                var $body = $modal.modal('show').find('.modal-body');
                $body.html(iframe($(this).attr('data-video'), width));
                $('.modal.in.video-modal .modal-dialog, .modal.in.video-modal .modal-content').css('width', width);
    
                $modal.on('hidden.bs.modal', function(){
                    $body.html('');
                });
            }
        });
    })();

});