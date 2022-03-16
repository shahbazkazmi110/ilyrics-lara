<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Album, Artist, Genre, Image, Language, Playlist, Tag, Track};

class HomeController extends Controller
{
    public function index()
    {
        //popular artist
        //tags
        //genres
        //popular playlist
        //track

        
        $data["popular_artists"] = Artist::getPopularArtist();

        $data["tags"] = Tag::orderBy('title', 'ASC')->get();

        $data["genres"] = Genre::getGenre();

        //return $data;

        $data["popular_playlists"] = Playlist::getFeaturedPlaylist();

        //return $data;
        return view('home', $data);

        //return view("home", compact("data"));
    }
}
