@extends('layouts.web.main')
@section('title', 'Cimhe | Foto')

@section('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/owlcarousel2/owl.carousel.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/owlcarousel2/owl.theme.default.min.css') }}">
@endsection

@section('content')
    <div class="top-space-big"></div>
    <div class="container-fluid top-banner banner-news">
    </div>
    <div class="container">
        @include('web.galeria.partials.filtersmobile')
    </div>
    <div class="container blog-list">
        <div class="row ">
            {{-- <h1>Galería de Fotos</h1> --}}
            <hr class="softhr">
            <div class="col-md-9 text-center">
                <h2>{{ $article->name }}</h2>
                <div class="gallery-slider">
                    <div class="owl-carousel owl-theme">
                        @foreach($article->images as $image)
                            <div class="item" style="width:100%">
                                <div class="swiper-slide"><img src="{{ asset('webimages/catalogoimg/'.$image->name) }}"></div>
                            </div>
                        @endforeach
                    </div>
                </div>

                {{-- <div class="swiper-slide"> <img src="{{ asset('webimages/catalogoimg/'.$image->name) }}"></div> --}}
                {{-- <div class="swiper-slide" style="background-image:url('{{ asset('webimages/main/gen/catalog-gen.jpg') }}')"></div> --}}
                
                

            </div>
            <div class="col-md-3">
                @include('web.galeria.partials.filtersdesktop')
            </div>
        </div>
        <hr class="softhr">
    </div>
    {{-- @include('layouts.web.partials.contact') --}}
    @include('layouts.web.partials.foot')

@endsection


@section('scripts')
    <script type="text/javascript" src="{{ asset('plugins/owlcarousel2/owl.carousel.min.js') }}"></script>
@endsection

@section('custom_js')
<script>
    $('.owl-carousel').owlCarousel({
        margin: 0,
        loop: true,
        autoWidth: false,
        items: 1,
        center: true,
        touchDrag: true,
        mergeFit: true,
        nav: true
    })
</script>
@endsection




   
