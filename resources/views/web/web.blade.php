@extends('layouts.web.main')
@section('title', 'Cimhe | Inicio')

@section('styles')
    {{-- Slider --}}
	{{ Html::style('plugins/owlcarousel2/owl.carousel.min.css') }}
	{{ Html::style('plugins/owlcarousel2/owl.theme.default.min.css') }}
@endsection

@section('content')
    <div class="top-space"></div>
    
    {{-- Main Slider --}}
    <div class="container-fluid main-slider">
        <div class="row">
            @include('web.main-slider')
        </div>
    </div>
    
      {{-- <section class="main-home">
        <div class="container inner">
            <div class="row">
              <div class="col-lg-3 col-md-4">
                    <div class="contact-form home-contact-form">
                        {!! Form::open(['class' => 'MainContactFormHome', 'method' => 'POST']) !!}
                            <div class="form-group">
                                {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'NOMBRE', 'required']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::text('phone', null, ['class' => 'form-control', 'placeholder' => 'TELÉFONO', 'required']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'E-MAIL', 'required']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::textarea('message', null, ['size' => '30x5', 'class' => 'form-control', 'placeholder' => 'CONSULTA / MENSAJE']) !!}
                            </div>
                            {{ csrf_field() }}
                            <div class="form-group">
                                <button type="submit" class="MainFormBtn btn btnBlue contactBtn">Enviar</button>
                            </div>
                        {!! Form::close() !!}
                        <div class="ResponsesHomeContactForm">
                            <div class="FormResponse"></div>
                            <div class="FormSuccess form-responses-home animated fadeIn text-center Hidden">
                                <i class="success ion-checkmark-round"></i>
                                <h2>Mensaje Enviado !</h2> 
                                Gracias por contactarse con nosotros. <br>
                                Nos estaremos comunicando a la brevedad.
                                <hr class="softhr">
                            </div>
                            <div class="FormError form-responses-home animated text-center fadeIn Hidden">
                                <i class="error ion-close-round"></i>
                                <h2>Ha ocurrido un error !</h2> 
                                Intente comunicarse directamente por mail o teléfono <br>
                                Gracias.
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
        </div>--}}
    </section>

    {{-- First Info --}}
    <section class="container-fluid section section-container home-section-2">
        <div class="container">
            <article class="row">
                <div class="col-md-12 inner">
                    <h3> CIMHE- Grupo de Empresas de Servicios</h3>
                    <p class="medium-text">
                        CIMHE y su grupo de organizaciones orientan sus servicios en materia de ensayos de laboratorio de hormigones, suelos y todos los materiales
                        relacionados con obras civiles, incluyendo además la fabricación y comercialización de equipos para tal ﬁn. Nuestro grupo de empresas se inicia
                        con CIMHE SRL habiendo orientado su objeto inicialmente en temas tecnología y control de Hormigones Elaborados. Seguidamente en búsque-
                        da de crecimiento y producto de la demanda de servicios especiales, geotecnia, y equipos, se crean las derivaciones SAS Geotécnica e Insumos
                        que ahora dirigimos y promocionamos en conjunto.
                    </p>
                    <div class="text-with-preimg">
                        <div class="pre-img">
                            <img src="{{ asset('webimages/main/punto.png') }}" alt=""/>
                        </div>
                        <p class="text-offset">
                            Nuestras empresas, proveen a nuestros clientes, asesoramiento constante en ingeniería, Civil y Geotécnica, desarrollo de nuevos materiales,
                            inspección y/o evaluación de estructuras, condiciones de fundación, diseño y veriﬁcación de elementos de estructuras. Poseemos un laborato-
                            rio y taller propio completamente equipado ubicado en las cercanías de Beiró y Gral. Paz.
                        </p>
                    </div>
                </div>
            </article>
        </div>
    </section>

    <section class="container-fluid section section-container home-section-4">
        <div class="container">
            <div class="row">
                <div class="SliderOwlSmall owl-carousel owl-theme">
                    <div class="item">
                        <img class="left-image" img src="{{ asset('webimages/home/logo-icon.jpg') }}" alt="">
                        <div class="text">
                            <h2>Reactor Nuclear Carem</h2>
                            <p>
                                CIMHE S.R.L. instala laboratorio móvil en la Provincia de Santa Cruz, Pico Truncado.
                                Se ejecutan trabajos de control de Hormigones y Suelos en el Parque Eólico Vientos Los Hércules, empresa Prodiel
                            </p>
                        </div>
                    </div>
                    <div class="item">
                        <img class="left-image" img src="{{ asset('webimages/home/logo-icon-1.png') }}" alt="">
                        <div class="text">
                        <h2>CIMHE</h2>
                        <p>
                            El grupo Cimhe forma parte de la Asociación Argentina del Hormigón Elaborado
                        </p>
                        </div>
                    </div>
                    <div class="item">
                        <img class="left-image" img src="{{ asset('webimages/home/logo-icon-2.png') }}" alt="">
                        <div class="text">
                            <h2>CIMHE SRL</h2>
                            <p>
                                Instala Laboratorio Móvil en la Provincia de Santa Cruz, Pico Truncado. Se ejecutan trabajos de control de Hormigones y Suelos en el Parque Eólico Vientos Los Hércules, Empresa Prodiel.
                            </p>
                        </div>
                    </div>
                    <div class="item">
                        <img class="left-image" img src="{{ asset('webimages/home/logo-icon-2.png') }}" alt="">
                        <div class="text">
                            <h2>CIMHE SRL</h2>
                            <p>
                                Instala Laboratorio Móvil en Bahía Blanca. Se ejecutan trabajos de control de Hormigones y Suelos en el Parque Eólico Vientos Del Secano y García del Rio, Empresa Prodiel.
                            </p>
                        </div>
                    </div>
                    <div class="item">
                        <img class="left-image" img src="{{ asset('webimages/home/logo-icon-3.png') }}" alt="">
                        <div class="text">
                            <h2>CIMHE SRL</h2>
                            <p>
                                Nuestra Empresa se mantiene en sistema de evaluación constante y es asesorada por Andersen Ingeniería en términos de gestión.
                            </p>
                        </div>
                    </div>
                    <div class="item">
                        <img class="left-image" img src="{{ asset('webimages/home/logo-icon-4.png') }}" alt="">
                        <div class="text">
                            <h2>CIMHE SRL</h2>
                            <p>
                                Grupo CIMHE, Invierte e incursiona en nuevos servicios, Instalación de Prensa para Ensayos a Tracción de Aceros y Polímeros, Georadares para la Evaluación de Estructuras de Hormigón 
                            </p>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
    </section>
    <section class="maincolor-back download-catalog">
        <div class="container">
            <div class="row">
                <span class="text">Descarga nuestro catálogode productos para laboratorio</span>
                <a href="https://cimhe.com/downloads/insumos-para-plantas-y-mixer-de-hormigon.pdf" class="btn button btnWhiteMedium">
                    <i class="ion-archive"></i> Descargar
                </a>
            </div>
        </div>	
    </section>
    <section class="container-fluid section section-container home-section-4">
        <div class="container">
            <div class="row">
                <div class="title text-center">
                    <h1>Clientes</h1>
                    <p>Algunas empresas para las cuales CIMHE S.R.L presta/ha prestado servicios</p>
                </div>
                <div class="SliderCustomers owl-carousel owl-theme">
                    @php
                        $items = array(
                                    asset('webimages/main/logos1.png'),
                                    asset('webimages/main/logos2.png'),
                                    asset('webimages/main/logos3.png'),
                                    asset('webimages/main/logos4.png'),
                                    asset('webimages/main/logos5.png'),
                                    asset('webimages/main/logos6.png'),
                                    asset('webimages/main/logos7.png'),
                                    asset('webimages/main/logos8.png'),
                                    asset('webimages/main/logos9.png'),
                                    asset('webimages/main/logos10.png'),
                                    asset('webimages/main/logos11.png'),
                                    asset('webimages/main/logos12.png'),
                                    asset('webimages/main/logos14.png'),
                                    asset('webimages/main/logos15.png'),
                                    asset('webimages/main/logos16.png'),
                                    asset('webimages/main/logos17.png'),
                                    asset('webimages/main/logos18.png'),
                                    asset('webimages/main/logos19.png'),
                                    asset('webimages/main/logos20.png'),
                                    asset('webimages/main/logos21.png'),
                                    asset('webimages/main/logos22.png'),
                                    asset('webimages/main/logos23.png'),
                                    asset('webimages/main/logos24.png'),
                                    asset('webimages/main/logos25.png'),
                                    asset('webimages/main/logos26.png'),
                                    asset('webimages/main/logos27.png'),
                                    asset('webimages/main/logos28.png'),
                                    asset('webimages/main/logos29.png')
                                );
                    @endphp
                    @foreach($items as $item)
                        <div class="item">
                            <img style="max-width: 100%" src="{{ $item }}" alt="">
                        </div>
                    @endforeach
                </div>
            </div>
        </div> 
    </section>
    @include('layouts.web.partials.contact')
    <section class="contact-map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26265.016655206902!2d-58.552247088918456!3d-34.62622871030209!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcb7e009360379%3A0x128a92ca4dd9f1b3!2sSan+Roque+2472%2C+B1703BCF+Jos%C3%A9+Ingenieros%2C+Buenos+Aires!5e0!3m2!1ses-419!2sar!4v1521251006319" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
    </section>
    @include('layouts.web.partials.foot')
    {{-- <div id="Error"></div> --}}
@endsection


@section('scripts')
	<script type="text/javascript" src="{{ asset('plugins/owlcarousel2/owl.carousel.min.js')}} "></script>
@endsection

@section('custom_js')
	<script>
        $( document ).ready(function() {
			$('.MainOwlSlider').trigger('to.owl.carousel', 0);
		});

        
        $('.SliderCustomers').owlCarousel({
			loop: true,
			margin: 10,
			nav: false,
			responsive:{
				0:{
					items: 2
				},
				600:{
					items: 3 
				},
				1000:{
					items: 5 
				}
			}
		});

		$('.SliderOwlSmall').owlCarousel({
			loop: true,
			margin: 10,
			nav: false,
			responsive:{
				0:{
					items:1
				},
				600:{
					items:1
				},
				1000:{
					items:1
				}
			}
		});
	</script>
@endsection
