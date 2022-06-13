<div class="col-xl-2 col-lg-3 col-md-4 col-6">
    <a href="{{ route('tracks-by-playlist', ['id' => $playlist->id]) }}">				
        <div class="card card--playlist">
            <div class="card--playlist__image" style="background-image: url('{{ \App\Helpers\Helper::format_image($playlist->image_name,1) }}');">
                
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
                {{$playlist->title}}
            </div>
            <div>
                @if(Auth::user())
                    @php 
                        $saved =  \App\Helpers\Helper::isSavedPlaylist($playlist->id); 
                        $icon = $saved ? asset('media/bookmark-dark.svg') : asset('media/bookmark.svg');
                    @endphp	
                    <a href="#" class="toggle-save-playlist position-absolute" style="z-index:1;" data-saved="{{ $saved ? 'yes': 'no' }}" data-playlist-id="{{$playlist->id}}" >
                        <img src="{{ $icon }}" alt="Playlist Icon">
                    </a>
                @endif
            </div>
            <div class="card--playlist__tracks">Tracks : {{$playlist->track_count}}</div>
        </div>
    </a>
</div>