@extends('layouts.web.main')
@section('title', 'Cimhe | Inicio')

@section('styles')
    {{-- Slider --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/swiper-slider/swiper.min.css') }}">
@endsection

@section('content')
    <div class="top-space"></div>
    {{-- Main Section --}}
    <section class="main-home">
        <div class="container inner">
            <div class="row">
                <div class="col-lg-9 col-md-8">
                    <h2>Ciencia e Ingeniería Móvil del Hormigón Elaborado</h2>
                    <div class="h2">Ciencia e Ingeniería Móvil del Hormigón Elaborado</div>
                    <div class="title">
                        Laboratorio de Ensayos <br>
                        Hormigón y Suelos
                    </div>
                    <hr class="shorthr">
                    <div class="clearfix"></div>
                    <div class="text">
                        Es una empresa que cuenta con un plantel de profesionales <br>
                        y técnicos con experiencia de más de 10 años en la <br>
                        Tecnología del Hormigón.
                    </div>
                </div>
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
        </div>
    </section>

    {{-- First Info --}}
    <section class="container-fluid section section-container home-section-2">
        <div class="container">
            <article class="row">
                <div class="col-md-6 inner">
                   <div class="title"> <img src="{{ asset('webimages/main/punto.png') }}" alt=""/> Asesoramiento</div> 
                   <p>
                        Asesoramiento constante de un Ingeniero Civil y el apoyo de un profesional
                        en materia de Geología, lo que garantiza una amplia cobertura
                        de conocimiento sobre el tema. Posee un laboratorio propio completamente
                        equipado ubicado a una cuadra de Av. Beiró y Gral. Paz, en el
                        cual se realizan los ensayos concernientes al control de calidad del
                        hormigón y a la evaluación de suelos, lo que permite llevar a cabo con
                        alta confiabilidad y eficiencia los trabajos solicitados, con el aval de
                        profesionales en la materia.
                   </p>
                </div>
                <div class="col-md-6 inner">
                   <div class="title"> <img src="{{ asset('webimages/main/punto.png') }}" alt=""/> Estudios</div> 
                   <p>
                        Ofrecemos servicios de ingeniería para la industria de la
                        construcción. Es una empresa dedicada a la evaluación de
                        materiales, la asistencia técnica y el control de calidad en
                        obra. Tiene como objetivos principales realizar ensayos de
                        hormigón elaborado y estudios de suelos en obras en
                        construcción.
                   </p>
                </div>
            </article>
        </div>
    </section>

    <section class="container-fluid section home-section-3">
        <div class="container">
            <div class="row horiz-items">
                <h1>Servicios</h1>
                <hr>
                <?php $items =  array(
                                array(asset('webimages/main/icon1.png'),  'Tecnología del hormigón para el proyecto y construcción de obras civiles.'),
                                array(asset('webimages/main/icon2.png'),  'Inspección de obras de hormigón durante la construcción.'),
                                array(asset('webimages/main/icon3.png'),  'Asistencia y asesoramiento técnico.'),
                                array(asset('webimages/main/icon4.png'),  'Estudio de estructuras existentes deterioradas.'),
                                array(asset('webimages/main/icon5.png'),  'Diagnostico de las causas del deterioro de estructuras.'),
                                array(asset('webimages/main/icon6.png'),  'Proyectos de reparación y rehabilitación de estructuras.'),
                                array(asset('webimages/main/icon15.png'), 'Estudios de hormigones y sus componentes. Dosificación de Hormigón.'),
                                array(asset('webimages/main/icon8.png'),  'Realización de ensayos según normativa nacional e internacional.'),
                                array(asset('webimages/main/icon9.png'),  'Asesoramiento técnico de empresas fabricantes de hormigón y de empresas constructoras.'),
                                array(asset('webimages/main/icon10.png'), 'Auditorías de la calidad para la construcción de estructuras de hormigón.'),
                                array(asset('webimages/main/icon10.png'), 'Cálculo estructural en Hormigón Armado'),
                                array(asset('webimages/main/icon10.png'), 'Estudios Geotécnicos, Estudios de Suelo,  Muestreo de Suelo.'),
                                array(asset('webimages/main/icon10.png'), 'Laboratorio de Hormigón. Laboratorio de suelos, caracterización, proctor, CBR. '),
                                array(asset('webimages/main/icon10.png'), 'Insumos de laboratorio, Venta de prensa de hormigón, prensa hidráulica motorizada, moldes de probetas, etc.'),
                                array(asset('webimages/main/icon7.png'),  'Control de calidad y aceptación del hormigón en obra con laboratorio de campaña. Resistencia de hormigón, durabilidad y toma de probetas de hormigón.')
                            ); 
                foreach($items as $item){
                ?>
                <div class="col-md-4 col-sm-6 col-xs-12 inner">
                    <img src="{{ $item[0] }}" alt="">
                    <p>{{ $item[1] }}</p>
                </div>
                <?php unset($items); } ?>
            </div>
        </div>
    </section>
    <section class="home-section-3b">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-8 col-xs-12">
                    <h3>
                        Descarga nuestro catálogo de productos para laboratorio.
                    </h3>
                </div>
                <div class="col-md-6 col-sm-4 col-xs-12 action">
                    <a href="{{ asset('downloads/venta-de-insumos-para-laboratorio.pdf') }}" class="btn btnHollowInv"><i class="ion-archive"></i> Descargar</a>
                </div>
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
                <div class="container swiper-container">
                    <div class="swiper-wrapper">
                        <?php $items =  array(
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
                        foreach($items as $item){
                        ?>
                        <div class="swiper-slide">
                        <img src="{{ $item }}" alt="">
                        </div>
                        <?php unset($items); } ?>
                    </div>
                </div>
            </div>  
        </div>
    </section>
    @include('layouts.web.partials.contact')
    @include('layouts.web.partials.foot')

    <div id="Error"></div>
   
@endsection
