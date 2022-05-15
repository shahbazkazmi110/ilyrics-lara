<?php

namespace App\Http\Controllers;

use App\Http\Resources\ArtistResource;
use Illuminate\Http\Request;
use App\Models\{Album, Artist, Favourite, Genre, Image, Language, Playlist, SavedPlaylist, Tag, Track};
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {  
        $data["popular_artists"] = Artist::getPopularArtist();
        $data["tags"] = Tag::orderBy('title', 'ASC')->get();
        $data["genres"] = Genre::getGenre();
        $data["popular_playlists"] = Playlist::getFeaturedPlaylist();
        $data["popular_tracks"] = Track::getPopularTracks();

        return view('home', $data);

    }
    public function myCollection(){
        $data["my_playlists"] = Playlist::selectRaw('playlist.id, playlist.title, playlist.user_id, playlist.resolution, playlist.image_name, COUNT(playlist_track.track_id) as track_count')
            ->where('user_id',Auth::user()->id)    
            ->join('playlist_track', 'playlist.id', '=', 'playlist_track.playlist_id')
            ->orderBy('playlist.display_order', 'ASC')
            ->groupBy('playlist.id')
            ->get();


        $data["saved_playlists"] = Playlist::selectRaw('playlist.id, playlist.title, playlist.user_id, playlist.resolution, playlist.image_name, COUNT(playlist_track.track_id) as track_count')
            ->join('saved_playlist', 'playlist.id', '=', 'saved_playlist.playlist_id')
            ->where('saved_playlist.user_id',Auth::user()->id)
            ->join('playlist_track', 'playlist.id', '=', 'playlist_track.playlist_id')
            ->orderBy('playlist.display_order', 'ASC')
            ->get();

        $data["favourite"]  = Track::selectRaw('track.id,track.audio_type, track.title,  GROUP_CONCAT(artist.name) as track_artists, artist.id as artist_id,track.view_count, track.resolution, track.contributor_id, track.modified, track.album_year, track.track_duration,track.remote_duration, artist.image_name, track.track_name,track.audio_link' )
            ->join('artist', DB::raw("FIND_IN_SET(artist.id,track.artists)"),'>',DB::raw("'0'"))
            ->join('favourite', 'track.id', '=', 'favourite.track_id')
            ->where('favourite.user_id',Auth::user()->id)
            ->where('track.status',1)
            ->groupBy('track.id')
            ->get();
        $data["tags"] = Tag::orderBy('title', 'ASC')->get();
        $data["genres"] = Genre::getGenre();
        
        return view('my-collections',$data);
    }
}
