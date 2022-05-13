<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Playlist;
use App\Models\Tag;
use App\Models\Genre;
use App\Models\PlaylistTrack;
use App\Models\SavedPlaylist;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class PlaylistController extends Controller
{
    public function index()
    {
        //Featured Playlist Query
        
        $playlist = Playlist::selectRaw('playlist.id, playlist.title, playlist.user_id, playlist.resolution, saved_playlist.id AS saved, playlist.image_name')
        ->join('saved_playlist', 'saved_playlist.playlist_id', '=', 'playlist.id')
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

    public function deletePlaylist($id){
        Playlist::find($id)->delete();
    }

    public function addToPlaylist($track_id,$playlist_id)
    {
        $playlist_track = PlaylistTrack::firstOrCreate(
            [
                'playlist_id' => $playlist_id,
                'track_id' => $track_id,
            ],
            ['created' => Carbon::now()]
        );

        if ($playlist_track->wasRecentlyCreated) {
            return response()->json([
                    'status' => 200,
                    'message' => 'Added to Playlist',
                ]);
        } else {
            return response()->json([
                'status' => 200,
                'message' => 'Already Added to Playlist',
            ]);
        }
    }

    public function getUserPlaylists(){

        return Playlist::select('id', 'title', 'user_id', 'image_name', 'resolution')
        ->where('user_id', Auth::user()->id)
        ->where('status', 2)
        ->orderBy('display_order', 'ASC')->get();
    }

    public function savePlaylist($playlist_id){
        $saved_playlist = SavedPlaylist::firstOrCreate(
            [
                'playlist_id' => $playlist_id,
                'user_id' => Auth::user()->id,
            ],
            ['created' => Carbon::now()]
        );

        if ($saved_playlist->wasRecentlyCreated) {
            return response()->json([
                    'status' => 200,
                    'message' => 'Playlist Saved',
                ]);
        } else {
            return response()->json([
                'status' => 200,
                'message' => 'Playlist Already Saved',
            ]);
        }

    }

    public function removePlaylist($playlist_id){
        $saved_playlist = SavedPlaylist::where('user_id',Auth::user()->id)->where('playlist_id',$playlist_id);
        if($saved_playlist->count()){
            $saved_playlist->delete();
            return response()->json([
                'status' => 200,
                'message' => 'Playlist Unsaved',
            ]);
        }
        else{
            return response()->json([
                'status' => 200,
                'message' => 'No Record found in Saved Playlist',
            ]);
        }
    }
}
