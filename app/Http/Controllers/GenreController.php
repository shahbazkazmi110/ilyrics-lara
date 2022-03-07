<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Genre;
use App\Models\Track;

class GenreController extends Controller
{
    public function index()
    {
        $data =  DB::table("genre")
        ->selectRaw('genre.*, COUNT(track.genres) as track_count')
        // ->selectRaw('artist.id,artist.name,artist.resolution,artist.image_name,track.artists,COUNT(track.artists) as count_art')
        //->join('track', 'track.genres', '=', 'genre.id')
        ->join('track',DB::raw("FIND_IN_SET(genre.id,track.genres)"),'>',DB::raw("'0'"))
        ->where('track.status',1)
        ->orderBy('genre.title','ASC')
        ->groupBy("track.genres")
        ->limit(6)
        ->get();
        return $data;
    }
}
