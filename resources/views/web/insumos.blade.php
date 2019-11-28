@extends('layouts.web.main')
@section('title', 'Cimhe | Insumos')

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
						<h1>Insumos de Laboratorio</h1>
						<hr>
					</div>  

					<div class="inner">
						@php 
							$items =  array(	
								'Automatización de Prensas Hidráulicas para ensayos de hormigones.',
								'Equipos de Cono de Arena para medición de densidad de suelos en campo.',
								'Fabricación y Venta de Insumos para el control de Hormigones, Moldes de probetas,
								Barras de Compactación, Conos de Abrams.',
								'Fabricación y Venta de Equipos de Placa de Carga Estática para ensayos de suelos en campo. Incluye el gato hidráulico, placas y sistema de medición de fuerza y deformación.',
								'Fabricación y Venta de Prensas Hidráulicas Automáticas de 150 y 200 Ton para ensayos de probetas de Hormigón a compresión. Prensas con diseño
								atendiendo lo especiﬁcado en Norma ASTM C39/C39M. El equipo está diseñado con un sistema de adquisición de datos autoría y diseño de CIMHE
								que muestra el comportamiento graﬁco de la carga en el tiempo durante la fase de ensayo. Permite la conﬁguración de distintas dimensiones de 
								probetas y ajusta automáticamente la velocidad de ensayo. Permite además el registro de la información múltiple en un periodo de ensayos.',
								); 
						@endphp
						<div class="row">
							<div class="col-md-4 item" style="min-height: 100px">
								<img src="{{ asset('webimages/main/punto.png') }}" alt="">
								<p>{{ $items[0] }}</p>
							</div>
							<div class="col-md-4 item" style="min-height: 100px">
								<img src="{{ asset('webimages/main/punto.png') }}" alt="">
								<p>{{ $items[1] }}</p>
							</div>
							<div class="col-md-4 item" style="min-height: 100px">
								<img src="{{ asset('webimages/main/punto.png') }}" alt="">
								<p>{{ $items[2] }}</p>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12 item" style="min-height: 100px">
								<img src="{{ asset('webimages/main/punto.png') }}" alt="">
								<p>{{ $items[3] }}</p>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12 item" style="min-height: 100px">
								<img src="{{ asset('webimages/main/punto.png') }}" alt="">
								<p>{{ $items[4] }}</p>
							</div>
						</div>
					</div>
				</div> 
			</div>
		</section>

		<section class="laboratorio-mobil">
			<div class="container-fluid">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<div class="SliderOwlSmall owl-carousel owl-theme">
								<div class="item"><img src="{{ asset('webimages/insumos/slider1-a.jpg') }}" alt=""></div>
								<div class="item"><img src="{{ asset('webimages/insumos/slider1-b.jpg') }}" alt=""></div>
								<div class="item"><img src="{{ asset('webimages/insumos/slider1-c.jpg') }}" alt=""></div>
							</div>
						</div>
						<div class="col-md-6">
							<h2>Laboratorio Móvil. <br>
								Fabricación y Venta <br>
								de Tráiler Equipados <br>
								para Laboratorios <br>
								en Campo.
							</h2>
							<a href="{{ url('#contacto')}}" class="btn btnWhiteMedium">CONSULTAR</a>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="fab-prens">
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
						<div class="col-md-6 enum-items-col text-content">
							<div class="item">
								<h2>Fabricacion de Prensas para Ensayos de Hormigones</h2>
								<a href="{{ url('galeria')}}" class="btn btnDark">Ver Fotos</a>
							</div>
							<div class="item">
								<h2>Insumos ParaPlantas y Mixer de Hormigones</h2>
								<a href="{{ url('galeria')}}" class="btn btnDark">Ver Fotos</a>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="small-section">
				<div class="container enum-items-col">
					<div class="row">
						<div class="col-md-12 text-center">
							<h1>Equipamiento para Laboratorios, Plantas
									y Mixer de Hormigon Elaborado.</h1>
							<hr>
						</div>  
	
						<div class="inner">
							@php 
								$items =  array(		
											'Cilindro manual subida y bajada de canaleta',
											'Cilindro hidráulico subida y bajas de canaleta',
											'V principal de salida de hormigón del Mixer',
											'Tolva principal de carga de áridos al Mixer',
											'Canaleta auxiliar liviana plástica o de chapa',
											'Canaleta auxiliar liviana plástica anti degaste',
											'Conjunto de canaleta principal bajada del Mixer Elaborado en chapa',
											'Rolo superior de cinta transportadora',
											'Conjunto de base y rolos de cinta',
											'Rodillo apoyo del mixer',
											'Despiece del rolo',
											'Cinta transportadora móvil de áridos',
											'Cinta transportadora de áridos',
											'Tolva de áridos',
											'Tanque de agua para Mixer',
											'Cierre de caños para bomba de hormigón'
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
			<section class="maincolor-back download-catalog">
				<div class="container">
					<div class="row">
						<span class="text">Descarga nuestro catálogode productos <br> para laboratorio</span>
						<a href="https://cimhe.com/downloads/venta-de-insumos-para-laboratorio.pdf" class="btn btnWhiteMedium"><i class="ion-archive"></i> Descargar</a>
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
			$('.MainOwlSlider').trigger('to.owl.carousel', 1);
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
