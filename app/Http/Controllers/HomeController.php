<?php

namespace App\Http\Controllers;

use App\Http\Resources\ArtistResource;
use Illuminate\Http\Request;
use App\Models\{Album, Artist, Favourite, Genre, Image, Language, Playlist, SavedPlaylist, Tag, Track};
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

use function PHPUnit\Framework\fileExists;

class HomeController extends Controller
{
    public function index()
    {
        $data["popular_artists"] = Artist::getPopularArtist();
        $data["tags"] = Tag::getTags();
        $data["genres"] = Genre::getGenre();

        $data["popular_playlists"] = Playlist::getFeaturedPlaylist();
        $data["popular_tracks"] = Track::getPopularTracks();

        return view('home', $data);
    }
    public function myCollection()
    {
        $data["my_playlists"] = Playlist::selectRaw('playlist.id, playlist.title, playlist.user_id, playlist.resolution, playlist.image_name, COUNT(playlist_track.track_id) as track_count')
            ->where('playlist.user_id', Auth::user()->id)
            ->join('playlist_track', 'playlist.id', '=', 'playlist_track.playlist_id')
            ->orderBy('playlist.display_order', 'ASC')
            ->groupBy('playlist.id')
            ->get();


        $data["saved_playlists"] = Playlist::selectRaw('playlist.id, playlist.title, playlist.user_id, playlist.resolution, playlist.image_name, COUNT(playlist_track.track_id) as track_count')
            ->join('playlist_track', 'playlist.id', '=', 'playlist_track.playlist_id')
            ->join('saved_playlist', 'playlist.id', '=', 'saved_playlist.playlist_id')
            ->where('saved_playlist.user_id', Auth::user()->id)
            ->orderBy('playlist.display_order', 'ASC')
            ->groupBy('playlist.id')
            ->get();

        $data["favourite"]  = Track::selectRaw('track.id,track.audio_type, track.title,  GROUP_CONCAT(artist.name) as track_artists, artist.id as artist_id,track.view_count, track.resolution, track.contributor_id, track.modified, track.album_year, track.track_duration,track.remote_duration, artist.image_name, track.track_name,track.audio_link')
            ->join('artist', DB::raw("FIND_IN_SET(artist.id,track.artists)"), '>', DB::raw("'0'"))
            ->join('favourite', 'track.id', '=', 'favourite.track_id')
            ->where('favourite.user_id', Auth::user()->id)
            ->where('track.status', 1)
            ->groupBy('track.id')
            ->get();

        $data["tags"] = Tag::getTags();
        $data["genres"] = Genre::getGenre();

        return view('my-collections', $data);
    }

    public function profile()
    {
        $data['auth_user'] = Auth::user();
        $data["tags"] = Tag::getTags();
        $data["genres"] = Genre::getGenre();
        return view('my-profile', $data);
    }

    public function uploadImage(Request $request)
    {
        request()->validate([
            'image_name'  => 'required|mimes:jpg,png,jpeg|max:2048',
        ]);

        if ($file = $request->file('image_name')) {
            $oldImage = Auth::user()->image_name;
            $filename = uniqid() . Auth::user()->id . '.' . $file->getClientOriginalExtension();

            //store file into document folder
            $fileUploaded = \Illuminate\Support\Facades\Storage::disk('local')->put("public/images/" . $filename, file_get_contents($file));

            if ($fileUploaded) {
                //store your file into database
                $user = \App\Models\User::find(Auth::user()->id);
                $user->image_name = $filename;
                $user->save();

                if (fileExists(asset('images/' . $oldImage))) {
                    unlink(storage_path("app/public/images/" . $oldImage));
                }
                return Response()->json([
                    "success" => true,
                    "profile_image" => $filename
                ]);
            }
        }

        return Response()->json([
            "success" => false,
            "file" => ''
        ]);
    }

    public function uploadProfile(Request $request) {
        request()->validate([
            'username' => "required|min:3",
            'gender' => "required|in:1,2"
        ]);
        
        $user = \App\Models\User::find(Auth::user()->id);
        $user->username = $request->username;
        $user->gender = $request->gender;
        $user->save();
        
        return Response()->json([
            "success" => true,
            "message" => 'Profile updated successfully'
        ]);
    }
}
