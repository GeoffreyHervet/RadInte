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

            $(this).select2(opts);
        });
    };

    rad.select2Enabled();
})();