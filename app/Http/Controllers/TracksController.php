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


        // Popular Artist Query Added
        $data =  DB::table("artist")
        ->selectRaw('artist.id,artist.name,artist.resolution,artist.image_name,COUNT(track.artists) as count_art')
        // ->selectRaw('artist.id,artist.name,artist.resolution,artist.image_name,track.artists,COUNT(track.artists) as count_art')
        ->where('artist.status',1)
        ->join('track', 'track.artists', '=', 'artist.id')
        // ->join('track',DB::raw("FIND_IN_SET(artist.id,track.artists)"),'>',DB::raw("'0'"))
        ->where('track.status',1)
        ->orderBy('artist.listening_count','DESC')
        ->groupBy("track.artists")
        ->limit(6)
        ->get();
        return $data;
    }
}
