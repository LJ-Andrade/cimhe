@extends('layouts.web.main')
@section('title', 'Cimhe | Inicio')

@section('styles')
    {{-- Slider --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/swiper-slider/swiper.min.css') }}">
@endsection

@section('content')
    <div id="ActualSection" data-section="home"></div> {{-- JS Anchor --}}
    {{-- Home Parallax --}}
    {{-- <div  class="main-home" data-parallax="scroll">
        <div class="main-info wow animated fadeIn" data-wow-delay="0s" data-wow-duration="1s">
            <img src="{{ asset('webimages/logos/main-logo.png') }}">
            <h1>Desarrollo Web y Diseño Gráfico</h1>
            <div class="actions">
                <a href="{{ route('web.portfolio') }}"><button class="button btnHollowGreyTrans">Nuestro Portfolio</button></a>
                <a href="{{ url('/#contact') }}"><button class="button btnHollowGreen">Contactanos</button></a>
            </div>
        </div>
    </div> --}}
    <div class="top-space"></div>
    {{-- Main Section --}}
    <section class="main-home">
        <div class="container inner">
            <div class="row">
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
                                    array(asset('webimages/main/icon1.png'), 'Tecnología del hormigón para el proyecto y construcción de obras civiles.'),
                                    array(asset('webimages/main/icon2.png'), 'Inspección de obras de hormigón durante la construcción.'),
                                    array(asset('webimages/main/icon3.png'), 'Asistencia y asesoramiento técnico.'),
                                    array(asset('webimages/main/icon4.png'), 'Estudio de estructuras existentes deterioradas.'),
                                    array(asset('webimages/main/icon5.png'), 'Diagnóstico de las causas del deterioro de estructuras.'),
                                    array(asset('webimages/main/icon6.png'), 'Proyectos de reparación y rehabilitación de estructuras.'),
                                    array(asset('webimages/main/icon15.png'), 'Estudios de hormigones y sus componentes.'),
                                    array(asset('webimages/main/icon7.png'), 'Control de calidad y aceptación del hormigón en obra con laboratorio de campaña.'),
                                    array(asset('webimages/main/icon8.png'), 'Realización de ensayos según normativa nacional e internacional.'),
                                    array(asset('webimages/main/icon9.png'), 'Asesoramiento técnico de empresas fabricantes de hormigón y de empresas constructoras.'),
                                    array(asset('webimages/main/icon10.png'), 'Auditorías de la calidad para la construcción de estructuras de hormigón.')
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
