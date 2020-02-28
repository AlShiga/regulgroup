$(document).ready(function() {


	$('.company__carousel').slick({
		dots: false,
		infinite: true,
		autoplay: true,
      	autoplaySpeed: 2000,
		speed: 300,
		slidesToShow: 4,
		slidesToScroll: 1,
		prevArrow: '<div class="next"><i class="fa fa-chevron-right"></i></div>',
		nextArrow: '<div class="pref"><i class="fa fa-chevron-left"></i></div>',
		responsive: [
		  {
			breakpoint: 1024,
			settings: {
			  slidesToShow: 3,
			  slidesToScroll: 1,
			  infinite: true,
			
			}
		  },
		  {
			breakpoint: 768,
			settings: {
			  slidesToShow: 3,
			  slidesToScroll: 1
			}
		  },
		  {
			breakpoint: 540,
			settings: {
			  slidesToShow: 1,
			  slidesToScroll: 1
			}
		  }
		  // You can unslick at a given breakpoint now by adding:
		  // settings: "unslick"
		  // instead of a settings object
		]
	  });

// Модальное окно

// открыть по кнопке
$('.js-button-campaign').click(function() { 
	
	$('.js-overlay-campaign').fadeIn();
	$('.js-overlay-campaign').addClass('disabled');
});
$('.js-close-campaign').click(function() { 
	$('.js-overlay-campaign').fadeOut();
	
});
$(document).mouseup(function (e) { 
	var popup = $('.js-popup-campaign');
	if (e.target!=popup[0]&&popup.has(e.target).length === 0){
		$('.js-overlay-campaign').fadeOut();
		
	}
});


});