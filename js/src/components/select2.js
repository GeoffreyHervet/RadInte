; 'use strict';
(function(){
    $('[data-select2-enabled]').each(function(){
        var opts = {};
        var $this = $(this);

        if ($this.attr('data-nosearch')) {
            opts.minimumResultsForSearch = Infinity;
        }

        $(this).select2(opts);
    });
})();