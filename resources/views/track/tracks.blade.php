
@extends('layout.base')
@section('banner')
<div class="pagetitle">
	<div class="container">
		
	  <!-- Header  -->
	  <div class="row">
		  <div class="col-auto pb-4 pb-md-0">
		  		{{-- <div class="collaction_img" style="background-image: url('{{ \App\Helpers\Helper::format_image($playlist_detail->image_name,1) }}');"></div> --}}
		  </div>		  
		  <div class="col">
		  	<h2 class="h2__underline" tabindex="0">All Tracks</h2>
		  	<p> {{ $tracks->total() }} tracks </p>
		  </div>		  
	  </div>

	</div>
</div>
@endsection
@section('content')
<main>
  <div class="container pt-md-5 mb-5 pb-5">
      <x-load-tracks :tracks="$tracks"/>    
    <div class="mt-4">      
      {!! $tracks->links() !!}
    </div> 
  </div>
</main>
<x-tags :tags="$tags"/>
<x-genres :genres="$genres"/>
@endsection
