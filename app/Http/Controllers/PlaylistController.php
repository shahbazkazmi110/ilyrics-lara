<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Playlist;

class PlaylistController extends Controller
{
    public function index()
    {
        //Featured Playlist Query
        
        $playlist = DB::table('playlist')
        ->selectRaw('playlist.id, playlist.title, playlist.user_id, playlist.resolution, saved_playlist.id AS saved, playlist.image_name')
        ->join('saved_playlist', 'saved_playlist.playlist_id', '=', 'playlist.id')
        //->orderBy('playlist.display_order')
        ->orderBy('playlist.created', 'DESC')
        ->limit(20)
        ->get();
 
        return $playlist;
    }

}
