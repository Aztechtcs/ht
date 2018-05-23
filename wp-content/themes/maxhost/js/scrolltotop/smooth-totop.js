(function($) {
 "use strict";
 
$(document).ready(function(){

	$(window).scroll(function(){
		if ($(this).scrollTop() > 100) {
			$('.scrollup').fadeIn();
		} else {
			$('.scrollup').fadeOut();
		}
	});

	$('.scrollup').click(function(){
		$("html, body").animate({ scrollTop: 0 }, 1400);
		return false;
	});
	var $window = jQuery(window);		//Window object
		var scrollTime = 1;			//Scroll time
		var scrollDistance = 400;		//Distance. Use smaller value for shorter scroll and greater value for longer scroll
		
	$window.on("mousewheel DOMMouseScroll", function(event){
		event.preventDefault();	
		/* if(event.type=='mousewheel'){delta=event.originalEvent.wheelDelta/120;}
          else if(event.type=='DOMMouseScroll'){delta=-event.originalEvent.detail/3;}				 */				
		var delta = event.originalEvent.wheelDelta/120 || -event.originalEvent.detail/3;
		var scrollTop = $window.scrollTop();
		var finalScroll = scrollTop - parseInt(delta*scrollDistance);
			
		TweenMax.to($window, scrollTime, {
			scrollTo : { y: finalScroll, autoKill:true },
				ease: Power1.easeOut,
				autoKill: true,
				overwrite: 5							
			});
			
	});	
});

})(jQuery);
