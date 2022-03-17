<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Tag;

class TagController extends Controller
{
    public function index()
    {
        $tags = DB::table('tag')->get();
        return $tags;
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
}
