<?php

namespace App\Http\Controllers;

use App\Http\Resources\ArtistResource;
use Illuminate\Http\Request;
use App\Models\{Album, Artist, Genre, Image, Language, Playlist, Tag, Track};

class HomeController extends Controller
{
    public function index()
    {
        
        // ArtistResource::collection(Artist::getPopularArtist());
        $data["popular_artists"] = Artist::getPopularArtist();;
        $data["tags"] = Tag::orderBy('title', 'ASC')->get();
        $data["genres"] = Genre::all();
        $data["popular_playlists"] = Playlist::getFeaturedPlaylist();
        $data["popular_tracks"] = Track::getPopularTracks();

        return view('home', $data);

    }
}
