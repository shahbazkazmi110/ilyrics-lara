<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class Playlist extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'playlist';
    protected $fillable = [
        'title','user_id','admin_id','created','saving_count','image_name','resolution','status','featured','image_uploaded_by_admin','display_order'
    ];

    public static function getFeaturedPlaylist()
    {
        $playlist = Playlist::selectRaw('playlist.id, playlist.title, playlist.user_id, playlist.resolution, playlist.image_name, COUNT(playlist_track.track_id) as track_count')
        ->where('playlist.featured', 1)
        ->where('playlist.status', 1)
        ->join('playlist_track', 'playlist.id', '=', 'playlist_track.playlist_id')
        ->orderBy('playlist.display_order', 'ASC')
        ->groupBy('playlist.id')
        ->limit(6)
        ->get();
 
        return $playlist;
    }
}
