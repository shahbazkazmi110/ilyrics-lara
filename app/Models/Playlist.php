<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class Playlist extends Model
{
    use HasFactory;
    protected $table = 'playlist';

    public static function getFeaturedPlaylist()
    {
        $playlist = DB::table('playlist')
        ->selectRaw('playlist.id, playlist.title, playlist.user_id, playlist.resolution, saved_playlist.id AS saved, playlist.image_name')
        ->join('saved_playlist', 'saved_playlist.playlist_id', '=', 'playlist.id')
        //->orderBy('playlist.display_order')
        ->orderBy('playlist.created', 'DESC')
        ->limit(6)
        ->get();
 
        return $playlist;
    }
}
