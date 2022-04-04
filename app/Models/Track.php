<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Artist;
use Illuminate\Support\Facades\DB;


class Track extends Model
{
    use HasFactory;
    protected $table = 'track';

    public function track()
    {
        return $this->belongsTo(Artist::class);
    }

    
    public static function getPopularTracks()
    {   
        $data = Track::select('track.id', 'track.audio_type', 'track.title', 'artist.name AS artists', 'track.view_count', 'track.resolution', 'track.contributor_id', 'track.modified', 'track.album_year', 'artist.id AS artist_id', 'artist.name AS artist_name', 'artist.image_name', 'artist.resolution as artist_resolution')//, 'favourite.user_id') 
        //->join('favourite', 'track.id', '=', 'favourite.track_id')
        ->join('artist', 'track.artists', '=', 'artist.id')
        ->whereNotNull('track.album_year')
        ->where('track.status', 1)
        ->orderBy('track.created', 'DESC')
        ->limit(8)
        ->get();

        return $data;
    }

    public static function getAllTracks()
    {
        $data["tracks"] =  DB::table('track')->select('track.id', 'track.audio_type', 'track.title', 
                                    'track.artists', 'track.view_count', 'track.resolution',
                                    'track.contributor_id', 'track.modified', 'track.album_year', 'artist.id AS artist_id',
                                    'artist.name AS artist_name', 'artist.image_name')
        ->join('artist', DB::raw("FIND_IN_SET(artist.id,track.artists)"),'>',DB::raw("'0'"))
        ->where('track.status',1)
        ->orderBy('track.created', 'DESC')
        ->limit(6)
        ->get();
        
        return $data["tracks"];

    }

    // public function artist(){
    //     return $this->hasOne(Artist::class, 'id', 'artists');
    // }
    
}
