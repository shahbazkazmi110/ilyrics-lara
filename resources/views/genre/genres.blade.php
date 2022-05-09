
@extends('layout.base')
@section('banner')
<div class="pagetitle">
	<div class="container">
	  <!-- Header  -->
        <div class="row">
            <div class="col">
                <h2 class="h2__underline" tabindex="0">{{ $genre_detail->title }}</h2>
                <p>Total tracks : {{ $tracks['meta']['total'] ?? 'Not Defined' }}</p>
                <h4 class="h2__underline" tabindex="0">Related Tags</h4>
                @foreach ($tag_related as $tag)
                    <div class="col-6 col-lg-3 col-md-4 pb-2">
                        <a class="text-decoration-none color-black" href="{{ route('tracks-by-tag', ['id' => $tag->id]) }}">{{$tag->title}}</a>
                    </div>
                @endforeach
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