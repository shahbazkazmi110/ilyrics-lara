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
        $playlist = Playlist::selectRaw('id, title, user_id, resolution, image_name')
        ->where('playlist.featured', 1)
        ->where('status', 1)
        ->orderBy('playlist.display_order', 'ASC')
        ->limit(6)
        ->get();
 
        return $playlist;
    }
}
