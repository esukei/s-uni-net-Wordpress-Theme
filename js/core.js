(function (win, doc, $, undefined) {

	var $win = $(win);

	$(function(){

		var $siteHeader = $('#SiteHeader');

		$win
			.on('resize', function (event) {
				alert(win.innerWidth);
				alert($win.innerWidth());
				if($win.innerWidth() < 640) {
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

	});

}) (this, this.document, jQuery);