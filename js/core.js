(function (win, doc, $, undefined) {

	var $win = $(win);

	$win.on('resize', function (event) {
		console.log($win.width());
	})

}) (this, this.document, jQuery);