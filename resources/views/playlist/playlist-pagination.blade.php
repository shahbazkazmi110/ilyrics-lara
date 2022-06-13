@foreach ($playlists as $playlist) 
    <x-playlist-card :playlist="$playlist"/>
@endforeach