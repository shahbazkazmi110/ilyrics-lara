
@extends('layout.base')
@section('banner')
<div class="pagetitle">
	<div class="container">
		<h2 class="h2__underline" tabindex="0">All Reciters</h2>
		{{-- <p style="max-width:400px;">In publishing and graphic design, Lorem ipsum is a placeholder text commonly.</p>	   --}}
	</div>
</div>
@endsection
    
@section('content')
<main>
<div class="container pt-md-5 mb-5 pb-5">
       
    <div class="row" id="pagination-data">

        @foreach ($artists as $artist) 
            <div class="col-xl-2 col-lg-3 col-md-4 col-6 d-flex align-items-stretch mb-mb-5 mb-4">
                <a href="{{ route('tracks-by-artist', ['id' => $artist->id]) }}" class="card card--reciter mb-0">
                    <div class="card--reciter__image" style="background-image: url('{{ \App\Helpers\Helper::format_image($artist->image_name, 0) }}');"></div>
                    <div class="card--reciter__content">{{ $artist->name}} ({{ $artist->track_count}})</div>
                </a>
            </div>
        @endforeach    
    </div>
    <div class="mt-2">
        <div class="ajax-load">
            Loading
        </div>
    {{-- {!! $artists->links() !!} --}}
    </div>
    <!-- New Collection eded --> 
    <a href="https://docs.google.com/forms/d/e/1FAIpQLSfYmKg_CrqJE-Vq4Is5Nid2Qat-FAVCqHc689NA1o1MsvPBKA/viewform?vc=0&amp;c=0&amp;w=1&amp;flr=0&amp;usp=mail_form_link">              
        <button type="button" class="btn btn--ordinary btn--small">Request to Add reciter</button>  
    </a>                
          
    <!-- New Collection eded -->	  
</div>

</main>
<x-tags :tags="$tags"/>
<x-genres :genres="$genres"/>
@endsection
@push('pagination')
<script type="text/javascript">
	var page = 1;
    var lastpage = false;
    var Loading = false;

    $(window).scroll(function() {
        var hT = $('.ajax-load').offset().top,
            hH = $('.ajax-load').outerHeight(),
            wH = $(window).height(),
            wS = $(this).scrollTop();
        if (wS > (hT+hH-wH)){
            if(!lastpage && !Loading){
                page++;
	            loadMoreData(page);
            }

        }
    });


	function loadMoreData(page){
	  $.ajax(
	        {
	            url: '?page=' + page,
                type: "get",
	            beforeSend: function()
	            {
	                $('.ajax-load').show();
                    Loading = true;
	            }
	        })
	        .done(function(data)
	        {
	            if(data.html == '' ){
                    lastpage = true;
	                $('.ajax-load').html("No more records found");
	                return;
	            }
	            $('.ajax-load').hide();
	            $("#pagination-data").append(data.html);
                Loading = false;

	        })

	        .fail(function(jqXHR, ajaxOptions, thrownError)
	        {
	              alert('server not responding...');
	        });
	}
</script>
@endpush

