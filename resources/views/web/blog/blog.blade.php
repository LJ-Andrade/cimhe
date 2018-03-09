@extends('layouts.web.main')

@section('title', 'Studio Vimana | Portfolio')

@section('styles')
@endsection

@section('content')
    <div class="top-space-big"></div>
    <div class="container">
        @include('web.blog.partials.filtersmobile')
    </div>
    <div class="container">
        <h1>NOTICIAS</h1>
        <hr>
        <div class="row ">
            @if(! count($articles))
                <div class="container">
                    <h2>No se encontraron artículos</h2>
                    <hr>
                    <h4>Puede realizar una nueva búsqueda o  <a href="{{ route('web.portfolio') }}"></i> ver todas las noticias</a></h4>
                </div>
            @endif
            
            <div class="col-md-9">
                @foreach($articles as $article)
                <div class="row blog-item">
                    <a href="{!! route('web.portfolio.article',$article->slug ) !!}">
                        <div class="col-md-3 image pad0">
                            @if (count($article->images) >= 1)
                                <img src="{{ asset('webimages/portfolio/'. $article->images->first()->name ) }}" class="img-responsive" alt="">
                            @else
                                <img src="{{ asset('webimages/main/default.jpg') }}" class="img-responsive" alt="">
                            @endif
                        </div>
                        <div class="col-md-9 inner">
                            <h3 class="title"> {{ $article->title }} </h3>
                            <p>
                                @if(strlen(strip_tags($article->content)) > 450)
                                    {{ substr(strip_tags($article->content), 0 , 450) }} ...
                                    {{-- {{ strip_tags(substr($article->content, 0, 300)) }} --}}
                                @else
                                    {{ strip_tags($article->content) }}
                                @endif
                            </p>
                            
                            <div class="search">
                                <span>Categoría: 
                                <a href="{{ route('web.search.category', $article->category->name ) }}">
                                    <span>{{ $article->category->name }}</span>
                                </a> | 
                                </span>Etiquetas: 
                                    @foreach($article->tags as $tag)
                                        <a href="{{ route('web.search.tag', $tag->name ) }}">
                                            <span>{!! $tag->name !!}</span>
                                        </a>
                                    @endforeach
                            </div>
                            <div class="date">
                                <span class="text">{{ $article->created_at->diffForHumans() }}</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="clear"></div>
                @endforeach
            </div>
            <div class="col-md-3">
                @include('web.blog.partials.filtersdesktop')
            </div>
        </div>
        {!! $articles->render(); !!}
    </div>
    <div class="container">
        <hr>
    </div>
    @include('layouts.web.partials.contact')
    @include('layouts.web.partials.foot')

@endsection


@section('scripts')
@endsection

@section('custom_js')
@endsection




   
