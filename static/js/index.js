$(document).ready(function() {
	var $window = $(window),
		$mainMenuBar = $('#mainMenuBar'),
		$mainMenuBarAnchor = $('#mainMenuBarAnchor');
	$window.scroll(function() {
		var window_top = $window.scrollTop();
		var div_top = $mainMenuBarAnchor.offset().top;
		if(window_top > div_top) {
			$mainMenuBar.addClass('stick');
			$mainMenuBarAnchor.height($mainMenuBar.height());
		} else {
			$mainMenuBar.removeClass('stick');
			$mainMenuBarAnchor.height(0);
		}
	});
});