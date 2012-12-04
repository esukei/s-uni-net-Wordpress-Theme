(function (win, doc, $, undefined) {

	var $win = $(win);

	$(function(){

		var $siteHeader = $('#SiteHeader');

		$win
			.on({
				resize: function (event) {
					alert('r');//console.log('r');
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
					alert('wing');//console.log('wing');
					$win.triggerHandler('resize');
				}
			})
			.triggerHandler('resize');

		$(doc).on('gestureend', function (event) {
			alert('doc');//console.log('doc');
			$win.triggerHandler('resize');
		});
	});

}) (this, this.document, jQuery);