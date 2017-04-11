jQuery(document).ready(function(){
	
   //top slider
        $(".royalSlider2").royalSlider({
            imageScalePadding: 0,
			controlNavigation:'bullets',
			imageScaleMode: 'fill',
			imageAlignCenter: true,
			arrowsNav: false,
			numImagesToPreload:2,
			loop: true,
            keyboardNavEnabled: false,
			transitionType: 'fade',
			autoPlay: {
    		// autoplay options go gere
			delay:4000,
    		enabled: true,
    		pauseOnHover: false
    	}
		
        }); 
		
        
	
	
}); // close jquery.doc.ready