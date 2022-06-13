@extends('layout.base')
@section('banner')
@endsection
@section('content')
<div class="container pt-5 mt-5">
    
    <!-- My Playlist -->
    <div class="row pb-4">
        <div class="col-12 col-md">
            <h2 class="h2__underline" tabindex="0">My Playlist</h2>
        </div>
        <div class="col-md-auto col-12 pt-md-0 pt-2">
            <a href="{{ route('playlists') }}">
                <button type="button" class="btn btn--ordinary btn--small">View All Playlists</button>
            </a>    
        </div>
    </div>
    <div class="row mb-5 pb-5">
        @if($my_playlists->count())
        @foreach($my_playlists as $playlist)
            <x-playlist-card :playlist="$playlist"/>
        @endforeach
        @else
            <p>No Playlists Added</p>    
        @endif
    </div>
    <!-- My Playlist ended -->
    
    
    
    <!-- Saved Playlist -->
    <div class="row pb-4">
        <div class="col-12 col-md">
            <h2 class="h2__underline" tabindex="0">Saved Playlist</h2>
        </div>
        {{-- <div class="col-md-auto col-12 pt-md-0 pt-2">
                <button type="button" class="btn btn--ordinary btn--small">view all saved Playlists</button>
        </div> --}}
    </div>

    <div class="row mb-5 pb-5">
        @if($saved_playlists->count())
        @foreach($saved_playlists as $playlist)
            <x-playlist-card :playlist="$playlist"/>
        @endforeach            
        @else
            <p>No Saved Playlists Available</p>
        @endif
    </div>
    <!-- Saved Playlist ended -->
    
    <!-- Favourite Tracks -->
    <div class="row pb-4">
        <div class="col-12 col-md">
            <h2 class="h2__underline" tabindex="0">Favourite Tracks</h2>
        </div>
        <div class="col-md-auto col-12 pt-md-0 pt-2">
            <a  href="{{ route('tracks') }}" >
                <button type="button" class="btn btn--ordinary btn--small">View All Tracks</button>
            </a>    
        </div>
    </div>
    <div class="row mb-5 pb-5">
        @if ($favourite->count())
        @foreach ($favourite as $track)
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
                                    <img src="{{ asset('media/dote_dote_dote_2.svg')}}">
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end mt-2" aria-labelledby="dropdownMenuButton1">
                                    @if(Auth::user())
                                    <li><a class="dropdown-item toggle-favourite" href="#" data-track-id="{{ $track->id }}" data-is-fav="{{ $favourite }}" ><img class="mr-2" src="{{ asset('media/file-earmark-plus.svg')}}"> <span>{{ $favourite == 2 ? 'Add Favourite' : 'Remove Favourite'}}</span></a></li>	
                                    <li><a class="dropdown-item add-playlist" data-image-name="{{ $track->image_name }}" data-track-id="{{ $track->id }}" data-bs-toggle="modal" data-bs-target="#addPlaylistModal" ><img class="mr-2" src="{{ asset('media/collection-play.svg')}}"> Add to Playlist</a></li>
                                    @php $file_url = \App\Helpers\Helper::format_track($track->audio_type == 1 ? $track->track_name : $track->audio_link,$track->audio_type); @endphp
                                    <li><a class="dropdown-item ile-download" href="{{ $file_url }}" target="_blank" data-track-id="{{ $track->id }}"><img class="mr-2" src="{{ asset('media/file-earmark-arrow-down.svg')}}"> Download</a></li>
                                    @else
                                    <li><a class="dropdown-item" href="{{ route('login') }}" ><img class="mr-2" src="{{ asset('media/file-earmark-plus.svg')}}"> <span >Add Favourite</span></a></li>
                                    {{-- <li><a class="dropdown-item" href="{{ route('login') }}" ><img class="mr-2" src="{{ asset('media/collection-play.svg')}}"> Play All</a></li> --}}
                                    <li><a class="dropdown-item" href="{{ route('login') }}" ><img class="mr-2" src="{{ asset('media/file-earmark-arrow-down.svg')}}"> Download</a></li>
                                    @endif
                                    <li><a class="dropdown-item share" href="#" addthis:description="see this collection" addthis:title="{{$track->title}}" addthis:url="{{ route('track-by-id', ['track_id' => $track->id]) }}"><img class="mr-2" src="{{ asset('media/share-fill.svg')}}"> Share</a></li>
                                </ul>
                            </div>
                        </div>							
                    </div>
                </a>
            </div>
		@endforeach
        @else
            <p>No Favourites Available</p>
        @endif
    </div>
    <!-- Favourite Tracks -->
    
</div>
<x-tags :tags="$tags"/>
<x-genres :genres="$genres"/>
@endsection