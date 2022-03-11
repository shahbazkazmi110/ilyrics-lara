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
}
