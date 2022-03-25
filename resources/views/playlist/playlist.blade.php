<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Get thousand+ lyrics for Nohay, Naat, Mungabat,  Marsiya & Salam from renowned reciters.">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Playlist</title>

	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{ asset('css/base.css')}}">
    <script src="audioplayer/audioplayer.js" type="text/javascript"></script>
	<link rel='stylesheet' type="text/css" href="audioplayer/audioplayer.css"/>
      
	<script>
	 window.dataLayer = window.dataLayer || [];
	 function gtag(){dataLayer.push(arguments);}
	 gtag('js', new Date());
	 gtag('config', 'UA-176923350-1');
	</script>
  </head>

<body>

<header>
	<div class="nav_bar_wraper">
		<div class="container">
	    <nav class="navbar navbar-expand-lg il_navbar" aria-label="Eleventh navbar example">
	      <div class="container-fluid">
	        <div class="il_logo_container">
				<a class="navbar-brand" href="index.html">
					<img src="assets/media/ilyrics_logo.svg" alt="">
				</a>
			</div>
	        <a class="navbar-brand navbar-brand--resp" href="index.html">
				<img style="width:80px;" src="assets/media/ilyrics_logo.svg" alt="">
			</a>
				
	        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
	          <img src="assets/media/menu_icon_humberger2.svg">
	        </button>
	
	        <div class="collapse navbar-collapse" id="navbarsExample09">
	          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
	            <li class="nav-item">
	              <a class="nav-link active" aria-current="page" href="#">Home</a>
	            </li>
	            <li class="nav-item">
	              <a class="nav-link" href="#">Search</a>
	            </li>
	            <li class="nav-item">
	              <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Reciters</a>
	            </li>
	            <li class="nav-item dropdown">
	              <a class="nav-link dropdown-toggle" href="#" id="dropdown09" data-bs-toggle="dropdown" aria-expanded="false">My Account</a>
	              <ul class="dropdown-menu" aria-labelledby="dropdown09">
	                <li><a class="dropdown-item" href="#">Action</a></li>
	                <li><a class="dropdown-item" href="#">Another action</a></li>
	                <li><a class="dropdown-item" href="#">Something else here</a></li>
	              </ul>
	            </li>
	            <li class="nav-item">
	              <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"><img src="assets/media/search.svg"></a>
	            </li>
	          </ul>
	          <div class="mr-0">
		          <button type="button" class="btn btn--primary">Create an Account</button>
	          </div>
	        </div>
	      </div>
	    </nav>
  	</div>
	</div>
</header>

<div class="pagetitle">
	<div class="container">
		
	  <!-- Header  -->
	  <div class="row">
		  <div class="col-auto pb-4 pb-md-0">
		  		<div class="collaction_img" 
                    style="background-image: url('{{ \App\Helpers\Helper::format_image($playlist["playlist_detail"]->image_name,1) }}');"></div>
		  </div>		  
		  <div class="col">
            {{-- {{dd($playlist["playlist_detail"][0]->title)}} --}}
		  	<h2 class="h2__underline" tabindex="0">{{ $playlist["playlist_detail"]->title }}</h2>
		  	<p>Total Tracks : {{ $playlist["playlist_detail"]->count}}</p>
		  </div>		  
	  </div>

	</div>
</div>

<main>
  <div class="container pt-md-5 mb-5 pb-5">
    @foreach ($playlist["playlist_tracks"] as $track)                   
            
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
                     <div class="feed-dzsap feed-artist"><a href="{{ route('tracks-by-id', ['id' => $track->id] ) }}">{{$track->artists}}</a></div>
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

        {{--             
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
        --}}
            
    @endforeach        
            
	  <!-- New Collection eded -->	  
  </div>
</main>


Tags<br>
Genres
{{-- <x-tags :tags="$tags"/>
<x-genres :genres="$genres"/> --}}



<footer>
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-5">
				<a class="mb-3" href="#"><img style="width:140px;" src="assets/media/ilyrics_logo.svg"></a>
				<div class="pt-5 pb-3" style="max-width:400px;">At iLyrics.org, we are devoted to build an islamic lyrics library for faithful believers. We are passionately dedicated in the religious, spiritual, educational or social realms.</div>
				
				<strong >Analytics</strong>
				<div>
				Total Downloads:	743<br>
				Available Collections:	3225<br>
				Collection updated as of:	02/21/2022 11:31:38 PM
				</div>
			</div>
			<div class="col-12 col-md-7">
				<div class="row">
					<div class="col-12 col-md-6">
						<h5 class="pb-4" tabindex="0">Useful links</h5>
						<a class="pb-3 color-black d-block text-decoration-none" href="about-us.php">About Us</a></li>
		                <a class="pb-3 color-black d-block text-decoration-none" href="https://docs.google.com/forms/d/e/1FAIpQLSfYmKg_CrqJE-Vq4Is5Nid2Qat-FAVCqHc689NA1o1MsvPBKA/viewform?vc=0&amp;c=0&amp;w=1&amp;flr=0&amp;usp=mail_form_link" target="_blank">Request to add a reciter</a>
		                <a class="pb-3 color-black d-block text-decoration-none" href="https://docs.google.com/forms/d/e/1FAIpQLSfIKPgKC2vxscmJ0nvPCyJKrb1E-GttOPMNRB4C1p6HUZ3ODw/viewform?usp=sf_link" target="_blank">Request to add a collection</a>
		                <a class="pb-3 color-black d-block text-decoration-none" href="privacy-policy.php">Privacy Policy</a>
		                <a class="pb-3 color-black d-block text-decoration-none" href="accessibility-policy.php">Accessibility Policy</a>
		                <a class="pb-3 color-black d-block text-decoration-none" href="terms-conditions.php">Terms &amp; Conditions</a>
					</div>
					<div class="col-12 col-md-6">
						<h5 class="pb-4" tabindex="0">Contact Us</h5>
						<a class="pb-3 color-black d-block text-decoration-none" href="mailto:support@ilyrics.org">support@ilyrics.org</a>
		                <a href="https://www.facebook.com/iLyricsO/"><img src="assets/media/social_facebook.svg"></a>
		                <a href="https://twitter.com/ILyricsgo"><img src="assets/media/social_icon_twitter.svg"></a>
		                <a href="https://www.instagram.com/ilyricsgo/"><img style="width:32px;" src="assets/media/social_icon_svginstagram.svg"></a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="copyright">
		<div class="container text-center font-size__small">
			<p>Copyright © 2022 Collective Rise LLC. Designed by <a style="text-decoration: underline" href="https://qubitse.com">Qubitse</a>.</p>
		</div>
	</div>
</footer>


<div class="menuoverlay"></div>

<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
<script src="{{ asset('js/bootstrap.bundle.js')}}"></script>
<script src="{{ asset('js/main.js')}}"></script>
<script>
  $(document).on('ready', function() {
  	$('.viewmore_link').click(function(){
	  	$('#Tags .less').fadeToggle();
	  	$(this).text($(this).text() == 'view more' ? 'view less' : 'view more');
  	});
  });
</script>
</body>
</html>
