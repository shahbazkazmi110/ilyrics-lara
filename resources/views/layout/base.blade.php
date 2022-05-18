<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Ilyrics is an Islamic Lyrics Website where you can Listen and download All Islamic Nohas and Naats">
	<meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="author" content="Get thousand+ lyrics for Nohay, Naat, Mungabat,  Marsiya & Salam from renowned reciters.">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Get lyrics for Nohay, Naat, Mungabat,  Marsiya & Salam</title>
	<link rel="icon" href="{{ asset('media/favicon.jpg')}}">
	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{ asset('css/base.css')}}">
	<link rel="stylesheet" href="{{ asset('audioplayer/audioplayer/audioplayer.css')}}">
	
</head>
<body>
<header>
	<div class="nav_bar_wraper">
		<div class="container">
	    <nav class="navbar navbar-expand-lg il_navbar" aria-label="Eleventh navbar example">
	      <div class="container-fluid">
	        <div class="il_logo_container">
				<a class="navbar-brand" href="{{ url('') }}">
					<img src="{{ asset('media/ilyrics_logo.svg')}}" alt="logo" width="139" height="80">
				</a>
			</div>
	        <a class="navbar-brand navbar-brand--resp" href="/">
				<img style="width:80px;" src="{{ asset('media/ilyrics_logo.svg')}}" alt="nav-logo">
			</a>
				
	        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
	          <img src="{{ asset('media/menu_icon_humberger2.svg')}}" alt="menu-nav">
	        </button>
	
	        <div class="collapse navbar-collapse" id="navbarsExample09">
	          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
	            <li class="nav-item">
	              <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Home</a>
	            </li>
	            <li class="nav-item">
	              <a class="nav-link" href="{{ route('search') }}">Search</a>
	            </li>
	            <li class="nav-item">
	              <a class="nav-link" href="{{ route('reciters') }}" tabindex="-1" aria-disabled="true">Reciters</a>
	            </li>
				@if(Auth::user())
				<li class="nav-item">
					<a class="nav-link" href="{{ route('my-collections') }}" tabindex="-1" aria-disabled="true">My Collections</a>
				  </li>
				@endif
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
	            {{-- <li class="nav-item">
	              <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"><img src="{{ asset('media/search.svg')}}"></a>
	            </li> --}}
				
	          </ul>
			  @if(!Auth::user())
	          <div class="mr-0">
		          <a  href="{{ url('/register') }}" class="btn btn--primary pt-3">Create an Account</a>
	          </div>
			  @endif
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
				<a class="mb-3" href="#"><img style="width:140px;" src="{{ asset('media/ilyrics_logo.svg')}}" width="140" height="81" alt="logo"></a>
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
		                <a href="https://www.facebook.com/iLyricsO/"><img width="32" height="32" src="{{ asset('media/social_facebook.svg')}}" alt="fb-icon"></a>
		                <a href="https://twitter.com/ILyricsgo"><img width="32" height="32" src="{{ asset('media/social_icon_twitter.svg')}}" alt="twitter-icon"></a>
		                <a href="https://www.instagram.com/ilyricsgo/"><img width="32" height="32" style="width:32px;" src="{{ asset('media/social_icon_svginstagram.svg')}}" alt="insta-icon"></a>
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

	<div class="toast" style="position: absolute; top: 0; right: 0;">
		<div class="toast-header">
		<img src="" class="rounded mr-2" alt="...">
		<strong class="mr-auto">Message</strong>
		</div>
		<div class="toast-body">
			<div id="toast-message"></div>
		</div>
	</div>

	<div class="modal fade" id="addPlaylistModal" tabindex="-1" aria-labelledby="addPlaylistModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
				  <h5 class="modal-title" id="exampleModalLabel">Playlists</h5>
				  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body p-5">
					<div class="playlist">
						<div class="playlist_item" onclick="addToPlaylist(track_id)">
							<div class="row">
								<div class="col">
									<a class="font-size__medium " href="#">Playlist Name</a>
								</div>
								<div class="col-auto">
									<a class="mr-3" href="#">
										<img src="{{ asset('media/delete.svg')}}" alt="delete icon">
									</a>
									<a href="#">
										<img src="{{ asset('media/edit.svg')}}" alt="Edit icon">
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="">
						<form id="addPlaylistForm">
							<div class="input-group mb-3">
								<input type="text" id="playlist-title" class="form-control form-control--small" name="title" placeholder="Add new Playlist" aria-label="Add new Playlist" aria-describedby="button-addon2">
								<input id="form-image-name" type="hidden" name="image_name" value="">
								<input id="form-track-id" type="hidden" name="track_id" value="">
								<button class="btn btn-outline btn--small" type="button" id="playlist-action" data-action="add" >Add</button>
							</div>
							<div id="msg-title" class="invalid-feedback show position-absolute"></div>
						</form>
					</div>
				</div>
				<div class="modal-footer">	        	        
				  <button type="button" class="btn btn-secondary btn--small" data-bs-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
</footer>
<div class="menuoverlay"></div>
{{-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> --}}
{{-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script> --}}
{{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> --}}
<script src="{{ asset('audioplayer/libs/jquery/jquery.js')}}" type="text/javascript"></script>
<script type="text/javascript" src="https://s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5f2c69483421ece8&async=1"></script>
<script type="text/javascript" src="{{ asset('audioplayer/audioplayer/audioplayer.js')}}"></script>
<script src="{{ asset('js/bootstrap.bundle.js')}}"></script>
<script type="text/javascript" src="https://s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5f2c69483421ece8&async=1"></script>
<script src="{{ asset('js/main.js')}}"></script>

@stack('scripts')
<script>
var searchfilter = '';
@stack('searchFilter')	
@stack('pagination')
</script>
<script>
	$('.viewmore_link').click(function(){
		$('#tags .less').fadeToggle();
		$(this).text($(this).text() == 'Show More' ? 'Show Less' : 'Show More');
	});
	var toastElList = [].slice.call(document.querySelectorAll('.toast'));
	var toastList = toastElList.map(function (toastEl) {
		return new bootstrap.Toast(toastEl, {animation: true,autohide: true,delay: 500});
	});
	const csrf = $('meta[name="csrf-token"]').attr('content');
	@if(AUth::user())

	$('.container').on('click','.add-playlist',function(e){
		const image_name = $(this).attr("data-image-name");
		const track_id = $(this).attr("data-track-id");
		$('#form-image-name').val(image_name);
		$('#form-track-id').val(track_id);
		$('#playlist-title').val('');
		loadPlaylists();
		$('#playlist-action').html('Add');
	});

	$('#playlist-action').on('click',function(e){
		e.preventDefault();
		var data = $('#addPlaylistForm').serializeArray();
		if($(this).attr('data-action') == 'add'){
		 	sendPostRequest('{{ route("addPlaylist")}}',data);
			$('#msg-title').html('Playlist Added');
			$('#msg-title').show();
			$('#msg-title').fadeOut(3000);
		}else{
			var id = $('#playlist-title').attr('data-playlist-id');
			sendPostRequest('{{ route("updatePlaylist",'')}}'+'/'+id,data);
			$('#playlist-title').attr('data-playlist-id','');
			$('#playlist-title').val('');
			$(this).attr('data-action','add');
			$(this).html('Add');
			$('#msg-title').html('Playlist Updated');
			$('#msg-title').show();
			$('#msg-title').fadeOut(3000);
		}
	});

	$('.container').on('click','.toggle-favourite',function(e){
		e.preventDefault();
		const track_id = $(this).attr("data-track-id");
		const is_fav = $(this).attr("data-is-fav");
		if(is_fav == 2){
			$('#toast-message').html('Added To Favourites');
			toastList[0].show();
			addFavourite(track_id,$(this));
		}else{
			$('#toast-message').html('Removed From Favourites');
			toastList[0].show();
			removeFavourite(track_id,$(this));
		}
	});

	// $('.container').on('click','.file-download',function(e){
	// 	// e.preventDefault();
	// 	const track_id = $(this).attr("data-track-id");
	// 	generateDownLink(track_id);
	// });

	// function generateDownLink(track_id){
	// 	// $.ajax({
	// 	// 	type:'post',
	// 	// 	headers: {
	// 	// 		'X-CSRF-TOKEN': csrf,
	// 	// 	},
	// 	// 	url:url,
	// 	// 	success:function(data){
				
	// 	// 	},
	// 	// 	error: function (xhr) {
			
	// 	// 	}
	// 	// });
	// }

	function addFavourite(track_id,element){
		const url = "{{ route('favorite','')}}"+"/"+track_id;
		$.ajax({
			type:'post',
			headers: {
				'X-CSRF-TOKEN': csrf,
			},
			url:url,
			success:function(data){
				element.children('span').html('Remove Favourite');
				element.removeClass('add-favourite');
				element.addClass('remove-favourite');
				element.attr("data-is-fav",1);
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
				element.children('span').html('Add Favourite');
				element.addClass('add-favourite');
				element.removeClass('remove-favourite');
				element.attr("data-is-fav",2);				
			},
			error: function (xhr) {
			
			}
		});
	}

	$('.toggle-save-playlist').on('click',function(e){
		e.preventDefault();
		var id = $(this).attr('data-playlist-id');
		if($(this).attr('data-saved') == 'yes'){
			var url = "{{ route('removePlaylist','')}}"+"/"+id;
			var icon = "{{ asset('media/bookmark.svg') }}";
			$(this).attr('data-saved','no');
			$(this).children('img').attr('src',icon);
		}else{
			var icon = "{{ asset('media/bookmark-dark.svg') }}";
			var url = "{{ route('savePlaylist','')}}"+"/"+id;
			$(this).attr('data-saved','yes');
			$(this).children('img').attr('src',icon);
			// $(this).html('Un Save');
		}
		toggleSavePlaylist(url)
	});

	function toggleSavePlaylist(url){
		$.ajax({
			type:'post',
			headers: {
				'X-CSRF-TOKEN': csrf,
			},
			url:url,
			success:function(data){
				console.log(data);
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
				loadPlaylists();
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

	// function loadPlaylists(){
	// 	const url = "{{ route('user-playlists')}}";
	// 	$.ajax({
	// 		type:'get',
	// 		url:url,
	// 		success:function(data){
	// 			let html = '';
	// 			data.forEach(element => {
	// 				html+=`<div class="playlist_item">
	// 						<div class="row">
	// 							<div class="col" onclick="addToPlaylist(${element.id})">
	// 								<a class="font-size__medium " href="#">${element.title}</a>
	// 							</div>
	// 							<div class="col-auto">
	// 								<a class="mr-3" href="javascript:void(0);" onclick="deletePlaylist(${element.id})">
	// 									<img src="{{ asset('media/delete.svg')}}" alt="delete icon">
	// 								</a>
	// 								<a href="javascript:void(0);" onclick="editPlaylist(${element.id},'${element.title}')">
	// 									<img src="{{ asset('media/edit.svg')}}" alt="Edit icon">
	// 								</a>
	// 							</div>

	// 						</div>
	// 					</div>`;
	// 			});
	// 			$('.playlist').html(html);
	// 		},
	// 		error: function (xhr) {
			
	// 		}
	// 	});
	// }
	function addToPlaylist(id){
		let track_id = $('#form-track-id').val();
		const url = '{{ url("add-to-playlist") }}'+'/'+track_id+'/'+id;
		$.ajax({
			type:'post',
			headers: {
				'X-CSRF-TOKEN': csrf,
			},
			url:url,
			success:function(data){
				$('#msg-title').html(data.message);
				$('#msg-title').show();
				$('#msg-title').fadeOut(3000);
			},
			error: function (xhr) {
			
			}
		});
		
	}

	function editPlaylist(id,title){
		$('#playlist-action').attr('data-action','update');
		$('#playlist-action').html('Update');
		$('#playlist-title').val(title);
		$('#playlist-title').attr('data-playlist-id',id);
	}
	function deletePlaylist(id){
		const url = "{{ route('deletePlaylist','')}}"+"/"+id;
		$.ajax({
			type:'post',
			headers: {
				'X-CSRF-TOKEN': csrf,
			},
			url:url,
			success:function(data){
				loadPlaylists();
			},
			error: function (xhr) {
			
			}
		});
	}
@endif
</script>
@stack('extrascripts')
</body>
</html>