<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class Genre extends Model
{
    use HasFactory;
    protected $table = 'genre';

    public static function getGenre()
    {
        if (Cache::has('footer_genres')){
            $data = Cache::get('footer_genres');     						
        }else{
            $data =  Genre::selectRaw('genre.*, COUNT(track.genres) as track_count')
            ->join('track',DB::raw("FIND_IN_SET(genre.id,track.genres)"),'>',DB::raw("'0'"))
            ->where('track.status',1)
            ->orderBy('genre.title','ASC')
            ->groupBy("track.genres")
            ->limit(10)
            ->get();
            Cache::put('footer_genres', $data, now()->addWeeks(1));				
        }
        return $data;
    }
}
