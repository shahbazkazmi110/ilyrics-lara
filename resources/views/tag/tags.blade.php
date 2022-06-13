
@extends('layout.base')
@section('banner')
<div class="pagetitle">
	<div class="container">
	  <!-- Header  -->
        <div class="row">
            <div class="col">
                <h2 class="h2__underline" tabindex="0">{{ $tag_detail->title }}</h2>
                <p>Total tracks : {{ $tracks->total() ?? 'Not Defined' }}</p>
            </div>		  
        </div>
	</div>
</div>
@endsection
@section('content')
<div class="container pt-md-5 mb-5 pb-5">
  <x-load-tracks :tracks="$tracks"/>    
  <div class="mt-2">
    <div class="mt-4">      
      {!! $tracks->links() !!}
    </div> 
  </div> 
</div>
<x-tags :tags="$tags"/>
<x-genres :genres="$genres"/>
@endsection