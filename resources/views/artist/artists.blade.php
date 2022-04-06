
@extends('layout.base')
@section('banner')
<div class="pagetitle">
	<div class="container">
		<h2 class="h2__underline" tabindex="0">All Reciters</h2>
		<p style="max-width:400px;">In publishing and graphic design, Lorem ipsum is a placeholder text commonly.</p>	  
	</div>
</div>
@endsection
    
@section('content')
<main>
<div class="container pt-md-5 mb-5 pb-5">
       
    <div class="row">

        @foreach ($artists as $artist) 
            <div class="col-xl-2 col-lg-3 col-md-4 col-6 d-flex align-items-stretch mb-mb-5 mb-4">
                <a href="{{ route('tracks-by-artist', ['id' => $artist->id]) }}" class="card card--reciter mb-0">
                    <div class="card--reciter__image" style="background-image: url('{{ \App\Helpers\Helper::format_image($artist->image_name, 0) }}');"></div>
                    <div class="card--reciter__content">{{ $artist->name}} ({{ $artist->track_count}})</div>
                </a>
            </div>
        @endforeach
        <div class="mt-2">
        {!! $artists->links() !!}
        </div>
        
      
        
        
    </div>
    <!-- New Collection eded -->                
    <button type="button" class="btn btn--ordinary btn--small">Request to Add reciter</button>                  
          
    <!-- New Collection eded -->	  
</div>

</main>
{{-- <x-tags :tags="$tags"/>
<x-genres :genres="$genres"/> --}}
@endsection