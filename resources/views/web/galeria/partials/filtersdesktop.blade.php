<div class="blog-filters-desktop">
	<div class="search-input">
		{!! Form::open(['route' => 'web.galeria', 'method' => 'GET', 'class' => '']) !!}
			<div class="form-group search-bar">
				{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Buscar...', 'aria-describedby' => 'search']) !!}
				<button type="submit" class="btn search-btn"><i class="ion-ios-search"></i></button>
			</div>
		{!! Form::close() !!}
	</div>
	<b>Categorías: </b><br>
	@foreach($categories as $category)
	{{-- <a href="{{ route('web.search.category', $category->name ) }}">
		{{ $category->name }} <span> ({{ $category->article->count() }})</span> <br>
	</a> --}}
	<a href="#">
		{{ $category->name }}<br>
	</a>
	@endforeach
	<hr class="softhr">
	<b>Etiquetas: </b><br>
	@foreach($tags as $tag)
	{{-- <a href="{{ route('web.search.tag', $tag->name ) }}"> 
		{{ $tag->name }}
	</a> --}}
	<a href="#"> 
		{{ $tag->name }}
	</a>
	@endforeach
</div>
