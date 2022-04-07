<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Playlist;
use App\Models\Tag;
use App\Models\Genre;

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

    public function getAllPlaylists(Request $request){

        $data["playlists"] = Playlist::select('id', 'title', 'user_id', 'image_name', 'resolution')
        ->where('featured', 1)
        ->where('status', 1)
        ->orderBy('display_order', 'ASC')
        ->paginate(20);
        // ->get();

        if ($request->ajax()) {
            $view = view('playlist.playlist-pagination',$data)->render();
            return response()->json(['html'=>$view]);
        }

        $data["tags"] = Tag::orderBy('title', 'ASC')->get();
        $data["genres"] = Genre::all();

        return view('playlist.playlists',$data);
    }

}
