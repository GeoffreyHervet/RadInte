(function(){
	$('li.dropdown').hover(function(){
        var $this = $(this);
        setTimeout(function(){
            $this.addClass('open');
        }, 100);
	}, function(){
		$(this).removeClass('open');
	});
})();