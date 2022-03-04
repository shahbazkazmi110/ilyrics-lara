<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Playlist;

class PlaylistController extends Controller
{
    public function index()
    {
        //dd(Playlist::all(), 'Playlist');

        $playlist = Playlist::all();
 
        return $playlist->user;
    }

}
