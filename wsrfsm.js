jQuery(function(){
	jQuery('#overlay_trigger').on('click', function(){
		jQuery(this).toggleClass('menu--open');
		jQuery('#page-overlay').toggleClass("page-overlay--open");
		jQuery('body').toggleClass("nooverflow");
	});
});