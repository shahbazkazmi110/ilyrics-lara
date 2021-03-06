@extends('layout.base')
@section('banner')
<div class="pagetitle">
	<div class="container">
	  <h2 class="h2__underline" tabindex="0">Results</h2>
	  <!-- Header  -->
    <form id="filter-form" action="{{ route('search')}}">  
	    <div class="row search-div">
      <div class="col-12 col-md-9 pb-2">
          <div class="search-input-group input-group">         
            <input type="text" class="form-control" id="text-keyword" name="keyword" placeholder="Search by Keyword..." autocomplete="off" value="{{ $keyword }}">
            <input type="hidden" class="form-control" id="text-keyword" value="{{ $keyword ?? ''}}">
            <div id="suggesstion-box"></div>
          </div>
        </div>
        <div class="col-12 col-md-3 pb-2"></div>

      <div class="col-12 col-md-3 pb-2">
          <div class="input-group">           
            <input type="text" class="form-control" id="text-recieter" placeholder="Search by Recitor..." autocomplete="off" value="{{ \App\Helpers\Helper::getArtistName(request()->artist_id ?? '') }}">
            <input type="hidden" class="form-control" name="artist_id" id="text-recieter-id" value="{{ request()->artist_id ?? ''}}">
            <div id="suggesstion-box"></div>
          </div>
        </div>
        <div class="col-12 col-md-3 pb-2">	
          <div class="input-group">
            <input type="text" class="form-control" id="text-genres" placeholder="Search by Genres..." autocomplete="off" value="{{ \App\Helpers\Helper::getGenreName(request()->genre_id ?? '') }}">
            <input type="hidden" class="form-control" name="genre_id" id="text-genres-id" value="{{ request()->genre_id ?? ''}}">
            <div id="suggesstion-box"></div>
          </div>	  	
          {{-- <input type="text" class="form-control" id="text-genres" placeholder="Search by Genres..."> --}}
        </div>
        <div class="col-12 col-md-3 pb-2">
          <div class="input-group">
            <input type="text" class="form-control" id="text-tags" placeholder="Search by Tags..." autocomplete="off" value="{{ \App\Helpers\Helper::getTagName(request()->tag_id ?? '') }}">
            <input type="hidden" class="form-control" name="tag_id" id="text-tags-id" value="{{ request()->tag_id ?? ''}}">
            <div id="suggesstion-box"></div>
          </div>	 	  	
          {{-- <input type="text" class="form-control" id="text-tags" placeholder="Search by Tags..."> --}}
        </div>  
        <div class="col-12 col-md-3 pb-2">
          <button type="submit" id="search-filter-no" class="btn btn--primary">Search</button>
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
    <div class="mt-4">
      {{-- <div class="ajax-load">
        <div class="loader spinner-border text-success" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
        <div class="no-record">
            No Records Found
        </div>
      </div> --}}
      {!! $tracks->appends(request()->query())->links() !!}
    </div>               
  </div>
</main>
<x-tags :tags="$tags"/>
<x-genres :genres="$genres"/>
@endsection
{{-- @push('searchFilter')
$('#search-filter').on('click',function(){
    var url = "{{ route('search')}}";
    searchfilter = $('#filter-form').serialize();
    console.log(searchfilter);
    $.ajax({
      headers: {
        'X-CSRF-TOKEN': csrf,
      },
      type: "GET",
      url: url,
      data:searchfilter,
      beforeSend: function(){
        // $('#'+id).css("background","#FFF url('{{ asset('media/loading.gif')}}') no-repeat 165px");
      },
      success: function(data){
        if (data.tracks.data === undefined || data.tracks.data.length == 0) {
          $("#pagination-data").html('');
          lastpage = true;
          $('.no-record').show();
          $('.loader').hide();
        }
        else{
          renderTracks(data.tracks.data,true);
          $('.loader').hide();
        }
        Loading = false;
      //  $('#filter-form')[0].reset();

      }
    });
  });
@endpush --}}
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

$("#text-keyword").keyup(function(){
	url = "{{ route('search-tracks')}}";
	homeAutoComplete(url,'text-keyword');
  });

  function hidebox(id){
    if($('#'+id).val() ==  ''){
      $('#'+id).siblings('#suggesstion-box').hide();
      return true;
    }
  }
function homeAutoComplete(url,id){
	if(hidebox(id)){ return; }
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
					html+=`<li > <span onclick="selectTrackItem('${ele.name}',${ele.id},'${id}')">${ele.name}</span> <span onclick="selectArtistItem('${ele.artist_name}',${ele.artist_id},'${id}')"><small>(${ele.artist_name})</small></span></li>`;
				});
				html += '</ul>';
				$('#'+id).siblings('#suggesstion-box').html(html);
        hidebox(id)
			}
			else{
				$('#'+id).siblings('#suggesstion-box').hide();
			}
		}
	});

}
function selectTrackItem(val,id,elemetId) {
	const url =  "{{ route('track-by-id','')}}"+"/"+id;
	$("#"+elemetId).val(val);
	$('#'+elemetId).siblings('#suggesstion-box').hide();
	window.location.href = url;
}

function selectArtistItem(val,id,elemetId) {
	const url =  "{{ route('tracks-by-artist','')}}"+"/"+id;
	$("#"+elemetId).val(val);
	$('#'+elemetId).siblings('#suggesstion-box').hide();
	window.location.href = url;
}
</script>
@endpush
