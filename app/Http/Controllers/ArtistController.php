<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Artist;
use App\Models\Track;
use App\Models\Genre;

class ArtistController extends Controller
{
    public function index()
    {

        $artists = DB::table('artist')
        ->join('genre', 'artist.genres', '=', 'genre.id')
        ->groupBy($single_genre)
        ->select('artist.name', 'genre.id')
        ->limit(10)
        ->get();

         return $artists;

    }
}
