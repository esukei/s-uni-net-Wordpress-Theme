(function (win, doc, $, undefined) {

	var $win = $(win);

	$(function(){

		var $siteHeader = $('#SiteHeader');

		$win
			.on('resize', function (event) {
				console.log($win.width());
				if($win.width() < 640) {
					$siteHeader.css({
						posiiton: 'absolute'
					});
				}
				else {
					$siteHeader.css({
						posiiton: 'fixed'
					})
				}
			})
			.triggerHandler('resize');
	});

}) (this, this.document, jQuery);