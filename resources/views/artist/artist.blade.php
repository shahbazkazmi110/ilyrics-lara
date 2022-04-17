
@extends('layout.base')
@section('banner')
<div class="pagetitle">
	<div class="container">
		
	  <!-- Header  -->
	  <div class="row">
		  <div class="col-auto pb-4 pb-md-0">
		  		<div class="collaction_img" style="background-image: url('{{ \App\Helpers\Helper::format_image($artist_detail->image_name, 1) }}');"></div>
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
        {{-- <div id="ag2" class="audiogallery skin-wave auto-init" style="opacity:0; margin-top:30px;"
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
        </div> --}}

        <div id="ap1" class="audioplayer-tobe " style=" "  data-thumb_link="'{{ \App\Helpers\Helper::format_image($track->image_name) }}'" data-scrubbg="waves/scrubbg.png" data-scrubprog="waves/scrubprog.png" data-videoTitle="Audio Video" data-type="audio" data-source="{{ \App\Helpers\Helper::format_track($track->audio_type == 1 ? $track->track_name : $track->audio_link,$track->audio_type) }}">
          <!--  data-sourceogg="sounds/adg3.ogg" http://www.stephaniequinn.com/Music/Commercial%20DEMO%20-%2011.mp3 -->
          <div class="meta-artist">
              <span class="the-artist">Mick JaggerMick JaggerMick JaggerMick Jagger</span><span class="the-name">Revenge</span>
          </div>
          <div class="menu-description">
              <div class="menu-item-thumb-con"><div class="menu-item-thumb" style="background-image: url({{ \App\Helpers\Helper::format_image($track->image_name) }})"></div></div>
              <span class="the-artist">Mick Jagger</span>
              <span class="the-name">Revenge</span>
              <div class="float-right">
                  <a href="#"><span class="button-buy">Buy</span></a>
                  <a href="#"><span class="misc-icon-itunes"></span></a>
                  <a href="#"><span class="misc-icon-soundcloud"></span></a>
                  <a href="#"><span class="misc-icon-youtube"></span></a>
              </div>
          </div>
          <!--<div class="afterplayer"><span style="font-size:21px; margin-top: 10px; display: block; color: #FFFFFF;"><strong>artist - </strong>song</span></div>-->

          <div class="extra-html-in-controls-left"><span class="">ceva</span></div>
          <div class="extra-html-in-controls-right"><a class="btn-zoomsounds" href="#" >DOWNLOAD</a></div>
        </div>
      @endforeach  
    </div>  
    {{-- <div class="mt-2">
      <div class="ajax-load">
        Loading
      </div> --}}
      {!! $artist_tracks->links() !!}
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
<script>
  jQuery(document).ready(function ($) {
      var playerid = 'ag1';
      var settings_ap = {
          disable_volume: 'off'
          ,disable_scrub: 'default'
          ,design_skin: 'skin-wave'
          ,skinwave_dynamicwaves:'off'
          ,skinwave_enableSpectrum:'off'
          ,settings_backup_type:'full'
          ,skinwave_enableReflect:'on'
          ,skinwave_comments_enable:'on'
          ,skinwave_timer_static:'off'
          ,skinwave_comments_links_to:'http://google.com'
          ,disable_player_navigation: 'off'
          ,skinwave_mode: 'normal'
          ,default_volume:'last' // -- number / set the default volume 0-1 or "last" for the last known volume
          ,skinwave_comments_retrievefromajax:'on'
          ,settings_php_handler:'../inc/php/publisher.php'

          ,soundcloud_apikey:"be48604d903aebd628b5bac968ffd14d"//insert api key here https://soundcloud.com/you/apps/
          ,embed_code:"You can enable embed button for your viewers to embed on their site, the code will auto generate. &lt;iframe src=&quot;http://yoursite.com/bridge.php?type=gallery&amp;id=gal1&quot; &gt;&lt;/iframe&gt;"
      };
      dzsag_init('#'+playerid,{
          'transition':'fade'
          ,'cueFirstMedia' : 'off'
          ,'autoplay' : 'on'
          ,'autoplayNext' : 'on'
          ,design_menu_position:'bottom'
          ,'settings_ap':settings_ap
          ,embedded: 'off'
          ,enable_easing: 'on'
          ,design_menu_height: "auto"
          ,design_menu_state: 'open' // -- options are "open" or "closed", this sets the initial state of the menu, even if the initial state is "closed", it can still be opened by a button if you set design_menu_show_player_state_button to "on"
          ,design_menu_show_player_state_button: 'on' // -- show a button that allows to hide or show the menu

      });


//        setTimeout(function(){
//            document.getElementById('ap1').api_destroy();
//        }, 3000);
  });
</script>
@endpush


{{-- @push('pagination')
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

  //   function loadScript(src) {
  //     return new Promise(function(resolve, reject) {
  //       let script = document.createElement('script');
  //       script.src = src;
  //       // script.onload = () => resolve(script);
  //       // script.onerror = () => reject(new Error(`Script load error for ${src}`));
  //       $(script).appendTo("#pagination-data")
  //     });
  // }

  function loadScript(url, callback) {
    var script = document.createElement("script");
    script.type = "text/javascript";
    // IE
    if (script.readyState) {
        script.onreadystatechange = function () {
            if (script.readyState == "loaded" || script.readyState == "complete") {
                script.onreadystatechange = null;
                callback();
            }
        };
    } else { // others
        script.onload = function () {
            callback();
        };
    }
    script.src = url;
    // document.body.appendChild(script);
    $(script).appendTo("#pagination-data");
}
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
            var html = ''; 
            var pageurl = '{{ request()->getSchemeAndHttpHost() }}' ;
            // console.log(data.data);
            // $.each(data.artist_tracks.data, function (key, value) {  
            
            //   var image = pageurl+'/admin/uploads/'+value.image_name ;
            //   var php_handler = "{{ request()->getSchemeAndHttpHost().'/html/inc/php/publisher.php' }}";
            //   var audio =   pageurl +'/admin/uploads/audio/'+ value.track_name; 
            //     html += `<div id="ag2" class="audiogallery skin-wave auto-init" style="opacity:0; margin-top:30px;"
            //       data-options='{
            //       "cueFirstMedia": "on",
            //       "autoplay": "off",
            //       "autoplayNext": "on",
            //       "design_menu_position": "bottom",
            //       "enable_easing": "on",
            //       "playlistTransition": "fade",
            //       "design_menu_height": "200"
            //       }'
            //       >
            //       <!-- options for playlist in data-options -->
            //       <div class="items">
            //           <div class="audioplayer-tobe skin-wave button-aspect-noir" data-thumb="${image}"
            //               data-type="audio"
            //               data-source=""
            //               data-options='{
            //               "settings_php_handler": "${php_handler}",
            //               "skinwave_comments_enable": "on",
            //               "skinwave_comments_retrievefromajax": "on",
            //               "pcm_data_try_to_generate": "on",
            //               "pcm_data_try_to_generate_wait_for_real_pcm": "on",
            //               "skinwave_wave_mode_canvas_waves_number": 3,
            //               "skinwave_wave_mode_canvas_waves_padding": 1,
            //               "skinwave_wave_mode_canvas_reflection_size": 0.25,
            //               "design_color_bg": "444444",
            //               "design_color_highlight": "aa4444"
            //               }'
            //               >
            //               <!-- options for player in data-options -->
            //               <div class="feed-dzsap feed-artist"><a href="/artist/${ value.artist_id }">${value.track_artists}</a></div>
            //               <div class="feed-dzsap feed-songname">${value.title}</div>
            //           </div>
            //       </div>
            //   </div>`;
            // });
	            if(data.html == '' ){
                    lastpage = true;
	                $('.ajax-load').html("No more records found");
	                return;
	            }
	            // $('.ajax-load').hide();
              // console.log(html);
	            $("#pagination-data").append(data.html);


              loadScript("https://ilyrics.org/ilyrics-lara/public/audio_player/audioplayer.js",alert('test'));
              // promise.then(
              //   script => alert(`${script.src} is loaded!`),
              //   error => alert(`Error: ${error.message}`)
              // );
              // promise.then(script => alert('Another handler...'));
                Loading = false;

	        })



	        .fail(function(jqXHR, ajaxOptions, thrownError)
	        {
	              alert('server not responding...');
	        });
	}
</script>
@endpush --}}

