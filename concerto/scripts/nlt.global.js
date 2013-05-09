
if( 'undefined' != typeof nlt ) {
	var menu_effect = nlt.menu_effect;
}

jQuery(document).ready(function(){

	jQuery('.menu ul li').each(function() {
		if( jQuery(this).find('ul').length ) {
			jQuery(this).addClass('item-submenu');
		}
	});

	jQuery('.menu ul ul').css({display: "none"}); // Opera Fix
	switch( menu_effect ) {
		case 'fade':
			jQuery('.menu li').hover(
				function(){ jQuery(this).find('ul:first').stop(true, true).fadeIn('fast'); },
				function(){ jQuery(this).find('ul:first').stop(true, true).fadeOut('fast'); }
			);
			break;
		case 'slide':
			jQuery('.menu li').hover(
				function(){ jQuery(this).find('ul:first').stop(true, true).slideDown('fast'); },
				function(){ jQuery(this).find('ul:first').stop(true, true).slideUp('fast'); }
			);
			break;
		case 'flexible':
			jQuery('.menu li').hover(
				function(){ jQuery(this).find('ul:first').stop(true, true).show('fast'); },
				function(){ jQuery(this).find('ul:first').stop(true, true).hide('fast'); }
			);
			break;
		default:
			jQuery('.menu li').hover(
				function(){ jQuery(this).find('ul:first').stop(true, true).show(); },
				function(){ jQuery(this).find('ul:first').stop(true, true).hide(); }
			);
	}

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

});

