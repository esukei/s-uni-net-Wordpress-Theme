(function (win, doc, $, undefined) {

	var $win = $(win);

	var shortEdge = (screen.width < screen.height) ? screen.width : screen.height;
	if(shortEdge > 640)
	{
		$('meta[name="viewport"]').attr({content: 'width=1024'});
	}

	var ms_second = 1000,
		ms_minute = 60000,
		ms_hour = 3600000,
		ms_day = 86400000,
		msToDHMS = function (ms) {
			var s = ms / ms_second,
				m = ms / ms_minute,
				h = ms / ms_hour,
				d = ms / ms_day
		};

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

		var $posttime = $('.articleDate')
			.each(function(i){
				var $this = $(this);
				console.log(new Date() - new Date($this.attr('datetime')))
			});

		setInterval(function(){

		}, 60000);

	});

}) (this, this.document, jQuery);