(function (win, doc, $, undefined) {

	var $win = $(win);

	$(function(){

		var $siteHeader = $('#SiteHeader');

		$win
			.on('resize', function (event) {
				if(win.innerWidth < 640) {
					$siteHeader.css({
						position: 'absolute',
						width: 'auto'
					});
				}
				else {
					$siteHeader.css({
						position: 'fixed',
						width: '100%'
					})
				}
			})
			.triggerHandler('resize');

		var shortEdge = (screen.width < screen.height) ? screen.width : screen.height;
		if(shortEdge > 640)
		{
			$('meta[name="viewport"]').attr({content: 'width=1024'});
		}
	});

}) (this, this.document, jQuery);