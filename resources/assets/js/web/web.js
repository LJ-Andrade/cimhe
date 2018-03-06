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

$(document).ready(function () {

	// var section       = $('#ActualSection').data('section');
	// var logo          = $('.navbar .navbar-brand');
	// var navbar        = $('.navbar-default');

	// function nav_logic() {

	// 	switch(section) {

	// 		//////// HOME /////////
	// 		case "home":
	// 			// $('body').css('padding-top','0');
	// 			logo.css('opacity','0');
	// 			// $('.navbar .navbar-right').css('border-bottom', '1px solid white');
	// 			navbar.addClass('home-nav');

	// 			$(window).scroll(function() {
	// 				var scrollPos = $(window).scrollTop();

	// 				if (scrollPos > 250) {
	// 					navbar.addClass('change-nav');
	// 					logo.css('opacity','100');
	// 				} else {
	// 					navbar.removeClass('change-nav');
	// 					logo.css('opacity','0');
	// 				}
	// 			});

	// 		break;

	// 		//////// PORTFOLIO /////////
	// 		case "portfolio":

	// 			navbar = $('.navbar-default');		
	// 			navbar.addClass('nav-portfolio');
	// 			$('body').css('background-color','#f9f9f9');
	// 			$(window).scroll(function() {
	// 				var scrollPos = $(window).scrollTop();

	// 				if (scrollPos > 250) {
	// 					navbar.addClass('change-nav');
	// 				} else {
	// 					navbar.removeClass('change-nav');
	// 				}
	// 			});

	// 		break;


	// 		//////// GENERIC /////////
	// 		default:
	// 			$(window).scroll(function() {
					
	// 				var scrollPos = $(window).scrollTop(),
	// 				navbar   = $('.navbar-default');
					
	// 				if (scrollPos > 250) {
	// 					navbar.addClass('change-nav');
	// 				} else {
	// 					navbar.removeClass('change-nav');
	// 				}
	// 			});
	//     }

    // }
    // // ----------- End Navigation Script ------------ //

    // //Activate nav effects in desktop
	// if (screen.width > 775) {
    //     nav_logic();
 	// } else {
		
	// }


}); // Document Ready

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

    $(document).on('submit','#MainContactForm',function(e){
        e.preventDefault();
        var data   = $(this).serialize();
        var route  = "{{ url('mail_sender') }}";
        // var route  = "{{ url('test_sender') }}";
        var loader = '<img src="{{ asset("images/loaders/loader-sm.svg") }}"/>' + '<div style="color: #fff; margin-left: 15px">Enviando...</div>';

        $.ajax({
            type: "POST",
            url: route,
            dataType: 'json',
            data: data,
            beforeSend: function(){
                var loader = "<img src='{{ asset('images/loaders/loader-sm.svg') }}'>";
                $('#ContactBtn').html('Enviando ' + loader);
            },
            success: function(data) {
                $('#MainContactForm').hide();
                $('#FormSuccess').removeClass('Hidden');
                $('#FormResponse').hide();
                console.log(data);
            },
            error: function(data) {
                $('#FormResponse').hide();
                $('#MainContactForm').hide();
                $('#ContactBtn').html('ENVIAR');
                $('#FormError').removeClass('Hidden');
                console.log(data);
            }
        });
	});
	
	console.log('ookok');