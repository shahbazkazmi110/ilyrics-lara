<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Artist;


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
        $data = Track::select('track.id', 'track.audio_type', 'track.title', 'artist.name AS artists', 'track.view_count', 'track.resolution', 'track.contributor_id', 'track.modified', 'track.album_year', 'artist.id AS artist_id', 'artist.name AS artist_name', 'artist.image_name')//, 'favourite.user_id') 
        //->join('favourite', 'track.id', '=', 'favourite.track_id')
        ->join('artist', 'track.artists', '=', 'artist.id')
        ->whereNotNull('track.album_year')
        ->orderBy('track.created', 'DESC')
        ->limit(8)
        ->get();

        return $data;
    }
    
}
