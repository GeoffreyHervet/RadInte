(function(){
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


	$('.modal').on('shown.bs.modal', init_summary);
	init_summary();
})();