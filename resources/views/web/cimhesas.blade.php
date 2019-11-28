@extends('layouts.web.main')
@section('title', 'Cimhe S.a.s.')

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

	<section class="small-section grey-back">
		<div class="container enum-items-col">
			<div class="row">
				<div class="col-md-12 text-center">
					<h1>Laboratorio de Hormigones</h1>
					<hr>
				</div>  

				<div class="inner">
					@php 
						$items =  array(

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
					<div class="row">
						@foreach($items as $item)
							<div class="col-md-4 item" style="min-height: 100px">
								<img src="{{ asset('webimages/main/punto.png') }}" alt="">
								<p>{{ $item }}</p>
							
							</div> 
							@if ($loop->iteration % 3 == 0)
								</div>
								<div class="row">
							@endif
						@endforeach
					</div>
				</div>
			</div> 
		</div>
	</section>
	<section class="ing-ases-inpec">
		<div class="container-fluid">
			<div class="container">
				<h1>Servicios de Ingeniería, <br>asesoría e inspección</h1>
				@php
					$items = array(
									['icon1.png', 'Tecnología del hormigón para el proyecto y construcción de obras civiles'],
									['icon2.png', 'Inspección de obras de hormigón durante la construcción'],
									['icon3.png', 'Asistencia y asesoramiento técnico'],
									['icon4.png', 'Estudio de estructuras existentes deterioradas'],
									['icon5.png', 'Diagnóstico de las causas del deterioro de estructuras'],
									['icon6.png', 'Proyectos de reparación y rehabilitación de estructuras'],
									['icon7.png', 'Cálculo de Estructuras de Hormigón Armado'],
									['icon8.png', 'Diseño de Hormigones especiales, hormigón blanco, auto-compactante, pisos sin junta'],
									['icon9.png', 'Pruebas de carga en estructuras'],
									['icon10.png', 'Asesoramiento técnico de empresas fabricantes de hormigón y de empresas constructoras.'],
									['icon11.png', 'Auditorías de la calidad para la construcción de estructuras de hormigón.'],
									['icon11.png', 'Exploración en Hormigones Con Tecnología GPR (Ground Penetration Radar) y Face Array Hasta 1.20mts de Profundidad']

							); 
				@endphp
				<div class="row horiz-items">
					@foreach($items as $item)
						<div class="col-md-4 col-xs-12 inner">
							<img src="{{ asset('webimages/cimhesas/'.$item[0]) }}" alt="">
							<p>
								{{ $item[1] }}
							</p>
						</div>
					@endforeach
				</div>
			</div>
		</div>
	</section>

	<section class="small-section">
		<div class="container enum-items-col">
			<div class="row">
				<div class="col-md-12 text-center">
					<h1>Laboratorio De agregados, Cemeno y Asfalto</h1>
					<hr>
				</div>  

				<div class="inner">
					@php
						$items =  array(
									'Granulometría',
									'Pasante del tamiz #200 (0.074mm)',
									'Densidad y absorción',
									'Desgaste de Los Ángeles',
									'Partículas desmenuzables',
									'Disgregabilidad al sulfato de sodio',
									'Porcentaje de partículas planas y elongadas',
									'Porcentaje de Caras Producidas por fracturas',
									'Contenido de Materia Orgánica a través del ensayo de colorimetría',
									'Reactividad Potencial Álcali - Sílice método de la Barra de Mortero Acelerado IRAM 1674 (ASTM C 1260)',
									'Densidad y Finura Blaine en cementos',
									'Consistencia Normal y Tiempo de Fraguado en cemento a través de la aguja de Vicat',
									'Evaluación de lechadas cementicias, tiempo de escurrimiento, exudación y resistencia a la compresión',
									'Determinación de la resistencia a la compresión y curva de avance en el tiempo del cemento medida sobre cubos de 2” de lado',
									'Extracción de Testigos sobre pavimentos asfalticos, determinación de densidades y propiedades Marshall',
									'Análisis Petrográﬁco',
								); 
					@endphp
					<div class="row">
						@foreach($items as $item)
						<div class="col-md-4 item">
							<img src="webimages/main/punto.png" alt="">
							<p>{{ $item }}</p>
						</div> 
							@if ($loop->iteration % 3 == 0)
								</div>
								<div class="row">
							@endif
						@endforeach
					</div>
				</div>
			</div> 
		</div>
	</section>

	<section class="capacitaciones">
		<div class="container-fluid">
			<div class="container">
					<h1>Capacitación</h1>
					<hr>
					@php
						$items = array(
										['icon1.png', 'Tecnología de Hormigón, dictado a través de la Asociación del Hormigón Elaborado'],
										['icon2.png', 'Capacitaciones orientadas a Clientes en el muestreo y control de hormigones en obra. (Jefes de Obra y Capataces)'],
										['icon3.png', 'Sistemas de Pasantías y atención a escuelas técnicas orientadas a la formación de Maestros Mayores de Obra.'],
										['icon4.png', 'Capacitaciones para técnicos de laboratorio y campo en hormigones y suelos']
								); 
					@endphp
					<div class="row horiz-items">
						@foreach($items as $item)
							<div class="col-md-3 col-xs-12 inner">
								<img src="{{ asset('webimages/cimhesas/'.$item[0]) }}" alt="">
								<br>
								<p>
									{{ $item[1] }}
								</p>
							</div>
						@endforeach
					</div>
			</div>
		</div>
	</section>

	<section class="servicios-de-contratacion">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					{{-- Slider --}}
					<div class="SliderOwlSmall owl-carousel owl-theme">
						<div class="item"><img src="{{ asset('webimages/cimhesas/slider1-a.jpg') }}" alt=""></div>
						<div class="item"><img src="{{ asset('webimages/cimhesas/slider1-b.jpg') }}" alt=""></div>
						<div class="item"><img src="{{ asset('webimages/cimhesas/slider1-c.jpg') }}" alt=""></div>
						<div class="item"><img src="{{ asset('webimages/cimhesas/slider1-d.jpg') }}" alt=""></div>
					</div>
					{{-- EndSlider --}}
				</div>
				<div class="col-md-6 enum-items-col">
					<h2>Servicios de contrastacion en fuerza y masa. Prensa de ensayos, celdas de carga y balanza.</h2>
					<div class="item">
						<img src="{{ asset('webimages/main/punto.png') }}" alt="">
						<p>Exploración en Hormigones Con Tecnología GPR (Ground Penetration Radar) 
						y Face Array Hasta 1.20 mts de Profundidad</p>
					</div>
					<div class="item">
						<img src="{{ asset('webimages/main/punto.png') }}" alt="">
						<p>Verificación y/o contrastación de celdas de carga a ser usadas axialmente en compresión</p>
					</div>
					<div class="item">
						<img src="{{ asset('webimages/main/punto.png') }}" alt="">
						<p>Verificación de Gatos Hidráulicos para ensayos de carga, tensión de anclajes. Veriﬁcación de Balanzas Electrónicas</img>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-6 enum-items-col">
					<h2>Servicios de contrastacion en fuerza y masa. Prensa de ensayos, celdas de carga y balanza.</h2>
					<div class="item">
						<img src="{{ asset('webimages/main/punto.png') }}" alt="">
						<p>Exploración en Hormigones Con Tecnología GPR (Ground Penetration Radar) 
						y Face Array Hasta 1.20 mts de Profundidad</p>
					</div>
					<div class="item">
						<img src="{{ asset('webimages/main/punto.png') }}" alt="">
						<p>Verificación y/o contrastación de celdas de carga a ser usadas axialmente en compresión</p>
					</div>
					<div class="item">
						<img src="{{ asset('webimages/main/punto.png') }}" alt="">
						<p>Verificación de Gatos Hidráulicos para ensayos de carga, tensión de anclajes. Veriﬁcación de Balanzas Electrónicas</img>
					</div>
				</div>
				<div class="col-md-6">
					{{-- Slider --}}
					<div class="SliderOwlSmall owl-carousel owl-theme">
						<div class="item"><img src="{{ asset('webimages/cimhesas/slider2-a.jpg') }}" alt=""></div>
						<div class="item"><img src="{{ asset('webimages/cimhesas/slider2-b.jpg') }}" alt=""></div>
						<div class="item"><img src="{{ asset('webimages/cimhesas/slider2-c.jpg') }}" alt=""></div>
						<div class="item"><img src="{{ asset('webimages/cimhesas/slider3-d.jpg') }}" alt=""></div>
					</div>
					{{-- EndSlider --}}
				</div>
			</div>
		</div>
	</section>

    @include('layouts.web.partials.contact')
    @include('layouts.web.partials.foot')

    <div id="Error"></div>
@endsection

@section('scripts')
	<script type="text/javascript" src="{{ asset('plugins/owlcarousel2/owl.carousel.min.js')}} "></script>
@endsection

@section('custom_js')
	<script>
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
