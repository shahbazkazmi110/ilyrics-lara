
@extends('layout.base')
@section('banner')
<div class="pagetitle">
	<div class="container">
		
	  <!-- Header  -->
	  {{-- <div class="row">
		  <div class="col-auto pb-4 pb-md-0">
		  		<div class="collaction_img" style=""></div>
		  </div>		  
		  <div class="col">
		  	<h2 class="h2__underline" tabindex="0">About Us</h2>
		  	
		  </div>		  
	  </div> --}}

	</div>
</div>
@endsection
    
@section('content')

<main>

	<div class="container mtb-50">

		<h2 class="headline mtb-10">iLyrics</h3>

			<br>
			<h3>Who We Are</h3>
			<p>At iLyrics.org, we are devoted to build an islamic lyrics library for faithful believers. We are passionately dedicated in the religious, spiritual, educational or social realms.</p>
			<h3>Our Mission</h3>
			<p>To serve the Muslims through our collections.</p><br>
			<h3>Our Vision</h3>
			<p>To cultivate a vibrant, collaborative, and supportive Muslim community.</p>
			<br>
			<h3>Our Core Values</h3>
			<p>Knowledge | Faith | Integrity | Diversity | Collaboration | Progress</p>
	</div>


</main>
{{-- <x-tags :tags="$tags"/>
<x-genres :genres="$genres"/> --}}
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
