<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use App\Models\Genre;
use App\Models\Playlist;
use App\Models\Tag;
use App\Models\Test;
use Illuminate\Http\Request;
use App\Models\Track;
use Illuminate\Support\Facades\DB;

class TracksController extends Controller
{
    public function index(){

        $data = DB::table('track')
        ->select('track.id', 'track.audio_type', 'track.title', 'artist.name AS artists', 'track.view_count', 'track.resolution',
                 'track.contributor_id', 'track.modified', 'track.album_year', 'artist.id AS artist_id',
                  'artist.name AS artist_name', 'artist.image_name')//, 'favourite.user_id') 
        //->join('favourite', 'track.id', '=', 'favourite.track_id')
        ->join('artist', 'track.artists', '=', 'artist.id')
        ->whereNotNull('track.album_year')
        ->where('track.status', 1)
        ->orderBy('track.created', 'DESC')
        ->get();

        return $data;

    }

    public function getTracksByTag($id)
    {
        $data["tracks"] = Track::getAllTracks();
        $data["tags"] = Tag::orderBy('title', 'ASC')->get();
        $data["genres"] = Genre::all();

        $data["tag_tracks"] = DB::table('track')
        ->select('track.id', 'track.audio_type', 'track.title', 'track.artists', 'track.view_count', 'track.resolution', 
                'track.contributor_id', 'track.modified', 'track.album_year', 'artist.id AS artist_id', 
                'artist.name AS artist_name', 'artist.image_name')
        ->join('artist', 'track.artists', '=', 'artist.id')
        ->where('track.tags', 'like', '%'.$id.'%')
        ->orderBy('track.created', 'DESC')
        ->get();

        $data["tag_detail"] = DB::table('tag')
        ->select('*')
        ->where('id', '=', $id)
        ->get();

        return $data;
    }

    public function getTracksByArtist($id)
    {
        $data["tracks"] = Track::getAllTracks();
        $data["tags"] = Tag::orderBy('title', 'ASC')->get();
        $data["genres"] = Genre::all();
        $data["artist_tracks"] = Track::
        selectRaw('track.id, track.audio_type, track.title, artist.name as track_artists, track.view_count, track.resolution, track.contributor_id, 
                    track.modified, track.album_year, track.track_duration as audio_duration, track.remote_duration, track.audio_link,
                    artist.id AS artist_id, artist.name as artist_name, artist.image_name, track.track_name')
        ->join('artist', DB::raw("FIND_IN_SET(artist.id,track.artists)"),'>',DB::raw("'0'"))
        ->where('track.status', 1)
        ->whereRaw("find_in_set('".$id."',track.artists)")
        ->orderBy('track.title', 'ASC')
        ->paginate(10);

        $data["artist_detail"] = Artist::
        selectRaw('artist.name, artist.resolution, artist.description, artist.image_name, COUNT(track.artists) as track_count')
        ->join('track', 'artist.id', '=', 'track.artists')
        ->where('track.status', 1)
        ->where('artist.id', 'LIKE', '%'.$id.'%')
        ->first();

        return view('artist.artist', $data);

    }


    public function getTracksByPlaylist($id)
    {

        $data["tracks"] = Track::getAllTracks();
        $data["tags"] = Tag::orderBy('title', 'ASC')->get();
        $data["genres"] = Genre::all();

        $data['playlist_tracks'] = Track::
        selectRaw('track.id,track.audio_type, track.title,  GROUP_CONCAT(artist.name) as artists, artist.id as artist_id, 
                track.view_count, track.resolution, track.contributor_id, track.modified, track.album_year, track.track_duration,
                track.remote_duration, artist.image_name, track.track_name,track.audio_link' )
        // selectRaw('track.*,GROUP_CONCAT(artist.name) as artists')
        ->join('artist', DB::raw("FIND_IN_SET(artist.id,track.artists)"),'>',DB::raw("'0'"))
        ->join('playlist_track', 'track.id', '=', 'playlist_track.track_id')
        ->where('playlist_track.playlist_id', '=', $id)
        ->where('track.status',1)
        ->orderBy('playlist_track.created', 'DESC')
        ->groupBy('track.id')
        ->paginate(10);

        $data["playlist_detail"] = Playlist::selectRaw('playlist.id, title, resolution, image_name, COUNT(playlist_track.track_id) as count')
        ->join('playlist_track', 'playlist.id', '=', 'playlist_track.playlist_id')
        ->where('playlist.id', '=', $id)
        ->first();


        return view('playlist.playlist',$data);

    }

    public function getTracks($id)
    {
        
        $data["tracks"] = Track::getAllTracks();
        $data["tags"] = Tag::orderBy('title', 'ASC')->get();
        $data["genres"] = Genre::all();


        //relations created with Favourite, Artist, Genre
        // Track List
        $data["track_list"] = Track::
        select('track.id', 'track.title', 'track.artists', 'track.genres', 'track.tags', 'track.view_count',
                 'track.resolution', 'track.resolution', 'track.contributor_id', 'track.modified', 'track.album_year',
                 'artist.id AS artist_id', 'artist.name AS artist_name', 'artist.image_name',  'artist.resolution as artist_resolution', 
                 'genre.title as genres_title', 'track.track_duration'
                )
        ->join('artist', 'track.artists', '=', 'artist.id')
        ->join('genre', DB::raw("FIND_IN_SET(genre.id,track.genres)"),'>',DB::raw("'0'"))
        ->where('track.id', '=', $id)
        ->where('track.status', 1)
        ->get();

        $artist_id = DB::table('track')->select('artists')->where('id', '=', $id)->get();
        //dd($artist_id);
        $data["track_list"]["artist_track_counter"] = Track::selectRaw('COUNT(id) as track_counts')
                                                            ->where('artists', 'LIKE', '%'.$artist_id.'%')
                                                            ->first();

        // dd($artist_id, $data["track_list"]["artist_track_counter"]);
        return $data;
    }
}
