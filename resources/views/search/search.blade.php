
@extends('layout.base')
@section('banner')
<div class="pagetitle">
	<div class="container">
	  <h2 class="h2__underline" tabindex="0">Results</h2>
	  <!-- Header  -->
	  <div class="row">  
		  <div class="col-12 col-md-3 pb-2">
        <input type="text" class="form-control" id="text-recieter" placeholder="Search by Recitor..." autocomplete="off">
        <div id="suggesstion-box"></div>
        {{-- <input type="text" class="form-control autocomplete" id="text-recieter" placeholder="Search by Recitor..." autocomplete="off"> --}}
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
@push('scripts')
<script src="{{ asset('js/bootstrap-autocomplete/autocomplete.js')}}"></script>
<script>
  const field = document.getElementById('text-recieter');
  
  $(document).ready(function(){
    $("#text-recieter").keyup(function(){
      var url = "{{ route('search-recieter')}}";
      $.ajax({
      headers: {
				'X-CSRF-TOKEN': csrf,
			},
      type: "POST",
      url: url,
      data:{ artist : $(this).val() },
      beforeSend: function(){
        $("#text-recieter").css("background","#FFF url(LoaderIcon.gif) no-repeat 165px");
      },
      success: function(data){
        $("#suggesstion-box").show();
        var html = '<ul id="data-list">';
        data.forEach(element => {
          html+=`<li>${element.name}</li>`
        });
        html += '</ul>';
        $("#suggesstion-box").html(html);
        $("#text-recieter").css("background","#FFF");
      }
      });
    });
  });
  function selectCountry(val) {
    $("#text-recieter").val(val);
    $("#suggesstion-box").hide();
  }
</script>
    
@endpush
@push('extrascripts')
<script>


</script>
@endpush
