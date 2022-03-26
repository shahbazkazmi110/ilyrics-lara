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
        ->select('track.id', 'track.audio_type', 'track.title', 'artist.name AS artists', 'track.view_count', 'track.resolution', 'track.contributor_id', 'track.modified', 'track.album_year', 'artist.id AS artist_id', 'artist.name AS artist_name', 'artist.image_name')//, 'favourite.user_id') 
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

        $data["tracks"] = DB::table('track')
        ->select('track.id', 'track.audio_type', 'track.title', 'track.artists', 'track.view_count', 'track.resolution', 'track.contributor_id', 'track.modified', 'track.album_year', 'artist.id AS artist_id', 'artist.name AS artist_name', 'artist.image_name')
        ->join('artist', 'track.artists', '=', 'artist.id')
        ->where('track.status',1)
        ->whereNotNull('track.album_year')
        ->orderBy('track.created', 'DESC')
        ->limit(6)
        ->get();

        $data["tags"] = '';
        $data["genres"] = '';

        $data["tag_tracks"] = DB::table('track')
        ->select('track.id', 'track.audio_type', 'track.title', 'track.artists', 'track.view_count', 'track.resolution', 'track.contributor_id', 'track.modified', 'track.album_year', 'artist.id AS artist_id', 'artist.name AS artist_name', 'artist.image_name')
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
        dd($id);

    }


    public function getTracksByPlaylist($id)
    {

        // $data["tracks"] = "";
        $data["tags"] = Tag::orderBy('title', 'ASC')->get();
        $data["genres"] = Genre::all();
       $data['playlist_tracks'] = Track::select('track.id', 'track.audio_type', 'track.title', 'artist.name AS artists', 
        'track.view_count', 'track.resolution', 'track.contributor_id', 'track.modified', 'track.album_year', 
        'artist.id AS artist_id', 'artist.name AS artist_name', 'artist.image_name', 'track.track_duration')
        ->join('artist', 'track.artists', '=', 'artist.id')
        ->join('playlist_track', 'track.id', '=', 'playlist_track.track_id')
        ->where('playlist_track.playlist_id', '=', $id)
        ->where('track.status',1)
        ->orderBy('playlist_track.created', 'DESC')
        // ->paginate(100);
        ->limit(60)
        ->get();


        $data["playlist_detail"] = Playlist::selectRaw('playlist.id, title, resolution, image_name, COUNT(playlist_track.track_id) as count')
        ->join('playlist_track', 'playlist.id', '=', 'playlist_track.playlist_id')
        ->where('playlist.id', '=', $id)
        ->first();
        return view('playlist.playlist',$data);

    }

    public function getTracks($id)
    {
        
        $data["tracks"] = DB::table('track')
        ->select('track.id', 'track.audio_type', 'track.title', 'track.artists', 'track.view_count', 'track.resolution', 
        'track.contributor_id', 'track.modified', 'track.album_year', 
        'artist.id AS artist_id', 'artist.name AS artist_name', 'artist.image_name')
        ->join('artist', 'track.artists', '=', 'artist.id')
        ->where('track.status',1)
        ->whereNotNull('track.album_year')
        ->orderBy('track.created', 'DESC')
        ->limit(6)
        ->get();

        $data["tags"] = '';
        $data["genres"] = '';


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
        // ->selectSub(function($q)
        //     {
        //       $q = Track::select('id')
        //         ->where('artists', 'LIKE', '%7813%')
        //         ->count();
        //     }, 'a')

        // ->addSelect(['artist_track_count' => Track::select('track.id')
        //         ->where('track.artists', 'LIKE', '%'.$id.'%')
        //         ->count()
        //         ])
        ->get();

        $artist_id = DB::table('track')->select('artists')->where('id', '=', $id)->get();
        //dd($artist_id);
        $data["track_list"]["artist_track_counter"] = Track::selectRaw('COUNT(id) as track_counts')
                                                            ->where('artists', 'LIKE', '%'.$artist_id.'%')
                                                            ->first();

        dd($artist_id, $data["track_list"]["artist_track_counter"]);
        return $data;
    }
}
