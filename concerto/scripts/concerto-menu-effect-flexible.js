
jQuery(document).ready(function(){
	jQuery('.menu ul ul').css({display: "none"}); // Opera Fix
	jQuery('.menu li').hover(
		function(){ jQuery(this).find('ul:first').stop(true, true).show('fast'); },
		function(){ jQuery(this).find('ul:first').stop(true, true).hide('fast'); }
	);
});
