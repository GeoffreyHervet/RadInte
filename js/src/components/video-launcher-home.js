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