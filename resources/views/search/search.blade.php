
@extends('layout.base')
@section('banner')
<div class="pagetitle">
	<div class="container">
	  <!-- Header  -->
	  <div class="row">
		  <div class="col">
		  	<h2 class="h2__underline" tabindex="0">Search</h2>
		  	{{-- <p>Number of Collections : {{ $artist_detail->track_count }}</p> --}}
        <div class="row">
          <div class="input-group mb-3 mt-5" style="">
            <input type="text" class="form-control form-control--large" placeholder="Search by Reciter..." aria-label="Recipient's username" aria-describedby="button-addon2">
            <input type="text" class="form-control form-control--large" placeholder="Search by Genre..." aria-label="Recipient's username" aria-describedby="button-addon2">
            <input type="text" class="form-control form-control--large" placeholder="Search by Tag..." aria-label="Recipient's username" aria-describedby="button-addon2">
            <button class="btn btn--large" type="button" id="button-addon2" style="min-width:200px;"><img src="{{ asset('media/search_white.svg')}}"></button>
          </div>
        </div>

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
