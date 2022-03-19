<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use App\Models\Test;
use Illuminate\Http\Request;
use App\Models\Track;
use Illuminate\Support\Facades\DB;

class TracksController extends Controller
{
    public function index(){

        $data = DB::table('track')
        ->select('track.id', 'track.audio_type', 'track.title', 'track.artists', 'track.view_count', 'track.resolution', 'track.contributor_id', 'track.modified', 'track.album_year', 'artist.id AS artist_id', 'artist.name AS artist_name', 'artist.image_name')//, 'favourite.user_id') 
        //->join('favourite', 'track.id', '=', 'favourite.track_id')
        ->join('artist', 'track.artists', '=', 'artist.id')
        ->whereNotNull('track.album_year')
        ->orderBy('track.created', 'DESC')
        ->get();

        return $data;

    }

    public function getTracksByTag($id)
    {

        $data["tracks"] = DB::table('track')
        ->select('track.id', 'track.audio_type', 'track.title', 'track.artists', 'track.view_count', 'track.resolution', 'track.contributor_id', 'track.modified', 'track.album_year', 'artist.id AS artist_id', 'artist.name AS artist_name', 'artist.image_name')
        ->join('artist', 'track.artists', '=', 'artist.id')
        ->where('track.status',1)
        ->whereNotNull('track.album_year')
        ->orderBy('track.created', 'DESC')
        ->limit(6)
        ->get();

        $data["tags"] = '';
        $data["genres"] = '';

        $data["tag_tracks"] = DB::table('track')
        ->select('track.id', 'track.audio_type', 'track.title', 'track.artists', 'track.view_count', 'track.resolution', 'track.contributor_id', 'track.modified', 'track.album_year', 'artist.id AS artist_id', 'artist.name AS artist_name', 'artist.image_name')
        ->join('artist', 'track.artists', '=', 'artist.id')
        ->where('track.tags', 'like', '%'.$id.'%')
        ->orderBy('track.created', 'DESC')
        ->get();

        $data["tag_detail"] = DB::table('tag')
        ->select('*')
        ->where('id', '=', $id)
        ->get();

        return $data;
    }

    public function getTracksByArtist($id)
    {
        dd($id);

    }


    public function getTracksByPlaylist($id)
    {
        dd($id);
        
    }
}
