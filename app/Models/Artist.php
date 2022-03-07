<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Models\Genre;
use App\Models\Track;

class Artist extends Model
{
    use HasFactory;
    protected $table = 'artist';

    public function genres()
    {
        return $this->hasMany(Genre::class);
    }


    public function tracks()
    {
        return $this->hasMany(Track::class);
    }

    public static function getPopularArtist()
    {
        // Popular Artist Query Added
        $data =  DB::table("artist")
        ->selectRaw('artist.id,artist.name,artist.resolution,artist.image_name,COUNT(track.artists) as track_count')
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
