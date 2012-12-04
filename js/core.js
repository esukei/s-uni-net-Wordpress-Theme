(function (win, doc, $, undefined) {

	var $win = $(win);

	$(function(){

		var $siteHeader = $('#SiteHeader');

		$win
			.on('resize', function (event) {
				if($win.width() < 640) {
					$siteHeader.css({
						position: 'absolute'
					});
				}
				else {
					$siteHeader.css({
						position: 'fixed'
					})
				}
			})
			.triggerHandler('resize');
	});

}) (this, this.document, jQuery);