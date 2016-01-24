/*$('#toShowLicence').hide();
document.getElementById('showLicence').addEventListener('click', function(){
	 //event.preventdefault();
	 $('#toShowLicence').toggle(); 
});

$('#toShowCat').hide();
document.getElementById('showCat').addEventListener('click', function(){
	 //event.preventdefault();
	 $('#toShowCat').toggle(); 
});**/

$(document).ready(function(){
  $(".owl-carousel").owlCarousel({

	  	loop:true,
	    margin:20,
	    items:1,
	    nav:false,
	    autoplay:true,
	    autoplayHoverPause:true,
	    dotsEach: true,
	    responsiveClass:true,
	    responsive:{
	        0:{
	            items:1,
	            nav:true
	        },
	        600:{
	            items:3,
	            nav:false
	        },
	        1000:{
	            items:5,
	            nav:true,
	            loop:false
	        }
	    }
	})
});
