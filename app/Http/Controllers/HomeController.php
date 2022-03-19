<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Album, Artist, Genre, Image, Language, Playlist, Tag, Track};

class HomeController extends Controller
{
    public function index()
    {
        
        $data["popular_artists"] = Artist::getPopularArtist();
        $data["tags"] = Tag::orderBy('title', 'ASC')->get();
        $data["genres"] = Genre::all();
        $data["popular_playlists"] = Playlist::getFeaturedPlaylist();

        return view('home', $data);

    }
}
