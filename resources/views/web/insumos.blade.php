@extends('layouts.web.main')
@section('title', 'Cimhe | Insumos')

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

		@include('layouts.web.partials.contact')
		@include('layouts.web.partials.foot')

		<div id="Error"></div>
	 
@endsection

@section('scripts')
	<script type="text/javascript" src="{{ asset('plugins/owlcarousel2/owl.carousel.min.js')}} "></script>
@endsection

@section('custom_js')
	<script>
		$('.owl-carousel').owlCarousel({
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
