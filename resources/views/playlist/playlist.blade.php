
@extends('layout.base')
@section('banner')
<div class="pagetitle">
	<div class="container">
		
	  <!-- Header  -->
	  <div class="row">
		  <div class="col-auto pb-4 pb-md-0">
		  		<div class="collaction_img" style="background-image: url('{{ \App\Helpers\Helper::format_image($playlist_detail->image_name,1) }}');"></div>
		  </div>		  
		  <div class="col">
		  	<h2 class="h2__underline" tabindex="0">{{ $playlist_detail->title }}</h2>
		  	<p>{{ $playlist_detail->count }} tracks</p>
		  </div>		  
	  </div>

	</div>
</div>
@endsection
    
@section('content')

<main>
  <div class="container pt-md-5 mb-5 pb-5">
    <div class="row" id="pagination-data">
          @foreach ($playlist_tracks as $track) 
            <!-- player starts here -->
            <div id="ag2" class="audiogallery skin-wave auto-init" style="opacity:0; margin-top:30px;"
               data-options='{
               "cueFirstMedia": "on",
               "autoplay": "off",
               "autoplayNext": "on",
               "design_menu_position": "bottom",
               "enable_easing": "on",
               "playlistTransition": "fade",
               "design_menu_height": "200"
               }'
               >
               <!-- options for playlist in data-options -->
               <div class="items">
                  <div class="audioplayer-tobe skin-wave button-aspect-noir" data-thumb="'{{ \App\Helpers\Helper::format_image($track->image_name) }}'"
                     data-type="audio"
                     data-source="{{ \App\Helpers\Helper::format_track($track->audio_type == 1 ? $track->track_name : $track->audio_link,$track->audio_type) }}"
                     data-options='{
                     "settings_php_handler": "{{ request()->getSchemeAndHttpHost().'/html/inc/php/publisher.php' }}",
                     "skinwave_comments_enable": "on",
                     "skinwave_comments_retrievefromajax": "on",
                     "pcm_data_try_to_generate": "on",
                     "pcm_data_try_to_generate_wait_for_real_pcm": "on",
                     "skinwave_wave_mode_canvas_waves_number": 3,
                     "skinwave_wave_mode_canvas_waves_padding": 1,
                     "skinwave_wave_mode_canvas_reflection_size": 0.25,
                     "design_color_bg": "444444",
                     "design_color_highlight": "aa4444"
                     }'
                     >
                     <!-- options for player in data-options -->
                     <div class="feed-dzsap feed-artist"><a href="{{ route('tracks-by-artist', ['id' => $track->artist_id]) }}">{{$track->artists}}</a></div>
                     <div class="feed-dzsap feed-songname">{{$track->title}}</div>
                  </div>
               </div>
            </div>
            <div class="border-bottom mb-2 pb-2 text-md-end text-center pt-2 pt-md-0">
              <button class="btn btn-sharing" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Add Favorites</button>
              <button class="btn btn-sharing" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Add to Playlist</button>
              <button class="btn btn-sharing" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Download</button>
              <button class="btn btn-sharing" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Share</button>
            </div>
            <!-- / player starts here -->
          @endforeach
    </div>
    <div class="mt-2">
      <div class="ajax-load">
        Loading...
      </div>
      {{-- {!! $playlist_tracks->links() !!} --}}
    </div>


	  <!-- New Collection eded -->	  
  </div>
</main>
<x-tags :tags="$tags"/>
<x-genres :genres="$genres"/>
@endsection
@push('audio-styles')
<link rel="stylesheet" href="{{ asset('audio_player/audioplayer.css')}}">
	
@endpush
@push('audio-scripts')
<script src="{{ asset('audio_player/audioplayer.js')}}"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-176923350-1');
 </script>
@endpush


@push('pagination')

<script type="text/javascript">
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
</script>

@endpush


