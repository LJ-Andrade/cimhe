//////////////////////////////
// 						    //
//        PLUGINS           //
//                          //
//////////////////////////////

new WOW().init();

//////////////////////////////
// 					        //
//        NAVIGATION        //
//                          //
//////////////////////////////

// Home Parallax
var image = "{{ asset('webimages/gral/home/home-back.jpg') }}";
$('.main-home').parallax({ imageSrc: image });

var mySwiper = new Swiper('.swiper-container', {
	pagination: true,
	spaceBetween: 20,
	autoHeight: true,
	slidesPerView: 4,
	autoplay: true,
	autoplay: {
		delay: 2000,
	},
	delay: 0,
	loop: true,
	speed: 2500,
}); 

$('.Show-Mobile-Filter').click(function(){
            
	var filter = $('.Fiter-Inner');

	if(filter.hasClass('Hidden')){
		filter.removeClass('Hidden');
	} else {
		filter.addClass('Hidden');
	}
});

    
	
