@extends('layouts.web.main')
@section('title', 'Cimhe | Geotécnica')

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
						<h1>Laboratorio de Suelos</h1>
						<hr>
					</div>  

					<div class="inner">
						@php 
							$items =  array(

										'Ensayos para clasificación de Suelos, Granulometría, Límites, Peso Unitarios. Sistema Unificado de Clasificación y Clasificación HRB.',
										'Instalación y operación de laboratorios en obra, determinación de densidades a través de cono de arena, en suelos compactados.',
										'Determinación de características mecánicas de los suelos, ensayos de Corte Directo, compresiones inconfinadas. Determinación del Angulo de Fricción y la Cohesión.',
										'Resistividad eléctrica en suelos en campo y laboratorio',
										'Densidades Proctor con esfuerzo estándar y modificado.',
										'Ensayos de Placa de Carga Estática en Sitio sobre suelos',
										'Cono de penetración dinámico DCP.',
										'Ensayos Triaxiales en suelos.',
										'Consolidación en suelos finos.',
										'Pruebas de Carga Estática en Micropilotes y Pilotes. Ensayos según normativa nacional e internacional.',

									); 
						@endphp
						<div class="row">
							@foreach($items as $item)
								<div class="col-md-4 item">
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
		
		<section class="servicios-de-contratacion">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						{{-- Slider --}}
						<div class="SliderOwlSmall owl-carousel owl-theme">
							<div class="item"><img src="{{ asset('webimages/geotermica/slider1-a.jpg') }}" alt=""></div>
							<div class="item"><img src="{{ asset('webimages/geotermica/slider1-b.jpg') }}" alt=""></div>
							<div class="item"><img src="{{ asset('webimages/geotermica/slider1-c.jpg') }}" alt=""></div>
							<div class="item"><img src="{{ asset('webimages/geotermica/slider1-d.jpg') }}" alt=""></div>
						</div>
						{{-- EndSlider --}}
					</div>
					<div class="col-md-6 enum-items-col">
						<h2>Estudios de Suelos y Condiciones de Fundación</h2>
						<div class="item">
							<img src="{{ asset('webimages/main/punto.png') }}" alt="">
							<p>Exploración del subsuelo a través del ensayo SPT. Determinación de
							condiciones de fundación para ediﬁcaciones, estudios geotécnicos.</p>
						</div>
						<h2>Capacidades de Carga Sobre Fundaciones</h2>
						<div class="item">
							<img src="{{ asset('webimages/main/punto.png') }}" alt="">
							<p>Pruebas de carga Estática en Micropilotes y Pilotes y Fundaciones en general.</p>
						</div>
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
		// Jump to slide (Section slide first)
		$( document ).ready(function() {
			$('.MainOwlSlider').trigger('to.owl.carousel', 2);
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
