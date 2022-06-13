<?php

namespace App\Http\Controllers;

use App\Http\Resources\TrackResource;
use App\Models\Artist;
use App\Models\Favourite;
use App\Models\Genre;
use App\Models\Playlist;
use App\Models\Tag;
use Illuminate\Http\Request;
use App\Models\Track;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TracksController extends Controller
{

    public function index(){

        $data['tracks'] = Track::selectRaw('track.id, track.audio_type, track.title, artist.name as track_artists, track.view_count, track.resolution, track.contributor_id, 
        track.modified, track.album_year, track.track_duration, track.remote_duration, track.audio_link,
        artist.id AS artist_id, artist.name as artist_name, artist.image_name, track.track_name')//, 'favourite.user_id') 
        //->join('favourite', 'track.id', '=', 'favourite.track_id')
        ->join('artist', 'track.artists', '=', 'artist.id')
        ->whereNotNull('track.album_year')
        ->where('track.status', 1)
        ->orderBy('track.created', 'DESC')
        ->paginate(10);

        $data["tags"] = Tag::getTags();
        $data["genres"] = Genre::getGenre();
        return view('track.tracks', $data);

    }

    public function getTracksByTag($id, Request $request)
    {
        $data['tracks']  = Track::selectRaw('track.id, track.audio_type, track.title, artist.name as track_artists, track.view_count, track.resolution, track.contributor_id, 
                    track.modified, track.album_year, track.track_duration, track.remote_duration, track.audio_link,
                    artist.id AS artist_id, artist.name as artist_name, artist.image_name, track.track_name')
        ->join('artist', 'track.artists', '=', 'artist.id')
        ->where('track.tags', 'like', '%'.$id.'%')
        ->orderBy('track.created', 'DESC')
        ->paginate(10);
       
        // $data['tracks'] = TrackResource::collection($tracks)->response()->getData(true);
        // if ($request->ajax()) {
        //   return  $data;
        // }
       $data["tags"] = Tag::getTags();
        $data["genres"] = Genre::getGenre();
        $data["tag_detail"] = Tag::find($id);
        return view('tag.tags', $data);
    }

    public function getTracksByArtist($id, Request $request)
    {
        $data['tracks'] = Track::selectRaw('track.id, track.audio_type, track.title, artist.name as track_artists, track.view_count, track.resolution, track.contributor_id, 
                    track.modified, track.album_year, track.track_duration as audio_duration, track.remote_duration, track.audio_link,
                    artist.id AS artist_id, artist.name as artist_name, artist.image_name, track.track_name')
        ->join('artist', DB::raw("FIND_IN_SET(artist.id,track.artists)"),'>',DB::raw("'0'"))
        ->where('track.status', 1)
        ->whereRaw("find_in_set('".$id."',track.artists)")
        ->orderBy('track.title', 'ASC')
        ->paginate(10);

       $data["tags"] = Tag::getTags();
        $data["genres"] = Genre::getGenre();
        $data["artist_detail"] = Artist::selectRaw('artist.name, artist.resolution, artist.description, artist.image_name, COUNT(track.artists) as track_count')
        ->join('track', 'artist.id', '=', 'track.artists')
        ->where('track.status', 1)
        ->where('artist.id', $id)
        ->first();
        return view('artist.artist', $data);
    }

    public function getTracksByPlaylist($id, Request $request)
    {
        $data['tracks'] = Track::selectRaw('track.id,track.audio_type, track.title,  GROUP_CONCAT(artist.name) as track_artists, artist.id as artist_id, 
                track.view_count, track.resolution, track.contributor_id, track.modified, track.album_year, track.track_duration,
                track.remote_duration, artist.image_name, track.track_name,track.audio_link' )
        ->join('artist', DB::raw("FIND_IN_SET(artist.id,track.artists)"),'>',DB::raw("'0'"))
        ->join('playlist_track', 'track.id', '=', 'playlist_track.track_id')
        ->where('playlist_track.playlist_id', '=', $id)
        ->where('track.status',1)
        ->orderBy('playlist_track.created', 'DESC')
        ->groupBy('track.id')
        ->paginate(10); 

       $data["tags"] = Tag::getTags();
        $data["genres"] = Genre::getGenre();
        $data["playlist_detail"] = Playlist::selectRaw('playlist.id, title, resolution, image_name, COUNT(playlist_track.track_id) as count')
        ->join('playlist_track', 'playlist.id', '=', 'playlist_track.playlist_id')
        ->where('playlist.id', $id)
        ->first();

        return view('playlist.playlist',$data);

    }

    public function getTrack($track_id)
    {
        // Track List
        $data["track"] = Track::selectRaw('track.id,track.title,track.lyrics,track.artists,track.genres,track.tags,track.view_count,track.resolution,track.contributor_id,track.modified,track.album_year,track.track_name,track.transliteration, 
                 track.track_duration as audio_duration, track.audio_type, track.remote_duration, track.audio_link,
                 artist.id AS artist_id,  GROUP_CONCAT(artist.name) as track_artists,artist.image_name,  artist.resolution as artist_resolution'
                )
        ->join('artist', DB::raw("FIND_IN_SET(artist.id,track.artists)"),'>',DB::raw("'0'"))
        ->where('track.id', '=', $track_id)
        ->where('track.status', 1)
        ->first();

        // $artist_id = Track::select('artists')->where('id', $track_id)->first();
        // $data["track"]["artist_track_counter"] = Track::selectRaw('COUNT(id) as track_counts')->where('artists', 'LIKE', '%'.$artist_id->artists.'%')->get();
        
        $data["genres_title"] = Track::select('genre.title')
        ->join('genre', DB::raw("FIND_IN_SET(genre.id,track.genres)"),'>',DB::raw("'0'"))
        ->where('track.id', '=', $track_id)
        ->get();

        $data["tags"] = Tag::getTags();
        $data["genres"] = Genre::getGenre();
       
        return view('track.track_page', $data);
    }

    public function addFavorite($track_id)
    {
        $favourite = Favourite::firstOrCreate(
            [
                'user_id' => Auth::user()->id,
                'track_id' => $track_id,
            ],
            ['created' => Carbon::now()]
        );

        if ($favourite->wasRecentlyCreated) {
            return response()->json([
                    'status' => 200,
                    'message' => 'Added to Favourites',
                ]);
        } else {
            return response()->json([
                'status' => 200,
                'message' => 'Already Added to Favourites',
            ]);
        }
    }

    public function removeFavorite($track_id)
    {
        $favourite = Favourite::where('user_id',Auth::user()->id)->where('track_id',$track_id);
        if($favourite->count()){
            $favourite->delete();
            return response()->json([
                'status' => 200,
                'message' => 'Remove from Favourites',
            ]);
        }
        else{
            return response()->json([
                'status' => 200,
                'message' => 'No Record found in Favourite',
            ]);
        }
    }

}
