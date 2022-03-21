<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Get thousand+ lyrics for Nohay, Naat, Mungabat,  Marsiya & Salam from renowned reciters.">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Get lyrics for Nohay, Naat, Mungabat,  Marsiya & Salam</title>
	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{ asset('css/base.css')}}">

	<style>
        /* Initially, hide the extra text that
            can be revealed with the button */
        #moreText {
  
            /* Display nothing for the element */
            display: none;
        }

		#tags .less {
			display:  none;
		}
    </style>
  </head>
<body>
<header>
	<div class="nav_bar_wraper">
		<div class="container">
	    <nav class="navbar navbar-expand-lg il_navbar" aria-label="Eleventh navbar example">
	      <div class="container-fluid">
	        <div class="il_logo_container">
				<a class="navbar-brand" href="/">
					<img src="{{ asset('media/ilyrics_logo.svg')}}" alt="">
				</a>
			</div>
	        <a class="navbar-brand navbar-brand--resp" href="/">
				<img style="width:80px;" src="{{ asset('media/ilyrics_logo.svg')}}" alt="">
			</a>
				
	        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
	          <img src="{{ asset('media/menu_icon_humberger2.svg')}}">
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
	              <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"><img src="{{ asset('media/search.svg')}}"></a>
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
	<div class="container">
		<div class="banner">
			<div class="row pt-5">
				<div class="col-12 col-md-6 align-self-center">
					<div>
						<h1 tabindex="0">Recite lyrics that makes a difference in peoples lives</h1>					
						<div class="input-group mb-3 mt-5" style="max-width:500px;">
						  <input type="text" class="form-control form-control--large" placeholder="Type a few words you like to find" aria-label="Recipient's username" aria-describedby="button-addon2">
						  <button class="btn btn--large" type="button" id="button-addon2" style="min-width:80px;"><img src="{{ asset('media/search_white.svg')}}"></button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>

<main>
  <div class="container pt-5 mt-5">
	  
	  <!-- Recommended Playlists -->
	  <div class="row pb-5">
		  <div class="col-12 col-md">
		  	<h2 class="h2__underline" tabindex="0">Recommended Playlists</h2>
		  	<p style="max-width:400px;">In publishing and graphic design, Lorem ipsum is a placeholder text commonly.</p>
		  </div>
		  <div class="col-md-auto col-12 pt-md-5 pt-2">
		  		<button type="button" class="btn btn--ordinary btn--small">View All Playlists</button>
		  </div>
		  
	  </div>
	  
	  <div class="row mb-5 pb-5">
	  	@foreach($popular_playlists as $playlist)
		  	<div class="col-xl-2 col-lg-3 col-md-4 col-6">
				<a href="{{ route('tracks-by-playlist', ['id' => $playlist->id]) }}">				
					<div class="card card--playlist">
						<div class="card--playlist__image" style="background-image: url('https://iLyrics.org/uploads/download_(32).jpg');">
							{{-- <div class="dropdown float-end">
								<a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false">
									<img src="{{ asset('media/dote_dote_dote.svg')}}">
								</a>
								<ul class="dropdown-menu dropdown-menu-end mt-2" aria-labelledby="dropdownMenuButton1">
									<li><a class="dropdown-item" href="#"><img class="mr-2" src="{{ asset('media/file-earmark-plus.svg')}}"> Add to your Playlist</a></li>
									<li><a class="dropdown-item" href="#"><img class="mr-2" src="{{ asset('media/collection-play.svg')}}"> Play All</a></li>
									<li><a class="dropdown-item" href="#"><img class="mr-2" src="{{ asset('media/file-earmark-arrow-down.svg')}}"> Download</a></li>
									<li><a class="dropdown-item" href="#"><img class="mr-2" src="{{ asset('media/share-fill.svg')}}"> Share</a></li>
								</ul>
							</div> --}}
						</div>
						<div class="card--playlist__content">
							{{$playlist->title}}
						</div>
						<div class="card--playlist__tracks">21 Tracks</div>
					</div>
				</a>
		  	</div>
		@endforeach
	  </div>
	  <!-- Recommended Playlists ended -->
	  


	  
	  <!-- New Collection -->
	  <div class="row pb-5">
		  <div class="col-12 col-md">
		  	<h2 class="h2__underline" tabindex="0">New Collection</h2>
		  	<p style="max-width:400px;">In publishing and graphic design, Lorem ipsum is a placeholder text commonly.</p>
		  </div>
		  <div class="col-md-auto col-12 pt-md-5 pt-2">
		  		<button type="button" class="btn btn--ordinary btn--small">view all Lyric</button>
		  </div>
		  
	  </div>
	  
	  <div class="row mb-5 pb-5">
		  <div class="col-md-6 col-12">
			  <div class="card card--layrics">
				  <div class="card--layrics__image" style="background-image: url('https://ilyrics.org/admin/uploads/500x500.jpg');"></div>
				  <div class="card--layrics__content">
					  <h5 class="mb-0 card--layrics__content__title" tabindex="0">Jang e Khandaq</h5>
					  <a data-page="artist" href="artist.php?id=6" class="card--layrics__content__subtitle">Mir Hassan Mir</a>
				  </div>
				  <div class="card--layrics__tracks">04:20</div>
				  <div class="card--layrics__options">
					  <div class="dropdown float-end">
						  <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false">
						   	<img src="{{ asset('media/dote_dote_dote_2.svg')}}">
						  </a>
						  <ul class="dropdown-menu dropdown-menu-end mt-2" aria-labelledby="dropdownMenuButton1">
						    <li><a class="dropdown-item" href="#"><img class="mr-2" src="{{ asset('media/file-earmark-plus.svg')}}"> Add to your Playlist</a></li>
						    <li><a class="dropdown-item" href="#"><img class="mr-2" src="{{ asset('media/collection-play.svg')}}"> Play All</a></li>
						    <li><a class="dropdown-item" href="#"><img class="mr-2" src="{{ asset('media/file-earmark-arrow-down.svg')}}"> Download</a></li>
						    <li><a class="dropdown-item" href="#"><img class="mr-2" src="{{ asset('media/share-fill.svg')}}"> Share</a></li>
						  </ul>
					  </div>
				  </div>
			  </div>
		  </div>
		  
		<!--
		  <div class="col-md-6 col-12">
			  <div class="card card--layrics">
				  <div class="card--layrics__image" style="background-image: url('https://ilyrics.org/admin/uploads/zill.jpg');"></div>
				  <div class="card--layrics__content">
					  <h5 class="mb-0 card--layrics__content__title" tabindex="0">Ali Ya Ali a.s</h5>
					  <a data-page="artist" href="artist.php?id=6" class="card--layrics__content__subtitle">Zill e Raza</a>
				  </div>
				  <div class="card--layrics__tracks">41:20</div>
				  <div class="card--layrics__options">
					  <div class="dropdown float-end">
						  <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false">
						   	<img src="{{ asset('media/dote_dote_dote_2.svg')}}">
						  </a>
						  <ul class="dropdown-menu dropdown-menu-end mt-2" aria-labelledby="dropdownMenuButton1">
						    <li><a class="dropdown-item" href="#"><img class="mr-2" src="{{ asset('media/file-earmark-plus.svg')}}"> Add to your Playlist</a></li>
						    <li><a class="dropdown-item" href="#"><img class="mr-2" src="{{ asset('media/collection-play.svg')}}"> Play All</a></li>
						    <li><a class="dropdown-item" href="#"><img class="mr-2" src="{{ asset('media/file-earmark-arrow-down.svg')}}"> Download</a></li>
						    <li><a class="dropdown-item" href="#"><img class="mr-2" src="{{ asset('media/share-fill.svg')}}"> Share</a></li>
						  </ul>
					  </div>
				  </div>
			  </div>
		  </div>
		  
		  
		  <div class="col-md-6 col-12">
			  <div class="card card--layrics">
				  <div class="card--layrics__image" style="background-image: url('https://ilyrics.org/admin/uploads/images_(3).jpg');"></div>
				  <div class="card--layrics__content">
					  <h5 class="mb-0 card--layrics__content__title" tabindex="0">Ali Ali Ki Sada</h5>
					  <a data-page="artist" href="artist.php?id=6" class="card--layrics__content__subtitle">Ali Hamza</a>
				  </div>
				  <div class="card--layrics__tracks">41:20</div>
				  <div class="card--layrics__options">
					  <div class="dropdown float-end">
						  <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false">
						   	<img src="{{ asset('media/dote_dote_dote_2.svg')}}">
						  </a>
						  <ul class="dropdown-menu dropdown-menu-end mt-2" aria-labelledby="dropdownMenuButton1">
						    <li><a class="dropdown-item" href="#"><img class="mr-2" src="{{ asset('media/file-earmark-plus.svg')}}"> Add to your Playlist</a></li>
						    <li><a class="dropdown-item" href="#"><img class="mr-2" src="{{ asset('media/collection-play.svg')}}"> Play All</a></li>
						    <li><a class="dropdown-item" href="#"><img class="mr-2" src="{{ asset('media/file-earmark-arrow-down.svg')}}"> Download</a></li>
						    <li><a class="dropdown-item" href="#"><img class="mr-2" src="{{ asset('media/share-fill.svg')}}"> Share</a></li>
						  </ul>
					  </div>
				  </div>
			  </div>
		  </div>
		  
		  
		  <div class="col-md-6 col-12">
			  <div class="card card--layrics">
				  <div class="card--layrics__image" style="background-image: url('https://ilyrics.org/admin/uploads/download.jpg');"></div>
				  <div class="card--layrics__content">
					  <h5 class="mb-0 card--layrics__content__title" tabindex="0">Parh Naad E Ali</h5>
					  <a data-page="artist" href="artist.php?id=6" class="card--layrics__content__subtitle">Mesum Abbas</a>
				  </div>
				  <div class="card--layrics__tracks">41:20</div>
				  <div class="card--layrics__options">
					  <div class="dropdown float-end">
						  <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false">
						   	<img src="{{ asset('media/dote_dote_dote_2.svg')}}">
						  </a>
						  <ul class="dropdown-menu dropdown-menu-end mt-2" aria-labelledby="dropdownMenuButton1">
						    <li><a class="dropdown-item" href="#"><img class="mr-2" src="{{ asset('media/file-earmark-plus.svg')}}"> Add to your Playlist</a></li>
						    <li><a class="dropdown-item" href="#"><img class="mr-2" src="{{ asset('media/collection-play.svg')}}"> Play All</a></li>
						    <li><a class="dropdown-item" href="#"><img class="mr-2" src="{{ asset('media/file-earmark-arrow-down.svg')}}"> Download</a></li>
						    <li><a class="dropdown-item" href="#"><img class="mr-2" src="{{ asset('media/share-fill.svg')}}"> Share</a></li>
						  </ul>
					  </div>
				  </div>
			  </div>
		  </div>
		  
		  
		  <div class="col-md-6 col-12">
			  <div class="card card--layrics">
				  <div class="card--layrics__image" style="background-image: url('https://ilyrics.org/admin/uploads/unnamed.jpg');"></div>
				  <div class="card--layrics__content">
					  <h5 class="mb-0 card--layrics__content__title" tabindex="0">Mein Bohat Piyasi Hun</h5>
					  <a data-page="artist" href="artist.php?id=6" class="card--layrics__content__subtitle">Shadman Raza</a>
				  </div>
				  <div class="card--layrics__tracks">41:20</div>
				  <div class="card--layrics__options">
					  <div class="dropdown float-end">
						  <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false">
						   	<img src="{{ asset('media/dote_dote_dote_2.svg')}}">
						  </a>
						  <ul class="dropdown-menu dropdown-menu-end mt-2" aria-labelledby="dropdownMenuButton1">
						    <li><a class="dropdown-item" href="#"><img class="mr-2" src="{{ asset('media/file-earmark-plus.svg')}}"> Add to your Playlist</a></li>
						    <li><a class="dropdown-item" href="#"><img class="mr-2" src="{{ asset('media/collection-play.svg')}}"> Play All</a></li>
						    <li><a class="dropdown-item" href="#"><img class="mr-2" src="{{ asset('media/file-earmark-arrow-down.svg')}}"> Download</a></li>
						    <li><a class="dropdown-item" href="#"><img class="mr-2" src="{{ asset('media/share-fill.svg')}}"> Share</a></li>
						  </ul>
					  </div>
				  </div>
			  </div>
		  </div>
		  
		  
		  <div class="col-md-6 col-12">
			  <div class="card card--layrics">
				  <div class="card--layrics__image" style="background-image: url('https://ilyrics.org/admin/uploads/Untitled3.png');"></div>
				  <div class="card--layrics__content">
					  <h5 class="mb-0 card--layrics__content__title" tabindex="0">Suno Shan Suno</h5>
					  <a data-page="artist" href="artist.php?id=6" class="card--layrics__content__subtitle">Rizwan Zaidi</a>
				  </div>
				  <div class="card--layrics__tracks">41:20</div>
				  <div class="card--layrics__options">
					  <div class="dropdown float-end">
						  <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false">
						   	<img src="{{ asset('media/dote_dote_dote_2.svg')}}">
						  </a>
						  <ul class="dropdown-menu dropdown-menu-end mt-2" aria-labelledby="dropdownMenuButton1">
						    <li><a class="dropdown-item" href="#"><img class="mr-2" src="{{ asset('media/file-earmark-plus.svg')}}"> Add to your Playlist</a></li>
						    <li><a class="dropdown-item" href="#"><img class="mr-2" src="{{ asset('media/collection-play.svg')}}"> Play All</a></li>
						    <li><a class="dropdown-item" href="#"><img class="mr-2" src="{{ asset('media/file-earmark-arrow-down.svg')}}"> Download</a></li>
						    <li><a class="dropdown-item" href="#"><img class="mr-2" src="{{ asset('media/share-fill.svg')}}"> Share</a></li>
						  </ul>
					  </div>
				  </div>
			  </div>
		  </div>
		  
		  <div class="col-md-6 col-12">
			  <div class="card card--layrics">
				  <div class="card--layrics__image" style="background-image: url('https://ilyrics.org/admin/uploads/download_(11).jpg');"></div>
				  <div class="card--layrics__content">
					  <h5 class="mb-0 card--layrics__content__title" tabindex="0">Hum Najaf Agaye</h5>
					  <a data-page="artist" href="artist.php?id=6" class="card--layrics__content__subtitle">Mir Sajjad Mir</a>
				  </div>
				  <div class="card--layrics__tracks">41:20</div>
				  <div class="card--layrics__options">
					  <div class="dropdown float-end">
						  <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false">
						   	<img src="{{ asset('media/dote_dote_dote_2.svg')}}">
						  </a>
						  <ul class="dropdown-menu dropdown-menu-end mt-2" aria-labelledby="dropdownMenuButton1">
						    <li><a class="dropdown-item" href="#"><img class="mr-2" src="{{ asset('media/file-earmark-plus.svg')}}"> Add to your Playlist</a></li>
						    <li><a class="dropdown-item" href="#"><img class="mr-2" src="{{ asset('media/collection-play.svg')}}"> Play All</a></li>
						    <li><a class="dropdown-item" href="#"><img class="mr-2" src="{{ asset('media/file-earmark-arrow-down.svg')}}"> Download</a></li>
						    <li><a class="dropdown-item" href="#"><img class="mr-2" src="{{ asset('media/share-fill.svg')}}"> Share</a></li>
						  </ul>
					  </div>
				  </div>
			  </div>
		  </div>
		  
		  <div class="col-md-6 col-12">
			  <div class="card card--layrics">
				  <div class="card--layrics__image" style="background-image: url('https://ilyrics.org/admin/uploads/download_(11).jpg');"></div>
				  <div class="card--layrics__content">
					  <h5 class="mb-0 card--layrics__content__title" tabindex="0">Hum Najaf Agaye</h5>
					  <a data-page="artist" href="artist.php?id=6" class="card--layrics__content__subtitle">Mir Sajjad Mir</a>
				  </div>
				  <div class="card--layrics__tracks">41:20</div>
				  <div class="card--layrics__options">
					  <div class="dropdown float-end">
						  <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false">
						   	<img src="{{ asset('media/dote_dote_dote_2.svg')}}">
						  </a>
						  <ul class="dropdown-menu dropdown-menu-end mt-2" aria-labelledby="dropdownMenuButton1">
						    <li><a class="dropdown-item" href="#"><img class="mr-2" src="{{ asset('media/file-earmark-plus.svg')}}"> Add to your Playlist</a></li>
						    <li><a class="dropdown-item" href="#"><img class="mr-2" src="{{ asset('media/collection-play.svg')}}"> Play All</a></li>
						    <li><a class="dropdown-item" href="#"><img class="mr-2" src="{{ asset('media/file-earmark-arrow-down.svg')}}"> Download</a></li>
						    <li><a class="dropdown-item" href="#"><img class="mr-2" src="{{ asset('media/share-fill.svg')}}"> Share</a></li>
						  </ul>
					  </div>
				  </div>
			  </div>
		  </div>
		  
		  
		  <div class="col-md-6 col-12">
			  <div class="card card--layrics">
				  <div class="card--layrics__image" style="background-image: url('https://ilyrics.org/admin/uploads/maxresdefault.jpg');"></div>
				  <div class="card--layrics__content">
					  <h5 class="mb-0 card--layrics__content__title" tabindex="0">Madad Ali a.s Ki</h5>
					  <a data-page="artist" href="artist.php?id=6" class="card--layrics__content__subtitle">Shahid Baltistani</a>
				  </div>
				  <div class="card--layrics__tracks">41:20</div>
				  <div class="card--layrics__options">
					  <div class="dropdown float-end">
						  <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false">
						   	<img src="{{ asset('media/dote_dote_dote_2.svg')}}">
						  </a>
						  <ul class="dropdown-menu dropdown-menu-end mt-2" aria-labelledby="dropdownMenuButton1">
						    <li><a class="dropdown-item" href="#"><img class="mr-2" src="{{ asset('media/file-earmark-plus.svg')}}"> Add to your Playlist</a></li>
						    <li><a class="dropdown-item" href="#"><img class="mr-2" src="{{ asset('media/collection-play.svg')}}"> Play All</a></li>
						    <li><a class="dropdown-item" href="#"><img class="mr-2" src="{{ asset('media/file-earmark-arrow-down.svg')}}"> Download</a></li>
						    <li><a class="dropdown-item" href="#"><img class="mr-2" src="{{ asset('media/share-fill.svg')}}"> Share</a></li>
						  </ul>
					  </div>
				  </div>
			  </div>
		  </div>
		  
		  <div class="col-md-6 col-12">
			  <div class="card card--layrics">
				  <div class="card--layrics__image" style="background-image: url('https://ilyrics.org/admin/uploads/images_(16).jpg');"></div>
				  <div class="card--layrics__content">
					  <h5 class="mb-0 card--layrics__content__title" tabindex="0">Mumkin Nahi</h5>
					  <a data-page="artist" href="artist.php?id=6" class="card--layrics__content__subtitle">Dr Amir Rizvi</a>
				  </div>
				  <div class="card--layrics__tracks">41:20</div>
				  <div class="card--layrics__options">
					  <div class="dropdown float-end">
						  <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false">
						   	<img src="{{ asset('media/dote_dote_dote_2.svg')}}">
						  </a>
						  <ul class="dropdown-menu dropdown-menu-end mt-2" aria-labelledby="dropdownMenuButton1">
						    <li><a class="dropdown-item" href="#"><img class="mr-2" src="{{ asset('media/file-earmark-plus.svg')}}"> Add to your Playlist</a></li>
						    <li><a class="dropdown-item" href="#"><img class="mr-2" src="{{ asset('media/collection-play.svg')}}"> Play All</a></li>
						    <li><a class="dropdown-item" href="#"><img class="mr-2" src="{{ asset('media/file-earmark-arrow-down.svg')}}"> Download</a></li>
						    <li><a class="dropdown-item" href="#"><img class="mr-2" src="{{ asset('media/share-fill.svg')}}"> Share</a></li>
						  </ul>
					  </div>
				  </div>
			  </div>
		  </div>
		-->
		  
	  </div>
	  <!-- New Collection eded -->



	<!-- Popular Reciters starts-->
	<div class="row pb-5">
		<div class="col-12 col-md">
			<h2 class="h2__underline" tabindex="0">Popular Reciters</h2>
			<!-- <p style="max-width:400px;">In publishing and graphic design, Lorem ipsum is a placeholder text commonly.</p> -->
		</div>
		<div class="col-md-auto col-12 pt-md-5 pt-2">
			<button type="button" class="btn btn--ordinary btn--small">view all Reciters</button>
		</div>
		  
	</div>
	  
	  <div class="row mb-5 pb-5">
	  	@foreach ($popular_artists as $artist)
		
			<div class="col-xl-2 col-lg-3 col-md-4 col-6">
				<a href="{{ route('tracks-by-artist', ['id' => $artist->id]) }}">
					<div class="card card--playlist">
						<div class="card--playlist__image" style="background-image: url('{{ \App\Helpers\Helper::format_image($artist->image_name) }}');">
							{{-- <div class="dropdown float-end">
								<a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false">
									<img src="{{ asset('media/dote_dote_dote.svg')}}">
								</a>
								<ul class="dropdown-menu dropdown-menu-end mt-2" aria-labelledby="dropdownMenuButton1">
									<li><a class="dropdown-item" href="#"><img class="mr-2" src="{{ asset('media/file-earmark-plus.svg')}}"> Add to your Playlist</a></li>
									<li><a class="dropdown-item" href="#"><img class="mr-2" src="{{ asset('media/collection-play.svg')}}"> Play All</a></li>
									<li><a class="dropdown-item" href="#"><img class="mr-2" src="{{ asset('media/file-earmark-arrow-down.svg')}}"> Download</a></li>
									<li><a class="dropdown-item" href="#"><img class="mr-2" src="{{ asset('media/share-fill.svg')}}"> Share</a></li>
								</ul>
							</div> --}}
						</div>
						<div class="card--playlist__content">
							{{$artist->name}}
						</div>
						<div class="card--playlist__tracks">{{$artist->track_count}}</div>
					</div>
				</a>
			</div>
		@endforeach	
	  </div>
	<!-- Popular Reciters end -->

	  
  </div>
</main>

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
			<button type="button" class="btn btn--ordinary btn--small viewmore_link"  data-toggle="collapse" data-target="#boom">Show More</button>
		</div>
	</div>
</div>
<!-- Tags end -->



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
<footer>
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-5">
				<a class="mb-3" href="#"><img style="width:140px;" src="{{ asset('media/ilyrics_logo.svg')}}"></a>
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
		                <a href="https://www.facebook.com/iLyricsO/"><img src="{{ asset('media/social_facebook.svg')}}"></a>
		                <a href="https://twitter.com/ILyricsgo"><img src="{{ asset('media/social_icon_twitter.svg')}}"></a>
		                <a href="https://www.instagram.com/ilyricsgo/"><img style="width:32px;" src="{{ asset('media/social_icon_svginstagram.svg')}}"></a>
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
	$('.viewmore_link').click(function(){
		$('#tags .less').fadeToggle();
		$(this).text($(this).text() == 'Show More' ? 'Show Less' : 'Show More');
	});
</script>
</body>
</html>
