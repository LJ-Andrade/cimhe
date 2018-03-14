@extends('layouts.web.main')
@section('title', 'Cimhe | Galería de Fotos')

@section('styles')
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
            <h1>Galería de Fotos</h1>
            <hr class="softhr">
            @if(!count($articles))
                <div class="container">
                    <h2>No se encontraron fotos</h2>
                    <hr>
                    <h4>Puede realizar una nueva búsqueda o  <a href="{{ route('web.galeria') }}"></i> ver todas las fotos</a></h4>
                </div>
            @endif
            
            <div class="col-md-9">
                <div class="row gallery-list">
                @foreach($articles as $article)
                    {{-- <a href="{{ route('web.catalogoimg.article',$article->slug ) }}"> --}}
                        <div class="col-md-4 col-sm-4 col-xs-12 inner">
                            @if(strlen(strip_tags($article->name)) > 140)
                                <div class="title"> {{ substr(strip_tags($article->name), 0 , 140) }} ...</div>
                            @else
                                <div class="title"> {{ $article->name }} </div>
                            @endif
                            @if (count($article->images) >= 1)
                                <img src="{{ asset('webimages/catalogoimg/'. $article->images->first()->name ) }}" class="img-responsive" alt="">
                            @else
                                <img src="{{ asset('webimages/main/gen/catalog-default.jpg') }}" class="img-responsive" alt="">
                            @endif
                        </div>
                    {{-- </a> --}}
                @endforeach
                </div>
            </div>
            <div class="col-md-3">
                @include('web.galeria.partials.filtersdesktop')
            </div>
        </div>
        {!! $articles->render(); !!}
        <hr class="softhr">
    </div>
    @include('layouts.web.partials.contact')
    @include('layouts.web.partials.foot')

@endsection


@section('scripts')
@endsection

@section('custom_js')
@endsection




   
