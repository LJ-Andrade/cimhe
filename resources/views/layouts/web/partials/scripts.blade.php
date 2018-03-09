<script type="text/javascript" src="{{ asset('plugins/jquery/jquery-3.3.1.min.js')}} "></script>
<script type="text/javascript" src="{{ asset('plugins/bootstrap/tether.min.js')}} "></script>
<script type="text/javascript" src="{{ asset('plugins/bootstrap/bootstrap3/bootstrap.min.js')}} "></script>
<script type="text/javascript" src="{{ asset('plugins/wow/script.wow.js')}} "></script>
<script type="text/javascript" src="{{ asset('plugins/parallax/parallax.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('plugins/swiper-slider/swiper.jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/web.js') }} "></script>
<script>

    // Contact Tab (WhatsApp)
    $(document).ready(function(){
        if (screen.width < 765){
            $('.Contact-Tab').hide(200);
            $(window).scroll(function(){
                if ($(window).scrollTop() > 500){
                    $('.Contact-Tab').show(200);
                } else {
                    $('.Contact-Tab').hide(200);
                }
            });
        } else {
        }
   });

    $(document).on('submit','#MainContactForm',function(e){
        e.preventDefault();
        var data  = $(this).serialize();
        var route = "{{ url('main_contact_mailsender') }}";
        var formdiv = $('#MainContactForm');
        var responsediv = $('#ResponsesMainContactForm');
        var contactBtn = $('.MainFormBtn');
        send_mail(data, route, responsediv, formdiv, contactBtn);
    });

    $(document).on('submit','#SuelosContactForm',function(e){
        e.preventDefault();
        var data  = $(this).serialize();
        var route = "{{ url('suelos_mailsender') }}";
        var formdiv = $('#SuelosContactForm');
        var responsediv = $('#ResponsesSuelosForm');
        var contactBtn = $('.SuelosFormBtn');
        send_mail(data, route, responsediv, formdiv, contactBtn);
    });

     $(document).on('submit','#HormigonContactForm',function(e){
        e.preventDefault();
        var data  = $(this).serialize();
        var route = "{{ url('hormigon_mailsender') }}";
        var formdiv = $('#HormigonContactForm');
        var responsediv = $('#ResponsesHormigonForm');
        var contactBtn = $('.HormigonFormBtn');
        send_mail(data, route, responsediv, formdiv, contactBtn);
    });

    // Show again forms in sended 
    $('.FormModal').click(function(){
        $('#SuelosContactForm').show();
        $('#HormigonContactForm').show();
    });

    
    function send_mail(data, route, responsediv, formdiv, contactBtn){
        var loader = '<div style="color: #fff; margin-left: 15px"> <img src="{{ asset("images/gral/loader-sm.svg") }}"/>  Enviando...</div>';
        var success = $('.FormSuccess');
        var error = $('.FormError');

        $.ajax({
            type: "POST",
            url: route,
            dataType: 'json',
            data: data,
            beforeSend: function(){
                contactBtn.html(loader);
            },
            success: function(data) {
                formdiv.hide();
                responsediv.children('.FormSuccess').removeClass('Hidden');
                console.log(data);
            },
            error: function(data) {
                formdiv.hide();
                responsediv.children('.FormError').removeClass('Hidden');
                //$('#Error').html(data.responseText);
                console.log(data);
                console.log(data.responseText);
            }, 
            complete: function(){
                contactBtn.html('Enviar');
            }

        }); 
    }

$('a[href*=\\#]').on('click', function(event){     
    event.preventDefault();
    $('html,body').animate({scrollTop:$(this.hash).offset().top}, 1000);
});

</script>