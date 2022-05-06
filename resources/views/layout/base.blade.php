<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
	<meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="author" content="Get thousand+ lyrics for Nohay, Naat, Mungabat,  Marsiya & Salam from renowned reciters.">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Get lyrics for Nohay, Naat, Mungabat,  Marsiya & Salam</title>
	<link rel="icon" href="{{ asset('media/favicon.jpg')}}">

	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{ asset('css/base.css')}}">
	<script src="{{ asset('audioplayer/libs/jquery/jquery.js')}}" type="text/javascript"></script>
	<link rel="stylesheet" href="{{ asset('audioplayer/audioplayer/audioplayer.css')}}">
	<script type="text/javascript" src="{{ asset('audioplayer/audioplayer/audioplayer.js')}}"></script>


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
				<a class="navbar-brand" href="{{ url('') }}">
					<img src="{{ asset('media/ilyrics_logo.svg')}}" alt="logo">
				</a>
			</div>
	        <a class="navbar-brand navbar-brand--resp" href="/">
				<img style="width:80px;" src="{{ asset('media/ilyrics_logo.svg')}}" alt="nav-logo">
			</a>
				
	        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
	          <img src="{{ asset('media/menu_icon_humberger2.svg')}}">
	        </button>
	
	        <div class="collapse navbar-collapse" id="navbarsExample09">
	          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
	            <li class="nav-item">
	              <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Home</a>
	            </li>
	            <li class="nav-item">
	              <a class="nav-link" href="{{ url('/search') }}">Search</a>
	            </li>
	            <li class="nav-item">
	              <a class="nav-link" href="{{ url('reciters') }}" tabindex="-1" aria-disabled="true">Reciters</a>
	            </li>
	            <li class="nav-item dropdown">
				@if(Auth::user())
					<a class="nav-link dropdown-toggle" href="#" id="dropdown09" data-bs-toggle="dropdown" aria-expanded="false"> {{ Auth::user()->username }}</a>
					<ul class="dropdown-menu" aria-labelledby="dropdown09">
						<li><a class="dropdown-item" href="#">Profile</a></li>
						<li>
							<form method="POST" action="{{ route('logout') }}">
								@csrf
								<a class="dropdown-item" href=" {{ route('logout')}}"
										onclick="event.preventDefault();
													this.closest('form').submit();">
									{{ __('Log Out') }}
								</a>
							</form>
						</li>
					</ul>
				@else
					<a class="nav-link" href="{{ url('login')}}" >My Account</a>
				@endif
	            </li>
	            <li class="nav-item">
	              <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"><img src="{{ asset('media/search.svg')}}"></a>
	            </li>
	          </ul>
	          <div class="mr-0">
		          <a  href="{{ url('/register') }}" class="btn btn--primary pt-3">Create an Account</a>
	          </div>
	        </div>
	      </div>
	    </nav>
  	</div>
	</div>
	@yield('banner')
</header>
    @yield('content')
<footer>
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-5">
				<a class="mb-3" href="#"><img style="width:140px;" src="{{ asset('media/ilyrics_logo.svg')}}"></a>
				<div class="pt-5 pb-3" style="max-width:400px;">At iLyrics.org, we are devoted to build an islamic lyrics library for faithful believers. We are passionately dedicated in the religious, spiritual, educational or social realms.</div>
				{{-- <strong >Analytics</strong> --}}
				{{-- <div>
				Total Downloads:	743<br>
				Available Collections:	3225<br>
				Collection updated as of:	02/21/2022 11:31:38 PM
				</div> --}}
			</div>
			<div class="col-12 col-md-7">
				<div class="row">
					<div class="col-12 col-md-6">
						<h5 class="pb-4" tabindex="0">Useful links</h5>
						<a class="pb-3 color-black d-block text-decoration-none" href="{{ url('about') }}">About Us</a></li>
		                <a class="pb-3 color-black d-block text-decoration-none" href="https://docs.google.com/forms/d/e/1FAIpQLSfYmKg_CrqJE-Vq4Is5Nid2Qat-FAVCqHc689NA1o1MsvPBKA/viewform?vc=0&amp;c=0&amp;w=1&amp;flr=0&amp;usp=mail_form_link" target="_blank">Request to add a reciter</a>
		                <a class="pb-3 color-black d-block text-decoration-none" href="https://docs.google.com/forms/d/e/1FAIpQLSfIKPgKC2vxscmJ0nvPCyJKrb1E-GttOPMNRB4C1p6HUZ3ODw/viewform?usp=sf_link" target="_blank">Request to add a collection</a>
		                <a class="pb-3 color-black d-block text-decoration-none" href="{{ url('privacy-policy') }}">Privacy Policy</a>
		                <a class="pb-3 color-black d-block text-decoration-none" href="{{ url('accessibitiy') }}">Accessibility Policy</a>
		                <a class="pb-3 color-black d-block text-decoration-none" href="{{ url('terms') }}">Terms &amp; Conditions</a>
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

	<div aria-live="polite" aria-atomic="true" style="position: relative; min-height: 200px;">
		<div class="toast" style="position: absolute; top: 0; right: 0;">
			<div class="toast-header">
			<img src="..." class="rounded mr-2" alt="...">
			<strong class="mr-auto">Bootstrap</strong>
			<small>11 mins ago</small>
			<button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
			</div>
			<div class="toast-body">
			Hello, world! This is a toast message.
			</div>
		</div>
	</div>

<div class="modal fade" id="addPlaylistModal" tabindex="-1" aria-labelledby="addPlaylistModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
		<div class="modal-header">
			<h5 class="modal-title" id="addPlaylistModalLabel">Playlists</h5>
			<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		</div>
		<div class="modal-body">
			<div class="playlists">

			</div>
			<div class="d-none">
				<form action="" id="addPlaylistForm">
					<div class="form-group" style="height:150px">
						<label for="form-title">Title</label>
						<input id="form-title" type="text" class="form-control" name="title" required placeholder="Title">
						<div id="msg-title" class="invalid-feedback show"></div>
					</div>
					<input id="form-image-name" type="hidden" name="image_name" value="">
					<input id="form-track-id" type="hidden" name="track_id" value="">
				</form>
			</div>
		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
			<button type="button" class="btn btn-primary create-playlist">Create New</button>
		</div>
		</div>
	</div>
</div>
</footer>
<div class="menuoverlay"></div>
{{-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> --}}
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
{{-- <script src="{{ asset('js/bootstrap.bundle.js')}}"></script> --}}
<script src="{{ asset('js/main.js')}}"></script>
@stack('pagination')
<script>
	$('.viewmore_link').click(function(){
		$('#tags .less').fadeToggle();
		$(this).text($(this).text() == 'Show More' ? 'Show Less' : 'Show More');
	});

	@if(AUth::user())
	$('.toast').toast({
        delay:2000,
    });
	const csrf = $('meta[name="csrf-token"]').attr('content');
	$('.add-playlist').click(function(){
		const image_name = $(this).attr("data-image-name");
		const track_id = $(this).attr("data-track-id");
		$('#form-image-name').val(image_name);
		$('#form-track-id').val(track_id);
		loadPlaylists();
	});

	$('.create-playlist').on('click',function(e){
		e.preventDefault();
		var data = $('#addPlaylistForm').serializeArray();
		sendPostRequest('{{ route("addPlaylist")}}',data);
	});

	$('.toggle-favourite').on('click',function(e){
		e.preventDefault();
		const track_id = $(this).attr("data-track-id");
		const is_fav = $(this).attr("data-is-fav");
		if(is_fav == 2){
			addFavourite(track_id,$(this));
		}else{
			removeFavourite(track_id,$(this));
		}
	});


	function addFavourite(track_id,element){
		const url = "{{ route('favorite','')}}"+"/"+track_id;
		$.ajax({
			type:'post',
			headers: {
				'X-CSRF-TOKEN': csrf,
			},
			url:url,
			success:function(data){
				console.log(data.message);
				element.html('Remove From Favourite');
				element.removeClass('add-favourite');
				element.addClass('remove-favourite');
				element.attr("data-is-fav",1);
				$('.toast').toast('show');
			},
			error: function (xhr) {
			
			}
		});
	}

	function removeFavourite(track_id,element){
		const url = "{{ route('remove-favorite','')}}"+"/"+track_id;
		$.ajax({
			type:'post',
			headers: {
				'X-CSRF-TOKEN': csrf,
			},
			url:url,
			success:function(data){
				console.log(data.message);
				element.html('Add Favourite');
				element.addClass('add-favourite');
				element.removeClass('remove-favourite');
				element.attr("data-is-fav",2);				
			},
			error: function (xhr) {
			
			}
		});
	}

	function sendPostRequest(url,post_data){
		$.ajax({
			type:'POST',
			url:url,
			headers: {
				'X-CSRF-TOKEN': csrf,
			},
			data:post_data,
			success:function(data){
				console.log(data);
			},
			error: function (xhr) {
				if(xhr.responseJSON.errors.title[0] !== ''){
					$('#msg-title').html(xhr.responseJSON.errors.title[0]);
					$('#msg-title').show();
					$('#msg-title').fadeOut(3000);
				}
			}

		});
	}

	function loadPlaylists(){
		const url = "{{ route('user-playlists')}}";
		$.ajax({
			type:'get',
			url:url,
			success:function(data){
				let html = '';
				data.forEach(element => {
					html+='<div class="d-flex">'+element.title+'<i onclick="editPlaylist('+element.id+')">Edit</i><i onclick="deletePlaylist('+element.id+')">Delete</i></div>';
				});
				$('.playlists').html(html);
			},
			error: function (xhr) {
			
			}
		});
	}
	function editPlaylist(id){
		alert(id);
	}
	function deletePlaylist(id){
		alert(id);
	}
@endif
</script>
@stack('extrascripts')
</body>
</html>