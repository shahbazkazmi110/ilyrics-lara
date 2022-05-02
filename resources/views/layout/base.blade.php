<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Get thousand+ lyrics for Nohay, Naat, Mungabat,  Marsiya & Salam from renowned reciters.">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Get lyrics for Nohay, Naat, Mungabat,  Marsiya & Salam</title>
	<link rel="icon" href="{{ asset('media/favicon.jpg')}}">

	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{ asset('css/base.css')}}">
	<script src="{{ asset('audioplayer/libs/jquery/jquery.js')}}" type="text/javascript"></script>
	@stack('audio-styles')
	@stack('audio-scripts')

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
	<div class="modal fade" id="authModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
		  <div class="modal-content">
			<div class="modal-header">
			  <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
			  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<x-auth-validation-errors class="mb-4" :errors="$errors" />

				<form method="POST" action="{{ route('login') }}">
					@csrf
		
					<!-- Email Address -->
					<div>
						<x-label for="email" :value="__('Email')" />
		
						<x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
					</div>
		
					<!-- Password -->
					<div class="mt-4">
						<x-label for="password" :value="__('Password')" />
		
						<x-input id="password" class="block mt-1 w-full"
										type="password"
										name="password"
										required autocomplete="current-password" />
					</div>
		
					<!-- Remember Me -->
					<div class="block mt-4">
						<label for="remember_me" class="inline-flex items-center">
							<input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
							<span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
						</label>
					</div>
		
					<div class="flex items-center justify-end mt-4">
						@if (Route::has('password.request'))
							<a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
								{{ __('Forgot your password?') }}
							</a>
						@endif
		
						<x-button class="ml-3">
							{{ __('Log in') }}
						</x-button>
					</div>
				</form>
			</div>
			<div class="modal-footer">
			  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
			  <button type="button" class="btn btn-primary">Save changes</button>
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
<script src="{{ asset('js/bootstrap.bundle.js')}}"></script>
<script src="{{ asset('js/main.js')}}"></script>
@stack('pagination')
<script>
	$('.viewmore_link').click(function(){
		$('#tags .less').fadeToggle();
		$(this).text($(this).text() == 'Show More' ? 'Show Less' : 'Show More');
	});
</script>
@stack('extrascripts')
</body>
</html>