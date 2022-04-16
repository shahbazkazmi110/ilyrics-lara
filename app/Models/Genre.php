<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Genre extends Model
{
    use HasFactory;
    protected $table = 'genre';

    public static function getGenre()
    {
        $data =  DB::table("genre")
        ->selectRaw('genre.*, COUNT(track.genres) as track_count')
        // ->selectRaw('artist.id,artist.name,artist.resolution,artist.image_name,track.artists,COUNT(track.artists) as count_art')
        //->join('track', 'track.genres', '=', 'genre.id')
        ->join('track',DB::raw("FIND_IN_SET(genre.id,track.genres)"),'>',DB::raw("'0'"))
        ->where('track.status',1)
        ->orderBy('genre.title','ASC')
        ->groupBy("track.genres")
        ->limit(10)
        ->get();
        return $data;
    }
}
