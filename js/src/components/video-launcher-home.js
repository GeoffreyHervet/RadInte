;'use strict';

(function(){
    var iframe = function(src){
        return '<iframe width="854" height="510" allowfullscreen="1" mozallowfullscreen="1" webkitallowfullscreen="1" src="' + src + '"></iframe>';
    };

    $('[data-video]').click(function(e){
        e.preventDefault();
        var $modal = $('#video-modal');
        var $body = $modal.modal('show').find('.modal-body');
        $body.html(iframe($(this).attr('data-video')));

        $modal.on('hidden.bs.modal', function(){
            $body.html('');
        });

    });
})();