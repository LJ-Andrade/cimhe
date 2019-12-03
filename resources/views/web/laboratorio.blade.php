@extends('layouts.web.main')
@section('title', 'Cimhe | Laboratorio')

@section('styles')
    {{-- Slider --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/swiper-slider/swiper.min.css') }}">
@endsection

@section('content')
    <div class="top-space-big"></div>
    <div class="container-fluid top-banner">
        <div class="container">
            <div class="row">
            </div>
        </div>
    </div>
    
    <section class="small-section maincolor-back laboratorio-1">
        <div class="container">
            <div class="row text-center">
                <h1>Estudios y ensayos</h1>    
                <div class="row horiz-items">
                    <div class="col-md-4 col-xs-12 inner">
                        <img src="{{ asset('webimages/main/laboratorio/icon1.png') }}" alt="">
                        <p>
                            Cursos de tecnología de hormigón
                            a través de la asociación argentina
                            de hormigón elaborado (AAHE)
                        </p>
                    </div>
                    <div class="col-md-4 col-xs-12 inner">
                        <img src="{{ asset('webimages/main/laboratorio/icon2.png') }}" alt="">
                        <p>
                            Servicios de capacitación a
                            nuestros clientes (Jefe de
                            obra, Capataces, etc)
                        </p>
                    </div>
                    <div class="col-md-4 col-xs-12 inner">
                        <img src="{{ asset('webimages/main/laboratorio/icon3.png') }}" alt="">
                        <p>
                            Servicios de capacitación para
                            técnicos en obra y laboratorio
                            de hormigón y suelo.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section text-center">
        <div class="container">
            <div class="row">
                <h1>CIMHE S.R.L</h1>
                <h5>
                    Se encuentra en proceso de implementación y certificación de su sistema de gestión <br>
                    de calidad conforme a los requisitos de la norma ISO 9001:2015
                </h5>
            </div>
        </div>
    </section>


    <section class="small-section laboratorio grey-back">
        <div class="container enum-items-col">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1>Hormigones</h1>
                    <hr>
                </div>  

                <div class="inner">
                    @php $items =  array(
                            'Estudios técnicos - económicos sobre hormigones y sus materiales componentes.',
                            'Durabilidad. Acciones internas y externas.',
                            'Cambios volumétricos.',
                            'Ensayos no destructivos. Esclerometría IRAM 1694 y Ultrasonido IRAM 1683.',
                            'Extracción de Testigos.',
                            'Detección de armaduras de refuerzo en estructuras de hormigón.',
                            'Ensayo a Flexión de vigas.',
                            'Asistencia y toma de Probetas  en obra.',
                            'Almacenamiento en pileta de curado controlada por temperatura de probetas de hormigón. ',
                            'Figuración en estructuras.',
                            'Estudios especiales e investigaciones.',
                            'Instalación y operación de laboratorios de obra.',
                            'Ensayos de penetración de agua bajo presión Norma IRAM 1554.',
                            'Ensayos de succión capilar Norma IRAM 1871',
                            'Ensayos de pilotes. Marca PILETEST Modelo PET Eco.',
                            'Desarrollo de distintas dosificaciones de hormigones. ',
                            'Desarrollo de piso sin junta (Hasta 1500 m2)'
                        ); 
                    @endphp
                    @foreach($items as $item)
                        <div class="col-md-4 item">
                            <img src="webimages/main/punto.png" alt="">
                            <p>{{ $item }}</p>
                        </div> 
                    @endforeach
                </div>
            </div>  
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1>Suelos - Ensayos de Laboratorio</h1>
                    <hr>
                </div>  
                <div class="inner">
                    <?php $items =  array(
                                    'Evaluacion manual visual de muestras de suelos',
                                    'Caracterización de muestras de suelos, granulometria y límites de consistencia',
                                    'Clasificación de muestras de suelos, SUC y HRB',
                                    'Evaluación de muestras suelo-cemento y suelo-cal. Capacidades y estabilidad',
                                    'Densidades Proctor, estandar y modificado',
                                    'Evaluación de muestras de suelos para compactación',
                                    'Determinación de parámetros de resistencia del suelo, ensayos de corte directo y compresión inconfinada',
                                    'Comportamiento de arcillas y suelos cohesivos, consolidación, expansión libre y controlada',
                                    'Valor de Soporte, California Bearing Ratio (CBR)',
                                    'Análisis de suelos finos, hidrometría',
                                    'Pesos Unitarios',
                                ); 
                    foreach($items as $item){
                    ?>
                    <div class="col-md-4 item">
                        <img src="webimages/main/punto.png" alt="">
                        <p>{{ $item }}</p> 
                    </div> 
                    <?php } unset($items); ?>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 text-center">
                    <h1>Suelos - Servicios de Campo</h1>
                    <hr>
                </div>  
                <div class="inner">
                    @php
                        $items =  array(
                                    'Exploraciones geotécnicas en sitio a través del Standar Penetration Test. (SPT), Determinación de capacidades y deformaciones admisibles del suelo para fundación de estructuras. Perfiles Geotécnicos del Suelo.',
                                    'Ensayos de plato de carga',
                                    'Sondeos superficiales para infraestructura de pavimento. DCP',
                                    'Determinacion de densidades en sitio, controles de compactacion de rellenos.',
                                    'Resistividad en Suelos'
                                ); 
                    @endphp
                    @foreach($items as $item)
                        <div class="col-md-4 item">
                            <img src="webimages/main/punto.png" alt="">
                            <p>{{ $item }}</p> 
                        </div> 
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    @include('layouts.web.partials.contact')
    @include('layouts.web.partials.foot')
@endsection

@section('scripts')
    <script type="text/javascript" src="{{ asset('plugins/parallax/parallax.min.js') }}"></script>
    {{-- Slider --}}
    <script type="text/javascript" src="{{ asset('plugins/swiper-slider/swiper.jquery.min.js') }}"></script>
@endsection