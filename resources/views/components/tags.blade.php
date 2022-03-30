<!-- Tags start -->
<div class="quicklinks">
	<div class="container">
		<h4 class="mb-4" tabindex="0">Tags</h4>
		<div id ="tags" class="row font-size__medium mb-2">
			@foreach ($tags as $tag)
				@php  $classname = ($loop->index < 16) ? 'more' : 'less'; @endphp			
				<div class="col-6 col-lg-3 col-md-4 pb-2 {{ $classname }}">
						<a data-page="tag"  data-title="{{$tag->title}}" class="text-decoration-none color-black" href="{{ route('tracks-by-tag', ['id' => $tag->id]) }}">{{$tag->title}}</a>
				</div>				
			@endforeach
		</div>
		<div class="col-md-auto col-12 pt-md-2 pt-2 mb-5">
			<a class="viewmore_link mb-5" href="javascript:void(0);">Show More</a>
		</div>
	</div>
</div>
<!-- Tags end -->