
jQuery(document).ready(function(){
	// navigation menu item animation background
	jQuery('.menu > ul > li').hover(
		function(){
			if(jQuery('#item-bg').length >= 1) {
				jQuery('#item-bg').stop(true, false).animate({
					width: jQuery(this).width(),
					height: jQuery(this).height(),
					top: jQuery(this).position().top,
					left: jQuery(this).position().left
				}, 'fast', 'easeOutCirc');
			} else {
				jQuery('<div id="item-bg"></div>')
					.css({
						opacity: 0,
						position: 'absolute',
						width: jQuery(this).width(),
						height: jQuery(this).height(),
						top: jQuery(this).position().top,
						left: jQuery(this).position().left,
						'z-index': '-100'
					})
					.appendTo('#nav-inner')
					.stop(true, true)
					.animate({opacity: 1}, 'fast');
			}
		},
		function(){ jQuery('#item-bg').stop(true, true).animate({opacity: 0}, 'fast', function() { jQuery(this).remove() } ); }
	);
	// toggling excerpt of some posts
	jQuery('.post-toggle-link').bind('click', function() {
		jQuery(this).parentsUntil('.post').parent().find('.post-entry').slideToggle('slow');
	});
});
