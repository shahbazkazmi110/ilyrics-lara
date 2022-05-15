
@extends('layout.base')
@section('banner')
<div class="pagetitle">
	<div class="container">
	  <!-- Header  -->
        <div class="row">
            <div class="col">
                <h2 class="h2__underline" tabindex="0">{{ $tag_detail->title }}</h2>
                <p>Total tracks : {{ $tracks['meta']['total'] ?? 'Not Defined' }}</p>
            </div>		  
        </div>
	</div>
</div>
@endsection
@section('content')
<div class="container pt-md-5 mb-5 pb-5">
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
  </div> 
</div>
<x-tags :tags="$tags"/>
<x-genres :genres="$genres"/>
@endsection