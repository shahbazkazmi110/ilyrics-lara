<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlaylistTrack extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'playlist_track';
    protected $fillable = [
        'track_id','playlist_id','created'
    ];
}
