
@extends('layout.base')
@section('banner')
<div class="pagetitle">
	<div class="container">
	  <!-- Header  -->
	  <div class="row">
		  <div class="col-auto pb-4 pb-md-0">
		  		<div class="collaction_img" style="background-image: url('{{ \App\Helpers\Helper::format_image($artist_detail->image_name, 0) }}');"></div>
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
        <x-load-tracks :tracks="$tracks"/>
    <div class="mt-2">
      <div class="ajax-load">
        <div class="loader spinner-border text-success" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
        <div class="no-record">
            No More Records Found
        </div>
      </div>
      {{-- {!! $tracks->links() !!} --}}
    </div>               
  </div>
</main>
<x-tags :tags="$tags"/>
<x-genres :genres="$genres"/>
@endsection
