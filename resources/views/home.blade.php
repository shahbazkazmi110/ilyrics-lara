@extends('layout.base')
@section('banner')
<div class="container">
	<div class="banner">
		<div class="row pt-5">
			<div class="col-12 col-md-6 align-self-center">
				<div class="home-page">
					<h1 tabindex="0">Recite lyrics that makes a difference in peoples lives</h1>					
					<div class="search-input-group mb-3 mt-5">
					  <input id="home-search" type="text" class="keyword-search form-control form-control--large" placeholder="Search for Islamic Lyrics Here" aria-label="Recipient's username" aria-describedby="search-addon2">
					  {{-- <button class="btn btn--large" type="button" id="search-addon2" style="min-width:80px;"><img width="20" height="20" src="{{ asset('media/search_white.svg')}}" alt="search"></button> --}}
					  <div id="suggesstion-box"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
@section('content')

<main>
	<div class="container pt-5 mt-5">
		<!-- Recommended Playlists -->
		<div class="row pb-5">
			<div class="col-12 col-md">
				<h2 class="h2__underline" tabindex="0">Recommended Playlists</h2>
				{{-- <p style="max-width:700px;">In publishing and graphic design, Lorem ipsum is a placeholder text commonly.</p> --}}
			</div>
			<div class="col-md-auto col-12 pt-md-5 pt-2">
				<a href="{{ route('playlists') }}">
					<button type="button" class="btn btn--ordinary btn--small">View All Playlists</button>
				</a>
			</div>
			
		</div>

		<div class="row mb-5 pb-5">
			@foreach($popular_playlists as $playlist)
				<x-playlist-card :playlist="$playlist"/>
			@endforeach
		</div>
		<!-- Recommended Playlists ended -->
		<!-- New Collection -->
		<div class="row pb-5">
			<div class="col-12 col-md">
				<h2 class="h2__underline" tabindex="0">New Collection</h2>
				{{-- <p style="max-width:700px;">In publishing and graphic design, Lorem ipsum is a placeholder text commonly.</p> --}}
			</div>
			<div class="col-md-auto col-12 pt-md-5 pt-2">
				<a  href="{{ route('tracks') }}" >
					<button type="button" class="btn btn--ordinary btn--small">View All Tracks</button>
				</a>
			</div>
			
		</div>
		
		<div class="row mb-5 pb-5">
			@foreach ($popular_tracks as $track)
			@php
				$favourite = \App\Helpers\Helper::isFavourite($track->id,Auth::user()->id ?? null);
			@endphp
				<div class="col-md-6 col-12">
					<a href = "{{ route('track-by-id', ['track_id' => $track->id] ) }}">
						<div class="card card--layrics">
							<div class="card--layrics__image" style="background-image: url('{{ \App\Helpers\Helper::format_image($track->image_name) }}');"></div>
							<div class="card--layrics__content">
								<h5 class="mb-0 card--layrics__content__title" tabindex="0" href="{{ route('track-by-id', ['track_id' => $track->id]) }}">
										{{$track->title}}</h5>
								<a data-page="artist" href="{{ route('tracks-by-artist', ['id' => $track->artist_id]) }}" class="card--layrics__content__subtitle">{{$track->artists}}</a>
								<div style="text-align: left">{{gmdate('i:s', $track->track_duration)}}</div>
							</div>							
							<div class="card--layrics__options">
								<div class="dropdown float-end">
									<a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false">
										<img src="{{ asset('media/dote_dote_dote_2.svg')}}" width="48" height="50" alt="dot-icon">
									</a>
									<ul class="dropdown-menu dropdown-menu-end mt-2" aria-labelledby="dropdownMenuButton1">
										@if(Auth::user())
										<li><a class="dropdown-item toggle-favourite" href="#" data-track-id="{{ $track->id }}" data-is-fav="{{ $favourite }}" ><img class="mr-2" src="{{ asset('media/file-earmark-plus.svg')}}" alt="favourite"> <span>{{ $favourite == 2 ? 'Add Favourite' : 'Remove Favourite'}}</span></a></li>	
										<li><a class="dropdown-item add-playlist" data-image-name="{{ $track->image_name }}" data-track-id="{{ $track->id }}" data-bs-toggle="modal" data-bs-target="#addPlaylistModal" ><img class="mr-2" src="{{ asset('media/collection-play.svg')}}" alt="add-to-playlist"> Add to Playlist</a></li>
       									@php $file_url = \App\Helpers\Helper::format_track($track->audio_type == 1 ? $track->track_name : $track->audio_link,$track->audio_type); @endphp
										<li><a class="dropdown-item ile-download" href="{{ $file_url }}" target="_blank" data-track-id="{{ $track->id }}"><img class="mr-2" src="{{ asset('media/file-earmark-arrow-down.svg')}}" alt="download"> Download</a></li>
										@else
										<li><a class="dropdown-item" href="{{ route('login') }}" ><img class="mr-2" src="{{ asset('media/file-earmark-plus.svg')}}" alt="add-to-fav"> <span >Add Favourite</span></a></li>
										{{-- <li><a class="dropdown-item" href="{{ route('login') }}" ><img class="mr-2" src="{{ asset('media/collection-play.svg')}}"> Play All</a></li> --}}
										<li><a class="dropdown-item" href="{{ route('login') }}" ><img class="mr-2" src="{{ asset('media/file-earmark-arrow-down.svg')}}" alt="download"> Download</a></li>
										@endif
										<li><a class="dropdown-item share" href="#" addthis:description="see this collection" addthis:title="{{$track->title}}" addthis:url="{{ route('track-by-id', ['track_id' => $track->id]) }}"><img class="mr-2" src="{{ asset('media/share-fill.svg')}}" alt="share"> Share</a></li>
									</ul>
								</div>
							</div>							
						</div>
					</a>
				</div>
			@endforeach
		</div>
		<!-- New Collection eded -->
	
		<!-- Popular Reciters starts-->
		<div class="row pb-5">
			<div class="col-12 col-md">
				<h2 class="h2__underline" tabindex="0">Popular Reciters</h2>
				<!-- <p style="max-width:400px;">In publishing and graphic design, Lorem ipsum is a placeholder text commonly.</p> -->
			</div>
			<div class="col-md-auto col-12 pt-md-5 pt-2">
				<a href="{{ route('reciters') }}">
					<button type="button" class="btn btn--ordinary btn--small">View all Reciters</button>
				</a>
			</div>
			
			
		</div>
		
		<div class="row mb-5 pb-5">
			@foreach ($popular_artists as $artist)
				<div class="col-xl-2 col-lg-3 col-md-4 col-6">
					<a href="{{ route('tracks-by-artist', ['id' => $artist->id]) }}">
						<div class="card card--playlist">
							<div class="card--playlist__image" style="background-image: url('{{ \App\Helpers\Helper::format_image($artist->image_name) }}');">
								{{-- <div class="dropdown float-end">
									<a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false">
										<img src="{{ asset('media/dote_dote_dote.svg')}}">
									</a>
									<ul class="dropdown-menu dropdown-menu-end mt-2" aria-labelledby="dropdownMenuButton1">
										<li><a class="dropdown-item" href="#"><img class="mr-2" src="{{ asset('media/file-earmark-plus.svg')}}"> Add to your Playlist</a></li>
										<li><a class="dropdown-item" href="#"><img class="mr-2" src="{{ asset('media/collection-play.svg')}}"> Play All</a></li>
										<li><a class="dropdown-item" href="#"><img class="mr-2" src="{{ asset('media/file-earmark-arrow-down.svg')}}"> Download</a></li>
										<li><a class="dropdown-item" href="#"><img class="mr-2" src="{{ asset('media/share-fill.svg')}}"> Share</a></li>
									</ul>
								</div> --}}
							</div>
							<div class="card--playlist__content">
								{{$artist->name}}
							</div>
							<div class="card--playlist__tracks">{{$artist->track_count}} Collections</div>
						</div>
					</a>
				</div>
			@endforeach	
		</div>
		<!-- Popular Reciters end -->
	</div>
</main>
<x-tags :tags="$tags"/>
<x-genres :genres="$genres"/>
@endsection
@push('scripts')
<script>

$(".keyword-search").keypress(function(e){
	if (e.which == '13') {
        var keyword = $(this).val();
		window.location.href = "{{ url('search')}}"+'?keyword='+keyword;
    }

  });

$("#home-search").keyup(function(){
	url = "{{ route('search-tracks')}}";
	homeAutoComplete(url,'home-search');
  });

function hidebox(id){
	if($('#'+id).val() ==  ''){
		$('#'+id).siblings('#suggesstion-box').hide();
		return;
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
				hidebox(id);
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
