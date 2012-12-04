(function (win, doc, $, undefined) {

	var $win = $(win);

	$(function(){

		var $siteHeader = $('#SiteHeader');

		$win
			.on({
				resize: function (event) {
					if($win.width() < 640) {
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
				},
				gestureend: function (event) {
					$win.triggerHandler('resize');
				}
			})
			.triggerHandler('resize');
	});

}) (this, this.document, jQuery);