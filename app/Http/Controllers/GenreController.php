<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Genre;
use App\Models\Tag;
use App\Models\Track;
use Symfony\Component\Console\Input\Input;

class GenreController extends Controller
{
    public function index()
    {
        $data =  DB::table("genre")
        ->selectRaw('genre.*, COUNT(track.genres) as track_count')
        ->join('track',DB::raw("FIND_IN_SET(genre.id,track.genres)"),'>',DB::raw("'0'"))
        ->where('track.status',1)
        ->orderBy('genre.title','ASC')
        ->groupBy("track.genres")
        ->limit(6)
        ->get();
        return $data;
    }

    public function getTracksByGenre($id)
    {
        // Tracks
        $data["tracks"] = DB::table('track')
        ->select('track.id', 'track.audio_type', 'track.title', 'artist.name AS artists', 'track.view_count', 'track.resolution',
                 'track.contributor_id', 'track.modified', 'track.album_year', 'artist.id AS artist_id', 
                 'artist.name AS artist_name', 'artist.image_name')
        ->join('artist', 'track.artists', '=', 'artist.id')
        ->where('track.status',1)
        ->whereNotNull('track.album_year')
        ->orderBy('track.created', 'DESC')
        ->limit(6)
        ->get();

        // Genres

        $data["tags"] = Tag::orderBy('title', 'ASC')->get();
        $data["genres"] = Genre::all();

        // Genre_tracks
        $data["genre_tracks"] = DB::table('track')
        ->select('track.id', 'track.audio_type', 'track.title', 'artist.name AS artists', 
            'track.view_count', 'track.resolution', 'track.contributor_id', 'track.modified', 'track.album_year', 
            'artist.id AS artist_id', 'artist.name AS artist', 'artist.image_name')
        ->join('artist', 'track.artists', '=', 'artist.id')
        ->where('track.status',1)
        ->where('track.genres', 'like', '%'.$id.'%')
        ->orderBy('track.created', 'DESC')
        ->get();

        // Genre_detail
        $data["genre_detail"] = DB::table('track')
        ->selectRaw('genre.id, genre.title, COUNT(track.genres) as count')
        // ('genre.id, genre.title, COUNT(track.genres) as track_count')
        ->join('genre', DB::raw("FIND_IN_SET(genre.id,track.genres)"),'>',DB::raw("'0'"))
        ->where('track.status', 1)
        ->where('genre.id', 'LIKE', '%'.$id.'%')
        ->first();


        // Tag Related (but no limit() or pagination used)
        $data["tag_related"] = Track::select('tag.id','tag.title', 'tag.admin_id', 'tag.created')
        ->join('tag',DB::raw("FIND_IN_SET(tag.id,track.tags)"),'>',DB::raw("'0'"))
        ->where('genres', 'like', '%'.$id.'%')
        ->where('status',1)
        ->orderBy('tag.title', 'ASC')
        ->groupBy('tag.id')
        ->get();

        return $data;
    }

}
