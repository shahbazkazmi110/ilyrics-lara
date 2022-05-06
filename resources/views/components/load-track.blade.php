<div>
    <div id="ag2" class="audiogallery skin-wave auto-init" style="opacity:0; margin-top:30px;" data-options='{"cueFirstMedia": "on","autoplay": "off","autoplayNext": "on","design_menu_position": "bottom","enable_easing": "on","playlistTransition": "fade","design_menu_height": "200"}'>
        <div class="items">
            <div class="audioplayer-tobe skin-wave button-aspect-noir" data-thumb="'{{ \App\Helpers\Helper::format_image($track->image_name) }}'"
                data-type="audio"
                data-source="{{ \App\Helpers\Helper::format_track($track->audio_type == 1 ? $track->track_name : $track->audio_link,$track->audio_type) }}"
                data-options='{
                "settings_php_handler": "/ilyrics-lara/public/audioplayer/inc/php/publisher.php",
                "skinwave_comments_enable": "on",
                "skinwave_comments_retrievefromajax": "on",
                "pcm_data_try_to_generate": "on",
                "pcm_data_try_to_generate_wait_for_real_pcm": "on",
                "skinwave_wave_mode_canvas_waves_number": 3,
                "skinwave_wave_mode_canvas_waves_padding": 1,
                "skinwave_wave_mode_canvas_reflection_size": 0.25,
                "design_color_bg": "444444",
                "design_color_highlight": "aa4444"
                }'
                >
                <div class="meta-artist">
                <a href="{{ route('tracks-by-artist', ['id' => $track->artist_id]) }}"><span class="the-artist">{{$track->track_artists}}</span></a>
                <a href="{{ route('tracks-by-id', ['track_id' => $track->id]) }}"><span class="the-name">{{$track->title}}</span></a>
            </div>
            </div>
        </div>
    </div>
    @php
        $favourite = \App\Helpers\Helper::isFavourite($track->id, Auth::user()->id ?? null);
    @endphp
    @if($type=='list')
    <div class="border-bottom mb-2 pb-2 text-md-end text-center pt-2 pt-md-0">
        @if(Auth::user())
            <a href="#" class="btn btn-sharing toggle-favourite" type="button" data-track-id="{{ $track->id }}" data-is-fav="{{$favourite}}" >{{ $favourite == 2 ? 'Add Favourite' : 'Remove Favourite'}}</a>
            <a href="#" class="btn btn-sharing add-playlist" type="button" data-image-name="{{ $track->image_name }}" data-track-id="{{ $track->id}}" data-bs-toggle="modal" data-bs-target="#addPlaylistModal" >Add to Playlist</a>
            <a href="#" class="btn btn-sharing" type="button">Download</a>
            <a href="#" class="btn btn-sharing" type="button">Share</a>
        @else
            <a href="{{ route('login') }}" class="btn btn-sharing" type="button">Add Favourite</a>
            <a href="{{ route('login') }}" class="btn btn-sharing" type="button">Add to Playlist</a>
            <a href="{{ route('login') }}" class="btn btn-sharing" type="button">Download</a>
            <a href="{{ route('login') }}" class="btn btn-sharing" type="button">Share</a>
        @endif
    </div>
    @elseif($type=='single')
    <div class="d-block d-md-none pt-3">
        <div class="dropdown">
        <button class="btn btn--ordinary btn--small__extra dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" style="min-width:230px;">
            Add / Share / Download
        </button>
        @if(Auth::user())
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item toggle-favourite" href="#" data-track-id="{{ $track->id }}" data-is-fav="{{$favourite}}" >{{ $favourite == 2 ? 'Add Favourite' : 'Remove Favourite'}}</a></li>
                <li><a class="dropdown-item add-playlist" href="#" data-image-name="{{ $track->image_name }}" data-track-id="{{ $track->id}}" data-bs-toggle="modal" data-bs-target="#addPlaylistModal" >Add to Playlist</a></li>
                <li><a class="dropdown-item" href="#">Download</a></li>
                <li><a class="dropdown-item" href="#">Share</a></li>
            </ul>
        @else
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href="{{ route('login') }}">Add Favorites</a></li>
                <li><a class="dropdown-item" href="{{ route('login') }}">Add to Playlist</a></li>
                <li><a class="dropdown-item" href="{{ route('login') }}">Download</a></li>
                <li><a class="dropdown-item" href="{{ route('login') }}">Share</a></li>
            </ul>
        @endif
        </div>
    </div>
    <div class="text-end pt-2 pt-md-0 player_btns d-none d-md-block">
        <button class="btn btn--ordinary btn--small__extra" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Add Favorites</button>
        <button class="btn btn--ordinary btn--small__extra" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Add to Playlist</button>
        <button class="btn btn--ordinary btn--small__extra" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Download</button>
        <button class="btn btn--ordinary btn--small__extra" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Share</button>
    </div>
    @else 
    @endif
</div>