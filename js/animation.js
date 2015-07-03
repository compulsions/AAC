console.log("vamos começar");

jQuery(document).ready( function(){

jQuery(".carrega").each(function(){	
 		jQuery(this).hide();
 		console.log("lel");
		 });
jQuery(".cor").slideUp();
    
    });
      /* Every time the window is scrolled ... */
jQuery(document).ready( function(){
	/* Check the location of each desired element */
    jQuery('.carrega').each( function(i){
        var top_of_object = jQuery(this).offset().top +400;
        var bottom_of_object = jQuery(this).offset().top + jQuery(this).outerHeight();

        var top_of_window = jQuery(window).scrollTop();
        var bottom_of_window = jQuery(window).scrollTop() + jQuery(window).height();
        console.log( top_of_object);
        console.log( bottom_of_window);

        /* If the object is completely visible in the window, fade it in */
        if( bottom_of_window > top_of_object ){
            jQuery(this).slideDown(1800);

        }

    }); 

    jQuery('.cenas').each( function(i){
        var top_of_object = jQuery(this).offset().top +200;
        var bottom_of_object = jQuery(this).offset().top + jQuery(this).outerHeight();

        var top_of_window = jQuery(window).scrollTop();
        var bottom_of_window = jQuery(window).scrollTop() + jQuery(window).height();
        console.log( top_of_object);
        console.log( bottom_of_window);

        /* If the object is completely visible in the window, fade it in */
        if( bottom_of_window > top_of_object ){
            jQuery(this).slideDown(500);

        }

    }); 

});
    