<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Playlist;
use App\Models\Tag;
use App\Models\Genre;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

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
        $data["genres"] = Genre::getGenre();

        return view('playlist.playlists',$data);
    }

    public function addPlaylist(Request $request){
        $request->validate([
            'title' => 'required|min:3|max:255',
            'image_name' => 'required',
        ]);
        Playlist::create([
            'title' =>  $request->title, 
            'user_id' => Auth::user()->id, 
            'admin_id' => 1, 
            'created' => Carbon::now(), 
            'saving_count' => 0,
            'image_name' => $request->image_name,
            'resolution' => '300:270',
            'status' => 2,
            'featured' => 2,
            'image_uploaded_by_admin' => 2,
            'display_order' => null,
        ]);
        return response()->json([
            'status' => 200,
            'message' => 'Playlist Created',
        ]);
    }

    public function updatePlaylist($id,Request $request){
        $request->validate([
            'title' => 'required|min:3|max:255',
        ]);
        $playlist = Playlist::find($id);
        $playlist->update([
            'title' =>  $request->title, 
            'user_id' => Auth::user()->id, 
            'created' => Carbon::now(), 
        ]);
        
        return response()->json([
            'status' => 200,
            'message' => 'Playlist Updated',
        ]);
    }

    function deletePlaylist($id){
        Playlist::find($id)->delete();
    }
    public function getUserPlaylists(){

        return Playlist::select('id', 'title', 'user_id', 'image_name', 'resolution')
        ->where('user_id', Auth::user()->id)
        ->where('status', 2)
        ->orderBy('display_order', 'ASC')->get();
    }
}
