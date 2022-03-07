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
				<div class="card card--playlist">
					<div class="card--playlist__image" style="background-image: url('https://iLyrics.org/uploads/download_(32).jpg');">
						<div class="dropdown float-end">
							<a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false">
								<img src="{{ asset('media/dote_dote_dote.svg')}}">
							</a>
							<ul class="dropdown-menu dropdown-menu-end mt-2" aria-labelledby="dropdownMenuButton1">
								<li><a class="dropdown-item" href="#"><img class="mr-2" src="{{ asset('media/file-earmark-plus.svg')}}"> Add to your Playlist</a></li>
								<li><a class="dropdown-item" href="#"><img class="mr-2" src="{{ asset('media/collection-play.svg')}}"> Play All</a></li>
								<li><a class="dropdown-item" href="#"><img class="mr-2" src="{{ asset('media/file-earmark-arrow-down.svg')}}"> Download</a></li>
								<li><a class="dropdown-item" href="#"><img class="mr-2" src="{{ asset('media/share-fill.svg')}}"> Share</a></li>
							</ul>
						</div>
					</div>
					<div class="card--playlist__content">
						{{$playlist->title}}
					</div>
					<div class="card--playlist__tracks">21 Tracks</div>
				</div>
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
				<div class="card card--playlist">
					<div class="card--playlist__image" style="background-image: url('https://iLyrics.org/uploads/download_(32).jpg');">
						<div class="dropdown float-end">
							<a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false">
								<img src="{{ asset('media/dote_dote_dote.svg')}}">
							</a>
							<ul class="dropdown-menu dropdown-menu-end mt-2" aria-labelledby="dropdownMenuButton1">
								<li><a class="dropdown-item" href="#"><img class="mr-2" src="{{ asset('media/file-earmark-plus.svg')}}"> Add to your Playlist</a></li>
								<li><a class="dropdown-item" href="#"><img class="mr-2" src="{{ asset('media/collection-play.svg')}}"> Play All</a></li>
								<li><a class="dropdown-item" href="#"><img class="mr-2" src="{{ asset('media/file-earmark-arrow-down.svg')}}"> Download</a></li>
								<li><a class="dropdown-item" href="#"><img class="mr-2" src="{{ asset('media/share-fill.svg')}}"> Share</a></li>
							</ul>
						</div>
					</div>
					<div class="card--playlist__content">
						{{$artist->name}}
					</div>
					<div class="card--playlist__tracks">{{$artist->track_count}}</div>
				</div>
			</div>
		@endforeach	
	  </div>
	<!-- Popular Reciters end -->

	  
  </div>
</main>


<div class="quicklinks">
	<div class="container">
		<h4 class="mb-4" tabindex="0">Tags</h4>
		<div class="row font-size__medium mb-5">
			@foreach ($tags as $tag)
			<div class="col-6 col-lg-3 col-md-4 pb-2">
				<a data-page="tag" data-title="Ahle Bait s.a.w.w" 
				class="text-decoration-none color-black" 
				href="tag.php?id=122">{{$tag->title}}</a>
			</div>


<!-- 
			<div class="col-6 col-lg-3 col-md-4 pb-2"><a data-page="tag" data-title="Al Qudus" class="text-decoration-none color-black" href="tag.php?id=177">Al Qudus</a></div>
			<div class="col-6 col-lg-3 col-md-4 pb-2"><a data-page="tag" data-title="Alam" class="text-decoration-none color-black" href="tag.php?id=124">Alam</a></div>
			<div class="col-6 col-lg-3 col-md-4 pb-2"><a data-page="tag" data-title="Alwidaii" class="text-decoration-none color-black" href="tag.php?id=27">Alwidaii</a></div>
			<div class="col-6 col-lg-3 col-md-4 pb-2"><a data-page="tag" data-title="Amma Fizza" class="text-decoration-none color-black" href="tag.php?id=119">Amma Fizza</a></div>
			<div class="col-6 col-lg-3 col-md-4 pb-2"><a data-page="tag" data-title="Arabic" class="text-decoration-none color-black" href="tag.php?id=134">Arabic</a></div>
			<div class="col-6 col-lg-3 col-md-4 pb-2"><a data-page="tag" data-title="Arbaeen" class="text-decoration-none color-black" href="tag.php?id=28">Arbaeen</a></div>
			<div class="col-6 col-lg-3 col-md-4 pb-2"><a data-page="tag" data-title="Aseeri" class="text-decoration-none color-black" href="tag.php?id=118">Aseeri</a></div>
			<div class="col-6 col-lg-3 col-md-4 pb-2"><a data-page="tag" data-title="Ashaab e Hussain a.s" class="text-decoration-none color-black" href="tag.php?id=146">Ashaab e Hussain a.s</a></div>
			<div class="col-6 col-lg-3 col-md-4 pb-2"><a data-page="tag" data-title="Ashura" class="text-decoration-none color-black" href="tag.php?id=61">Ashura</a></div>
			<div class="col-6 col-lg-3 col-md-4 pb-2"><a data-page="tag" data-title="Asr e Ashur" class="text-decoration-none color-black" href="tag.php?id=108">Asr e Ashur</a></div>
			<div class="col-6 col-lg-3 col-md-4 pb-2"><a data-page="tag" data-title="Aun-o-Muhammad a.s" class="text-decoration-none color-black" href="tag.php?id=25">Aun-o-Muhammad a.s</a></div>
			<div class="col-6 col-lg-3 col-md-4 pb-2"><a data-page="tag" data-title="Ayyam e Fatmiya s.a" class="text-decoration-none color-black" href="tag.php?id=147">Ayyam e Fatmiya s.a</a></div>
			<div class="col-6 col-lg-3 col-md-4 pb-2"><a data-page="tag" data-title="Azadari" class="text-decoration-none color-black" href="tag.php?id=57">Azadari</a></div>
			<div class="col-6 col-lg-3 col-md-4 pb-2"><a data-page="tag" data-title="Bagh e Fidak" class="text-decoration-none color-black" href="tag.php?id=161">Bagh e Fidak</a></div>
			<div class="col-6 col-lg-3 col-md-4 pb-2"><a data-page="tag" data-title="Balti" class="text-decoration-none color-black" href="tag.php?id=172" style="display: inline-block;">Balti</a></div>
			<div class="col-6 col-lg-3 col-md-4 pb-2"><a data-page="tag" data-title="Bangali" class="text-decoration-none color-black" href="tag.php?id=173" style="display: inline-block;">Bangali</a></div>
			<div class="col-6 col-lg-3 col-md-4 pb-2"><a data-page="tag" data-title="Bazaar" class="text-decoration-none color-black" href="tag.php?id=125" style="display: inline-block;">Bazaar</a></div>
			<div class="col-6 col-lg-3 col-md-4 pb-2"><a data-page="tag" data-title="Bibi Fatima s.a" class="text-decoration-none color-black" href="tag.php?id=30" style="display: inline-block;">Bibi Fatima s.a</a></div>
			<div class="col-6 col-lg-3 col-md-4 pb-2"><a data-page="tag" data-title="Bibi Kulsoom s.a" class="text-decoration-none color-black" href="tag.php?id=151" style="display: inline-block;">Bibi Kulsoom s.a</a></div>
			<div class="col-6 col-lg-3 col-md-4 pb-2"><a data-page="tag" data-title="Bibi Sakina s.a" class="text-decoration-none color-black" href="tag.php?id=31" style="display: inline-block;">Bibi Sakina s.a</a></div>
			<div class="col-6 col-lg-3 col-md-4 pb-2"><a data-page="tag" data-title="Bibi Sughra s.a" class="text-decoration-none color-black" href="tag.php?id=32" style="display: inline-block;">Bibi Sughra s.a</a></div>
			<div class="col-6 col-lg-3 col-md-4 pb-2"><a data-page="tag" data-title="Bibi Zainab s.a" class="text-decoration-none color-black" href="tag.php?id=33" style="display: inline-block;">Bibi Zainab s.a</a></div>
			<div class="col-6 col-lg-3 col-md-4 pb-2"><a data-page="tag" data-title="Chaand Raat Moharram" class="text-decoration-none color-black" href="tag.php?id=98" style="display: inline-block;">Chaand Raat Moharram</a></div>
			<div class="col-6 col-lg-3 col-md-4 pb-2"><a data-page="tag" data-title="Chand raat" class="text-decoration-none color-black" href="tag.php?id=130" style="display: inline-block;">Chand raat</a></div>
			<div class="col-6 col-lg-3 col-md-4 pb-2"><a data-page="tag" data-title="Darbar e Kufa" class="text-decoration-none color-black" href="tag.php?id=109" style="display: inline-block;">Darbar e Kufa</a></div>
			<div class="col-6 col-lg-3 col-md-4 pb-2"><a data-page="tag" data-title="Darbar-e-Sham" class="text-decoration-none color-black" href="tag.php?id=34" style="display: inline-block;">Darbar-e-Sham</a></div>
			<div class="col-6 col-lg-3 col-md-4 pb-2"><a data-page="tag" data-title="Dua" class="text-decoration-none color-black" href="tag.php?id=157" style="display: inline-block;">Dua</a></div>
			<div class="col-6 col-lg-3 col-md-4 pb-2"><a data-page="tag" data-title="Dua e Kumail" class="text-decoration-none color-black" href="tag.php?id=117" style="display: inline-block;">Dua e Kumail</a></div>
			<div class="col-6 col-lg-3 col-md-4 pb-2"><a data-page="tag" data-title="Eid e Ghadeer" class="text-decoration-none color-black" href="tag.php?id=155" style="display: inline-block;">Eid e Ghadeer</a></div>
			<div class="col-6 col-lg-3 col-md-4 pb-2"><a data-page="tag" data-title="Eid e Mubahila" class="text-decoration-none color-black" href="tag.php?id=154" style="display: inline-block;">Eid e Mubahila</a></div>
			<div class="col-6 col-lg-3 col-md-4 pb-2"><a data-page="tag" data-title="Eid e Zahra" class="text-decoration-none color-black" href="tag.php?id=179" style="display: inline-block;">Eid e Zahra</a></div>
			<div class="col-6 col-lg-3 col-md-4 pb-2"><a data-page="tag" data-title="English" class="text-decoration-none color-black" href="tag.php?id=12" style="display: inline-block;">English</a></div>
			<div class="col-6 col-lg-3 col-md-4 pb-2"><a data-page="tag" data-title="Farsi" class="text-decoration-none color-black" href="tag.php?id=132" style="display: inline-block;">Farsi</a></div>
			<div class="col-6 col-lg-3 col-md-4 pb-2"><a data-page="tag" data-title="Farzand e Muslim Bin Aqeel" class="text-decoration-none color-black" href="tag.php?id=99" style="display: inline-block;">Farzand e Muslim Bin Aqeel</a></div>
			<div class="col-6 col-lg-3 col-md-4 pb-2"><a data-page="tag" data-title="Farzandane Muslim" class="text-decoration-none color-black" href="tag.php?id=35" style="display: inline-block;">Farzandane Muslim</a></div>
			<div class="col-6 col-lg-3 col-md-4 pb-2"><a data-page="tag" data-title="Gujrati" class="text-decoration-none color-black" href="tag.php?id=175" style="display: inline-block;">Gujrati</a></div>
			<div class="col-6 col-lg-3 col-md-4 pb-2"><a data-page="tag" data-title="Hamd" class="text-decoration-none color-black" href="tag.php?id=162" style="display: inline-block;">Hamd</a></div>
			<div class="col-6 col-lg-3 col-md-4 pb-2"><a data-page="tag" data-title="Hazrat Muslim bin Aqeel" class="text-decoration-none color-black" href="tag.php?id=91" style="display: inline-block;">Hazrat Muslim bin Aqeel</a></div>
			<div class="col-6 col-lg-3 col-md-4 pb-2"><a data-page="tag" data-title="Hazrath Abbas a.s" class="text-decoration-none color-black" href="tag.php?id=36" style="display: inline-block;">Hazrath Abbas a.s</a></div>
			<div class="col-6 col-lg-3 col-md-4 pb-2"><a data-page="tag" data-title="Hazrath Abu Talib a.s" class="text-decoration-none color-black" href="tag.php?id=127" style="display: inline-block;">Hazrath Abu Talib a.s</a></div>
			<div class="col-6 col-lg-3 col-md-4 pb-2"><a data-page="tag" data-title="Hazrath Ali Akbar a.s" class="text-decoration-none color-black" href="tag.php?id=38" style="display: inline-block;">Hazrath Ali Akbar a.s</a></div>
			<div class="col-6 col-lg-3 col-md-4 pb-2"><a data-page="tag" data-title="Hazrath Ali Asghar a.s" class="text-decoration-none color-black" href="tag.php?id=39" style="display: inline-block;">Hazrath Ali Asghar a.s</a></div>
			<div class="col-6 col-lg-3 col-md-4 pb-2"><a data-page="tag" data-title="Hazrath Qasim a.s" class="text-decoration-none color-black" href="tag.php?id=37" style="display: inline-block;">Hazrath Qasim a.s</a></div>
			<div class="col-6 col-lg-3 col-md-4 pb-2"><a data-page="tag" data-title="Imam Ali a.s" class="text-decoration-none color-black" href="tag.php?id=40" style="display: inline-block;">Imam Ali a.s</a></div>
			<div class="col-6 col-lg-3 col-md-4 pb-2"><a data-page="tag" data-title="Imam Ali Raza a.s" class="text-decoration-none color-black" href="tag.php?id=41" style="display: inline-block;">Imam Ali Raza a.s</a></div>
			<div class="col-6 col-lg-3 col-md-4 pb-2"><a data-page="tag" data-title="Imam Baqir a.s" class="text-decoration-none color-black" href="tag.php?id=148" style="display: inline-block;">Imam Baqir a.s</a></div>
			<div class="col-6 col-lg-3 col-md-4 pb-2"><a data-page="tag" data-title="Imam e Jaffar Sadiq a.s" class="text-decoration-none color-black" href="tag.php?id=152" style="display: inline-block;">Imam e Jaffar Sadiq a.s</a></div>
			<div class="col-6 col-lg-3 col-md-4 pb-2"><a data-page="tag" data-title="Imam Hassan a.s" class="text-decoration-none color-black" href="tag.php?id=42" style="display: inline-block;">Imam Hassan a.s</a></div>
			<div class="col-6 col-lg-3 col-md-4 pb-2"><a data-page="tag" data-title="Imam Hassan Askari a.s" class="text-decoration-none color-black" href="tag.php?id=48" style="display: inline-block;">Imam Hassan Askari a.s</a></div>
			<div class="col-6 col-lg-3 col-md-4 pb-2"><a data-page="tag" data-title="Imam Hussain a.s" class="text-decoration-none color-black" href="tag.php?id=45" style="display: inline-block;">Imam Hussain a.s</a></div>
			<div class="col-6 col-lg-3 col-md-4 pb-2"><a data-page="tag" data-title="Imam Musa-e-Kazim a.s" class="text-decoration-none color-black" href="tag.php?id=47" style="display: inline-block;">Imam Musa-e-Kazim a.s</a></div>
			<div class="col-6 col-lg-3 col-md-4 pb-2"><a data-page="tag" data-title="Imam Musa-e-Kazim a.s" class="text-decoration-none color-black" href="tag.php?id=74" style="display: inline-block;">Imam Musa-e-Kazim a.s</a></div>
			<div class="col-6 col-lg-3 col-md-4 pb-2"><a data-page="tag" data-title="Imam Zainul Abideen a.s" class="text-decoration-none color-black" href="tag.php?id=46" style="display: inline-block;">Imam Zainul Abideen a.s</a></div>
			<div class="col-6 col-lg-3 col-md-4 pb-2"><a data-page="tag" data-title="Imam-e-Zamana a.s" class="text-decoration-none color-black" href="tag.php?id=49" style="display: inline-block;">Imam-e-Zamana a.s</a></div>
			<div class="col-6 col-lg-3 col-md-4 pb-2"><a data-page="tag" data-title="Inqalaab" class="text-decoration-none color-black" href="tag.php?id=160" style="display: inline-block;">Inqalaab</a></div>
			<div class="col-6 col-lg-3 col-md-4 pb-2"><a data-page="tag" data-title="Janab Abu Talib" class="text-decoration-none color-black" href="tag.php?id=50" style="display: inline-block;">Janab Abu Talib</a></div>
			<div class="col-6 col-lg-3 col-md-4 pb-2"><a data-page="tag" data-title="Janab e Jabir" class="text-decoration-none color-black" href="tag.php?id=121" style="display: inline-block;">Janab e Jabir</a></div>
			<div class="col-6 col-lg-3 col-md-4 pb-2"><a data-page="tag" data-title="Janab e Mukhtar" class="text-decoration-none color-black" href="tag.php?id=171" style="display: inline-block;">Janab e Mukhtar</a></div>
			<div class="col-6 col-lg-3 col-md-4 pb-2"><a data-page="tag" data-title="Janab e Muslim Bin Aqeel" class="text-decoration-none color-black" href="tag.php?id=144" style="display: inline-block;">Janab e Muslim Bin Aqeel</a></div>
			<div class="col-6 col-lg-3 col-md-4 pb-2"><a data-page="tag" data-title="Janab e Qambar" class="text-decoration-none color-black" href="tag.php?id=170" style="display: inline-block;">Janab e Qambar</a></div>
			<div class="col-6 col-lg-3 col-md-4 pb-2"><a data-page="tag" data-title="Janab-e-Hur" class="text-decoration-none color-black" href="tag.php?id=51" style="display: inline-block;">Janab-e-Hur</a></div>
			<div class="col-6 col-lg-3 col-md-4 pb-2"><a data-page="tag" data-title="Janabe Habib" class="text-decoration-none color-black" href="tag.php?id=96" style="display: inline-block;">Janabe Habib</a></div>
			<div class="col-6 col-lg-3 col-md-4 pb-2"><a data-page="tag" data-title="Janabe Qasim" class="text-decoration-none color-black" href="tag.php?id=114" style="display: inline-block;">Janabe Qasim</a></div>
			<div class="col-6 col-lg-3 col-md-4 pb-2"><a data-page="tag" data-title="Jannat Tul Baqee" class="text-decoration-none color-black" href="tag.php?id=156" style="display: inline-block;">Jannat Tul Baqee</a></div>
			<div class="col-6 col-lg-3 col-md-4 pb-2"><a data-page="tag" data-title="Jibrael a.s" class="text-decoration-none color-black" href="tag.php?id=138" style="display: inline-block;">Jibrael a.s</a></div>
			<div class="col-6 col-lg-3 col-md-4 pb-2"><a data-page="tag" data-title="Kabba" class="text-decoration-none color-black" href="tag.php?id=93" style="display: inline-block;">Kabba</a></div>
			<div class="col-6 col-lg-3 col-md-4 pb-2"><a data-page="tag" data-title="Kalam" class="text-decoration-none color-black" href="tag.php?id=166" style="display: inline-block;">Kalam</a></div>
			<div class="col-6 col-lg-3 col-md-4 pb-2"><a data-page="tag" data-title="Kalam e Iqbal" class="text-decoration-none color-black" href="tag.php?id=164" style="display: inline-block;">Kalam e Iqbal</a></div>
			<div class="col-6 col-lg-3 col-md-4 pb-2"><a data-page="tag" data-title="Karbala" class="text-decoration-none color-black" href="tag.php?id=53" style="display: inline-block;">Karbala</a></div>
			<div class="col-6 col-lg-3 col-md-4 pb-2"><a data-page="tag" data-title="Khaymee" class="text-decoration-none color-black" href="tag.php?id=131" style="display: inline-block;">Khaymee</a></div>
			<div class="col-6 col-lg-3 col-md-4 pb-2"><a data-page="tag" data-title="Kufa" class="text-decoration-none color-black" href="tag.php?id=90" style="display: inline-block;">Kufa</a></div>
			<div class="col-6 col-lg-3 col-md-4 pb-2"><a data-page="tag" data-title="Laal Shehbaz Qalandar" class="text-decoration-none color-black" href="tag.php?id=153" style="display: inline-block;">Laal Shehbaz Qalandar</a></div>
			<div class="col-6 col-lg-3 col-md-4 pb-2"><a data-page="tag" data-title="Maa" class="text-decoration-none color-black" href="tag.php?id=159" style="display: inline-block;">Maa</a></div>
			<div class="col-6 col-lg-3 col-md-4 pb-2"><a data-page="tag" data-title="Masooma e Qum Fatima s.a" class="text-decoration-none color-black" href="tag.php?id=139" style="display: inline-block;">Masooma e Qum Fatima s.a</a></div>
			<div class="col-6 col-lg-3 col-md-4 pb-2"><a data-page="tag" data-title="Matam" class="text-decoration-none color-black" href="tag.php?id=102" style="display: inline-block;">Matam</a></div>
			<div class="col-6 col-lg-3 col-md-4 pb-2"><a data-page="tag" data-title="Medina" class="text-decoration-none color-black" href="tag.php?id=54" style="display: inline-block;">Medina</a></div>
			<div class="col-6 col-lg-3 col-md-4 pb-2"><a data-page="tag" data-title="Moharram" class="text-decoration-none color-black" href="tag.php?id=24" style="display: inline-block;">Moharram</a></div>
			<div class="col-6 col-lg-3 col-md-4 pb-2"><a data-page="tag" data-title="Muhammad Ibn e Abbas" class="text-decoration-none color-black" href="tag.php?id=149" style="display: inline-block;">Muhammad Ibn e Abbas</a></div>
			<div class="col-6 col-lg-3 col-md-4 pb-2"><a data-page="tag" data-title="Muhammad Mustafa s.a.w.w" class="text-decoration-none color-black" href="tag.php?id=52" style="display: inline-block;">Muhammad Mustafa s.a.w.w</a></div>
			<div class="col-6 col-lg-3 col-md-4 pb-2"><a data-page="tag" data-title="Nehar e Furat" class="text-decoration-none color-black" href="tag.php?id=167" style="display: inline-block;">Nehar e Furat</a></div>
			<div class="col-6 col-lg-3 col-md-4 pb-2"><a data-page="tag" data-title="Pashto" class="text-decoration-none color-black" href="tag.php?id=141" style="display: inline-block;">Pashto</a></div>
			<div class="col-6 col-lg-3 col-md-4 pb-2"><a data-page="tag" data-title="Punjabi" class="text-decoration-none color-black" href="tag.php?id=133" style="display: inline-block;">Punjabi</a></div>
			<div class="col-6 col-lg-3 col-md-4 pb-2"><a data-page="tag" data-title="Pursa" class="text-decoration-none color-black" href="tag.php?id=113" style="display: inline-block;">Pursa</a></div>
			<div class="col-6 col-lg-3 col-md-4 pb-2"><a data-page="tag" data-title="Pyaas" class="text-decoration-none color-black" href="tag.php?id=58" style="display: inline-block;">Pyaas</a></div>
			<div class="col-6 col-lg-3 col-md-4 pb-2"><a data-page="tag" data-title="Qaidkhaana" class="text-decoration-none color-black" href="tag.php?id=105" style="display: inline-block;">Qaidkhaana</a></div>
			<div class="col-6 col-lg-3 col-md-4 pb-2"><a data-page="tag" data-title="Rahib" class="text-decoration-none color-black" href="tag.php?id=120" style="display: inline-block;">Rahib</a></div>
			<div class="col-6 col-lg-3 col-md-4 pb-2"><a data-page="tag" data-title="Rajab" class="text-decoration-none color-black" href="tag.php?id=128" style="display: inline-block;">Rajab</a></div>
			<div class="col-6 col-lg-3 col-md-4 pb-2"><a data-page="tag" data-title="Ramzan" class="text-decoration-none color-black" href="tag.php?id=111" style="display: inline-block;">Ramzan</a></div>
			<div class="col-6 col-lg-3 col-md-4 pb-2"><a data-page="tag" data-title="Rehaai" class="text-decoration-none color-black" href="tag.php?id=60" style="display: inline-block;">Rehaai</a></div>
			<div class="col-6 col-lg-3 col-md-4 pb-2"><a data-page="tag" data-title="Roza e Imam Hussain a.s" class="text-decoration-none color-black" href="tag.php?id=137" style="display: inline-block;">Roza e Imam Hussain a.s</a></div>
			<div class="col-6 col-lg-3 col-md-4 pb-2"><a data-page="tag" data-title="Sabeel" class="text-decoration-none color-black" href="tag.php?id=142" style="display: inline-block;">Sabeel</a></div>
			<div class="col-6 col-lg-3 col-md-4 pb-2"><a data-page="tag" data-title="Safar e Karbala" class="text-decoration-none color-black" href="tag.php?id=178" style="display: inline-block;">Safar e Karbala</a></div>
			<div class="col-6 col-lg-3 col-md-4 pb-2"><a data-page="tag" data-title="Saqqai" class="text-decoration-none color-black" href="tag.php?id=100" style="display: inline-block;">Saqqai</a></div>
			<div class="col-6 col-lg-3 col-md-4 pb-2"><a data-page="tag" data-title="Saraiki" class="text-decoration-none color-black" href="tag.php?id=169" style="display: inline-block;">Saraiki</a></div>
			<div class="col-6 col-lg-3 col-md-4 pb-2"><a data-page="tag" data-title="Shaam" class="text-decoration-none color-black" href="tag.php?id=55" style="display: inline-block;">Shaam</a></div>
			<div class="col-6 col-lg-3 col-md-4 pb-2"><a data-page="tag" data-title="Shaam-e-Ghariban" class="text-decoration-none color-black" href="tag.php?id=56" style="display: inline-block;">Shaam-e-Ghariban</a></div>
			<div class="col-6 col-lg-3 col-md-4 pb-2"><a data-page="tag" data-title="Shaban" class="text-decoration-none color-black" href="tag.php?id=158" style="display: inline-block;">Shaban</a></div>
			<div class="col-6 col-lg-3 col-md-4 pb-2"><a data-page="tag" data-title="Sindhi" class="text-decoration-none color-black" href="tag.php?id=129" style="display: inline-block;">Sindhi</a></div>
			<div class="col-6 col-lg-3 col-md-4 pb-2"><a data-page="tag" data-title="Ummul Baneen" class="text-decoration-none color-black" href="tag.php?id=176" style="display: inline-block;">Ummul Baneen</a></div>
			<div class="col-6 col-lg-3 col-md-4 pb-2"><a data-page="tag" data-title="Waseela" class="text-decoration-none color-black" href="tag.php?id=123" style="display: inline-block;">Waseela</a></div>
			<div class="col-6 col-lg-3 col-md-4 pb-2"><a data-page="tag" data-title="Wehab e Kalbi" class="text-decoration-none color-black" href="tag.php?id=126" style="display: inline-block;">Wehab e Kalbi</a></div>
			<div class="col-6 col-lg-3 col-md-4 pb-2"><a data-page="tag" data-title="Zafar e Jinn" class="text-decoration-none color-black" href="tag.php?id=107" style="display: inline-block;">Zafar e Jinn</a></div>
			<div class="col-6 col-lg-3 col-md-4 pb-2"><a data-page="tag" data-title="Zawar e Hussain a.s" class="text-decoration-none color-black" href="tag.php?id=143" style="display: inline-block;">Zawar e Hussain a.s</a></div>
			<div class="col-6 col-lg-3 col-md-4 pb-2"><a data-page="tag" data-title="Zindan" class="text-decoration-none color-black" href="tag.php?id=110" style="display: inline-block;">Zindan</a></div>
			<div class="col-6 col-lg-3 col-md-4 pb-2"><a data-page="tag" data-title="Zuljana" class="text-decoration-none color-black" href="tag.php?id=87" style="display: inline-block;">Zuljana</a></div> -->

			@endforeach
		</div>
	</div>
</div>




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

</script>
</body>
</html>
