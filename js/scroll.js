  JQuery("#container").each(function(){
  	JQuery(this).hide();
 	 		JQuery(this).slideDown(1800);

    });
 JQuery(".centrar").each(function(){
 	if (JQuery(this).offset().top > JQuery(window).height()){	
 			JQuery(this).hide();
 		}else{
	 		JQuery(this).slideDown(1800);
	 	}

    });
      /* Every time the window is scrolled ... */
   JQuery(window).scroll( function(){
	/* Check the location of each desired element */
        JQuery('.blockR').each( function(i){
        var top_of_object = JQuery(this).offset().top +400;
        var bottom_of_object = JQuery(this).offset().top + JQuery(this).outerHeight();

        var top_of_window = JQuery(window).scrollTop();
        var bottom_of_window = JQuery(window).scrollTop() + JQuery(window).height();
        console.log( top_of_object);
        console.log( bottom_of_window);

        /* If the object is completely visible in the window, fade it in */
        if( bottom_of_window > top_of_object ){
            JQuery(this).slideDown(1800);

        }

    }); 

});