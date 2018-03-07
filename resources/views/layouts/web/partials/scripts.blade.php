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
        var data   = $(this).serialize();
        var route  = "{{ url('mail_sender') }}";
        var loader = '<div style="color: #fff; margin-left: 15px"> <img src="{{ asset("images/gral/loader-sm.svg") }}"/>  Enviando...</div>';
        
        $.ajax({
            type: "POST",
            url: route,
            dataType: 'json',
            data: data,
            beforeSend: function(){
                $('.ContactBtn').html(loader);
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
                //$('#Error').html(data.responseText);
                console.log(data);
            }, 
            complete: function(){
                $('.ContactBtn').html('Enviar');
            }

        });
    });
 
</script>