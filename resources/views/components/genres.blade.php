<!-- Genres start -->
<div class="quicklinks">
	<div class="container">
		<h4 class="mb-4" tabindex="0">Genres</h4>
		<div class="row font-size__medium mb-5">
			@foreach ($genres as $genre)
			<div class="col-6 col-lg-3 col-md-4 pb-2">
				<a data-page="tag" data-title="{{$genre->title}}" 
				class="text-decoration-none color-black" 
				href="{{ route('genre', ['id' => $genre->id]) }}">{{$genre->title}}</a>
			</div>
			@endforeach
		</div>
	</div>
</div>		
<!-- Genres End -->