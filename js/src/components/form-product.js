; 'use strict';
(function() {
    var $displayer = $('#qty-show');
    var $form = $('form.product-buy');

    var $countLeft = $('#count-left[data-max]');
    console.log('$countLeft.length', $countLeft.length);
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



    var formatResult = function (item) {
        var el = $(item.element[0]);
        return '<span class="round-color" style="background-color:' + el.attr('data-color') + ';"></span>' + item.text;
    };

    $('#color-choice').select2({
        formatSelection: formatResult,
        formatResult: formatResult,
        escapeMarkup: function (m) {
            return m;
        },
        minimumResultsForSearch: Infinity
    });


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
        setVal(-1);
    });
    $plus.click(function () {
        setVal(1);
    });

    $('#carousel-brand').carousel({
        interval: 10000
    });

    $('.carousel .item').each(function() {
        var next = $(this).next();
        if (!next.length) {
            next = $(this).siblings(':first');
        }
        next.children(':first-child').clone().appendTo($(this));

        if (next.next().length > 0) {

            next.next().children(':first-child').clone().appendTo($(this)).addClass('rightest');

        }
        else {
            $(this).siblings(':first').children(':first-child').clone().appendTo($(this));

        }
    });
})();