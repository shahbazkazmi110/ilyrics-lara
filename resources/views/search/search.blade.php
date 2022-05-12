
@extends('layout.base')
@section('banner')
<div class="pagetitle">
	<div class="container">
	  <h2 class="h2__underline" tabindex="0">Results</h2>
	  <!-- Header  -->
    <form id="filter-form">  
	    <div class="row search-div">
        <div class="col-12 col-md-3 pb-2">
          <div class="input-group">
            <input type="text" class="form-control" id="text-recieter" placeholder="Search by Recitor..." autocomplete="off">
            <input type="hidden" class="form-control" name="artist_id" id="text-recieter-id">
            <div id="suggesstion-box"></div>
          </div>
        </div>
        <div class="col-12 col-md-3 pb-2">	
          <div class="input-group">
            <input type="text" class="form-control" id="text-genres" placeholder="Search by Genres..." autocomplete="off">
            <input type="hidden" class="form-control" name="genre_id" id="text-genres-id">
            <div id="suggesstion-box"></div>
          </div>	  	
          {{-- <input type="text" class="form-control" id="text-genres" placeholder="Search by Genres..."> --}}
        </div>
        <div class="col-12 col-md-3 pb-2">
          <div class="input-group">
            <input type="text" class="form-control" id="text-tags" placeholder="Search by Tags..." autocomplete="off">
            <input type="hidden" class="form-control" name="tag_id" id="text-tags-id">
            <div id="suggesstion-box"></div>
          </div>	 	  	
          {{-- <input type="text" class="form-control" id="text-tags" placeholder="Search by Tags..."> --}}
        </div>  
        <div class="col-12 col-md-3 pb-2">
          <button type="button" id="search-filter" class="btn btn--primary">Search</button>
        </div>	
	    </div>
    </form>	  
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
<script>
  
  $(document).ready(function(){
    $("#text-recieter").keyup(function(){
      var url = "{{ route('search-recieters')}}";
      autocomplete(url,'text-recieter');
    });

    $("#text-genres").keyup(function(){
      var url = "{{ route('search-genres')}}";
      autocomplete(url,'text-genres');
    });

    $("#text-tags").keyup(function(){
      var url = "{{ route('search-tags')}}";
      autocomplete(url,'text-tags');
    });

    $('#search-filter').on('click',function(){
      var url = "{{ route('search')}}";
      var data = $('#filter-form').serializeArray();
      $.ajax({
        headers: {
          'X-CSRF-TOKEN': csrf,
        },
        type: "GET",
        url: url,
        data:data,
        beforeSend: function(){
          // $('#'+id).css("background","#FFF url('{{ asset('media/loading.gif')}}') no-repeat 165px");
        },
        success: function(data){
         console.log(data);
        //  $('#filter-form')[0].reset();

        }
      });
    });


  });

  function autocomplete(url,id){

    if($('#'+id).val() ==  ''){
        $('#'+id+'-id').val('');
        $('#'+id).siblings('#suggesstion-box').hide();
        return;
    }
    $.ajax({
      headers: {
				'X-CSRF-TOKEN': csrf,
			},
      type: "POST",
      url: url,
      data:{ keyword : $('#'+id).val() },
      beforeSend: function(){
        // $('#'+id).css("background","#FFF url('{{ asset('media/loading.gif')}}') no-repeat 165px");
      },
      success: function(data){
        if(data.length > 0){        
          $('#'+id).siblings('#suggesstion-box').show()
          var html = '<ul id="data-list">';
          data.forEach(ele => {
            html+=`<li onclick="selectListItem('${ele.name}',${ele.id},'${id}')">${ele.name}</li>`;
          });
          html += '</ul>';
          $('#'+id).siblings('#suggesstion-box').html(html);
        }else{
          $('#'+id).siblings('#suggesstion-box').hide();
        }
      }
    });

  }
  function selectListItem(val,id,elemetId) {
    $("#"+elemetId).val(val);
    $("#"+elemetId+"-id").val(id);
    $('#'+elemetId).siblings('#suggesstion-box').hide();
  }
</script>
    
@endpush
@push('extrascripts')
<script>


</script>
@endpush
