<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\{Album, Artist, Genre, Image, Language, Playlist, Tag, Track};

class SearchController extends Controller
{
    //

    public function search_action(){

        $data["tracks"] = Track::getAllTracks();

        $data["tags"] = Tag::orderBy('title', 'ASC')->get();
        $data["genres"] = Genre::getGenre();

        $data["track_list"] = Track::select('track.id', 'track.audio_type', 'track.title', 'artist.name AS artists', 'track.view_count',
        'track.resolution', 'track.contributor_id', 'track.modified', 'track.album_year', 'track.track_duration',
        'artist.id AS artist_id', 'artist.name AS artist_name', 'artist.image_name', 'artist.resolution as artist_resolution')//, 'favourite.user_id') 
        ->join('artist', DB::raw("FIND_IN_SET(artist.id,track.artists)"),'>',DB::raw("'0'"))
       //->join('artist', 'track.artists', '=', 'artist.id')
       //->whereNotNull('track.album_year')
       ->where('track.status', 1)
       ->orderBy('track.title', 'ASC')
       ->limit(50)
       ->get();


       //return view('search', $data);

       return $data;

    }
}
