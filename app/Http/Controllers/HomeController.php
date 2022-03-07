<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Album, Artist, Genre, Image, Language, Playlist, Tag, Track};

class HomeController extends Controller
{
    public function index()
    {
        //getAlbum
        //getArtist
        //getGenre
        //getImage
        //getLanguage
        //getPlaylist
        //getTag
        //getTrack

        //associative array

        
        $data["popular_artists"] = Artist::getPopularArtist();

        $data["tags"] = Tag::orderBy('title', 'ASC')
        ->get();

        $data["popular_playlists"] = Playlist::getFeaturedPlaylist();

        //return $data;
        return view('home', $data);

        //return view("home", compact("data"));
    }
}
