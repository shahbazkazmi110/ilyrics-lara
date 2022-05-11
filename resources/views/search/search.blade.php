
@extends('layout.base')
@section('banner')
<div class="pagetitle">
	<div class="container">
	  <h2 class="h2__underline" tabindex="0">Results</h2>
	  <!-- Header  -->
	  <div class="row">  
		  <div class="col-12 col-md-3 pb-2">		  	
		  	<input type="text" class="form-control" id="text-recieter" placeholder="Search by Recitor...">
		  </div>
		  <div class="col-12 col-md-3 pb-2">		  	
		  	<input type="text" class="form-control" id="text-genres" placeholder="Search by Genres...">
		  </div>
		  <div class="col-12 col-md-3 pb-2">	  	
		  	<input type="text" class="form-control" id="text-tags" placeholder="Search by Tags...">
		  </div>
		  <div class="col-12 col-md-3 pb-2">
		  	<button type="button" class="btn btn--primary">Search</button>
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
@push('extrascripts')
<script>

$('#text-recieter').on('input propertychange paste',function(){
  var url = "{{ route('search-recieter')}}";
  var text = $(this).val();
  $.ajax({
			type:'get',
      data: { artist: text },
			url:url,
			success:function(data){
        console.log(data);
				// let html = '';
				// data.forEach(element => {
				// 	html+='<div class="d-flex">'+element.title+'<i onclick="editPlaylist('+element.id+')">Edit</i><i onclick="deletePlaylist('+element.id+')">Delete</i></div>';
				// });
				// $('.playlists').html(html);
			},
			error: function (xhr) {
			
			}
		});
});
</script>
@endpush
