
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
                  <div class="audioplayer-tobe skin-wave button-aspect-noir" data-thumb="https://ilyrics.org/admin//uploads/3cayipwe6xc0wkgw.jpg"
                     data-type="audio"
                     data-source="https://iLyrics.org/admin/uploads/audio//Wato_Izzo_Mantasha.mp3"
                     data-options='{
                     "settings_php_handler": "inc/php/publisher.php",
                     "skinwave_comments_enable": "on",
                     "skinwave_comments_retrievefromajax": "on",
                     "pcm_data_try_to_generate": "on",
                     "pcm_data_try_to_generate_wait_for_real_pcm": "on",
                     "skinwave_wave_mode_canvas_waves_number": 3,
                     "skinwave_wave_mode_canvas_waves_padding": 1,
                     "skinwave_wave_mode_canvas_reflection_size": 0.25,
                     "design_color_bg": "444444",
                     "design_color_highlight": "aa4444"
                     }'>
                     <!-- options for player in data-options -->
                     <div class="feed-dzsap feed-artist"><a href="https://ilyrics.org/artist.php?id=16">Nadeem Sarwar</a></div>
                     <div class="feed-dzsap feed-songname">Wato Izzo Mantasha</div>
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
            
            <!-- player starts here -->
            <div id="ag3" class="audiogallery skin-wave auto-init" style="opacity:0; margin-top:30px;"
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
                  <div class="audioplayer-tobe skin-wave button-aspect-noir" data-thumb="https://ilyrics.org/admin//uploads/mby6m80fgpcc8goo.jpeg"
                     data-type="audio"
                     data-source="https://iLyrics.org/admin/uploads/audio//Aik_Shab_Khuwab_Mein_Jab_Main_Nay_Madina_Dekha.mp3"
                     data-options='{
                     "settings_php_handler": "inc/php/publisher.php",
                     "skinwave_comments_enable": "on",
                     "skinwave_comments_retrievefromajax": "on",
                     "pcm_data_try_to_generate": "on",
                     "pcm_data_try_to_generate_wait_for_real_pcm": "on",
                     "skinwave_wave_mode_canvas_waves_number": 3,
                     "skinwave_wave_mode_canvas_waves_padding": 1,
                     "skinwave_wave_mode_canvas_reflection_size": 0.25,
                     "design_color_bg": "444444",
                     "design_color_highlight": "aa4444"
                     }'>
                     <!-- options for player in data-options -->
                     <div class="feed-dzsap feed-artist"><a href="https://ilyrics.org/artist.php?id=13">Farhan Ali Waris</a></div>
                     <div class="feed-dzsap feed-songname">Mustafa Ki Nokri</div>
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
            
            
            <!-- player starts here -->
            <div id="ag4" class="audiogallery skin-wave auto-init" style="opacity:0; margin-top:30px;"
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
                  <div class="audioplayer-tobe skin-wave button-aspect-noir" data-thumb="https://ilyrics.org/admin//uploads/500x500.jpg"
                     data-type="audio"
                     data-source="https://iLyrics.org/admin/uploads/audio//Hay_Ishq_e_Mohammad_PBUH.mp3"
                     data-options='{
                     "settings_php_handler": "inc/php/publisher.php",
                     "skinwave_comments_enable": "on",
                     "skinwave_comments_retrievefromajax": "on",
                     "pcm_data_try_to_generate": "on",
                     "pcm_data_try_to_generate_wait_for_real_pcm": "on",
                     "skinwave_wave_mode_canvas_waves_number": 3,
                     "skinwave_wave_mode_canvas_waves_padding": 1,
                     "skinwave_wave_mode_canvas_reflection_size": 0.25,
                     "design_color_bg": "444444",
                     "design_color_highlight": "aa4444"
                     }'>
                     <!-- options for player in data-options -->
                     <div class="feed-dzsap feed-artist"><a href="https://ilyrics.org/artist.php?id=6">Hay Ishq-e-Mohammad PBUH</a></div>
                     <div class="feed-dzsap feed-songname">Hay Ishq-e-Mohammad PBUH</div>
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
	  <!-- New Collection eded -->	  
  </div>
</main>
<x-tags :tags="$tags"/>
<x-genres :genres="$genres"/>
@endsection
@push('audio-styles')
<link rel="stylesheet" href="{{ asset('css/audioplayer/audioplayer.css')}}">
	
@endpush
@push('audio-scripts')
<script src="{{ asset('js/audioplayer/audioplayer.js')}}"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-176923350-1');
 </script>
@endpush
