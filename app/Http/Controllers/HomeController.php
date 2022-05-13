<?php

namespace App\Http\Controllers;

use App\Http\Resources\ArtistResource;
use Illuminate\Http\Request;
use App\Models\{Album, Artist, Genre, Image, Language, Playlist, SavedPlaylist, Tag, Track};
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        
        // ArtistResource::collection(Artist::getPopularArtist());
        $data["popular_artists"] = Artist::getPopularArtist();
        $data["tags"] = Tag::orderBy('title', 'ASC')->get();
        $data["genres"] = Genre::getGenre();
        $data["popular_playlists"] = Playlist::getFeaturedPlaylist();
        $data["popular_tracks"] = Track::getPopularTracks();

        return view('home', $data);

    }
    public function myCollection(){
        $data["my_playlists"] = Playlist::where('user_id',Auth::user()->id)->get();
        $data["saved_playlists"] = SavedPlaylist::where('user_id',Auth::user()->id)->get();
        $data["tags"] = Tag::orderBy('title', 'ASC')->get();
        $data["genres"] = Genre::getGenre();
        dd($data);
        return view('my-collections',$data);
    }
}
