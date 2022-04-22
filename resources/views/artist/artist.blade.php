
@extends('layout.base')
@section('banner')
<div class="pagetitle">
	<div class="container">
		
	  <!-- Header  -->
	  <div class="row">
		  <div class="col-auto pb-4 pb-md-0">
		  		<div class="collaction_img" style="background-image: url('{{ \App\Helpers\Helper::format_image($artist_detail->image_name, 0) }}');"></div>
		  </div>		  
		  <div class="col">
		  	<h2 class="h2__underline" tabindex="0">{{ $artist_detail->name }}</h2>
		  	<p>Number of Collections : {{ $artist_detail->track_count }}</p>
		  </div>		  
	  </div>

	</div>
</div>
@endsection
    
@section('content')

<main>
  <div  class="container pt-md-5 mb-5 pb-5"> 
    <div id="pagination-data">
      @foreach ($artist_tracks as $track)
        <div id="ag2" class="audiogallery skin-wave auto-init" style="opacity:0; margin-top:30px;" data-options='{"cueFirstMedia": "on","autoplay": "off","autoplayNext": "on","design_menu_position": "bottom","enable_easing": "on","playlistTransition": "fade","design_menu_height": "200"}'>
          <div class="items">
            <div class="audioplayer-tobe skin-wave button-aspect-noir" data-thumb="'{{ \App\Helpers\Helper::format_image($track->image_name) }}'"
                data-type="audio"
                data-source="{{ \App\Helpers\Helper::format_track($track->audio_type == 1 ? $track->track_name : $track->audio_link,$track->audio_type) }}"
                data-options='{
                "settings_php_handler": "/ilyrics-lara/public/audioplayer/inc/php/publisher.php",
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
                <div class="meta-artist">
                  <a href="{{ route('tracks-by-artist', ['id' => $track->artist_id]) }}"><span class="the-artist">{{$track->track_artists}}</span></a>
                  <a href="{{ route('tracks-by-id', ['id' => $track->id]) }}"><span class="the-name">{{$track->title}}</span></a>
              </div>
            </div>
          </div>
        </div>
        <div class="border-bottom mb-2 pb-2 text-md-end text-center pt-2 pt-md-0">
          <button class="btn btn-sharing" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Add Favorites</button>
          <button class="btn btn-sharing" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Add to Playlist</button>
          <button class="btn btn-sharing" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Download</button>
          <button class="btn btn-sharing" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Share</button>
        </div>
      @endforeach  
    </div>  
    <div class="mt-2">
      <div class="ajax-load">
        <div class="loader spinner-border text-success" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
        <div class="no-record d-none">
            No More Records Found
        </div>
      </div>

      {{-- {!! $artist_tracks->links() !!} --}}
    </div>               
  </div>

</main>
<x-tags :tags="$tags"/>
<x-genres :genres="$genres"/>
@endsection

@push('audio-styles')
<link rel="stylesheet" href="{{ asset('audioplayer/audioplayer/audioplayer.css')}}">
@endpush
@push('audio-scripts')
<script type="text/javascript" src="{{ asset('audioplayer/audioplayer/audioplayer.js')}}"></script>
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

    $('.loader').hide();
    $('.no-record').hide();

  function renderTracks(track_data){
    var html = ''; 
    var pageurl = '{{ request()->getSchemeAndHttpHost() }}' ;
    $.each(track_data, function (key, value) {  
      var image = pageurl+'/admin/uploads/'+value.image_name ;
      var php_handler = "{{ request()->getSchemeAndHttpHost().'/html/inc/php/publisher.php' }}";
      var audio =   pageurl +'/admin/uploads/audio/'+ value.track_name; 
      html += `<div id="ag2" class="audiogallery skin-wave auto-init" style="opacity:0; margin-top:30px;" data-options='{"cueFirstMedia": "on","autoplay": "off","autoplayNext": "on","design_menu_position": "bottom","enable_easing": "on","playlistTransition": "fade","design_menu_height": "200"}'>
        <div class="items">
          <div class="audioplayer-tobe skin-wave button-aspect-noir" data-thumb="${image}"
              data-type="audio"
              data-source="${audio}"
              data-options='{
              "settings_php_handler": "/ilyrics-lara/public/audioplayer/inc/php/publisher.php",
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
              <div class="meta-artist">
                <a href="/reciter/${ value.artist_id }"><span class="the-artist">${value.track_artists}</span></a>
                <a href="/track/${ value.id }"><span class="the-name">${value.title}</span></a>
            </div>
          </div>
        </div>
      </div>
      <div class="border-bottom mb-2 pb-2 text-md-end text-center pt-2 pt-md-0">
        <button class="btn btn-sharing" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Add Favorites</button>
        <button class="btn btn-sharing" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Add to Playlist</button>
        <button class="btn btn-sharing" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Download</button>
        <button class="btn btn-sharing" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Share</button>
      </div>`;

      var payPauseBtn = $('<span>', { class: 'play-pause-btn paused', style: 'cursor:pointer' });
      // playPauseBtnClickEvent(payPauseBtn, payPauseBtn, value);

    });

    $("#pagination-data").append(html);
    var script=document.createElement('script');
    script.type='text/javascript';
    script.src="/ilyrics-lara/public/audioplayer/audioplayer/audioplayer.js";
    $(script).appendTo('#pagination-data');
  }

  var songPlayed = [];
	function loadMoreData(page){
	  $.ajax({
            url: '?page=' + page,
            type: "get",
            beforeSend: function()
            {
              $('.loader').show();
              Loading = true;
            }
	        })
	        .done(function(data)
	        {
            if (data.artist_tracks.data === undefined || data.artist_tracks.data.length == 0) {
              $('.no-records').show();
            }
            else{
              renderTracks(data.artist_tracks.data);
              $('.loader').hide();
            }

            Loading = false;
	        })
          .fail(function(jqXHR, ajaxOptions, thrownError)
	        {
	          alert('server not responding...');
            Loading = false;
	        });
	}
</script>
@endpush

