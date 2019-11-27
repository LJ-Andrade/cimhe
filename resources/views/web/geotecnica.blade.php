@extends('layouts.web.main')
@section('title', 'Cimhe | Geotécnica')

@section('styles')
    {{-- Slider --}}
	{{ Html::style('plugins/owlcarousel2/owl.carousel.min.css') }}
	{{ Html::style('plugins/owlcarousel2/owl.theme.default.min.css') }}
@endsection

@section('content')
		<div class="top-space"></div>

		{{-- Main Section --}}
		<section class="main-home">
			<div class="container inner">
				<div class="row">
					@include('web.main-slider')
				</div>
			</div>
		</section>


		<section class="small-section grey-back">
			<div class="container enum-items-col">
				<div class="row">
					<div class="col-md-12 text-center">
						<h1>LABORATORIO DE SUELOS</h1>
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
		
		<section class="servicios-de-contratacion">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						{{-- Slider --}}
						<div class="owl-carousel owl-theme">
							<div class="item"><img src="{{ asset('webimages/cimhesas/slider1-a.jpg') }}" alt=""></div>
							<div class="item"><img src="{{ asset('webimages/cimhesas/slider1-b.jpg') }}" alt=""></div>
							<div class="item"><img src="{{ asset('webimages/cimhesas/slider1-c.jpg') }}" alt=""></div>
							<div class="item"><img src="{{ asset('webimages/cimhesas/slider1-d.jpg') }}" alt=""></div>
						</div>
						{{-- EndSlider --}}
					</div>
					<div class="col-md-6 enum-items-col">
	