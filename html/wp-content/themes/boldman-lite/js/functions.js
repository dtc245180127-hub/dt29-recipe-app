( function($){
	"use strict"
	
	jQuery( document ).ready( function($) {

		jQuery( '#primary-menu' ).slicknav({
			'label' : ' ',
			'closedSymbol': '+', 
			'openedSymbol': '-', 
			appendTo : '#site-navigation-mobile',
			closeOnClick: true,
		});
	
 /**
  * Slick navigation mobile on focus out event
  */
  jQuery( '.slicknav_menu .slicknav_nav' ).on( 'focusout', function () {
    var $elem = jQuery(this);
    setTimeout(function () {
      if ( ! $elem.find( ':focus' ).length ) {
        jQuery( '.slicknav_open' ).trigger( 'click' );
      }
    }, 0);
  });
  
	jQuery( ".prt-header-search-link a" ).addClass('sclose');	
	jQuery( ".search-wrapper a" ).on('click', function(){
		jQuery(".field.searchform-s").focus();	
		
		if (jQuery('.prt-header-search-link a').hasClass('sclose')) {	
			jQuery(this).removeClass('sclose').addClass('open');	
			jQuery(".prt-search-overlay").addClass('st-show');	
			jQuery('body').addClass('prt-search-on');						
		} else {
			jQuery(this).removeClass('open').addClass('sclose');	
			jQuery(".prt-search-overlay").removeClass('st-show');
			jQuery('body').removeClass('prt-search-on');						
		}	
	});	
	
});

})( jQuery );