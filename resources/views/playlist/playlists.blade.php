
@extends('layout.base')
@section('banner')
<div class="pagetitle">
	<div class="container">
		<h2 class="h2__underline" tabindex="0">All Playlists</h2>
		{{-- <p style="max-width:400px;">In publishing and graphic design, Lorem ipsum is a placeholder text commonly.</p>	   --}}
	</div>
</div>
@endsection
    
@section('content')
<main>
    <div class="container pt-md-5 mb-5 pb-5">
        <div class="row" id="pagination-data">
            <div class="row">
                @foreach ($playlists as $playlist) 
                    <div class="col-xl-2 col-lg-3 col-md-4 col-6 d-flex align-items-stretch mb-mb-5 mb-4">
                        <a href="{{ route('tracks-by-playlist', ['id' => $playlist->id]) }}" class="card card--reciter mb-0">
                            <div class="card--reciter__image" style="background-image: url('{{ \App\Helpers\Helper::format_image($playlist->image_name, 1) }}');"></div>
                            <div class="card--reciter__content">{{ $playlist->title}}</div>
                            @if(Auth::user())
                                @php 
                                    $saved =  \App\Helpers\Helper::isSavedPlaylist($playlist->id); 
                                    $icon = $saved ? asset('media/bookmark-dark.svg') : asset('media/bookmark.svg');
                                @endphp	
                                <a href="#" class="toggle-save-playlist position-absolute" style="z-index:1;" data-saved="{{ $saved ? 'yes': 'no' }}" data-playlist-id="{{$playlist->id}}" >
                                    <img src="{{ $icon }}" alt="Playlist Icon">
                                </a>
                            @endif
                        </a>
                    </div>
                @endforeach  
            </div> 
        </div>
        <div class="mt-2">
            <div class="ajax-load">
                Loading
            </div>
        </div>	  
    </div>
</main>
<x-tags :tags="$tags"/>
<x-genres :genres="$genres"/>
@endsection
@push('pagination')

	var page = 1;
    var lastpage = false;
    var Loading = false;

    $(window).scroll(function() {
        var hT = $('.ajax-load').offset().top,
            hH = $('.ajax-load').outerHeight(),
            wH = $(window).height(),
            wS = $(this).scrollTop();
        if (wS > (hT+hH-wH)){
            if(!lastpage && !Loading){
                page++;
	            loadMoreData(page);
            }

        }
    });


	function loadMoreData(page){
	  $.ajax(
	        {
	            url: '?page=' + page,
                type: "get",
	            beforeSend: function()
	            {
	                $('.ajax-load').show();
                    Loading = true;
	            }
	        })
	        .done(function(data)
	        {
	            if(data.html == '' ){
                    lastpage = true;
	                $('.ajax-load').html("No more records found");
	                return;
	            }
	            $('.ajax-load').hide();
	            $("#pagination-data").append(data.html);
                Loading = false;

	        })

	        .fail(function(jqXHR, ajaxOptions, thrownError)
	        {
	              alert('server not responding...');
	        });
	}

@endpush

